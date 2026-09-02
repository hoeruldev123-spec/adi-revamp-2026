<?php
// 1. Logika Pemilihan Bahasa
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'id';

// 2. Data Pembicara (Fleksibel: Tambah/Hapus data dari array ini)
$speakers = [

    [
        'photo' => base_url('assets/images/events/speakers/setiaji.webp'),
        'nama' => 'Setiaji, ST, MSI',
        'posisi' => 'Information Technology Director',
        'perusahaan' => 'BPJS Kesehatan'
    ],
    // [
    //     'photo' => 'https://i.pinimg.com/236x/13/74/20/137420f5b9c39bc911e472f5d20f053e.jpg',
    //     'nama' => 'Proposed Hospital Speaker',
    //     'posisi' => 'CEO',
    //     'perusahaan' => 'Potential Hospital Group'
    // ],
    [
        'photo' => base_url('assets/images/events/speakers/bimantoro-2.webp'),
        'nama' => 'dr. G. Bimantoro',
        'posisi' => 'Director of Product',
        'perusahaan' => 'All Data PACS'
    ],
    [
        'photo' => base_url('assets/images/events/speakers/yoga-fatwanto.webp'),
        'nama' => 'Yoga Fatwanto',
        'posisi' => 'Partner Solution Architect',
        'perusahaan' => 'Huawei Cloud'
    ]
];

