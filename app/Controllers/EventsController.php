<?php

namespace App\Controllers;

class EventsController extends BaseController
{
    public function index()
    {
        $data = [
            'title'            => 'Events | All Data International',
            'meta_description' => 'Explore our upcoming events, webinars, and conferences from All Data International.',
            'active_page'      => 'resources',
            'active_subpage'   => 'events',

            'upcoming_events' => [

                [
                    'title'        => 'Redis & AWS Workshop Jakarta: Build Faster AI Apps with Redis Iris',
                    'type'         => 'Workshop',
                    'day'          => '23',
                    'month'        => 'Oct',
                    'date_text'    => 'Rabu, 23 Oktober 2024',
                    'time'         => '13:00 – 17:00 WIB',
                    'location'     => 'Jakarta',
                    'excerpt'      => 'Technical workshop hands-on bersama Redis & AWS untuk membangun AI Banking Chatbot menggunakan Redis Iris dan Amazon Bedrock, mencakup Vector Search, Semantic Router, LangCache, hingga Context Retriever.',
                    'register_url' => 'https://redis.io/events/redis-aws-workshop-id/?utm_medium=referral-other&utm_source=alldata&utm_campaign=ev-2026-09-15-redis-aws-workshop-indonesia',
                    'detail_url'   => null,
                    'image'        => 'assets/images/events/banner/redis-aws-workshop-id.webp', // Ganti dengan path gambar Anda
                ],
                [
                    'title'        => 'Digital Radiology Transformation & Navigating SATUSEHAT EMR for BPJS Claim',
                    'type'         => 'All Data Cloud PACS Launching',
                    'day'          => '08',
                    'month'        => 'Oct',
                    'date_text'    => 'Kamis, 8 Oktober 2026',
                    'time'         => '09:00 – 13:00 WIB',
                    'location'     => 'Jakarta',
                    'excerpt'      => 'Acara peluncuran dan sesi sharing eksklusif All Data International bersama Huawei Cloud yang mengupas tuntas teknologi Cloud Radiology, kepatuhan RME & standar DICOM, serta strategi mencegah potensi revenue loss pada klaim BPJS Rumah Sakit.',
                    'register_url' => base_url('events/digital-radiology-transformation'),
                    'detail_url'   => null,
                    'image'        => 'assets/images/events/digital-radiology-transformation-hero-2.webp',
                ],
            ],

            'finished_events' => [
                [
                    'title'      => 'End-to-End Data Solution: Customer 360',
                    'type'       => 'Workshop',
                    'day'        => '30',
                    'month'      => 'Jun',
                    'date_text'  => 'Rabu, 30 Juni 2026',
                    'time'       => '12:30 – Selesai (WIB)',
                    'location'   => 'Jl. Jenderal Sudirman, Jakarta Selatan',
                    'excerpt'    => 'Workshop bersama AWS: membangun arsitektur data modern dari data pipeline hingga Customer 360, analytics, dan AI/ML.',
                    // 'detail_url' => base_url('events/aws-end-to-end-data-solution'),
                    'image'      => 'assets/images/events/banner/event-customer-360-2.webp',
                ],
            ],
        ];

        return view('pages/resources/events', $data);
    }

    public function awsEndToEndDataSolution()
    {
        $data['speakers'] = [
            [
                'name' => 'Nadhira Pramatma',
                'title' => 'VP of Technology',
                'photo' => '/assets/images/events/speakers/nadhira.webp'
            ],
            [
                'name' => 'Shandy Tsalasa',
                'title' => 'Solution Architect',
                'photo' => '/assets/images/events/speakers/shandy.webp'
            ],
            [
                'name' => 'Alpin Noza',
                'title' => 'Data Science Lead',
                'photo' => '/assets/images/events/speakers/alpin.webp'
            ],
            [
                'name' => 'Aditya Permana',
                'title' => 'Platform and Data Engineer',
                'photo' => '/assets/images/events/speakers/aditya.webp'
            ],
            [
                'name' => 'Aji Nugroho',
                'title' => 'Account Manager',
                'photo' => '/assets/images/events/speakers/aji.webp'
            ],
        ];

        return view('pages/events/aws-end-to-end-data-solution', $data);
    }

    public function digitalRadiologyTransformation()
    {
        $seo = [
            'description' => 'Ikuti All Data Cloud PACS Launching & Sharing Session (Supported by Huawei Cloud). Pelajari solusi integrasi RME SATUSEHAT & strategi cegah revenue loss klaim BPJS radiologi RS.',
            'keywords'    => 'AllData Cloud PACS, Digital Radiology, SATUSEHAT EMR, Klaim BPJS Radiologi, Huawei Cloud Healthcare, SIMRS Radiologi',
        ];

        return view('pages/events/digital-radiology-transformation', compact('seo'));
    }
}
