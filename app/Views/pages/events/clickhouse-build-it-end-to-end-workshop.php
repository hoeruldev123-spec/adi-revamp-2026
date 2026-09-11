<?php
$session = \Config\Services::session();

// Handle Language Switching
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'] === 'id' ? 'id' : 'en';
    $_SESSION['lang'] = $lang;
} else {
    $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
}

// Translations Dictionary
$t = [
    'id' => [
        'title' => 'Hands-On Build It, End-to-End Workshop | All Data International & ClickHouse',
        'badge' => 'Exclusive Hands-On Workshop',
        'hero_title' => 'Build It, End-to-End Workshop',
        'hero_desc' => 'Dalam satu sesi 3 jam, bawa aplikasi analitik riil menjadi live di <span class="text-white font-semibold">ClickHouse Cloud</span> — hands-on, modul demi modul, bersama AI coding agent working alongside you.',
        'date_label' => 'Tanggal',
        'date_val' => '8 Oktober 2026',
        'time_label' => 'Waktu',
        'time_val' => '09:00 WIB - 13:00 WIB',
        'loc_label' => 'Lokasi',
        'loc_val' => 'AWS Office',
        'loc_detail' => 'Sinarmas MSIG Tower, Lt. 16, Jl. Jend. Sudirman No.Kav 21, Jakarta Selatan',
        'cta_btn' => 'Daftar Sekarang',
        'speakers_title' => 'Pemateri Workshop',
        'speaker1_role' => 'Solution Architect – All Data International',
        'speaker2_name' => 'To Be Confirmed',
        'speaker2_role' => 'Guest Speaker',
        'speakers_desc' => 'Para pembicara akan mendampingi Anda secara langsung melintasi alur arsitektur end-to-end ClickHouse Cloud, integrasi CDC, hingga observability berbasis AI.',
        'agenda_title' => 'Materi & Modul Workshop',
        'agenda_subtitle' => 'Setiap langkah dirancang praktis agar Anda mengalami langsung arsitektur modern dalam satu sesi.',
        'mod1_title' => 'A live ops dashboard',
        'mod1_desc' => 'Over 3.2M+ real NYC taxi rows, seeded straight from object storage — and fast enough to feel it.',
        'mod2_title' => 'A real-time CDC pipeline',
        'mod2_desc' => 'Your own managed Postgres streaming continuously into ClickHouse through a ClickPipe.',
        'mod3_title' => 'Conversational BI',
        'mod3_desc' => 'Ask your data questions in plain language with ClickHouse Agents — governed, no SQL required.',
        'mod4_title' => 'Full observability + an AI SRE',
        'mod4_desc' => 'App traces and logs flow into ClickStack / HyperDX; your agent builds a dashboard and alerts over them, then diagnoses a live incident.',
        'mod5_title' => 'Traced AI chat',
        'mod5_desc' => 'An in-app AI chat with every turn, generation, and cost traced end to end in Langfuse.',
        'mod_plus_title' => 'The whole repo',
        'mod_plus_desc' => 'Yours to keep, extend, and point at your own data after the room clears.',
        'benefit_title' => 'Participant Benefit',
        'benefit_main' => 'This one hands you a real, working NYC-taxi ride-hailing app — React front end, FastAPI back end, a Postgres source — and, module by module, you move its data and its intelligence onto <span class="text-chYellow font-semibold">ClickHouse Cloud</span>.',
        'b1_title' => 'Tidak Mulai dari Nol',
        'b1_desc' => 'You never build from scratch and you never fall behind. Every command is copy-paste and your coding agent handles the typing, so you can focus on learning each piece.',
        'b2_title' => 'Kemudahan Mengejar Ketertinggalan',
        'b2_desc' => 'Each module states exactly what you need in place — so if you get stuck, you catch up in seconds.',
        'b3_title' => 'Trial Tetap Berjalan',
        'b3_desc' => 'When the session ends, the trial keeps running, and everything you built keeps running on it.',
        'b4_title' => 'Milik Tim Anda',
        'b4_desc' => 'The repository is yours to take back to your team and demo live.',
        'footer_title' => 'Siap Membangun Aplikasi Analitik Masa Depan?',
        'footer_subtitle' => 'Tempat terbatas untuk menjaga kualitas bimbingan hands-on.',
        'copyright' => '&copy; 2026 PT All Data International. Official International Partner of ClickHouse.'
    ],
    'en' => [
        'title' => 'Hands-On Build It, End-to-End Workshop | All Data International & ClickHouse',
        'badge' => 'Exclusive Hands-On Workshop',
        'hero_title' => 'Build It, End-to-End Workshop',
        'hero_desc' => 'In one three-hour sitting, you take a real analytics app live on <span class="text-white font-semibold">ClickHouse Cloud</span> — hands-on, module by module, with your AI coding agent working alongside you.',
        'date_label' => 'Date',
        'date_val' => 'October 8, 2026',
        'time_label' => 'Time',
        'time_val' => '09:00 AM - 01:00 PM WIB',
        'loc_label' => 'Location',
        'loc_val' => 'AWS Office',
        'loc_detail' => 'Sinarmas MSIG Tower 16th Floor, Jl. Jend. Sudirman No.Kav 21, South Jakarta',
        'cta_btn' => 'Register Now',
        'speakers_title' => 'Workshop Speakers',
        'speaker1_role' => 'Solution Architect – All Data International',
        'speaker2_name' => 'To Be Confirmed',
        'speaker2_role' => 'Guest Speaker',
        'speakers_desc' => 'Our speakers will guide you directly through the end-to-end ClickHouse Cloud architecture pipeline, CDC integration, and AI-driven observability.',
        'agenda_title' => 'Workshop Modules & Agenda',
        'agenda_subtitle' => 'Every step is designed hands-on for you to experience modern data architecture in a single session.',
        'mod1_title' => 'A live ops dashboard',
        'mod1_desc' => 'Over 3.2M+ real NYC taxi rows, seeded straight from object storage — and fast enough to feel it.',
        'mod2_title' => 'A real-time CDC pipeline',
        'mod2_desc' => 'Your own managed Postgres streaming continuously into ClickHouse through a ClickPipe.',
        'mod3_title' => 'Conversational BI',
        'mod3_desc' => 'Ask your data questions in plain language with ClickHouse Agents — governed, no SQL required.',
        'mod4_title' => 'Full observability + an AI SRE',
        'mod4_desc' => 'App traces and logs flow into ClickStack / HyperDX; your agent builds a dashboard and alerts over them, then diagnoses a live incident.',
        'mod5_title' => 'Traced AI chat',
        'mod5_desc' => 'An in-app AI chat with every turn, generation, and cost traced end to end in Langfuse.',
        'mod_plus_title' => 'The whole repo',
        'mod_plus_desc' => 'Yours to keep, extend, and point at your own data after the room clears.',
        'benefit_title' => 'Participant Benefit',
        'benefit_main' => 'This one hands you a real, working NYC-taxi ride-hailing app — React front end, FastAPI back end, a Postgres source — and, module by module, you move its data and its intelligence onto <span class="text-chYellow font-semibold">ClickHouse Cloud</span>.',
        'b1_title' => 'Never Build From Scratch',
        'b1_desc' => 'You never build from scratch and you never fall behind. Every command is copy-paste and your coding agent handles the typing, so you can focus on learning each piece.',
        'b2_title' => 'Catch Up in Seconds',
        'b2_desc' => 'Each module states exactly what you need in place — so if you get stuck, you catch up in seconds.',
        'b3_title' => 'Trial Keeps Running',
        'b3_desc' => 'When the session ends, the trial keeps running, and everything you built keeps running on it.',
        'b4_title' => 'Yours to Keep',
        'b4_desc' => 'The repository is yours to take back to your team and demo live.',
        'footer_title' => 'Ready to Build Next-Gen Analytics Apps?',
        'footer_subtitle' => 'Seats are limited to ensure high-quality hands-on mentoring.',
        'copyright' => '&copy; 2026 PT All Data International. Official International Partner of ClickHouse.'
    ]
];

