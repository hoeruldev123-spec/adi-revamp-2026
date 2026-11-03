<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function about()
    {
        $data = [
            'hero' => [
                'type' => 'small',
                'title' => 'About Us',
                'subtitle' => 'Learn more about our story and mission',
                'background' => base_url('assets/images/hero-about.jpg')
            ],
            'view' => 'Pages/AboutView'
        ];

        return view('Layouts/MainLayout', $data);
    }

    public function contact()
    {
        $data = [
            'hero' => [
                'type' => 'small',
                'title' => 'Contact Us',
                'subtitle' => 'We’d love to hear from you',
                'background' => base_url('assets/images/hero-contact.jpg')
            ],
            'view' => 'Pages/ContactView'
        ];

        return view('Layouts/MainLayout', $data);
    }
}
