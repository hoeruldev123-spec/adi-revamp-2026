<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\FormFieldModel;
use App\Models\FormModel;
use App\Models\RegistrationModel;
use App\Models\RegistrationValueModel;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Public-facing form endpoint untuk Form Builder.
 *
 * Menangani:
 *  - submit()          : penerimaan submission (native CI4, iframe, maupun JS embed)
 *  - config()          : endpoint JSON untuk JavaScript embed
 *  - standalone()      : halaman mandiri untuk integrasi iframe
 */
class FormController extends BaseController
{
    protected $helpers = ['form', 'url', 'form_builder'];

    protected EventModel $eventModel;
    protected FormModel $formModel;
    protected FormFieldModel $fieldModel;
    protected RegistrationModel $registrationModel;
    protected RegistrationValueModel $valueModel;

    public function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);
        $this->eventModel        = new EventModel();
        $this->formModel         = new FormModel();
        $this->fieldModel        = new FormFieldModel();
        $this->registrationModel = new RegistrationModel();
        $this->valueModel        = new RegistrationValueModel();
    }

    /**
     * Endpoint penerimaan submission.
     * Mengembalikan JSON bila request berasal dari JS embed / API (header X-Requested-With / Accept json),
     * atau redirect kembali untuk integrasi native/iframe.
     */
    public function submit()
    {
        $eventCode = $this->request->getPost('event_code');
        $event = $this->eventModel->findByCode($eventCode);
        if (! $event) {
            return $this->submissionError('Event tidak ditemukan.', $eventCode);
        }

        $form = $this->formModel->getByEventCode($eventCode);
        if (! $form) {
            return $this->submissionError('Form tidak tersedia untuk event ini.', $eventCode);
        }

        // Honeypot anti-spam: field ini harus kosong.
        if (! empty($this->request->getPost('website'))) {
            // Diam-diam anggap sukses untuk bot.
            return $this->submissionSuccess($eventCode, $form);
        }

        $fields = $this->fieldModel->getByForm((int) $form['id']);

        // Bangun aturan validasi dinamis.
        $rules    = [];
        $messages = [];
        foreach ($fields as $field) {
            if ($field['type'] === 'hidden') {
                continue;
            }
            $rule = $this->buildRule($field);
            if ($rule !== '') {
                $rules[$field['name']] = $rule;
            }
        }

        if (! empty($rules) && ! $this->validate($rules)) {
            return $this->submissionError(
                'Terdapat kesalahan pada input Anda.',
                $eventCode,
                $this->validator->getErrors()
            );
        }

        // Simpan registration + values.
        $registrationId = $this->registrationModel->insert([
            'event_id'     => $event['id'],
            'form_id'      => $form['id'],
            'status'       => RegistrationModel::STATUS_NEW,
            'submitted_at' => date('Y-m-d H:i:s'),
            'ip_address'   => $this->request->getIPAddress(),
            'user_agent'   => (string) $this->request->getUserAgent(),
        ]);

        $values = [];
        foreach ($fields as $field) {
            $raw = $this->request->getPost($field['name']);
            if (is_array($raw)) {
                $raw = array_filter($raw, fn ($v) => $v !== null && $v !== '');
                $stored = json_encode(array_values($raw), JSON_UNESCAPED_UNICODE);
            } else {
                $stored = $raw === null ? null : (string) $raw;
            }
            $values[] = [
                'form_field_id' => $field['id'],
                'field_name'    => $field['name'],
                'value'         => $stored,
            ];
        }
        $this->valueModel->insertBatchValues((int) $registrationId, $values);

        return $this->submissionSuccess($eventCode, $form);
    }

    /**
     * Endpoint JSON untuk JavaScript embed (Method 2).
     */
    public function config(string $eventCode): ResponseInterface
    {
        $event = $this->eventModel->findByCode($eventCode);
        $form  = $event ? $this->formModel->getByEventCode($eventCode) : null;

        if (! $event || ! $form) {
            return $this->response->setStatusCode(404)
                ->setJSON(['success' => false, 'message' => 'Event atau form tidak ditemukan.']);
        }

        $fields = $this->fieldModel->getByForm((int) $form['id']);
        foreach ($fields as &$f) {
            $f['options'] = $this->fieldModel->decodeOptions($f['options']);
        }
        unset($f);

        return $this->response->setJSON([
            'success' => true,
            'event'   => [
                'code' => $event['event_code'],
                'name' => $event['name'],
            ],
            'form' => [
                'title'         => $form['title'],
                'description'   => $form['description'],
                'submit_label'  => $form['submit_label'] ?: 'Daftar',
                'success_message' => $form['success_message'],
            ],
            'fields'  => $fields,
            'action'  => base_url('form/submit'),
        ]);
    }

    /**
     * Halaman mandiri untuk integrasi iframe (Method 3).
     */
    public function standalone(string $eventCode)
    {
        $event = $this->eventModel->findByCode($eventCode);
        $form  = $event ? $this->formModel->getByEventCode($eventCode) : null;

        if (! $event || ! $form) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Event tidak ditemukan.');
        }

        return view('form_builder/standalone', [
            'event'   => $event,
            'form'    => $form,
            'fields'  => $this->fieldModel->getByForm((int) $form['id']),
            'action'  => base_url('form/submit'),
            'success' => $this->request->getGet('success') === '1' || session('form_success'),
        ]);
    }

    // --------------------------------------------------------------------
    // Helpers internal
    // --------------------------------------------------------------------

    protected function buildRule(array $field): string
    {
        $parts = [];

        if (! empty($field['required'])) {
            $parts[] = 'required';
        }

        switch ($field['type']) {
            case 'email':
                $parts[] = 'valid_email';
                break;
            case 'url':
                $parts[] = 'valid_url';
                break;
            case 'number':
                $parts[] = 'numeric';
                break;
        }

        if (! empty($field['validation'])) {
            $parts[] = $field['validation'];
        }

        return implode('|', $parts);
    }

    protected function isJsonRequest(): bool
    {
        return $this->request->isAJAX()
            || str_contains((string) $this->request->getHeaderLine('Accept'), 'application/json')
            || $this->request->getPost('format') === 'json';
    }

    protected function submissionSuccess(string $eventCode, array $form)
    {
        $message = $form['success_message'] ?: 'Terima kasih! Registrasi Anda telah berhasil kami terima.';

        if ($this->isJsonRequest()) {
            return $this->response->setJSON([
                'success' => true,
                'message' => $message,
            ]);
        }

        // Native / iframe: redirect kembali dengan flag sukses.
        $redirect = $this->request->getPost('redirect_url') ?: $this->request->getPost('current_url');
        if (! $redirect) {
            $redirect = base_url('register/' . $eventCode) . '?success=1';
        } else {
            $redirect .= (str_contains($redirect, '?') ? '&' : '?') . 'success=1';
        }

        return redirect()->to($redirect)->with('form_success', $message);
    }

    protected function submissionError(string $message, string $eventCode, array $errors = [])
    {
        if ($this->isJsonRequest()) {
            return $this->response->setStatusCode(422)->setJSON([
                'success' => false,
                'message' => $message,
                'errors'  => $errors,
            ]);
        }

        $redirect = $this->request->getPost('redirect_url') ?: $this->request->getPost('current_url');
        if (! $redirect) {
            $redirect = base_url('register/' . $eventCode);
        }
        return redirect()->to($redirect)
            ->with('form_error', $message)
            ->with('form_errors', $errors)
            ->withInput();
    }
}
