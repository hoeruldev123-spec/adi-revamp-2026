<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Seed contoh Event + Form sesuai studi kasus PRD
 * "Akselerasi Kapabilitas Enterprise AI dengan Dataiku".
 *
 * Dijalankan hanya bila tabel events masih kosong agar tidak duplikat
 * ketika seeder di-run berulang kali.
 */
class FormBuilderSeeder extends Seeder
{
    public function run()
    {
        $events = $this->db->table('fb_events')->countAllResults();
        if ($events > 0) {
            return; // Hindari duplikasi pada seed berulang.
        }

        $eventId = $this->db->table('fb_events')->insert([
            'event_code'  => 'EVT-2026-DATAIKU-001',
            'name'        => 'Akselerasi Kapabilitas Enterprise AI dengan Dataiku',
            'slug'        => 'enterprise-ai-dataiku',
            'location'    => 'Jakarta',
            'description' => 'Event mengenai Enterprise AI dengan Dataiku.',
            'start_date'  => date('Y-m-d H:i:s', strtotime('+30 days')),
            'status'      => 'active',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ]);

        $formId = $this->db->table('fb_forms')->insert([
            'event_id'        => $eventId,
            'title'           => 'Form Registrasi Dataiku',
            'description'     => 'Isi data Anda untuk mengikuti sesi Enterprise AI.',
            'submit_label'    => 'Daftar Sekarang',
            'success_message' => 'Terima kasih! Registrasi Anda telah berhasil kami terima.',
            'status'          => 'active',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s'),
        ]);

        $fields = [
            ['label' => 'Nama Lengkap', 'name' => 'nama_lengkap', 'type' => 'text', 'required' => 1, 'placeholder' => 'John Doe', 'sort' => 1],
            ['label' => 'Email', 'name' => 'email', 'type' => 'email', 'required' => 1, 'placeholder' => 'you@company.com', 'sort' => 2],
            ['label' => 'Nomor Telepon', 'name' => 'nomor_telepon', 'type' => 'tel', 'required' => 0, 'placeholder' => '0812xxxx', 'sort' => 3],
            ['label' => 'Perusahaan', 'name' => 'perusahaan', 'type' => 'text', 'required' => 1, 'placeholder' => 'PT. Example', 'sort' => 4],
            ['label' => 'Jabatan', 'name' => 'jabatan', 'type' => 'text', 'required' => 0, 'placeholder' => 'Data Scientist', 'sort' => 5],
        ];

        $now = date('Y-m-d H:i:s');
        foreach ($fields as $f) {
            $this->db->table('fb_form_fields')->insert([
                'form_id'     => $formId,
                'label'       => $f['label'],
                'name'        => $f['name'],
                'type'        => $f['type'],
                'placeholder' => $f['placeholder'],
                'required'    => $f['required'],
                'sort_order'  => $f['sort'],
                'created_at'  => $now,
                'updated_at'  => $now,
            ]);
        }
    }
}
