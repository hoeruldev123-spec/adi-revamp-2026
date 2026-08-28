<?php

namespace App\Controllers\Admin;

use App\Models\EventModel;
use App\Models\FormFieldModel;
use App\Models\RegistrationModel;
use App\Models\RegistrationValueModel;

class Registrations extends BaseAdminController
{
    protected EventModel $eventModel;
    protected RegistrationModel $registrationModel;
    protected RegistrationValueModel $valueModel;
    protected FormFieldModel $fieldModel;

    public function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);
        $this->eventModel          = new EventModel();
        $this->registrationModel   = new RegistrationModel();
        $this->valueModel          = new RegistrationValueModel();
        $this->fieldModel          = new FormFieldModel();
    }

    public function index()
    {
        if (! $this->can('registrations.view')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $eventId = (int) $this->request->getGet('event_id');
        $search  = $this->request->getGet('search');

        $events = $this->eventModel->orderBy('name', 'ASC')->findAll();

        $registrations = $this->registrationModel->getList(
            $eventId ?: null,
            $search ?: null,
            25
        );
        $pager = $this->registrationModel->pager;

        // Untuk tiap registration, ambil nilai field utama (pertama) sebagai preview.
        foreach ($registrations as &$r) {
            $r['primary'] = $this->getPrimaryValue((int) $r['id'], (int) $r['form_id']);
        }
        unset($r);

        return $this->render('admin/registrations/index', [
            'title'         => 'Registrations',
            'events'        => $events,
            'registrations' => $registrations,
            'pager'         => $pager,
            'event_id'      => $eventId,
            'search'        => $search,
        ]);
    }

    public function view(int $id)
    {
        if (! $this->can('registrations.view')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $registration = $this->registrationModel->getWithEvent($id);
        if (! $registration) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $values = $this->valueModel->getValuesMap($id);

        // Susun berdasarkan urutan field form.
        $fields = $this->fieldModel->getByForm((int) $registration['form_id']);
        $rows   = [];
        foreach ($fields as $f) {
            $rows[] = [
                'label' => $f['label'],
                'value' => $values[$f['name']] ?? '',
            ];
        }

        return $this->render('admin/registrations/view', [
            'title'        => 'Registration Detail',
            'registration' => $registration,
            'rows'         => $rows,
        ]);
    }

    public function delete(int $id)
    {
        if (! $this->can('registrations.delete')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $registration = $this->registrationModel->find($id);
        if (! $registration) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $this->valueModel->where('registration_id', $id)->delete();
        $this->registrationModel->delete($id);

        return redirect()->to('/admin/registrations')->with('success', 'Registration berhasil dihapus.');
    }

    /**
     * Export registrasi sebuah event ke Excel (CSV UTF-8).
     */
    public function export(int $eventId)
    {
        if (! $this->can('registrations.export')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $event = $this->eventModel->find($eventId);
        if (! $event) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $form = model(\App\Models\FormModel::class)->where('event_id', $eventId)->first();
        $fields = $form ? $this->fieldModel->getByForm((int) $form['id']) : [];

        $registrations = $this->registrationModel->getAllForExport($eventId);

        // Header kolom.
        $header = ['Registration ID', 'Event Code', 'Event Name', 'Submitted At', 'Status'];
        foreach ($fields as $f) {
            $header[] = $f['label'];
        }

        $out = fopen('php://temp', 'r+');
        fwrite($out, "\xEF\xBB\xBF"); // BOM agar Excel membaca UTF-8
        fputcsv($out, $header);

        foreach ($registrations as $reg) {
            $values = $this->valueModel->getValuesMap((int) $reg['id']);
            $line = [
                $reg['id'],
                $event['event_code'],
                $event['name'],
                $reg['submitted_at'],
                $reg['status'],
            ];
            foreach ($fields as $f) {
                $line[] = $values[$f['name']] ?? '';
            }
            fputcsv($out, $line);
        }

        rewind($out);
        $csv = stream_get_contents($out);
        fclose($out);

        return $this->response
            ->setHeader('Content-Type', 'text/csv; charset=utf-8')
            ->setHeader('Content-Disposition', 'attachment; filename="registrations_' . $event['event_code'] . '.csv"')
            ->setBody($csv);
    }

    protected function getPrimaryValue(int $registrationId, int $formId): string
    {
        $fields = $this->fieldModel->getByForm($formId);
        if (empty($fields)) {
            return '-';
        }
        $values = $this->valueModel->getValuesMap($registrationId);
        // Prioritaskan field bertipe email, lalu field pertama.
        foreach ($fields as $f) {
            if ($f['type'] === 'email' && isset($values[$f['name']])) {
                return $values[$f['name']];
            }
        }
        $first = $fields[0];
        return $values[$first['name']] ?? '-';
    }
}
