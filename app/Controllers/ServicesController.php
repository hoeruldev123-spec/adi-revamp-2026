<?php

namespace App\Controllers;

class ServicesController extends BaseController
{
    public function index()
    {
        $data = [
            'services' => array_values($this->getServices()),
            'service_mode' => 'all',
        ];

        return view(
            'pages/services',
            $this->withPrincipalSlides($data)
        );
    }

    public function consulting()
    {
        $active = 'consulting';

        $services = array_filter(
            $this->getServices(),
            fn($key) => $key !== $active,
            ARRAY_FILTER_USE_KEY
        );

        $services = array_slice($services, 0, 3);

        $data = [
            'subtitle' => 'Services',
            'title' => 'Consulting',
            'services' => array_values($services),
            'active_service' => $active,
            'service_mode' => 'related', // 🔥

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
        $active = 'use-case-development';

        $services = array_values(
            array_filter(
                $this->getServices(),
                fn($key) => $key !== $active,
                ARRAY_FILTER_USE_KEY
            )
        );

        $services = array_slice($services, 0, 3);

        $data = [
            'subtitle' => 'Services',
            'title' => 'Use Case Development',
            'services' => $services,
            'active_service' => $active,
            'service_mode' => 'related',

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
        $active = 'maintenance-support';

        $services = array_values(
            array_filter(
                $this->getServices(),
                fn($key) => $key !== $active,
                ARRAY_FILTER_USE_KEY
            )
        );

        $services = array_slice($services, 0, 3);

        $data = [
            'subtitle' => 'Services',
            'title' => 'Maintenance Support',
            'services' => $services,
            'active_service' => $active,
            'service_mode' => 'related',

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
        $active = 'managed-services';

        $services = array_values(
            array_filter(
                $this->getServices(),
                fn($key) => $key !== $active,
                ARRAY_FILTER_USE_KEY
            )
        );

        $services = array_slice($services, 0, 3);

        $data = [
            'subtitle' => 'Services',
            'title' => 'Managed Services',
            'services' => $services,
            'active_service' => $active,
            'service_mode' => 'related',

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
        $active = 'training';

        $services = array_values(
            array_filter(
                $this->getServices(),
                fn($key) => $key !== $active,
                ARRAY_FILTER_USE_KEY
            )
        );

        $services = array_slice($services, 0, 3);

        $data = [
            'subtitle' => 'Services',
            'title' => 'Training',
            'services' => $services,
            'active_service' => $active,
            'service_mode' => 'related',

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
