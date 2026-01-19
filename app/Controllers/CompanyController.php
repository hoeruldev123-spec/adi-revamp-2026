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
        $clients = [
            ['logo' => 'adira-finance.png', 'alt' => 'Adira Finance', 'name' => 'Adira Finance'],
            ['logo' => 'allianz.png', 'alt' => 'Allianz', 'name' => 'Allianz Indonesia'],
            ['logo' => 'asdp.webp', 'alt' => 'asdp', 'name' => 'ASDP Indonesia Ferry'],
            ['logo' => 'bank-bjb.webp', 'alt' => 'bank bjb', 'name' => 'Bank BJB'],
            ['logo' => 'bank-dki.webp', 'alt' => 'bank dki', 'name' => 'Bank DKI'],
            ['logo' => 'bca-digital.png', 'alt' => 'BCA Digital', 'name' => 'BCA Digital'],
            ['logo' => 'bca-syariah.webp', 'alt' => 'bca syariah', 'name' => 'BCA Syariah'],
            ['logo' => 'bca.webp', 'alt' => 'bca', 'name' => 'Bank BCA'],
            ['logo' => 'bki.webp', 'alt' => 'bki', 'name' => 'BKI (Biro Klasifikasi Indonesia)'],
            ['logo' => 'bpjs-kesehatan.webp', 'alt' => 'bpjs kesehatan', 'name' => 'BPJS Kesehatan'],
            ['logo' => 'bpjs-ketenagakerjaan.png', 'alt' => 'BPJS Ketenagakerjaan', 'name' => 'BPJS Ketenagakerjaan'],
            ['logo' => 'bri.webp', 'alt' => 'bri', 'name' => 'Bank BRI'],
            ['logo' => 'bsi.webp', 'alt' => 'bsi', 'name' => 'Bank Syariah Indonesia (BSI)'],
            ['logo' => 'dbs.webp', 'alt' => 'dbs', 'name' => 'DBS Bank'],
            ['logo' => 'fif-group.png', 'alt' => 'FIF Group', 'name' => 'FIF Group'],
            ['logo' => 'gtech-digital-asia.webp', 'alt' => 'gtech digital asia', 'name' => 'GTech Digital Asia'],
            ['logo' => 'ifg.webp', 'alt' => 'ifg', 'name' => 'IFG (Indonesia Financial Group)'],
            ['logo' => 'kai.webp', 'alt' => 'kai', 'name' => 'KAI (Kereta Api Indonesia)'],
            ['logo' => 'kalbe.webp', 'alt' => 'Kalbe', 'name' => 'Kalbe Farma'],
            ['logo' => 'kino.webp', 'alt' => 'kino', 'name' => 'Kino Indonesia'],
            ['logo' => 'otsuka.webp', 'alt' => 'otsuka', 'name' => 'Otsuka Indonesia'],
            ['logo' => 'pama.webp', 'alt' => 'pama', 'name' => 'PAMA (Persada Amanah Makmur Abadi)'],
            ['logo' => 'pln-epi.webp', 'alt' => 'pln epi', 'name' => 'PLN EPI (Energi Prima Indonesia)'],
            ['logo' => 'pln-ip.webp', 'alt' => 'pln ip', 'name' => 'Indonesia Power'],
            ['logo' => 'pln-npc.webp', 'alt' => 'pln npc', 'name' => 'PLN NPC (Nusantara Power Company)'],
            ['logo' => 'pln.webp', 'alt' => 'pln', 'name' => 'PLN (Perusahaan Listrik Negara)'],
            ['logo' => 'ppa.webp', 'alt' => 'ppa', 'name' => 'PPA'],
            ['logo' => 'prodia.webp', 'alt' => 'prodia', 'name' => 'Prodia Laboratories'],
            ['logo' => 'pupuk-indonesia.webp', 'alt' => 'pupuk indonesia', 'name' => 'Pupuk Indonesia'],
            // ['logo' => 'icon-plus.png', 'alt' => 'More Clients', 'name' => 'View More Clients'], // Optional

            // Tambahkan client lainnya di sini
        ];

        $data = [
            // HERO
            'subtitle' => 'Our Client',
            'title' => 'Trusted by Leading Businesses Across Industries',
            'description' => 'Our clients are at the heart of everything we do. From enterprises to industry leaders, they trust us to deliver data driven solutions.',
            'image' => false,

            'cta_text' => false,
            'cta_link' => false,
            'bg_class' => 'bg-white',
            'pattern' => true, // AKTIFKAN PATTERN
            'pattern_opacity' => 100,

            // DATA CLIENT
            'clients' => $clients,
        ];

        return view('pages/company/our_clients', $data);
    }

    public function ourCompetencies()
    {

        $data = [

            // Meta tags
            'meta_title' => 'Our Competencies | Data & AI Solutions Expertise',
            'meta_description' => 'Explore our comprehensive competencies in enterprise architecture, data engineering, AI/ML, and digital transformation.',
            'meta_keywords' => 'data competencies, AI expertise, enterprise architecture, data engineering, digital transformation',

            'subtitle' => 'Competencies',
            'title' => 'Key Features For your Data Analytics',
            'description' => 'All Data International believes that data drives innovation and helps businesses become more efficient and successful. With our AI expertise, we provide data solutions that help our customers achieve their goals effectively.',
            'image' => false,

            'cta_text' => false,
            'cta_link' => false,
            'bg_class' => 'bg-white',
            'pattern' => true,
            'pattern_opacity' => 100,

            // Content lainnya...
        ];

        return view('pages/company/our_competencies', $data);
    }

    public function team()
    {
        return view('pages/company/team', [
            'title'       => 'Our Team',
            'description' => 'Meet the people behind our success.',
        ]);
    }
}
