<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('pages/home', [
            'title' => 'Home - All Data International',
            'active' => 'home'
        ]);
    }

    public function solutions()
    {
        $data = [
            'title' => 'Solutions - SOUTTON',
            'activePage' => 'solutions'
        ];

        return view('solutions', $data);
    }
}
