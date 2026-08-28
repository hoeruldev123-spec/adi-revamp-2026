<?php

namespace App\Controllers\Admin;

use App\Models\EventModel;
use App\Models\FormFieldModel;
use App\Models\FormModel;

class Forms extends BaseAdminController
{
    protected EventModel $eventModel;
    protected FormModel $formModel;
    protected FormFieldModel $fieldModel;

    public function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);
        $this->eventModel = new EventModel();
        $this->formModel  = new FormModel();
        $this->fieldModel = new FormFieldModel();
    }

    public function index()
    {
        if (! $this->can('forms.view')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $forms = $this->formModel->getAllWithEvent();
        foreach ($forms as &$f) {
            $f['field_count'] = $this->formModel->getFieldCount((int) $f['id']);
        }
        unset($f);

        return $this->render('admin/forms/index', [
            'title' => 'Forms',
            'forms' => $forms,
        ]);
    }

    public function create()
    {
        if (! $this->can('forms.create')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        // Event yang belum memiliki form.
        $events = $this->eventModel->where('status', 'active')->findAll();
        $used   = array_column($this->formModel->findAll(), 'event_id');
        $events = array_filter($events, fn ($e) => ! in_array($e['id'], $used, true));

        $preEvent = (int) $this->request->getGet('event_id');

        return $this->render('admin/forms/create', [
            'title'  => 'Create Form',
            'events' => $events,
            'preEvent' => $preEvent,
        ]);
    }

    public function store()
    {
        if (! $this->can('forms.create')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $rules = [
            'event_id'      => 'required|integer',
            'title'         => 'required|max_length[191]',
            'submit_label'  => 'permit_empty|max_length[100]',
            'status'        => 'required|in_list[active,inactive]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $eventId = (int) $this->request->getPost('event_id');
        if ($this->formModel->where('event_id', $eventId)->first()) {
            return redirect()->back()->withInput()->with('error', 'Event ini sudah memiliki form.');
        }

        $this->formModel->insert([
            'event_id'        => $eventId,
            'title'           => $this->request->getPost('title'),
            'description'     => $this->request->getPost('description'),
            'submit_label'    => $this->request->getPost('submit_label') ?: 'Daftar',
            'success_message' => $this->request->getPost('success_message'),
            'status'          => $this->request->getPost('status'),
        ]);

        $formId = $this->formModel->getInsertID();

        return redirect()->to('/admin/forms/edit/' . $formId)
            ->with('success', 'Form berhasil dibuat. Tambahkan field pada form ini.');
    }

    public function edit(int $id)
    {
        if (! $this->can('forms.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $form = $this->formModel->getWithEvent($id);
        if (! $form) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $fields = $this->fieldModel->getByForm($id);

        return $this->render('admin/forms/edit', [
            'title'     => 'Edit Form',
            'form'      => $form,
            'fields'    => $fields,
            'fieldTypes' => FormFieldModel::TYPES,
        ]);
    }

    public function update(int $id)
    {
        if (! $this->can('forms.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $form = $this->formModel->find($id);
        if (! $form) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $rules = [
            'title'        => 'required|max_length[191]',
            'submit_label' => 'permit_empty|max_length[100]',
            'status'       => 'required|in_list[active,inactive]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->formModel->update($id, [
            'title'           => $this->request->getPost('title'),
            'description'     => $this->request->getPost('description'),
            'submit_label'    => $this->request->getPost('submit_label') ?: 'Daftar',
            'success_message' => $this->request->getPost('success_message'),
            'status'          => $this->request->getPost('status'),
        ]);

        return redirect()->to('/admin/forms/edit/' . $id)->with('success', 'Form berhasil diperbarui.');
    }

    public function delete(int $id)
    {
        if (! $this->can('forms.delete')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $this->formModel->delete($id);

        return redirect()->to('/admin/forms')->with('success', 'Form berhasil dihapus.');
    }

    // ------------------------------------------------------------------
    // Field management
    // ------------------------------------------------------------------

    public function addField(int $formId)
    {
        if (! $this->can('forms.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $form = $this->formModel->find($formId);
        if (! $form) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $label = trim($this->request->getPost('label'));
        $type  = $this->request->getPost('type');

        if ($label === '' || ! array_key_exists($type, FormFieldModel::TYPES)) {
            return redirect()->back()->with('error', 'Label dan tipe field wajib diisi.');
        }

        $name = $this->request->getPost('name')
            ? $this->slugify($this->request->getPost('name'))
            : $this->slugify($label);

        if ($name === '' || $this->fieldModel->isNameUnique($formId, $name) === false) {
            // Pastikan unik dengan suffix angka.
            $base = $name === '' ? 'field' : $name;
            $i = 1;
            $name = $base;
            while (! $this->fieldModel->isNameUnique($formId, $name)) {
                $name = $base . '_' . $i++;
            }
        }

        $options = $this->parseOptions($this->request->getPost('options'), $type);

        $this->fieldModel->insert([
            'form_id'      => $formId,
            'label'        => $label,
            'name'         => $name,
            'type'         => $type,
            'placeholder'  => $this->request->getPost('placeholder'),
            'help_text'    => $this->request->getPost('help_text'),
            'options'      => $options,
            'required'     => $this->request->getPost('required') ? 1 : 0,
            'validation'   => $this->request->getPost('validation') ?: null,
            'sort_order'   => (int) $this->request->getPost('sort_order'),
        ]);

        return redirect()->to('/admin/forms/edit/' . $formId)->with('success', 'Field berhasil ditambahkan.');
    }

    public function updateField(int $fieldId)
    {
        if (! $this->can('forms.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $field = $this->fieldModel->find($fieldId);
        if (! $field) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }
        $formId = (int) $field['form_id'];

        $label = trim($this->request->getPost('label'));
        $type  = $this->request->getPost('type');

        if ($label === '' || ! array_key_exists($type, FormFieldModel::TYPES)) {
            return redirect()->back()->with('error', 'Label dan tipe field wajib diisi.');
        }

        $name = $this->request->getPost('name')
            ? $this->slugify($this->request->getPost('name'))
            : $this->slugify($label);

        if (! $this->fieldModel->isNameUnique($formId, $name, $fieldId)) {
            return redirect()->back()->with('error', 'Nama field sudah digunakan dalam form ini.');
        }

        $options = $this->parseOptions($this->request->getPost('options'), $type);

        $this->fieldModel->update($fieldId, [
            'label'       => $label,
            'name'        => $name,
            'type'        => $type,
            'placeholder' => $this->request->getPost('placeholder'),
            'help_text'   => $this->request->getPost('help_text'),
            'options'     => $options,
            'required'    => $this->request->getPost('required') ? 1 : 0,
            'validation'  => $this->request->getPost('validation') ?: null,
            'sort_order'  => (int) $this->request->getPost('sort_order'),
        ]);

        return redirect()->to('/admin/forms/edit/' . $formId)->with('success', 'Field berhasil diperbarui.');
    }

    public function deleteField(int $fieldId)
    {
        if (! $this->can('forms.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $field = $this->fieldModel->find($fieldId);
        if (! $field) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $formId = (int) $field['form_id'];
        $this->fieldModel->delete($fieldId);

        return redirect()->to('/admin/forms/edit/' . $formId)->with('success', 'Field berhasil dihapus.');
    }

    public function preview(int $id)
    {
        if (! $this->can('forms.view')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $form = $this->formModel->getWithEvent($id);
        if (! $form) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        // Render via service (output disisipkan ke halaman admin).
        $html = service('formBuilder')->render($form['event_code']);

        return $this->render('admin/forms/preview', [
            'title'    => 'Preview Form',
            'form'     => $form,
            'rendered' => $html,
        ]);
    }

    // ------------------------------------------------------------------
    // Helpers
    // ------------------------------------------------------------------

    protected function slugify(string $text): string
    {
        $text = preg_replace('~[^\pL\pN]+~u', '_', $text);
        $text = trim($text, '_');
        $text = strtolower($text);
        return substr($text, 0, 100);
    }

    protected function parseOptions(?string $raw, string $type): ?string
    {
        if (! in_array($type, ['select', 'radio', 'checkbox'], true)) {
            return null;
        }
        if (empty($raw)) {
            return null;
        }
        $lines = array_filter(array_map('trim', explode("\n", $raw)), fn ($l) => $l !== '');
        return empty($lines) ? null : json_encode(array_values($lines), JSON_UNESCAPED_UNICODE);
    }
}
