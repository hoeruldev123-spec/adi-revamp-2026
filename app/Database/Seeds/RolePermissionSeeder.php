<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        $roleIds    = $this->getRoleIds();
        $permSlugs  = $this->getPermissionIds();

        // Super Admin => semua permission
        $this->assignAll($roleIds['super-admin'], $permSlugs);

        // Admin => operasional, tanpa manajemen RBAC (users/roles/permissions)
        $adminPerms = [
            'dashboard.view',
            'events.view', 'events.create', 'events.edit', 'events.delete',
            'forms.view', 'forms.create', 'forms.edit', 'forms.delete',
            'registrations.view', 'registrations.export',
        ];
        $this->assign($roleIds['admin'], $adminPerms, $permSlugs);

        // Event Admin => event/form/registration terbatas
        $eventAdminPerms = [
            'dashboard.view',
            'events.view',
            'forms.view', 'forms.create', 'forms.edit', 'forms.delete',
            'registrations.view', 'registrations.export',
        ];
        $this->assign($roleIds['event-admin'], $eventAdminPerms, $permSlugs);
    }

    private function assignAll(int $roleId, array $permSlugs): void
    {
        $data = [];
        foreach ($permSlugs as $slug => $id) {
            $data[] = [
                'role_id'       => $roleId,
                'permission_id' => $id,
            ];
        }
        $this->db->table('role_permissions')->insertBatch($data);
    }

    private function assign(int $roleId, array $slugs, array $permSlugs): void
    {
        $data = [];
        foreach ($slugs as $slug) {
            if (! isset($permSlugs[$slug])) {
                continue;
            }
            $data[] = [
                'role_id'       => $roleId,
                'permission_id' => $permSlugs[$slug],
            ];
        }
        if (! empty($data)) {
            $this->db->table('role_permissions')->insertBatch($data);
        }
    }

    private function getRoleIds(): array
    {
        $rows = $this->db->table('roles')->select('id, slug')->get()->getResultArray();
        $out  = [];
        foreach ($rows as $r) {
            $out[$r['slug']] = (int) $r['id'];
        }
        return $out;
    }

    private function getPermissionIds(): array
    {
        $rows = $this->db->table('permissions')->select('id, slug')->get()->getResultArray();
        $out  = [];
        foreach ($rows as $r) {
            $out[$r['slug']] = (int) $r['id'];
        }
        return $out;
    }
}
