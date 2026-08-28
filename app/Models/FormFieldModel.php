<?php

namespace App\Models;

use CodeIgniter\Model;

class FormFieldModel extends Model
{
    protected $table            = 'fb_form_fields';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'form_id', 'label', 'name', 'type', 'placeholder', 'help_text',
        'options', 'required', 'validation', 'sort_order',
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public const TYPES = [
        'text'     => 'Text',
        'email'    => 'Email',
        'tel'      => 'Phone',
        'url'      => 'URL',
        'number'   => 'Number',
        'date'     => 'Date',
        'textarea' => 'Textarea',
        'select'   => 'Dropdown',
        'radio'    => 'Radio',
        'checkbox' => 'Checkbox',
        'hidden'   => 'Hidden',
    ];

    /**
     * Field milik sebuah form, terurut.
     */
    public function getByForm(int $formId): array
    {
        return $this->where('form_id', $formId)
            ->orderBy('sort_order', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();
    }

    /**
     * Decode options JSON menjadi array. Mengembalikan [] bila kosong.
     */
    public function decodeOptions(?string $options): array
    {
        if (empty($options)) {
            return [];
        }
        $decoded = json_decode($options, true);
        return is_array($decoded) ? $decoded : [];
    }

    /**
     * Pastikan nama field unik dalam satu form.
     */
    public function isNameUnique(int $formId, string $name, ?int $ignoreId = null): bool
    {
        $q = $this->where('form_id', $formId)->where('name', $name);
        if ($ignoreId !== null) {
            $q->where('id !=', $ignoreId);
        }
        return $q->countAllResults() === 0;
    }
}
