<?php

namespace App\Controllers\Admin;

class Dashboard extends BaseAdminController
{
    public function index()
    {
        // Statistik terhubung ke modul Event & Registration.
        $eventModel = new \App\Models\EventModel();
        $regModel   = new \App\Models\RegistrationModel();

        $stats = [
            'total_events'    => $eventModel->countAllResults(),
            'registrants'     => $regModel->countAllResults(),
            'active_events'   => $eventModel->where('status', \App\Models\EventModel::STATUS_ACTIVE)->countAllResults(),
            'total_users'     => $this->userModel->countAllResults(),
        ];

        return $this->render('admin/dashboard/index', [
            'title' => 'Dashboard',
            'stats' => $stats,
        ]);
    }
}
