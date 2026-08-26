<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Permission dikelompokkan berdasarkan module agar mudah ditampilkan
     * dan dikembangkan oleh modul berikutnya (Event, Form Builder, dll).
     */
    public function run()
    {
        $permissions = [
            // Dashboard
            ['name' => 'View Dashboard', 'slug' => 'dashboard.view', 'description' => 'Melihat halaman dashboard admin.'],

            // Users
            ['name' => 'View Users', 'slug' => 'users.view', 'description' => 'Melihat daftar user.'],
            ['name' => 'Create Users', 'slug' => 'users.create', 'description' => 'Membuat user baru.'],
            ['name' => 'Edit Users', 'slug' => 'users.edit', 'description' => 'Mengubah data user.'],
            ['name' => 'Delete Users', 'slug' => 'users.delete', 'description' => 'Menghapus user.'],

            // Roles
            ['name' => 'View Roles', 'slug' => 'roles.view', 'description' => 'Melihat daftar role.'],
            ['name' => 'Create Roles', 'slug' => 'roles.create', 'description' => 'Membuat role baru.'],
            ['name' => 'Edit Roles', 'slug' => 'roles.edit', 'description' => 'Mengubah role.'],
            ['name' => 'Delete Roles', 'slug' => 'roles.delete', 'description' => 'Menghapus role.'],

            // Permissions
            ['name' => 'View Permissions', 'slug' => 'permissions.view', 'description' => 'Melihat daftar permission.'],

            // Events
            ['name' => 'View Events', 'slug' => 'events.view', 'description' => 'Melihat event.'],
            ['name' => 'Create Events', 'slug' => 'events.create', 'description' => 'Membuat event.'],
            ['name' => 'Edit Events', 'slug' => 'events.edit', 'description' => 'Mengubah event.'],
            ['name' => 'Delete Events', 'slug' => 'events.delete', 'description' => 'Menghapus event.'],

            // Forms
            ['name' => 'View Forms', 'slug' => 'forms.view', 'description' => 'Melihat form.'],
            ['name' => 'Create Forms', 'slug' => 'forms.create', 'description' => 'Membuat form.'],
            ['name' => 'Edit Forms', 'slug' => 'forms.edit', 'description' => 'Mengubah form.'],
            ['name' => 'Delete Forms', 'slug' => 'forms.delete', 'description' => 'Menghapus form.'],

            // Registrations
            ['name' => 'View Registrations', 'slug' => 'registrations.view', 'description' => 'Melihat registration.'],
            ['name' => 'Export Registrations', 'slug' => 'registrations.export', 'description' => 'Export data registration.'],
            ['name' => 'Delete Registrations', 'slug' => 'registrations.delete', 'description' => 'Menghapus registration.'],
        ];

        $now = date('Y-m-d H:i:s');
        foreach ($permissions as &$p) {
            $p['created_at'] = $now;
            $p['updated_at'] = $now;
        }
        unset($p);

        $this->db->table('permissions')->insertBatch($permissions);
    }
}
