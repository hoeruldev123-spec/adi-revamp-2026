<?php

namespace App\Controllers;

class ServicesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Our Services | All Data International',
            'meta' => [
                'keywords' => 'IT services, digital transformation, cloud solutions, AI integration',
                'description' => 'Discover our comprehensive range of professional services.'
            ],
            'hero' => [
                'badge' => 'Our Expertise',
                'title' => 'Comprehensive Services for Digital Transformation',
                'description' => 'We provide end-to-end solutions.',
                'image' => 'services-hero.png'
            ],
        ];

        return view(
            'pages/services',
            $this->withPrincipalSlides($data)
        );
    }


    public function consulting()
    {
        $data = [
            'subtitle' => 'Services',
            'title' => 'Consulting',
            'description' => 'Expert guidance to design data and AI strategies that maximize business value.',
            'image' => 'services-card1.webp',

            'cta_text' => 'Request this Service',
            'cta_link' => '/contact?service=consulting',
            'bg_class' => 'bg-white',
            'pattern' => true,
            'pattern_opacity' => 0.15,
        ];

        return view('pages/services/consulting', $data);
    }


    public function useCaseDevelopment()
    {
        $data = [
            'subtitle' => 'Services',
            'title' => 'Use Case Development',
            'description' => 'Build tailored AI and analytics solutions that address real business challenges.',
            'image' => 'services-card2.webp',

            'cta_text' => 'Request this Service',
            'cta_link' => '/contact?service=use-case-development',

            'bg_class' => 'bg-white',
            'pattern' => true,
            'pattern_opacity' => 0.15,
        ];

        return view('pages/services/use_case_development', $data);
    }


    public function maintenanceSupport()
    {
        $data = [
            'subtitle' => 'Services',
            'title' => 'Maintenance Support',
            'description' => 'Ensure system reliability with regular updates, monitoring, and performance optimization.',
            'image' => 'services-card3.webp',

            'cta_text' => 'Request this Service',
            'cta_link' => '/contact?service=maintenance-support',

            'bg_class' => 'bg-white',
            'pattern' => true,
            'pattern_opacity' => 0.15,
        ];

        return view('pages/services/maintenance_support', $data);
    }

    public function managedServices()
    {
        $data = [
            'subtitle' => 'Services',
            'title' => 'Managed Services',
            'description' => 'End-to-end management for secure, efficient, and scalable data infrastructure.',
            'image' => 'services-card4.webp',

            'cta_text' => 'Request this Service',
            'cta_link' => '/contact?service=managed-services',

            'bg_class' => 'bg-white',
            'pattern' => true,
            'pattern_opacity' => 0.15,
        ];


        return view('pages/services/managed_services', $data);
    }

    public function training()
    {
        $data = [
            'subtitle' => 'Services',
            'title' => 'Training',
            'description' => 'Professional training programs to empower teams with data and AI capabilities.',
            'image' => 'services-card5.webp',

            'cta_text' => 'Request this Service',
            'cta_link' => '/contact?service=training',

            'bg_class' => 'bg-white',
            'pattern' => true,
            'pattern_opacity' => 0.15,
        ];

        return view('pages/services/training', $data);
    }
}
