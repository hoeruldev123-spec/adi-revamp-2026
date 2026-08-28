<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{
    protected $table            = 'fb_registrations';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'event_id', 'form_id', 'status', 'submitted_at', 'ip_address', 'user_agent',
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public const STATUS_NEW       = 'new';
    public const STATUS_CONFIRMED = 'confirmed';
    public const STATUS_CANCELLED = 'cancelled';

    /**
     * Daftar registrasi dengan filter event & pencarian.
     */
    public function getList(?int $eventId = null, ?string $search = null, int $perPage = 20): array
    {
        $builder = $this->select('fb_registrations.*, fb_events.event_code, fb_events.name AS event_name')
            ->join('fb_events', 'fb_events.id = fb_registrations.event_id', 'left');

        if ($eventId !== null) {
            $builder->where('fb_registrations.event_id', $eventId);
        }
        if (! empty($search)) {
            $builder->groupStart()
                ->like('fb_events.name', $search)
                ->orLike('fb_events.event_code', $search)
                ->orLike('fb_registrations.ip_address', $search)
                ->groupEnd();
        }

        return $builder->orderBy('fb_registrations.id', 'DESC')->paginate($perPage);
    }

    public function getWithEvent(int $id): ?array
    {
        return $this->select('fb_registrations.*, fb_events.event_code, fb_events.name AS event_name')
            ->join('fb_events', 'fb_events.id = fb_registrations.event_id', 'left')
            ->find($id);
    }

    /**
     * Hitung total registrasi (seluruh event atau per event).
     */
    public function countAllRegistrations(?int $eventId = null): int
    {
        if ($eventId !== null) {
            return $this->where('event_id', $eventId)->countAllResults();
        }
        return $this->countAllResults();
    }

    /**
     * Ambil seluruh registrasi sebuah event untuk ekspor.
     */
    public function getAllForExport(int $eventId): array
    {
        return $this->where('event_id', $eventId)
            ->orderBy('id', 'ASC')
            ->findAll();
    }
}
