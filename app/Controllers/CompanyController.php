<?php

namespace App\Controllers;

class CompanyController extends BaseController
{
    public function about()
    {
        $data = [
            'subtitle' => 'About Us',
            'title' => 'Together, we turn vision into impact through innovation, expertise, and collaboration.',
            'description' => 'A passionate team driving innovation and growth with clients and principals to create impactful industry results.',
            'image' => false,

            'cta_text' => 'Request this Service',
            'cta_link' => '/contact?service=consulting',
            'bg_class' => 'bg-white',
            'pattern' => true, // AKTIFKAN PATTERN
            'pattern_opacity' => 100,

            // Content lainnya...
        ];

        return view('pages/company/about', $data);
    }

    public function ourPartners()
    {
        $data = [
            'subtitle' => 'Our Partners',
            'title' => 'Our Strength Comes from Trusted Partnerships',
            'description' => 'We work hand in hand with leading principals who share our vision for innovation and excellence.',
            'image' => false,

            'cta_text' => false,
            'cta_link' => false,
            'bg_class' => 'bg-white',
            'pattern' => true, // AKTIFKAN PATTERN
            'pattern_opacity' => 100,

            // Content lainnya...
        ];

        return view('pages/company/our_partners', $data);
    }

    public function ourClients()
    {

        $data = [
            'subtitle' => 'Our Client',
            'title' => 'Trusted by Leading Businesses Across Industries',
            'description' => 'Our clients are at the heart of everything we do. From enterprises to industry leaders, they trust us to deliver data driven solutions.',
            'image' => false,

            'cta_text' => false,
            'cta_link' => false,
            'bg_class' => 'bg-white',
            'pattern' => true, // AKTIFKAN PATTERN
            'pattern_opacity' => 100,

            // Content lainnya...
        ];

        return view('pages/company/our_clients', $data);
    }

    public function ourCompetencies()
    {
        return view('pages/company/our_competencies', [
            'title'       => 'Our Competencies',
            'description' => 'Our core capabilities and technical expertise.',
        ]);
    }

    public function team()
    {
        return view('pages/company/team', [
            'title'       => 'Our Team',
            'description' => 'Meet the people behind our success.',
        ]);
    }
}
