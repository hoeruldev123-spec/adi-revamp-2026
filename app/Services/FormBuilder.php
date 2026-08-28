<?php

namespace App\Services;

use App\Models\EventModel;
use App\Models\FormFieldModel;
use App\Models\FormModel;

/**
 * Form Builder service.
 *
 * Bertanggung jawab mengambil konfigurasi event & form dari database
 * dan merender HTML form secara dinamis berdasarkan Event ID.
 *
 * Dipanggil dari view CI4 maupun melalui helper eventForm()/renderEventForm().
 */
class FormBuilder
{
    protected EventModel $eventModel;
    protected FormModel $formModel;
    protected FormFieldModel $fieldModel;

    public function __construct()
    {
        helper('form');
        $this->eventModel = new EventModel();
        $this->formModel  = new FormModel();
        $this->fieldModel = new FormFieldModel();
    }

    /**
     * Ambil data event berdasarkan Event ID.
     */
    public function getEvent(string $eventCode): ?array
    {
        return $this->eventModel->findByCode($eventCode);
    }

    /**
     * Ambil form (aktif) beserta event untuk sebuah Event ID.
     */
    public function getForm(string $eventCode): ?array
    {
        return $this->formModel->getByEventCode($eventCode);
    }

    /**
     * Ambil field milik sebuah form (terurut).
     */
    public function getFields(int $formId): array
    {
        return $this->fieldModel->getByForm($formId);
    }

    /**
     * Render HTML form untuk Event ID tertentu.
     *
     * Mengembalikan string kosong bila event/form tidak ditemukan
     * agar pemanggilan dari landing page tidak memecah halaman.
     */
    public function render(string $eventCode, array $options = []): string
    {
        $event = $this->eventModel->findByCode($eventCode);
        if (! $event) {
            return '';
        }

        $form = $this->formModel->getByEventCode($eventCode);
        if (! $form) {
            return '';
        }

        $fields = $this->fieldModel->getByForm((int) $form['id']);

        return view('form_builder/render', [
            'event'    => $event,
            'form'     => $form,
            'fields'   => $fields,
            'options'  => $options,
            'action'   => base_url('form/submit'),
        ]);
    }
}