$lang_data = $t[$lang];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang_data['title']; ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        chYellow: '#FAFF00',
                        chYellowHover: '#E6EB00',
                        chDarkBg: '#0D0D0D',
                        chCardBg: '#161616',
                        chBorder: '#2A2A2A',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #0D0D0D;
            color: #F3F4F6;
        }

        .glow-effect {
            box-shadow: 0 0 50px -10px rgba(250, 255, 0, 0.15);
        }

        .gradient-text {
            background: linear-gradient(135deg, #FFFFFF 0%, #A1A1AA 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="antialiased selection:bg-chYellow selection:text-black">

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 backdrop-blur-md bg-chDarkBg/80 border-b border-chBorder">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Logos Container -->
            <div class="flex items-center space-x-3 sm:space-x-6">
                <!-- All Data Logo -->
                <img src="https://alldataint.com/assets/images/events/All_Data_Logo-putih.png" alt="All Data International Logo" class="h-7 sm:h-9 object-contain">

                <span class="text-zinc-600 font-light text-xl">×</span>

                <!-- ClickHouse SVG Logo -->
                <div class="flex items-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 135 40" width="115" height="34" fill="currentColor" role="img" aria-label="ClickHouse">
                        <rect width="2.25" height="20.25" x="2.71" y="9.88" rx="0.24"></rect>
                        <rect width="2.25" height="20.25" x="7.21" y="9.88" rx="0.24"></rect>
                        <rect width="2.25" height="20.25" x="11.71" y="9.88" rx="0.24"></rect>
                        <rect width="2.25" height="20.25" x="16.21" y="9.88" rx="0.24"></rect>
                        <rect width="2.25" height="4.5" x="20.71" y="17.75" rx="0.24"></rect>
                        <path d="M40.03 15.14q-.95 0-1.7.34-.76.33-1.3.98-.52.64-.81 1.56-.27.91-.27 2.07a7 7 0 0 0 .45 2.63q.45 1.1 1.35 1.7t2.27.59q.83 0 1.58-.15.78-.15 1.57-.41v1.67q-.75.3-1.55.42-.8.15-1.84.14-1.96 0-3.27-.81a5 5 0 0 1-1.95-2.3q-.65-1.5-.65-3.5 0-1.46.4-2.66.42-1.23 1.19-2.1a5 5 0 0 1 1.9-1.36 7 7 0 0 1 2.65-.48 8.5 8.5 0 0 1 3.6.79l-.72 1.62q-.62-.3-1.37-.5a5 5 0 0 0-1.53-.24m7.6 11.36h-1.91V12.82h1.9zm4.9-9.7v9.7h-1.9v-9.7zm-.94-3.7q.44.01.76.26t.32.85q0 .57-.32.84a1.2 1.2 0 0 1-.76.25q-.45 0-.79-.25-.3-.27-.3-.84 0-.6.3-.85.33-.25.8-.25m7.84 13.58q-1.34 0-2.34-.52a3.6 3.6 0 0 1-1.56-1.62 6 6 0 0 1-.56-2.83q0-1.8.6-2.91.6-1.13 1.63-1.64a5 5 0 0 1 2.38-.54q.81 0 1.5.18.73.15 1.2.38l-.58 1.54q-.51-.2-1.08-.34-.56-.15-1.06-.14-.9 0-1.5.4-.57.37-.86 1.15-.27.76-.27 1.9 0 1.1.29 1.86.3.75.84 1.15.58.38 1.43.38a5 5 0 0 0 2.57-.65v1.66q-.53.3-1.13.45t-1.5.14m6.81-7.02q0 .38-.04.86-.01.5-.05.9h.05l.78-.97q.2-.26.4-.47l2.96-3.18h2.22l-3.9 4.16 4.15 5.54h-2.25l-3.2-4.34-1.12.94v3.4h-1.89V12.82h1.9zm18.4 6.84H82.7v-5.87h-6.13v5.87h-1.95V13.65h1.95v5.33h6.13v-5.33h1.95zm11.78-4.86q0 1.2-.32 2.14a5 5 0 0 1-.92 1.59q-.6.65-1.44.99a5.3 5.3 0 0 1-3.71 0 4.1 4.1 0 0 1-2.38-2.58 6 6 0 0 1-.34-2.16q0-1.6.54-2.72.56-1.1 1.59-1.69 1.04-.6 2.44-.6 1.34 0 2.34.6 1.03.58 1.6 1.7.6 1.11.6 2.73m-7.15 0q0 1.08.27 1.87.28.78.85 1.19t1.48.41q.9 0 1.47-.41.58-.42.85-1.19.27-.8.27-1.87 0-1.11-.29-1.87-.27-.76-.85-1.15a2.4 2.4 0 0 0-1.47-.42q-1.36 0-1.96.9-.62.9-.62 2.54m17.92-4.84v9.7h-1.53l-.27-1.28h-.09q-.3.5-.8.83-.47.33-1.05.47-.58.16-1.2.16-1.13 0-1.92-.36a2.6 2.6 0 0 1-1.18-1.15 4.5 4.5 0 0 1-.4-2.02V16.8h1.92v6.06q0 1.14.47 1.7.5.55 1.5.55t1.58-.4q.59-.39.81-1.14.25-.78.25-1.86V16.8zm9.43 6.96q0 .96-.47 1.6a3 3 0 0 1-1.35 1q-.88.32-2.12.32-1.03 0-1.77-.16-.71-.15-1.33-.43v-1.7q.65.31 1.5.56a6 6 0 0 0 1.65.23q1.08 0 1.55-.34.5-.34.49-.92 0-.31-.18-.57a2 2 0 0 0-.69-.54q-.48-.3-1.44-.65a15 15 0 0 1-1.56-.74 3 3 0 0 1-1-.88q-.34-.53-.34-1.33 0-1.26 1.01-1.93a5 5 0 0 1 2.7-.68 7 7 0 0 1 3.19.68l-.63 1.46a7 7 0 0 0-1.75-.56 4 4 0 0 0-.9-.09q-.86 0-1.31.27a.8.8 0 0 0-.45.76q0 .34.2.6.21.24.73.5.53.25 1.43.6t1.53.71q.64.36.97.88.34.53.34 1.33m6.1-7.14q1.27 0 2.19.54.92.52 1.4 1.51.5.99.5 2.34v1.04h-6.51q.03 1.5.77 2.29.75.8 2.11.8a8 8 0 0 0 1.66-.17q.74-.19 1.5-.52v1.58a7 7 0 0 1-3.23.65q-1.41 0-2.49-.56a4 4 0 0 1-1.69-1.65q-.6-1.12-.6-2.74 0-1.65.55-2.77a4.1 4.1 0 0 1 3.83-2.34m0 1.47q-1.04 0-1.66.67-.62.66-.72 1.89h4.57q0-.76-.24-1.33-.23-.59-.72-.9a2.2 2.2 0 0 0-1.24-.33"></path>
                    </svg>
                </div>
            </div>

            <!-- Language Switcher & CTA -->
            <div class="flex items-center space-x-3">
                <!-- Language Switcher -->
                <div class="bg-chCardBg border border-chBorder rounded-lg p-1 flex items-center space-x-1">
                    <a href="?lang=id" class="px-2.5 py-1 text-xs font-semibold rounded <?php echo $lang === 'id' ? 'bg-chYellow text-black' : 'text-zinc-400 hover:text-white'; ?> transition">ID</a>
                    <a href="?lang=en" class="px-2.5 py-1 text-xs font-semibold rounded <?php echo $lang === 'en' ? 'bg-chYellow text-black' : 'text-zinc-400 hover:text-white'; ?> transition">EN</a>
                </div>

                <!-- CTA Button Navbar -->
                <a href="#" class="hidden sm:inline-flex items-center justify-center bg-chYellow hover:bg-chYellowHover text-black font-bold px-4 py-2 rounded-lg text-sm transition duration-200">
                    <?php echo $lang_data['cta_btn']; ?>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative pt-12 pb-20 md:pt-20 md:pb-28 overflow-hidden">
        <!-- Radial Background Light -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-chYellow/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <!-- Badge -->
            <div class="inline-flex items-center space-x-2 bg-chCardBg border border-chBorder px-4 py-1.5 rounded-full mb-6">
                <span class="w-2.5 h-2.5 rounded-full bg-chYellow animate-pulse"></span>
                <span class="text-xs font-semibold tracking-wide uppercase text-zinc-300"><?php echo $lang_data['badge']; ?></span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight mb-6 leading-tight gradient-text">
                <?php echo $lang_data['hero_title']; ?>
            </h1>

            <p class="text-lg sm:text-xl text-zinc-400 max-w-3xl mx-auto mb-10 leading-relaxed">
                <?php echo $lang_data['hero_desc']; ?>
            </p>

            <!-- Metadata Box (Date, Time, Location) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-4xl mx-auto mb-10 text-left">
                <div class="bg-chCardBg border border-chBorder p-4 rounded-xl flex items-start space-x-3">
                    <i data-lucide="calendar" class="w-6 h-6 text-chYellow shrink-0 mt-0.5"></i>
                    <div>
                        <div class="text-xs text-zinc-400 font-medium uppercase"><?php echo $lang_data['date_label']; ?></div>
                        <div class="text-white font-semibold"><?php echo $lang_data['date_val']; ?></div>
                    </div>
                </div>

                <div class="bg-chCardBg border border-chBorder p-4 rounded-xl flex items-start space-x-3">
                    <i data-lucide="clock" class="w-6 h-6 text-chYellow shrink-0 mt-0.5"></i>
                    <div>
                        <div class="text-xs text-zinc-400 font-medium uppercase"><?php echo $lang_data['time_label']; ?></div>
                        <div class="text-white font-semibold"><?php echo $lang_data['time_val']; ?></div>
                    </div>
                </div>

                <div class="bg-chCardBg border border-chBorder p-4 rounded-xl flex items-start space-x-3">
                    <i data-lucide="map-pin" class="w-6 h-6 text-chYellow shrink-0 mt-0.5"></i>
                    <div>
                        <div class="text-xs text-zinc-400 font-medium uppercase"><?php echo $lang_data['loc_label']; ?></div>
                        <div class="text-white font-semibold"><?php echo $lang_data['loc_val']; ?></div>
                        <div class="text-xs text-zinc-400 mt-1"><?php echo $lang_data['loc_detail']; ?></div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#" class="w-full sm:w-auto inline-flex items-center justify-center bg-chYellow hover:bg-chYellowHover text-black font-extrabold px-8 py-4 rounded-xl text-lg transition duration-200 glow-effect">
                    <?php echo $lang_data['cta_btn']; ?> <i data-lucide="arrow-right" class="w-5 h-5 ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Speakers Section -->
    <section class="py-16 bg-chCardBg/40 border-y border-chBorder">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-white text-center mb-10"><?php echo $lang_data['speakers_title']; ?></h2>

            <!-- Cards Grid (2 Speakers) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                <!-- Speaker 1 -->
                <div class="bg-chCardBg border border-chBorder rounded-2xl p-6 flex items-center space-x-4">
                    <div class="w-16 h-16 rounded-full bg-zinc-800 border-2 border-chYellow flex items-center justify-center shrink-0">
                        <i data-lucide="user" class="w-8 h-8 text-zinc-300"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Rizky Ramadhan</h3>
                        <p class="text-zinc-400 text-xs mt-1"><?php echo $lang_data['speaker1_role']; ?></p>
                    </div>
                </div>

                <!-- Speaker 2 (To Be Confirmed) -->
                <div class="bg-chCardBg border border-chBorder/60 border-dashed rounded-2xl p-6 flex items-center space-x-4">
                    <div class="w-16 h-16 rounded-full bg-zinc-900 border-2 border-zinc-700 flex items-center justify-center shrink-0">
                        <i data-lucide="user-plus" class="w-8 h-8 text-zinc-500"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-zinc-400"><?php echo $lang_data['speaker2_name']; ?></h3>
                        <p class="text-zinc-500 text-xs mt-1"><?php echo $lang_data['speaker2_role']; ?></p>
                    </div>
                </div>
            </div>

            <!-- Description Separated Below Cards -->
            <div class="text-center bg-chCardBg/60 border border-chBorder p-6 rounded-xl">
                <p class="text-zinc-300 text-sm sm:text-base leading-relaxed">
                    <?php echo $lang_data['speakers_desc']; ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Topics / Agenda Section -->
    <section class="py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4"><?php echo $lang_data['agenda_title']; ?></h2>
                <p class="text-zinc-400 max-w-2xl mx-auto"><?php echo $lang_data['agenda_subtitle']; ?></p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Module 1 -->
                <div class="bg-chCardBg border border-chBorder p-6 rounded-xl hover:border-zinc-700 transition duration-200">
                    <div class="text-chYellow font-mono font-bold text-lg mb-2">01</div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo $lang_data['mod1_title']; ?></h3>
                    <p class="text-zinc-400 text-sm leading-relaxed"><?php echo $lang_data['mod1_desc']; ?></p>
                </div>

                <!-- Module 2 -->
                <div class="bg-chCardBg border border-chBorder p-6 rounded-xl hover:border-zinc-700 transition duration-200">
                    <div class="text-chYellow font-mono font-bold text-lg mb-2">02</div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo $lang_data['mod2_title']; ?></h3>
                    <p class="text-zinc-400 text-sm leading-relaxed"><?php echo $lang_data['mod2_desc']; ?></p>
                </div>

                <!-- Module 3 -->
                <div class="bg-chCardBg border border-chBorder p-6 rounded-xl hover:border-zinc-700 transition duration-200">
                    <div class="text-chYellow font-mono font-bold text-lg mb-2">03</div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo $lang_data['mod3_title']; ?></h3>
                    <p class="text-zinc-400 text-sm leading-relaxed"><?php echo $lang_data['mod3_desc']; ?></p>
                </div>

                <!-- Module 4 -->
                <div class="bg-chCardBg border border-chBorder p-6 rounded-xl hover:border-zinc-700 transition duration-200">
                    <div class="text-chYellow font-mono font-bold text-lg mb-2">04</div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo $lang_data['mod4_title']; ?></h3>
                    <p class="text-zinc-400 text-sm leading-relaxed"><?php echo $lang_data['mod4_desc']; ?></p>
                </div>

                <!-- Module 5 -->
                <div class="bg-chCardBg border border-chBorder p-6 rounded-xl hover:border-zinc-700 transition duration-200">
                    <div class="text-chYellow font-mono font-bold text-lg mb-2">05</div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo $lang_data['mod5_title']; ?></h3>
                    <p class="text-zinc-400 text-sm leading-relaxed"><?php echo $lang_data['mod5_desc']; ?></p>
                </div>

                <!-- Bonus Repo -->
                <div class="bg-gradient-to-br from-chCardBg to-zinc-900 border border-chYellow/30 p-6 rounded-xl">
                    <div class="text-chYellow font-mono font-bold text-lg mb-2">+ BONUS</div>
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo $lang_data['mod_plus_title']; ?></h3>
                    <p class="text-zinc-400 text-sm leading-relaxed"><?php echo $lang_data['mod_plus_desc']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Participant Benefits -->
    <section class="py-16 bg-chCardBg/30 border-t border-chBorder">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-chCardBg border border-chBorder rounded-2xl p-8 sm:p-12 relative overflow-hidden">
                <div class="relative z-10">
                    <h2 class="text-3xl font-bold text-white mb-6"><?php echo $lang_data['benefit_title']; ?></h2>

                    <p class="text-zinc-300 text-lg mb-6 leading-relaxed">
                        <?php echo $lang_data['benefit_main']; ?>
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                        <div class="flex items-start space-x-4">
                            <div class="bg-chYellow/10 p-2 rounded-lg text-chYellow shrink-0">
                                <i data-lucide="zap" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1"><?php echo $lang_data['b1_title']; ?></h4>
                                <p class="text-zinc-400 text-sm"><?php echo $lang_data['b1_desc']; ?></p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-chYellow/10 p-2 rounded-lg text-chYellow shrink-0">
                                <i data-lucide="refresh-cw" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1"><?php echo $lang_data['b2_title']; ?></h4>
                                <p class="text-zinc-400 text-sm"><?php echo $lang_data['b2_desc']; ?></p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-chYellow/10 p-2 rounded-lg text-chYellow shrink-0">
                                <i data-lucide="cloud" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1"><?php echo $lang_data['b3_title']; ?></h4>
                                <p class="text-zinc-400 text-sm"><?php echo $lang_data['b3_desc']; ?></p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-chYellow/10 p-2 rounded-lg text-chYellow shrink-0">
                                <i data-lucide="code-2" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1"><?php echo $lang_data['b4_title']; ?></h4>
                                <p class="text-zinc-400 text-sm"><?php echo $lang_data['b4_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA & Footer -->
    <footer class="py-12 border-t border-chBorder text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-white mb-4"><?php echo $lang_data['footer_title']; ?></h2>
            <p class="text-zinc-400 mb-8"><?php echo $lang_data['footer_subtitle']; ?></p>
            <a href="#" class="inline-flex items-center justify-center bg-chYellow hover:bg-chYellowHover text-black font-extrabold px-8 py-4 rounded-xl text-lg transition duration-200">
                <?php echo $lang_data['cta_btn']; ?>
            </a>

            <div class="mt-12 text-zinc-600 text-sm">
                <?php echo $lang_data['copyright']; ?>
            </div>
        </div>
    </footer>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
</body>

</html>