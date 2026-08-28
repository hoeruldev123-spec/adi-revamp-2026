<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationValueModel extends Model
{
    protected $table            = 'fb_registration_values';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'registration_id', 'form_field_id', 'field_name', 'value',
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Simpan banyak nilai sekaligus.
     */
    public function insertBatchValues(int $registrationId, array $values): void
    {
        $rows = [];
        $now  = date('Y-m-d H:i:s');
        foreach ($values as $fieldId => $value) {
            $rows[] = [
                'registration_id' => $registrationId,
                'form_field_id'   => $value['form_field_id'] ?? null,
                'field_name'      => $value['field_name'],
                'value'           => $value['value'],
                'created_at'      => $now,
                'updated_at'      => $now,
            ];
        }
        if (! empty($rows)) {
            $this->insertBatch($rows);
        }
    }

    /**
     * Ambil nilai registrasi sebagai map field_name => value.
     */
    public function getValuesMap(int $registrationId): array
    {
        $rows = $this->where('registration_id', $registrationId)->findAll();
        $map  = [];
        foreach ($rows as $row) {
            $map[$row['field_name']] = $row['value'];
        }
        return $map;
    }
}