// 3. Kamus Penerjemahan (Translation Dictionary)
$translations = [
    'id' => [
        'title' => 'All Data Cloud PACS Launching - Digital Radiology Transformation',
        'badge' => 'All Data Cloud PACS Launching',
        'hero_title' => 'Digital Radiology Transformation & Navigating SATUSEHAT EMR for BPJS Claim',
        'hero_subtitle' => 'Secure Your Revenue, Transform Your Radiology Workflow.',
        'collab_text' => 'In Collaboration',
        'description' => 'Integrasi Rekam Medis Elektronik (RME) dengan platform SATUSEHAT menjadi standar mutlak bagi fasilitas kesehatan di Indonesia. All Data bersama Huawei Cloud mempersembahkan Cloud Radiology untuk memodernisasi alur kerja radiologi dan mengamankan pendapatan rumah sakit Anda dari potensi gagal klaim.',
        'date_time_label' => 'Waktu & Tanggal',
        'date_time_value' => 'Kamis, 22 Oktober 2026 | 09.00 - 13.00 WIB',
        'location_label' => 'Lokasi',
        'location_value' => 'Wisma Mulia 2 - Jl. Gatot Subroto No.6, Jakarta Selatan ',
        'btn_register' => 'Daftar Sekarang',
        'btn_agenda' => 'Lihat Agenda',
        'stat_1_val' => '100%',
        'stat_1_lbl' => 'Kepatuhan Standar DICOM & RME',
        'stat_2_val' => '0%',
        'stat_2_lbl' => 'Potensi Gagal Klaim BPJS',
        'stat_3_val' => 'Cloud',
        'stat_3_lbl' => 'Infrastruktur Radiologi Tangguh',
        'th_speaker' => 'Pembicara',

        'nav_topics' => 'Topik',
        'nav_speakers' => 'Pembicara',
        'nav_agenda' => 'Agenda',
        'nav_audience' => 'Target Peserta',
        'topics_title' => 'Topik Yang Akan Dibahas',
        'topics_subtitle' => 'Mengupas tuntas modernisasi alur kerja radiologi dan interoperabilitas RME untuk mencegah potensi revenue loss.',
        'topic_1_title' => 'The Future of Radiology Infrastructure',
        'topic_1_desc' => 'Membangun ekosistem radiologi yang aman, cepat, dan scalable menggunakan teknologi Huawei Cloud.',
        'topic_2_title' => 'SATUSEHAT & BPJS Claim Readiness',
        'topic_2_desc' => 'Membedah potensi revenue loss pada klaim radiologi BPJS dan bagaimana menghindarinya melalui dokumentasi digital yang tepat.',
        'topic_3_title' => 'Seamless Integration & Live Demo',
        'topic_3_desc' => 'Cara All Data Cloud PACS menjembatani operasional radiologi klinis dengan RME Kemenkes, dilengkapi Live Demo alur kerja dari modalitas hingga laporan terintegrasi.',
        'speakers_title' => 'Pembicara',
        'speakers_subtitle' => 'Dengarkan wawasan mendalam dari para pakar dan praktisi industri kesehatan digital.',
        'agenda_title' => 'Agenda Acara',
        'agenda_subtitle' => 'Kamis, 22 Oktober 2026',
        'agenda_reg_desc' => 'Registrasi ulang peserta.',
        'agenda_welcoming' => 'Welcoming Session',
        'agenda_committee' => 'Panitia Acara',
        'agenda_welcome_desc' => 'Sambutan pembuka mengenai visi transformasi digital dan kolaborasi ekosistem radiologi di Indonesia.',
        'agenda_opening_speech' => 'Opening Speech',
        'agenda_keynote_desc' => 'Navigating SATUSEHAT EMR & BPJS Claims: Strategi Mencegah Potensi "Revenue Loss" pada Layanan Radiologi.',
        'agenda_keynote_type' => 'Keynote Presentation',
        'agenda_huawei_desc' => 'Empowering Healthcare IT: Infrastruktur Cloud Tangguh untuk Ekosistem Radiologi Digital. Building a secure, scalable foundation.',
        'agenda_showcase_type' => 'Solution Showcase',
        'agenda_exec_desc' => 'Tantangan nyata dan strategi ekonomi migrasi HIS/PACS ke cloud pada jaringan rumah sakit skala menengah.',
        'agenda_case_study' => 'Hospital Case Study',
        'agenda_hospital_proposed' => 'Grup Rumah Sakit (Proposed)',
        'agenda_demo_desc' => 'Solusi penghubung Cloud Radiology. Demonstrasi langsung alur kerja dari modalitas hingga pelaporan terintegrasi.',
        'agenda_live_demo' => 'Live Demonstration',
        'agenda_qa_title' => 'Sesi Tanya Jawab',
        'agenda_qa_desc' => 'Sesi tanya jawab interaktif bersama para panelis dan pembicara mengenai integrasi teknis, kepatuhan klaim, dan implementasi sistem.',
        'agenda_qa_type' => 'Panel Interaktif Q&A',
        'agenda_qa_speaker' => 'Pembicara & Moderator',
        'agenda_lunch_desc' => 'Diskusi interaktif, konsultasi kebutuhan rumah sakit, dan ramah tamah.',
        'agenda_lunch_type' => 'Networking & Makan Siang',
        'agenda_lunch_speaker' => 'Seluruh Peserta',
        'th_time' => 'Waktu',
        'th_session' => 'Sesi & Pembahasan',
        'th_type' => 'Tipe Sesi',
        'audience_title' => 'Target Peserta',
        'audience_subtitle' => 'Acara ini dirancang untuk para pemangku kepentingan utama di fasilitas pelayanan kesehatan.',
        'cta_bottom_title' => 'Secure Your Revenue, Transform Your Radiology Workflow.',
        'cta_bottom_subtitle' => 'Jangan biarkan ketidaksesuaian data radiologi berdampak pada klaim BPJS Rumah Sakit Anda.',
        'cta_bottom_btn' => 'Daftar Sekarang',
        'msg_success' => 'Pendaftaran berhasil! Konfirmasi telah dikirimkan ke email Anda.',
        'msg_error' => 'Harap isi semua kolom wajib.'
    ],
    'en' => [
        'title' => 'All Data Cloud PACS Launching - Digital Radiology Transformation',
        'badge' => 'All Data Cloud PACS Launching',
        'hero_title' => 'Digital Radiology Transformation & Navigating SATUSEHAT EMR for BPJS Claim',
        'hero_subtitle' => 'Secure Your Revenue, Transform Your Radiology Workflow.',
        'collab_text' => 'In Collaboration',
        'description' => 'Electronic Medical Record (EMR) integration with SATUSEHAT is essential for Indonesian healthcare facilities. All Data and Huawei Cloud present Cloud Radiology to modernize workflows and protect hospital revenue from failed claims.',
        'date_time_label' => 'Date & Time',
        'date_time_value' => 'Thursday, October 22, 2026 | 09.00 - 13.00 WIB',
        'location_label' => 'Location',
        'location_value' => 'Wisma Mulia 2 - Jl. Gatot Subroto No.6, Jakarta Selatan',
        'btn_register' => 'Register Now',
        'btn_agenda' => 'View Agenda',
        'stat_1_val' => '100%',
        'stat_1_lbl' => 'DICOM & EMR Standard Compliance',
        'stat_2_val' => '0%',
        'stat_2_lbl' => 'BPJS Claim Failure Risk',
        'stat_3_val' => 'Cloud',
        'stat_3_lbl' => 'Scalable Radiology Infrastructure',
        'th_speaker' => 'Speaker',

        'nav_topics' => 'Key Topics',
        'nav_speakers' => 'Speakers',
        'nav_agenda' => 'Agenda',
        'nav_audience' => 'Target Audience',
        'topics_title' => 'Topics To Be Discussed',
        'topics_subtitle' => 'In-depth breakdown of radiology workflow modernization and EMR interoperability to prevent revenue loss.',
        'topic_1_title' => 'The Future of Radiology Infrastructure',
        'topic_1_desc' => 'Building a secure, fast, and scalable radiology ecosystem using Huawei Cloud technology.',
        'topic_2_title' => 'SATUSEHAT & BPJS Claim Readiness',
        'topic_2_desc' => 'Analyzing potential revenue loss in BPJS radiology claims and how to prevent it through proper digital documentation.',
        'topic_3_title' => 'Seamless Integration & Live Demo',
        'topic_3_desc' => 'How All Data Cloud PACS bridges clinical radiology operations with MoH EMR requirements, featuring a Live Demo from modality to integrated reporting.',
        'speakers_title' => 'Featured Speakers',
        'speakers_subtitle' => 'Gain insights from leading experts and healthcare digital transformation practitioners.',
        'agenda_title' => 'Event Agenda',
        'agenda_subtitle' => 'Thursday, October 22, 2026',
        'agenda_reg_desc' => 'On-site registration.',
        'agenda_welcoming' => 'Welcoming Session',
        'agenda_committee' => 'Event Committee',
        'agenda_welcome_desc' => 'Opening remarks on digital transformation vision and radiology ecosystem collaboration in Indonesia.',
        'agenda_opening_speech' => 'Opening Speech',
        'agenda_keynote_desc' => 'Navigating SATUSEHAT EMR & BPJS Claims: Strategies to Prevent Potential "Revenue Loss" in Radiology Services.',
        'agenda_keynote_type' => 'Keynote Presentation',
        'agenda_huawei_desc' => 'Empowering Healthcare IT: Resilient Cloud Infrastructure for Digital Radiology Ecosystem. Building a secure, scalable foundation.',
        'agenda_showcase_type' => 'Solution Showcase',
        'agenda_exec_desc' => 'Real-world challenges and economic strategies for cloud HIS/PACS migration in mid-sized hospital networks.',
        'agenda_case_study' => 'Hospital Case Study',
        'agenda_hospital_proposed' => 'Hospital Group (Proposed)',
        'agenda_demo_desc' => 'Bridging Cloud Radiology solution. Live demonstration of workflow from modality to integrated reporting.',
        'agenda_live_demo' => 'Live Demonstration',
        'agenda_qa_title' => 'Q & A Session',
        'agenda_qa_desc' => 'Interactive Q&A session with panelists and speakers covering technical integration, claim compliance, and system implementation.',
        'agenda_qa_type' => 'Interactive Panel Q&A',
        'agenda_qa_speaker' => 'Speakers & Moderator',
        'agenda_lunch_desc' => 'Interactive discussion, hospital needs consultation, and networking.',
        'agenda_lunch_type' => 'Networking & Lunch',
        'agenda_lunch_speaker' => 'All Attendees',
        'th_time' => 'Time',
        'th_session' => 'Session & Topic',
        'th_type' => 'Session Type',
        'audience_title' => 'Target Audience',
        'audience_subtitle' => 'Designed specifically for decision-makers and key practitioners in healthcare facilities.',
        'cta_bottom_title' => 'Secure Your Revenue, Transform Your Radiology Workflow.',
        'cta_bottom_subtitle' => 'Prevent data discrepancies from risking your hospital BPJS claims.',
        'cta_bottom_btn' => 'Register Now',
        'msg_success' => 'Registration successful! Confirmation has been sent to your email.',
        'msg_error' => 'Please fill in all required fields.'
    ]
];

