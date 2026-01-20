<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        // PRINCIPALS SECTION
        $principals = [
            ['logo' => 'Logo-Qlik.png', 'alt' => 'Qlik', 'description' => 'Empowering data-driven insights through advanced analytics and intuitive visualization.'],
            ['logo' => 'Logo-Confluent.png', 'alt' => 'Confluent', 'description' => 'Real-time data streaming powered by Apache Kafka for smarter business operations.'],
            ['logo' => 'Logo-Denodo.png', 'alt' => 'Denodo', 'description' => 'Seamless data virtualization enabling unified access across multiple systems and sources.'],
            ['logo' => 'Logo-Snowflake.png', 'alt' => 'Snowflake', 'description' => 'Scalable cloud data platform for high-performance analytics and AI innovation.'],
            ['logo' => 'Logo-Dataiku.png', 'alt' => 'Dataiku', 'description' => 'Collaborative AI platform to build, deploy, and manage enterprise machine learning.'],
            ['logo' => 'Logo-Cloudera.png', 'alt' => 'Cloudera', 'description' => 'Hybrid data platform integrating analytics, AI, and data management at scale.'],
            ['logo' => 'Logo-Tableau.png', 'alt' => 'Tableau', 'description' => 'Transform raw data into actionable insights with intuitive visual analytics and interactive dashboards.'],
            ['logo' => 'Logo-YugabyteDB.png', 'alt' => 'YugabyteDB', 'description' => 'Distributed SQL database for cloud-native applications.'],
            ['logo' => 'Logo-Hasura.png', 'alt' => 'Hasura', 'description' => 'Instant GraphQL APIs.'],
            ['logo' => 'Logo-ClickHouse.png', 'alt' => 'ClickHouse', 'description' => 'Real-time analytics database.'],
            ['logo' => 'Logo-Alibaba-Cloud.png', 'alt' => 'Alibaba Cloud', 'description' => 'Comprehensive cloud computing services.'],
            ['logo' => 'Logo-redis.png', 'alt' => 'Redis', 'description' => 'In-memory data store.'],
            ['logo' => 'Logo-Dell.png', 'alt' => 'Dell', 'description' => 'Enterprise IT infrastructure solutions.'],
            ['logo' => 'Logo-AWS.png', 'alt' => 'AWS', 'description' => 'Cloud computing and AI services.'],
            ['logo' => 'Logo-Helett Packard.png', 'alt' => 'Hewlett Packard', 'description' => 'Hybrid cloud solutions.'],
            ['logo' => 'Logo-Creatio.png', 'alt' => 'Creatio', 'description' => 'Empowering decisions by transforming raw data into actionable insights through interactive visual analytics.'],


        ];

        //TITLE & META DATA
        $data = [
            'title' => 'Home - All Data International',

            'meta' => [
                'keywords' => 'AI, Data Integration, Business Solutions',
                'description' => 'Transform your business with AI and data integration solutions'
            ],

            //SERVICES SECTION
            'services' => array_slice(
                array_values($this->getServices()),
                0,
                3
            ),

            'hero' => $this->getHeroData(),

            //FILTER MENAMPILAKN 6 CARD PRINCIPAL
            'principal_slides' => array_chunk($principals, 6) ?? [],

            // ALL TESTIMONIAL
            'testimonials' => [
                [
                    'logo' => 'bpjs-ketenagakerjaan.png',
                    'text' => 'Tim All Data menunjukkan kemampuan yang sangat baik dalam penyelesaian masalah dengan komunikasi yang lancar. Tim PMO dan teknis bekerja profesional serta memiliki pemahaman produk yang mendalam sepanjang proyek.',
                    'name' => 'BPJSTK',
                    'position' => 'Ahli Utama Data Quality',
                    'avatar' => null,
                    'video' => null
                ],
                [
                    'logo' => 'bri.webp',
                    'text' => 'Tim All Data menunjukkan kinerja yang memuaskan dengan koordinasi proyek yang baik, komunikasi yang jelas, dan penguasaan platform yang solid. Kami puas dan merekomendasikan All Data untuk kerja sama selanjutnya.',
                    'name' => 'Bank BRI',
                    'position' => 'Senior Manager',
                    'avatar' => null,
                    'video' => null
                ],
                [
                    'logo' => 'pln-npc.webp',
                    'text' => 'Tim All Data sangat kooperatif dan responsif dalam menangani kendala di lapangan. Proyek berjalan sesuai timeline dengan kualitas teknis dan komunikasi yang baik sepanjang proses implementasi.',
                    'name' => 'PLN',
                    'position' => 'PLN MT',
                    'avatar' => null,
                    'video' => null
                ],
                [
                    'logo' => 'otsuka.webp',
                    'text' => 'Kolaborasi dengan All Data berjalan sangat baik. Tim teknikal responsif dan kompeten, komunikasi jelas, serta eksekusi proyek efisien. Tim sales juga sangat membantu dari awal hingga akhir proyek.',
                    'name' => 'Otsuka',
                    'position' => 'Head of Data Management & Governance'
                ],
                [
                    'logo' => 'bri.webp',
                    'text' => 'All Data memberikan dukungan yang konsisten dan responsif bagi Divisi Data Operational Platform BRI. Kolaborasi berjalan sangat baik dengan tim engineer dan manajemen yang sigap menghadapi berbagai tantangan.',
                    'name' => 'Bank BRI',
                    'position' => 'DPO IT Infrastructure & Operations Division'
                ],
                [
                    'logo' => 'kai.webp',
                    'text' => 'Kerja sama dengan All Data International berjalan sangat baik. Tim profesional, responsif, dan fleksibel dalam implementasi Tableau Multi Node, dengan komunikasi efektif yang menjaga progres proyek tetap terkontrol.',
                    'name' => 'KAI',
                    'position' => 'Manager ERP Support & Operation'
                ],
                [
                    'logo' => 'pln-epi.webp',
                    'text' => 'Kerja sama dengan All Data International menunjukkan peningkatan signifikan. Tim responsif, komunikatif, dan berkomitmen tinggi dalam menyelesaikan setiap isu dengan kualitas dan ketepatan waktu yang baik.',
                    'name' => 'PLN EPI',
                    'position' => 'Data Manager dan Analytics'
                ],
                [
                    'logo' => 'allianz.png',
                    'text' => 'Kerja sama Allianz Indonesia dengan All Data International berjalan sangat baik. Tim terbukti suportif, responsif, dan kompeten dalam menangani kendala teknis selama proyek berlangsung.',
                    'name' => 'Allianz',
                    'position' => 'Head of Data Architect and Solutions'
                ],
            ]

        ];

        return view('pages/home', $data);
    }

    //HERO
    private function getHeroData()
    {
        return [
            'badge' => 'Elevate Your Business with AI',
            'title' => 'Empowering Smarter<br>Business Through Data<br>& AI Integration',
            'description' => 'We deliver integrated solutions that transform complex data into clear insights and smarter business outcomes.',
            'image' => 'cloud-hero.png',
        ];
    }
}
