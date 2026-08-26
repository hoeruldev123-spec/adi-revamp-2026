<?php

namespace App\Controllers\Admin;

class Dashboard extends BaseAdminController
{
    public function index()
    {
        // Statistik tahap pertama menggunakan placeholder.
        // Setelah modul Event & Registration tersedia, sambungkan ke database.
        $stats = [
            'total_events'    => '-',
            'registrants'     => '-',
            'active_events'   => '-',
            'total_users'     => $this->userModel->countAllResults(),
        ];

        return $this->render('admin/dashboard/index', [
            'title' => 'Dashboard',
            'stats' => $stats,
        ]);
    }
}
