<?php
// 1. Logika Pemilihan Bahasa
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'id';

// 2. Kamus Penerjemahan (Translation Dictionary)
$translations = [
    'id' => [
        'title' => 'All Data Cloud PACS Launching - Digital Radiology Transformation',
        'badge' => 'All Data Cloud PACS Launching',
        'hero_title' => 'Digital Radiology Transformation & Navigating SATUSEHAT EMR for BPJS Claim',
        'hero_subtitle' => 'Integrasi Rekam Medis Elektronik (RME) dengan platform SATUSEHAT menjadi standar mutlak bagi faskes di Indonesia. All Data bersama Huawei Cloud mempersembahkan Cloud Radiology untuk memodernisasi alur kerja radiologi dan mengamankan pendapatan rumah sakit Anda dari potensi gagal klaim.',
        'date_time_label' => 'Waktu & Tanggal',
        'date_time_value' => 'Kamis, 8 Oktober 2026 | 09.00 - 13.00 WIB',
        'location_label' => 'Slogan Utama',
        'location_value' => 'Secure Your Revenue, Transform Your Radiology Workflow.',
        'btn_register' => 'Daftar Sekarang',
        'btn_agenda' => 'Lihat Agenda',
        'stat_1_val' => '100%',
        'stat_1_lbl' => 'Kepatuhan Standar DICOM & RME',
        'stat_2_val' => '0%',
        'stat_2_lbl' => 'Potensi Gagal Klaim BPJS',
        'stat_3_val' => 'Cloud',
        'stat_3_lbl' => 'Infrastruktur Radiologi Tangguh',

        'nav_topics' => 'Topik',
        'nav_agenda' => 'Agenda',
        'nav_audience' => 'Target Peserta',
        'form_title' => 'Formulir Registrasi Event',
        'form_subtitle' => 'Registrasi eksklusif untuk jajaran manajemen dan tenaga medis Rumah Sakit.',
        'form_name' => 'Nama Lengkap *',
        'form_email' => 'Email Instansi / Kerja *',
        'form_hospital' => 'Nama Rumah Sakit / Faskes *',
        'form_role' => 'Jabatan / Unit Kerja',
        'topics_title' => 'Topik Yang Akan Dibahas',
        'topics_subtitle' => 'Mengupas tuntas modernisasi alur kerja radiologi dan interoperabilitas RME untuk mencegah potensi revenue loss.',
        'topic_1_title' => 'The Future of Radiology Infrastructure',
        'topic_1_desc' => 'Membangun ekosistem radiologi yang aman, cepat, dan scalable menggunakan teknologi Huawei Cloud.',
        'topic_2_title' => 'SATUSEHAT & BPJS Claim Readiness',
        'topic_2_desc' => 'Membedah potensi revenue loss pada klaim radiologi BPJS dan bagaimana menghindarinya melalui dokumentasi digital yang tepat.',
        'topic_3_title' => 'Seamless Integration & Live Demo',
        'topic_3_desc' => 'Cara All Data Cloud PACS menjembatani operasional radiologi klinis dengan RME Kemenkes, dilengkapi Live Demo alur kerja dari modalitas hingga laporan terintegrasi.',
        'agenda_title' => 'Agenda Acara',
        'agenda_subtitle' => 'Kamis, 8 Oktober 2026',
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
        'hero_subtitle' => 'Electronic Medical Record (EMR) integration with SATUSEHAT is essential for Indonesian healthcare facilities. All Data and Huawei Cloud present Cloud Radiology to modernize workflows and protect hospital revenue from failed claims.',
        'date_time_label' => 'Date & Time',
        'date_time_value' => 'Thursday, October 8, 2026 | 09.00 - 13.00 WIB',
        'location_label' => 'Main Slogan',
        'location_value' => 'Secure Your Revenue, Transform Your Radiology Workflow.',
        'btn_register' => 'Register Now',
        'btn_agenda' => 'View Agenda',
        'stat_1_val' => '100%',
        'stat_1_lbl' => 'DICOM & EMR Standard Compliance',
        'stat_2_val' => '0%',
        'stat_2_lbl' => 'BPJS Claim Failure Risk',
        'stat_3_val' => 'Cloud',
        'stat_3_lbl' => 'Scalable Radiology Infrastructure',

        'nav_topics' => 'Key Topics',
        'nav_agenda' => 'Agenda',
        'nav_audience' => 'Target Audience',
        'form_title' => 'Event Registration Form',
        'form_subtitle' => 'Exclusive registration for hospital executives and medical professionals.',
        'form_name' => 'Full Name *',
        'form_email' => 'Work Email *',
        'form_hospital' => 'Hospital / Facility Name *',
        'form_role' => 'Job Title / Unit',
        'topics_title' => 'Topics To Be Discussed',
        'topics_subtitle' => 'In-depth breakdown of radiology workflow modernization and EMR interoperability to prevent revenue loss.',
        'topic_1_title' => 'The Future of Radiology Infrastructure',
        'topic_1_desc' => 'Building a secure, fast, and scalable radiology ecosystem using Huawei Cloud technology.',
        'topic_2_title' => 'SATUSEHAT & BPJS Claim Readiness',
        'topic_2_desc' => 'Analyzing potential revenue loss in BPJS radiology claims and how to prevent it through proper digital documentation.',
        'topic_3_title' => 'Seamless Integration & Live Demo',
        'topic_3_desc' => 'How All Data Cloud PACS bridges clinical radiology operations with MoH EMR requirements, featuring a Live Demo from modality to integrated reporting.',
        'agenda_title' => 'Event Agenda',
        'agenda_subtitle' => 'Thursday, October 8, 2026',
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

// 3. Form Handling (Dummy)
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
                            /* Untuk teks utama & elemen kontras tinggi */
                            light: '#f8fafc',
                            /* Warna latar belakang utama (Slate-50) */
                            card: '#ffffff',
                            /* Latar belakang kartu/form (Putih Bersih) */
                            cardBorder: '#e2e8f0',
                            /* Border kartu yang halus (Slate-200) */
                            blue: '#2563eb',
                            /* Akses biru modern (Blue-600) */
                            accent: '#3b82f6',
                            /* Akses biru terang untuk highlight */
                            muted: '#64748b' /* Warna teks sekunder (Slate-500) */
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Smooth Scrolling Native Backup */
        html {
            scroll-behavior: smooth;
        }

        /* Hexagon Presisi 1:1 (Sama Sisi) */
        .hexagon-shape {
            clip-path: polygon(50% 0%, 93.3% 25%, 93.3% 75%, 50% 100%, 6.7% 75%, 6.7% 25%);
        }

        /* Keyframes Animasi Floating Smooth Naik-Turun */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-14px);
                /* Jarak naik-turun */
            }
        }

        /* Class Animasi dengan Durasi Variatif */
        .animate-float-1 {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-2 {
            animation: float 5s ease-in-out 1s infinite;
            /* Delay 1 detik */
        }

        .animate-float-3 {
            animation: float 4.5s ease-in-out 0.5s infinite;
            /* Delay 0.5 detik */
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 bg-huawei-dark/95 backdrop-blur border-b border-slate-800 text-white transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <a class="navbar-brand flex items-center" href="<?= base_url() ?>">
                    <!-- h-7 (28px) di layar HP, naik menjadi h-9 (36px) di layar laptop/desktop -->
                    <img src="<?= base_url('assets/images/logo_coloured.png'); ?>" alt="All Data" class="h-7 sm:h-9 w-auto object-contain">
                </a>
                <span class="font-semibold text-lg tracking-wide hidden sm:inline">Cloud PACS</span>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#topics" class="hover:text-huawei-red transition-colors duration-200"><?php echo $t['nav_topics']; ?></a>
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
                <a href="#register" class="bg-huawei-red hover:bg-red-700 text-white px-4 py-2 rounded text-sm font-semibold transition-all duration-300 hover:shadow-lg hover:shadow-red-600/30">
                    <?php echo $t['btn_register']; ?>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section Tema Terang -->
    <section id="about" class="bg-gradient-to-b from-slate-50 via-white to-slate-100 text-slate-800 py-16 md:py-24 relative overflow-hidden border-b border-slate-200">
        <!-- Pattern Grid Terang -->
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#2563eb_1px,transparent_1px)] [background-size:16px_16px]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-7 space-y-6">
                    <!-- Badge -->
                    <span class="inline-block bg-blue-50 text-blue-700 border border-blue-200 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                        <?php echo $t['badge']; ?>
                    </span>

                    <!-- Judul Utama -->
                    <h1 class="text-3xl md:text-4xl font-extrabold leading-tight tracking-tight text-slate-900">
                        <?php echo $t['hero_title']; ?>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-slate-600 text-base md:text-lg leading-relaxed">
                        <?php echo $t['hero_subtitle']; ?>
                    </p>

                    <!-- Info Waktu & Slogan -->
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

                    <!-- Tombol CTA -->
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="#agenda" class="bg-huawei-red hover:bg-red-700 text-white px-6 py-3 rounded-md font-semibold transition-all duration-300 transform hover:-translate-y-0.5 shadow-md shadow-red-500/20">
                            <?php echo $t['btn_register']; ?>
                        </a>
                        <a href="#agenda" class="bg-white hover:bg-slate-50 text-slate-800 border border-slate-300 px-6 py-3 rounded-md font-semibold transition-all duration-300 transform hover:-translate-y-0.5 shadow-sm">
                            <?php echo $t['btn_agenda']; ?>
                        </a>
                    </div>
                </div>

                <!-- 3 Hexagon Image Frames (Tema Terang) -->
                <div class="lg:col-span-5 relative flex justify-center items-center py-6">
                    <div class="grid grid-cols-2 gap-3 w-full max-w-md relative">

                        <!-- Frame Hexagon 1 -->
                        <div class="animate-float-1">
                            <div class="w-full aspect-square hexagon-shape overflow-hidden bg-slate-200 shadow-xl transform hover:scale-105 transition-transform duration-300">
                                <img src="<?= base_url('assets/images/events/digital-radiology-transformation-hero-1.webp') ?>"
                                    alt="Digital Radiology Transformation 1"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Frame Hexagon 2 -->
                        <div class="translate-y-8 animate-float-2">
                            <div class="w-full aspect-square hexagon-shape overflow-hidden bg-slate-200 shadow-xl transform hover:scale-105 transition-transform duration-300">
                                <img src="<?= base_url('assets/images/events/digital-radiology-transformation-hero-2.webp') ?>"
                                    alt="Digital Radiology Transformation 2"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Frame Hexagon 3 -->
                        <div class="col-span-2 justify-self-center w-1/2 -mt-6 animate-float-3">
                            <div class="w-full aspect-square hexagon-shape overflow-hidden bg-slate-200 shadow-xl transform hover:scale-105 transition-transform duration-300">
                                <img src="<?= base_url('assets/images/events/digital-radiology-transformation-hero-3.webp') ?>"
                                    alt="Digital Radiology Transformation 3"
                                    class="w-full h-full object-cover">
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
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center font-bold text-xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3"><?php echo $t['topic_1_title']; ?></h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        <?php echo $t['topic_1_desc']; ?>
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-12 h-12 bg-red-100 text-huawei-red rounded-lg flex items-center justify-center font-bold text-xl mb-6 group-hover:bg-huawei-red group-hover:text-white transition-colors duration-300">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3"><?php echo $t['topic_2_title']; ?></h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        <?php echo $t['topic_2_desc']; ?>
                    </p>
                </div>

                <!-- Card 3 -->
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

    <!-- Agenda Table Section -->
    <section id="agenda" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-2xl md:text-4xl font-bold text-slate-900 mb-4"><?php echo $t['agenda_title']; ?></h2>
                <p class="text-slate-600 font-semibold"><?php echo $t['agenda_subtitle']; ?></p>
            </div>

            <div class="bg-slate-50 rounded-xl border border-slate-200 overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-700">
                        <thead class="bg-slate-900 text-white uppercase text-xs">
                            <tr>
                                <th class="py-4 px-6 w-1/4"><?php echo $t['th_time']; ?></th>
                                <th class="py-4 px-6 w-1/2"><?php echo $t['th_session']; ?></th>
                                <th class="py-4 px-6 w-1/4"><?php echo $t['th_type']; ?></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200">
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900">09:00 - 10:00 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Huawei Solution Showcase</span>
                                    Empowering Healthcare IT: Infrastruktur Cloud Tangguh untuk Ekosistem Radiologi Digital
                                </td>
                                <td class="py-4 px-6 text-slate-500">Solution Showcase</td>
                            </tr>
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900">10:00 - 12:00 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Executive Sharing Session</span>
                                    Navigating SATUSEHAT EMR & BPJS Claims: Strategi Mencegah Potensi "Revenue Loss" pada Layanan Radiologi
                                </td>
                                <td class="py-4 px-6 text-slate-500">Sharing Session</td>
                            </tr>
                            <tr class="hover:bg-slate-100/80 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900">12:00 - 13:00 WIB</td>
                                <td class="py-4 px-6">
                                    <span class="font-bold block text-slate-900">Networking Lunch</span>
                                    Diskusi Interaktif, Konsultasi Kebutuhan RS, & Ramah Tamah
                                </td>
                                <td class="py-4 px-6 text-slate-500">Networking & Lunch</td>
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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300">
                    <h4 class="font-bold text-lg mb-2 text-blue-400">Direktur / CEO Rumah Sakit</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">Fokus pada tata kelola strategis, kepatuhan regulasi RME, dan keberlangsungan finansial RS.</p>
                </div>
                <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300">
                    <h4 class="font-bold text-lg mb-2 text-blue-400">Manajer IT & Sistem Informasi RS</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">Fokus pada implementasi teknologi cloud, integrasi API SATUSEHAT, dan interoperabilitas PACS.</p>
                </div>
                <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300">
                    <h4 class="font-bold text-lg mb-2 text-blue-400">Kepala Instalasi & Dokter Radiologi</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">Fokus pada efisiensi alur kerja klinis radiologi, alur data modalitas, serta akurasi pelaporan.</p>
                </div>
                <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300">
                    <h4 class="font-bold text-lg mb-2 text-blue-400">Manajer Keuangan / Klaim BPJS</h4>
                    <p class="text-xs text-slate-300 leading-relaxed">Fokus pada eliminasi potensi gagal klaim dan mencegah kebocoran pendapatan (revenue loss).</p>
                </div>
                <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 transition-all duration-300">
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
            <a href="#register" class="inline-block bg-red-700 hover:bg-red-800 text-white font-bold px-8 py-3 rounded-md transition-all duration-300 text-sm uppercase tracking-wider transform hover:scale-105">
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