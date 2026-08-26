<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'name'        => 'Super Admin',
                'slug'        => 'super-admin',
                'description' => 'Akses penuh ke seluruh modul termasuk manajemen RBAC.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Admin',
                'slug'        => 'admin',
                'description' => 'Akses operasional (event, form, registration) tanpa manajemen RBAC.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Event Admin',
                'slug'        => 'event-admin',
                'description' => 'Akses terbatas pada event, form, dan registration yang diberikan.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('roles')->insertBatch($roles);
    }
}
