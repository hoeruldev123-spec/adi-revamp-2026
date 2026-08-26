<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table            = 'roles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['name', 'slug', 'description'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    /**
     * Hitung jumlah user yang memiliki role ini.
     */
    public function getUserCount(int $roleId): int
    {
        return $this->db->table('user_roles')
            ->where('role_id', $roleId)
            ->countAllResults();
    }

    /**
     * Ambil permission (slug) milik role.
     */
    public function getPermissions(int $roleId): array
    {
        return $this->db->table('role_permissions')
            ->join('permissions', 'permissions.id = role_permissions.permission_id')
            ->where('role_permissions.role_id', $roleId)
            ->get()
            ->getResultArray();
    }
}