$t = $translations[$lang];

// 4. Form Handling (Dummy)
$isSubmitted = false;
$statusMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $rs = htmlspecialchars($_POST['rumah_sakit'] ?? '');

    if (!empty($nama) && !empty($email) && !empty($rs)) {
        $isSubmitted = true;
        $statusMessage = $t['msg_success'];
    } else {
        $statusMessage = $t['msg_error'];
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['title']; ?></title>
    <meta name="title" content="<?php echo $t['title']; ?>">
    <meta name="description" content="<?php echo $t['description']; ?>">
    <meta name="keywords" content="Cloud PACS, Digital Radiology, SATUSEHAT, RME, BPJS Claim, Healthcare IT, Huawei Cloud, All Data International">
    <meta name="robots" content="index, follow">
    <meta name="author" content="All Data International">

    <!-- Open Graph / Facebook / LinkedIn / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url(); ?>">
    <meta property="og:title" content="<?php echo $t['title']; ?>">
    <meta property="og:description" content="<?php echo $t['description']; ?>">
    <meta property="og:image" content="<?= base_url('assets/images/og/digital-radiology-transformation.webp'); ?>">
    <meta property="og:image:width" content="1875">
    <meta property="og:image:height" content="625">
    <meta property="og:locale" content="<?php echo $lang === 'en' ? 'en_US' : 'id_ID'; ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= current_url(); ?>">
    <meta name="twitter:title" content="<?php echo $t['title']; ?>">
    <meta name="twitter:description" content="<?php echo $t['description']; ?>">
    <meta name="twitter:image" content="<?= base_url('assets/images/twitter/digital-radiology-transformation.webp'); ?>">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        huawei: {
                            red: '#e60012',
                            dark: '#1e293b',
                            light: '#f8fafc',
                            card: '#ffffff',
                            cardBorder: '#e2e8f0',
                            blue: '#2563eb',
                            accent: '#3b82f6',
                            muted: '#64748b'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .hexagon-shape {
            clip-path: polygon(50% 0%, 93.3% 25%, 93.3% 75%, 50% 100%, 6.7% 75%, 6.7% 25%);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-14px);
            }
        }

        .animate-float-1 {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-2 {
            animation: float 5s ease-in-out 1s infinite;
        }

        .animate-float-3 {
            animation: float 4.5s ease-in-out 0.5s infinite;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 bg-huawei-dark/95 backdrop-blur border-b border-slate-800 text-white transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <a class="navbar-brand flex items-center" href="<?= base_url() ?>">
                    <img src="<?= base_url('assets/images/logo_coloured.png'); ?>" alt="All Data" class="h-7 sm:h-9 w-auto object-contain">
                </a>
                <span class="font-semibold text-lg tracking-wide hidden sm:inline">Cloud PACS</span>

            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#topics" class="hover:text-huawei-red transition-colors duration-200"><?php echo $t['nav_topics']; ?></a>
                <a href="#speakers" class="hover:text-huawei-red transition-colors duration-200"><?php echo $t['nav_speakers']; ?></a>
                <a href="#agenda" class="hover:text-huawei-red transition-colors duration-200"><?php echo $t['nav_agenda']; ?></a>
                <a href="#audience" class="hover:text-huawei-red transition-colors duration-200"><?php echo $t['nav_audience']; ?></a>
            </nav>

            <div class="flex items-center space-x-4">
                <!-- Language Switcher Button -->
                <div class="inline-flex bg-slate-800 rounded-lg p-1 border border-slate-700 text-xs font-semibold">
                    <a href="?lang=id" class="px-2.5 py-1 rounded <?php echo $lang === 'id' ? 'bg-huawei-red text-white' : 'text-slate-400 hover:text-white'; ?> transition-all duration-200">
                        ID
                    </a>
                    <a href="?lang=en" class="px-2.5 py-1 rounded <?php echo $lang === 'en' ? 'bg-huawei-red text-white' : 'text-slate-400 hover:text-white'; ?> transition-all duration-200">
                        EN
                    </a>
                </div>

                <!-- Registration CTA Button -->
                <a href="https://forms.cloud.microsoft/r/us6YRhnQDq" target="_blank" rel="noopener noreferrer" class="bg-huawei-red hover:bg-red-700 text-white px-4 py-2 rounded text-sm font-semibold transition-all duration-300 hover:shadow-lg hover:shadow-red-600/30">
                    <?php echo $t['btn_register']; ?>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="about" class="bg-gradient-to-b from-slate-50 via-white to-slate-100 text-slate-800 py-16 md:py-24 relative overflow-hidden border-b border-slate-200">
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#2563eb_1px,transparent_1px)] [background-size:16px_16px]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-7 space-y-6">
                    <!-- Badge Group -->
                    <div class="flex flex-wrap items-center gap-2">
                        <!-- Badge Hybrid Event -->
                        <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Hybrid Event
                        </span>

                        <span class="inline-block bg-blue-50 text-blue-700 border border-blue-200 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                            <?php echo $t['badge']; ?>
                        </span>

                    </div>

                    <h1 class="text-3xl md:text-4xl font-extrabold leading-tight tracking-tight text-slate-900">
                        <?php echo $t['hero_title']; ?>
                    </h1>

                    <h2 class="text-xl md:text-2xl font-bold text-huawei-red leading-snug">
                        <?php echo $t['hero_subtitle']; ?>
                    </h2>

                    <p class="text-slate-600 text-base md:text-lg leading-relaxed">
                        <?php echo $t['description']; ?>
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-slate-700 border-l-2 border-huawei-red pl-4 py-1">
                        <div>
                            <span class="block text-slate-500 font-medium"><?php echo $t['date_time_label']; ?></span>
                            <span class="font-semibold text-slate-900"><?php echo $t['date_time_value']; ?></span>
                        </div>
                        <div>
                            <span class="block text-slate-500 font-medium"><?php echo $t['location_label']; ?></span>
                            <span class="font-semibold text-slate-900"><?php echo $t['location_value']; ?></span>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-4 pt-4">
                        <a href="https://forms.cloud.microsoft/r/us6YRhnQDq" target="_blank" rel="noopener noreferrer" class="bg-huawei-red hover:bg-red-700 text-white px-6 py-3 rounded-md font-semibold transition-all duration-300 transform hover:-translate-y-0.5 shadow-md shadow-red-500/20">
                            <?php echo $t['btn_register']; ?>
                        </a>
                        <a href="#agenda" class="bg-white hover:bg-slate-50 text-slate-800 border border-slate-300 px-6 py-3 rounded-md font-semibold transition-all duration-300 transform hover:-translate-y-0.5 shadow-sm">
                            <?php echo $t['btn_agenda']; ?>
                        </a>

                        <!-- Wrapper Teks & Logo Huawei -->
                        <div class="flex flex-col items-start justify-center ml-auto sm:ml-2">
                            <span class="text-[10px] uppercase font-semibold text-slate-400 tracking-wider mb-0.5">
                                <?php echo $t['collab_text']; ?>
                            </span>
                            <a class="navbar-brand flex items-center" href="https://www.huaweicloud.com/intl/id-id/" target="_blank" rel="noopener noreferrer">
                                <img src="<?= base_url('assets/images/events/HW_POS_RGB_Horizontal-300ppi.webp') ?>" alt="Huawei" class="h-6 sm:h-8 w-auto object-contain">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Hexagon Images -->
                <div class="lg:col-span-5 relative flex justify-center items-center py-6">
                    <div class="grid grid-cols-2 gap-3 w-full max-w-md relative">
                        <div class="animate-float-1">
                            <div class="w-full aspect-square hexagon-shape overflow-hidden bg-slate-200 shadow-xl transform hover:scale-105 transition-transform duration-300">
                                <img src="<?= base_url('assets/images/events/digital-radiology-transformation-hero-1.webp') ?>" alt="Digital Radiology Transformation 1" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="translate-y-8 animate-float-2">
                            <div class="w-full aspect-square hexagon-shape overflow-hidden bg-slate-200 shadow-xl transform hover:scale-105 transition-transform duration-300">
                                <img src="<?= base_url('assets/images/events/digital-radiology-transformation-hero-2.webp') ?>" alt="Digital Radiology Transformation 2" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="col-span-2 justify-self-center w-1/2 -mt-6 animate-float-3">
                            <div class="w-full aspect-square hexagon-shape overflow-hidden bg-slate-200 shadow-xl transform hover:scale-105 transition-transform duration-300">
                                <img src="<?= base_url('assets/images/events/digital-radiology-transformation-hero-3.webp') ?>" alt="Digital Radiology Transformation 3" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Metrics Bar -->
    <section class="bg-slate-900 border-y border-slate-800 py-8 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-800">
                <div class="pt-4 md:pt-0">
                    <div class="text-3xl font-extrabold text-blue-500 mb-1"><?php echo $t['stat_1_val']; ?></div>
                    <div class="text-sm text-slate-400"><?php echo $t['stat_1_lbl']; ?></div>
                </div>
                <div class="pt-4 md:pt-0">
                    <div class="text-3xl font-extrabold text-blue-500 mb-1"><?php echo $t['stat_2_val']; ?></div>
                    <div class="text-sm text-slate-400"><?php echo $t['stat_2_lbl']; ?></div>
                </div>
                <div class="pt-4 md:pt-0">
                    <div class="text-3xl font-extrabold text-blue-500 mb-1"><?php echo $t['stat_3_val']; ?></div>
                    <div class="text-sm text-slate-400"><?php echo $t['stat_3_lbl']; ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Topics Section -->
    <section id="topics" class="py-20 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-2xl md:text-4xl font-bold text-slate-900 mb-4"><?php echo $t['topics_title']; ?></h2>
                <p class="text-slate-600"><?php echo $t['topics_subtitle']; ?></p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center font-bold text-xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3"><?php echo $t['topic_1_title']; ?></h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        <?php echo $t['topic_1_desc']; ?>
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-12 h-12 bg-red-100 text-huawei-red rounded-lg flex items-center justify-center font-bold text-xl mb-6 group-hover:bg-huawei-red group-hover:text-white transition-colors duration-300">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3"><?php echo $t['topic_2_title']; ?></h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        <?php echo $t['topic_2_desc']; ?>
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-12 h-12 bg-slate-100 text-slate-800 rounded-lg flex items-center justify-center font-bold text-xl mb-6 group-hover:bg-slate-800 group-hover:text-white transition-colors duration-300">
                        03
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3"><?php echo $t['topic_3_title']; ?></h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        <?php echo $t['topic_3_desc']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION PEMBICARA / SPEAKERS (Fleksibel Flexbox Layout) -->
    <section id="speakers" class="py-20 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-2xl md:text-4xl font-bold text-slate-900 mb-4"><?php echo $t['speakers_title']; ?></h2>
                <p class="text-slate-600"><?php echo $t['speakers_subtitle']; ?></p>
            </div>

            <!-- Container Flexbox Fleksibel untuk Menampung Kartu Pembicara -->
            <div class="flex flex-wrap justify-center gap-8">
                <?php foreach ($speakers as $speaker): ?>
                    <div class="w-full sm:w-[calc(50%-16px)] lg:w-[calc(25%-24px)] min-w-[250px] max-w-[320px] bg-slate-50 border border-slate-200 rounded-xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">

                        <!-- Container Foto dengan Aspect Ratio Pas -->
                        <div class="w-full aspect-[4/3] bg-slate-200 overflow-hidden relative">
                            <img src="<?php echo $speaker['photo']; ?>"
                                alt="<?php echo $speaker['nama']; ?>"
                                class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-500">
                        </div>

                        <!-- Info Detail Pembicara -->
                        <div class="p-5 flex flex-col justify-between flex-grow text-center">
                            <div>
                                <h3 class="font-bold text-lg text-slate-900 mb-1"><?php echo $speaker['nama']; ?></h3>
                                <p class="text-xs font-semibold text-huawei-red mb-2"><?php echo $speaker['posisi']; ?></p>
                            </div>
                            <div class="pt-3 border-t border-slate-200">
                                <p class="text-xs text-slate-500 font-medium"><?php echo $speaker['perusahaan']; ?></p>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Agenda Table Section -->
    <section id="agenda" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-2xl md:text-4xl font-bold text-slate-900 mb-4"><?php echo $t['agenda_title']; ?></h2>
                <p class="text-slate-600 font-semibold"><?php echo $t['agenda_subtitle']; ?></p>
            </div>

            <div class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-700">
                        <thead class="bg-slate-900 text-white uppercase text-xs">
                            <tr>
                                <th class="py-4 px-6 w-1/6"><?php echo $t['th_time']; ?></th>
                                <th class="py-4 px-6 w-2/5"><?php echo $t['th_session']; ?></th>
                                <th class="py-4 px-6 w-1/5"><?php echo $t['th_type']; ?></th>
                                <th class="py-4 px-6 w-1/4"><?php echo $t['th_speaker']; ?></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200">
                            <!-- Sesi 1: Registration -->
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900 whitespace-nowrap">08:45 - 09:30 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Registration & Welcome Tea</span>

                                </td>
                                <td class="py-4 px-6 text-slate-500 font-medium"><?php echo $t['agenda_welcoming']; ?></td>
                                <td class="py-4 px-6 font-semibold text-slate-900"><?php echo $t['agenda_committee']; ?></td>
                            </tr>
                            <!-- Sesi 2: Welcome Speech -->
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900 whitespace-nowrap">09:30 - 09:45 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Welcome Speech</span>
                                    <span class="text-slate-600"><?php echo $t['agenda_welcome_desc']; ?></span>
                                </td>
                                <td class="py-4 px-6 text-slate-500 font-medium"><?php echo $t['agenda_opening_speech']; ?></td>
                                <td class="py-4 px-6 font-semibold text-slate-900">Melody Ma <span class="block text-xs font-normal text-slate-500">Partner Ecosystem Director (Huawei Cloud)</span></td>
                            </tr>
                            <!-- Sesi 3: Keynote -->
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900 whitespace-nowrap">09:45 - 10:05 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Keynote</span>
                                    <span class="text-slate-600"><?php echo $t['agenda_keynote_desc']; ?></span>
                                </td>
                                <td class="py-4 px-6 text-slate-500 font-medium"><?php echo $t['agenda_keynote_type']; ?></td>
                                <td class="py-4 px-6 font-semibold text-slate-900">Setiaji, ST, MSI <span class="block text-xs font-normal text-slate-500">Information Technology Director (BPJS Kesehatan)</span></td>
                            </tr>
                            <!-- Sesi 4: Huawei Showcase -->
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900 whitespace-nowrap">10:05 - 10:50 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Huawei Solution Showcase</span>
                                    <span class="text-slate-600"><?php echo $t['agenda_huawei_desc']; ?></span>
                                </td>
                                <td class="py-4 px-6 text-slate-500 font-medium"><?php echo $t['agenda_showcase_type']; ?></td>
                                <td class="py-4 px-6 font-semibold text-slate-900">Yoga Fatwanto <span class="block text-xs font-normal text-slate-500">Partner Solution Architect (Huawei Cloud)</span></td>
                            </tr>
                            <!-- Sesi 5: Executive Sharing -->
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900 whitespace-nowrap">10:50 - 11:10 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Executive Sharing Session</span>
                                    <span class="text-slate-600"><?php echo $t['agenda_exec_desc']; ?></span>
                                </td>
                                <td class="py-4 px-6 text-slate-500 font-medium"><?php echo $t['agenda_case_study']; ?></td>
                                <td class="py-4 px-6 font-semibold text-slate-900">CEO <span class="block text-xs font-normal text-slate-500"><?php echo $t['agenda_hospital_proposed']; ?></span></td>
                            </tr>
                            <!-- Sesi 6: Live Demo -->
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900 whitespace-nowrap">11:10 - 11:30 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Seamless Integration & Live Demo</span>
                                    <span class="text-slate-600"><?php echo $t['agenda_demo_desc']; ?></span>
                                </td>
                                <td class="py-4 px-6 text-slate-500 font-medium"><?php echo $t['agenda_live_demo']; ?></td>
                                <td class="py-4 px-6 font-semibold text-slate-900">dr. G. Bimantoro <span class="block text-xs font-normal text-slate-500">Director of Product (All Data PACS)</span></td>
                            </tr>
                            <!-- Sesi 7: Q&A -->
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900 whitespace-nowrap">11:30 - 12:00 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900"><?php echo $t['agenda_qa_title']; ?></span>
                                    <span class="text-slate-600"><?php echo $t['agenda_qa_desc']; ?></span>
                                </td>
                                <td class="py-4 px-6 text-slate-500 font-medium"><?php echo $t['agenda_qa_type']; ?></td>
                                <td class="py-4 px-6 font-semibold text-slate-900"><?php echo $t['agenda_qa_speaker']; ?></td>
                            </tr>
                            <!-- Sesi 8: Networking Lunch -->
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900 whitespace-nowrap">12:00 - 13:00 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Networking Lunch</span>
                                    <span class="text-slate-600"><?php echo $t['agenda_lunch_desc']; ?></span>
                                </td>
                                <td class="py-4 px-6 text-slate-500 font-medium"><?php echo $t['agenda_lunch_type']; ?></td>
                                <td class="py-4 px-6 font-semibold text-slate-900"><?php echo $t['agenda_lunch_speaker']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Audience Section -->
    <section id="audience" class="py-20 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-2xl md:text-4xl font-bold mb-4"><?php echo $t['audience_title']; ?></h2>
                <p class="text-slate-400"><?php echo $t['audience_subtitle']; ?></p>
            </div>

            <div class="flex flex-wrap justify-center gap-6">
                <div class="w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300 text-left">
                    <h4 class="font-bold text-lg mb-2 text-blue-400">Direktur / CEO Rumah Sakit</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">Fokus pada tata kelola strategis, kepatuhan regulasi RME, dan keberlangsungan finansial RS.</p>
                </div>

                <div class="w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300 text-left">
                    <h4 class="font-bold text-lg mb-2 text-blue-400">Manajer IT & Sistem Informasi RS</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">Fokus pada implementasi teknologi cloud, integrasi API SATUSEHAT, dan interoperabilitas PACS.</p>
                </div>

                <div class="w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300 text-left">
                    <h4 class="font-bold text-lg mb-2 text-blue-400">Kepala Instalasi & Dokter Radiologi</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">Fokus pada efisiensi alur kerja klinis radiologi, alur data modalitas, serta akurasi pelaporan.</p>
                </div>

                <div class="w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300 text-left">
                    <h4 class="font-bold text-lg mb-2 text-blue-400">Manajer Keuangan / Klaim BPJS</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">Fokus pada eliminasi potensi gagal klaim dan mencegah kebocoran pendapatan (revenue loss).</p>
                </div>

                <div class="w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300 text-left">
                    <h4 class="font-bold text-lg mb-2 text-blue-400">Manajer Pelayanan Medis (Yanmed)</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">Fokus pada peningkatan kualitas layanan medis dan pemenuhan standar mutu dokumentasi klinis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Banner -->
    <section class="bg-huawei-muted text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-4"><?php echo $t['cta_bottom_title']; ?></h2>
            <p class="text-white/80 max-w-2xl mx-auto mb-8 text-sm md:text-base"><?php echo $t['cta_bottom_subtitle']; ?></p>
            <a href="https://forms.cloud.microsoft/r/us6YRhnQDq" target="_blank" rel="noopener noreferrer" class="inline-block bg-red-700 hover:bg-red-800 text-white font-bold px-8 py-3 rounded-md transition-all duration-300 text-sm uppercase tracking-wider transform hover:scale-105">
                <?php echo $t['cta_bottom_btn']; ?>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-huawei-dark text-slate-400 py-12 border-t border-slate-800 text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; <?php echo date('Y'); ?> All Data Cloud PACS Launching (Supported by Huawei Cloud). All rights reserved.</p>
        </div>
    </footer>

</body>

</html>