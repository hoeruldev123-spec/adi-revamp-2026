<?php

namespace App\Controllers;

class ServicesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Our Services | Your Company Name',
            'meta' => [
                'keywords' => 'IT services, digital transformation, cloud solutions, AI integration, business consulting',
                'description' => 'Discover our comprehensive range of professional services designed to drive your business growth through technology and innovation.'
            ],

            // Hero Section Data
            'hero' => [
                'badge' => 'Our Expertise',
                'title' => 'Comprehensive Services for Digital Transformation',
                'description' => 'We provide end-to-end solutions that help businesses leverage technology to achieve operational excellence and competitive advantage.',
                'image' => 'services-hero.png'
            ],

            // Services Categories
            'categories' => [
                [
                    'icon' => 'bi-laptop',
                    'title' => 'Digital Transformation',
                    'description' => 'Modernize your business processes with cutting-edge digital solutions.',
                    'services' => ['Process Automation', 'System Integration', 'Digital Strategy']
                ],
                [
                    'icon' => 'bi-cloud',
                    'title' => 'Cloud Solutions',
                    'description' => 'Scalable and secure cloud infrastructure for your business.',
                    'services' => ['Cloud Migration', 'Infrastructure as a Service', 'Hybrid Cloud']
                ],
                [
                    'icon' => 'bi-robot',
                    'title' => 'AI & Data Analytics',
                    'description' => 'Harness the power of AI and data for intelligent decision-making.',
                    'services' => ['Predictive Analytics', 'Machine Learning', 'Business Intelligence']
                ],
                [
                    'icon' => 'bi-shield-check',
                    'title' => 'Cyber Security',
                    'description' => 'Protect your digital assets with robust security solutions.',
                    'services' => ['Security Assessment', 'Threat Detection', 'Compliance Management']
                ]
            ],

            // Featured Services
            'featuredServices' => [
                [
                    'icon' => 'bi-gear',
                    'title' => 'IT Consulting',
                    'description' => 'Strategic IT planning and advisory services to align technology with business goals.',
                    'features' => ['Technology Assessment', 'Roadmap Planning', 'Vendor Selection']
                ],
                [
                    'icon' => 'bi-code-square',
                    'title' => 'Custom Development',
                    'description' => 'Tailor-made software solutions designed specifically for your business needs.',
                    'features' => ['Web Applications', 'Mobile Apps', 'Enterprise Software']
                ],
                [
                    'icon' => 'bi-headset',
                    'title' => 'Managed Services',
                    'description' => '24/7 monitoring, maintenance, and support for your IT infrastructure.',
                    'features' => ['Proactive Monitoring', 'Help Desk Support', 'Performance Optimization']
                ]
            ],

            // Stats
            'stats' => [
                ['value' => '200+', 'label' => 'Projects Delivered'],
                ['value' => '50+', 'label' => 'Happy Clients'],
                ['value' => '99%', 'label' => 'Client Satisfaction'],
                ['value' => '24/7', 'label' => 'Support Available']
            ]
        ];

        return view('pages/services', $data);
    }

    // ServicesController.php
    public function consulting()
    {
        $data = [
            'title' => 'Consulting',
            'description' => 'Expert guidance to design data and AI strategies that maximize business value.',
            'image' => 'services-card1.webp',

            'cta_text' => 'Request this Service',
            'cta_link' => '/contact?service=consulting',
            'bg_class' => 'bg-white',
            'pattern' => true, // AKTIFKAN PATTERN
            'pattern_opacity' => 100,

            // Content lainnya...
        ];

        return view('pages/services/consulting', $data);
    }
}
