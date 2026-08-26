<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['name', 'email', 'password', 'status'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    public const STATUS_ACTIVE   = 'active';
    public const STATUS_INACTIVE = 'inactive';

    /**
     * Hash password menggunakan mekanisme aman PHP (PASSWORD_DEFAULT).
     */
    public function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }

    /**
     * Ambil seluruh role milik user.
     */
    public function getRoles(int $userId): array
    {
        return $this->db->table('user_roles')
            ->join('roles', 'roles.id = user_roles.role_id')
            ->where('user_roles.user_id', $userId)
            ->get()
            ->getResultArray();
    }

    /**
     * Ambil seluruh permission (slug) milik user melalui role-nya.
     * Struktur RBAC: user -> role -> permission.
     */
    public function getPermissions(int $userId): array
    {
        return $this->db->table('user_roles')
            ->join('role_permissions', 'role_permissions.role_id = user_roles.role_id')
            ->join('permissions', 'permissions.id = role_permissions.permission_id')
            ->where('user_roles.user_id', $userId)
            ->get()
            ->getResultArray();
    }

    /**
     * Cek apakah user memiliki permission tertentu.
     */
    public function hasPermission(int $userId, string $slug): bool
    {
        $count = $this->db->table('user_roles')
            ->join('role_permissions', 'role_permissions.role_id = user_roles.role_id')
            ->join('permissions', 'permissions.id = role_permissions.permission_id')
            ->where('user_roles.user_id', $userId)
            ->where('permissions.slug', $slug)
            ->countAllResults();

        return $count > 0;
    }
}
