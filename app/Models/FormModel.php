<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table            = 'fb_forms';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'event_id', 'title', 'description', 'submit_label', 'success_message', 'status',
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public const STATUS_ACTIVE   = 'active';
    public const STATUS_INACTIVE = 'inactive';

    /**
     * Ambil form beserta data event induknya.
     */
    public function getWithEvent(int $formId): ?array
    {
        return $this->select('fb_forms.*, fb_events.event_code, fb_events.name AS event_name')
            ->join('fb_events', 'fb_events.id = fb_forms.event_id', 'left')
            ->find($formId);
    }

    /**
     * Ambil form berdasarkan Event ID (event_code).
     */
    public function getByEventCode(string $eventCode): ?array
    {
        return $this->select('fb_forms.*, fb_events.event_code, fb_events.name AS event_name')
            ->join('fb_events', 'fb_events.id = fb_forms.event_id', 'left')
            ->where('fb_events.event_code', $eventCode)
            ->where('fb_forms.status', self::STATUS_ACTIVE)
            ->first();
    }

    /**
     * Daftar form lengkap dengan info event untuk halaman admin.
     */
    public function getAllWithEvent(): array
    {
        return $this->select('fb_forms.*, fb_events.event_code, fb_events.name AS event_name, fb_events.status AS event_status')
            ->join('fb_events', 'fb_events.id = fb_forms.event_id', 'left')
            ->orderBy('fb_forms.id', 'DESC')
            ->findAll();
    }

    public function getFieldCount(int $formId): int
    {
        return model(FormFieldModel::class)->where('form_id', $formId)->countAllResults();
    }
}
