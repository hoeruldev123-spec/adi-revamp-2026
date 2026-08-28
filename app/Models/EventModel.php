<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table            = 'fb_events';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'event_code', 'name', 'slug', 'description', 'location',
        'start_date', 'end_date', 'status',
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public const STATUS_ACTIVE   = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_CLOSED   = 'closed';

    /**
     * Ambil event berdasarkan Event ID (event_code).
     */
    public function findByCode(string $eventCode): ?array
    {
        return $this->where('event_code', $eventCode)->first();
    }

    /**
     * Generate Event ID otomatis bila tidak diisi: EVT-YYYY-{PREFIX}-{SEQ}.
     */
    public function generateEventCode(string $prefix = 'EVT'): string
    {
        $year = date('Y');
        $like = "EVT-{$year}-" . strtoupper($prefix) . '-%';
        $count = $this->like('event_code', "EVT-{$year}-" . strtoupper($prefix) . '-', 'after')->countAllResults();
        $seq = str_pad((int) $count + 1, 3, '0', STR_PAD_LEFT);
        return "EVT-{$year}-" . strtoupper($prefix) . "-{$seq}";
    }

    public function getActiveEvents(): array
    {
        return $this->where('status', self::STATUS_ACTIVE)->findAll();
    }
}
