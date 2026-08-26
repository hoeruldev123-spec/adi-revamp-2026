<?php

namespace App\Models;

use CodeIgniter\Model;

class PermissionModel extends Model
{
    protected $table            = 'permissions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['name', 'slug', 'description'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    /**
     * Kembalikan permission dikelompokkan berdasarkan module (prefix sebelum titik).
     */
    public function getGrouped(): array
    {
        $rows = $this->orderBy('id', 'ASC')->findAll();
        $groups = [];
        foreach ($rows as $row) {
            $module = strtok($row['slug'], '.');
            $groups[$module][] = $row;
        }
        return $groups;
    }
}
