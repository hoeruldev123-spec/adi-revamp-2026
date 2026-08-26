<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Password default untuk pertama kali. WAJIB diganti setelah login.
     */
    private const DEFAULT_PASSWORD = 'Admin@12345';

    public function run()
    {
        $email = 'devops@alldataint.com';

        $existing = $this->db->table('users')->where('email', $email)->countAllResults();
        if ($existing > 0) {
            return;
        }

        $now = date('Y-m-d H:i:s');
        $this->db->table('users')->insert([
            'name'       => 'Super Admin',
            'email'      => $email,
            'password'   => password_hash(self::DEFAULT_PASSWORD, PASSWORD_DEFAULT),
            'status'     => 'active',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $userId = $this->db->insertID();
        $roleId = $this->db->table('roles')->where('slug', 'super-admin')->get()->getRow()->id;

        $this->db->table('user_roles')->insert([
            'user_id' => $userId,
            'role_id' => $roleId,
        ]);
    }
}
