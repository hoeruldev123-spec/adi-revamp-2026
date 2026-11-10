<?php
/**
 * CI4 View: The Agentic SDLC Workshop
 *
 * Simpan file ini di:
 * app/Views/events/agentic_sdlc_workshop.php
 *
 * Data opsional yang dapat dikirim dari Controller:
 * - $registrationUrl : URL formulir pendaftaran
 *
 * Contoh:
 * return view('events/agentic_sdlc_workshop', [
 *     'registrationUrl' => 'https://forms.office.com/...',
 * ]);
 */

$registrationUrl = $registrationUrl ?? '#';

$rundown = [
    ['12:00 – 13:00', '60 min', 'Open Registration, Lunch & Networking', '', 'All Data International', 'normal'],
    ['13:00 – 13:10', '10 min', 'Opening Thesis', '“Agents are becoming primary API consumers. The SDLC was not designed for them.”', 'Pak Mario Wihardja – Postman', 'postman'],
    ['13:10 – 13:20', '10 min', 'The Context Problem', 'Why coding agents fail without API context; Postman MCP Server feeding context into Kiro.', 'All Data International', 'normal'],
    ['13:20 – 13:40', '20 min', 'Design & Develop', 'Agent Mode: intent-to-collection, mocks, tests, and documentation generated from natural language.', 'All Data International', 'normal'],
    ['13:40 – 13:55', '15 min', 'Test & Govern', 'Agent-assisted test repair; API Catalog as the governance boundary for agents.', 'All Data International', 'normal'],
    ['13:55 – 14:05', '10 min', 'The AI-SDLC on AWS Bedrock', 'Verisk pattern: five stage-specific agents on Bedrock AgentCore, human checkpoints, >90% acceptance, and 20–30% lower cost per story point.', 'All Data International', 'normal'],
    ['14:05 – 14:20', '15 min', 'Industry Breakout', 'Three parallel discussion tracks: financial services, retail, and digital native. Further details to be announced.', 'Pak Mario Wihardja – Postman', 'postman'],
    ['14:20 – 14:30', '10 min', 'Maturity Model & Close', 'Adoption path (Crawl / Walk / Run); Q&A framing.', 'All Data International', 'normal'],
    ['14:30 – 15:00', '30 min', 'Q&A: Open Discussion', '', 'All Data International', 'normal'],
    ['15:00 – 15:10', '10 min', 'Postman Product Offering', 'Introduction to Postman product offerings and bundling options.', 'Postman', 'postman'],
    ];

?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Agentic SDLC Workshop | Postman x All Data International</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon/favicon.ico') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/favicon/android-chrome-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= base_url('assets/favicon/android-chrome-512x512.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/favicon/site.webmanifest') ?>">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              // All Data International Brand Colors (Light Theme Palette)
              alldata: {
                DEFAULT: "#0056B3", // Primary Corporate Blue
                hover: "#004085", // Hover Blue
                light: "#00A3E0", // Bright Cyan / Accent
                bg: "#F8FAFC", // Light Background (Slate 50)
                card: "#FFFFFF", // Pure White Card Background
                text: "#0F172A", // Dark Text (Slate 900)
                muted: "#475569", // Subtitle / Muted Text (Slate 600)
                border: "#E2E8F0", // Border Light (Slate 200)
              },
              // Partner Event Accent Colors
              postman: "#FF6C37",
              aws: "#FF9900",
            },
          },
        },
      };
    </script>
    <style>
      html {
        scroll-behavior: smooth;
      }
      body {
        background-color: #f8fafc;
        color: #0f172a;
      }
      section {
        scroll-margin-top: 80px; /* Offset scroll agar tidak tertutup Navbar */
      }
      /* Gradient Teks khas All Data (Corporate Blue ke Cyan Accent) */
      .gradient-text {
        background: linear-gradient(
          135deg,
          #0056b3 0%,
          #00a3e0 50%,
          #ff6c37 100%
        );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      /* Gradient Tombol Utama */
      .gradient-bg {
        background: linear-gradient(135deg, #0056b3 0%, #00a3e0 100%);
      }
      .gradient-bg:hover {
        background: linear-gradient(135deg, #004085 0%, #0086b8 100%);
      }
    </style>
  </head>
  <body
    class="bg-slate-50 text-slate-900 font-sans antialiased selection:bg-alldata-light selection:text-white"
  >
    <!-- Header / Navbar -->
    <header
      class="fixed top-0 left-0 right-0 bg-white/90 backdrop-blur-md border-b border-slate-200 z-50 shadow-sm"
    >
      <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between"
      >
        <div class="flex items-center space-x-3 sm:space-x-4">
          <!-- 1. Logo All Data (Icon / Utama) -->
          <a href="https://alldataint.com" target="_blank" rel="noopener noreferrer" class="flex items-center hover:opacity-80 transition">
            <img
              src="https://alldataint.com/assets/images/logo_coloured.png"
              alt="All Data International"
              class="h-8 w-auto object-contain"
            />
          </a>

          <span class="text-slate-300 font-light text-lg">|</span>

          <!-- 2. Logo Partner ke-2 -->
          <a href="https://www.westconcomstor.com/" target="_blank" rel="noopener noreferrer" class="flex items-center hover:opacity-80 transition">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKyKjngBRAcEQwpjgKmcm8Rc6dvJiwF5IBdQY5CfsiHc2OQMshZf3YHKU&s=10"
              alt="Westcon"
              class="h-7 w-auto object-contain"
            />
          </a>

          <span class="text-slate-300 font-light text-lg">|</span>

          <!-- 3. Logo AWS -->
          <a href="https://aws.amazon.com" target="_blank" rel="noopener noreferrer" class="flex items-center hover:opacity-80 transition">
            <img
              src="https://thumb.wikimedia.org/wikipedia/commons/thumb/9/93/Amazon_Web_Services_Logo.svg/1280px-Amazon_Web_Services_Logo.svg.png?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=thumbnail"
              alt="AWS"
              class="h-5 w-auto object-contain brightness-0"
            />
          </a>

          <span class="text-slate-300 font-light text-lg">|</span>

          <!-- 4. Logo Postman -->
          <a href="https://www.postman.com" target="_blank" rel="noopener noreferrer" class="flex items-center hover:opacity-80 transition">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Postman_%28software%29.png?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original"
              alt="Postman"
              class="h-6 w-auto object-contain"
            />
          </a>
        </div>
        <a
          href="#register"
          class="gradient-bg text-white font-semibold px-5 py-2.5 rounded-lg shadow-md shadow-blue-500/10 hover:opacity-95 transition-all text-sm"
        >
          Daftar Sekarang
        </a>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-36 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
      <div class="text-center max-w-4xl mx-auto">
        <div
          class="inline-flex items-center space-x-2 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 mb-8 shadow-sm"
        >
          <span
            class="flex h-2 w-2 rounded-full bg-emerald-500 animate-pulse"
          ></span>
          <span
            class="text-xs font-semibold text-alldata uppercase tracking-wider"
            >Exclusive Workshop</span
          >
        </div>

        <h1
          class="text-4xl sm:text-6xl font-black text-slate-900 tracking-tight leading-tight mb-6"
        >
          The Agentic SDLC: <br />
          <span class="gradient-text">From API Design to Production</span>
        </h1>

        <p
          class="text-lg sm:text-xl text-slate-600 mb-8 leading-relaxed max-w-3xl mx-auto"
        >
          Pelajari bagaimana mengontrol, menguji, dan menskalakan
          <strong class="text-slate-900">AI Agents</strong> di lingkungan
          Enterprise menggunakan
          <strong class="text-slate-900">Postman & AWS Bedrock</strong>.
        </p>

        <!-- Metadata Cards -->
        <div
          class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-3xl mx-auto mb-10 text-left"
        >
          <div
            class="bg-white border border-slate-200 p-4 rounded-xl flex items-center space-x-4 shadow-sm"
          >
            <div
              class="p-3 bg-orange-50 text-postman rounded-lg border border-orange-100"
            >
              <i class="fa-regular fa-calendar-check text-xl"></i>
            </div>
            <div>
              <p class="text-xs text-slate-500 font-medium">Waktu & Tanggal</p>
              <p class="text-sm font-semibold text-slate-900">
                Rabu, 9 Desember 2026
              </p>
            </div>
          </div>

          <div
            class="bg-white border border-slate-200 p-4 rounded-xl flex items-center space-x-4 shadow-sm"
          >
            <div
              class="p-3 bg-amber-50 text-aws rounded-lg border border-amber-100"
            >
              <i class="fa-solid fa-location-dot text-xl"></i>
            </div>
            <div>
              <p class="text-xs text-slate-500 font-medium">Lokasi</p>
              <p class="text-sm font-semibold text-slate-900">
                AWS Office, Jakarta
              </p>
            </div>
          </div>
        </div>

        <div
          class="flex flex-col sm:flex-row items-center justify-center gap-4"
        >
          <a
            href="#register"
            class="w-full sm:w-auto gradient-bg text-white font-bold px-8 py-4 rounded-xl shadow-lg shadow-blue-500/20 hover:opacity-95 transition-all text-center"
          >
            Amankan Kursi Anda <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
          <a
            href="#about"
            class="w-full sm:w-auto bg-white hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold px-8 py-4 rounded-xl transition-all text-center shadow-sm"
          >
            Detail Acara
          </a>
        </div>
      </div>
    </section>

    <!-- Overview & Background -->
    <section id="about" class="py-16 bg-white border-y border-slate-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 class="text-3xl font-bold text-slate-900 mb-6">
              Mengapa Agentic SDLC Penting untuk Enterprise Anda?
            </h2>
            <p class="text-slate-600 mb-4 leading-relaxed">
              Saat ini, perangkat lunak tidak hanya menjalankan instruksi
              statis, melainkan secara aktif mendeteksi dan mengorkestrasi
              sistem lain.
              <strong class="text-slate-900">AI Agents</strong> mendapatkan
              kapabilitas utamanya melalui API: mengambil data, mengeksekusi
              tindakan, menyimpan memori, serta berinteraksi dengan pengguna
              maupun agen lain.
            </p>
            <p class="text-slate-600 leading-relaxed mb-6">
              Dalam sesi eksklusif selama 3 jam ini, peserta akan mengeksplorasi
              <strong>Postman Agent Stack</strong>, melihat bukti empiris dari
              <em>real data</em>, serta mendiskusikan 5 kontrol utama:
              <strong>Trust</strong>, <strong>Access</strong>,
              <strong>Governance</strong>, <strong>ROI</strong>, dan
              <strong>Scale</strong>.
            </p>
            <div class="grid grid-cols-2 gap-4 pt-2">
              <div class="border-l-4 border-postman pl-4">
                <h4 class="text-xl font-bold text-slate-900">
                  Postman Agent Stack
                </h4>
                <p class="text-xs text-slate-500 mt-1">
                  Mengelola & menguji API workflows berbasis Agentic Mode
                </p>
              </div>
              <div class="border-l-4 border-aws pl-4">
                <h4 class="text-xl font-bold text-slate-900">AWS Bedrock</h4>
                <p class="text-xs text-slate-500 mt-1">
                  Integrasi AgentCore untuk infrastruktur AI yang aman
                </p>
              </div>
            </div>
          </div>

          <!-- 5 Control Questions Box -->
          <div
            class="bg-slate-50 border border-slate-200 p-8 rounded-2xl relative overflow-hidden shadow-sm"
          >
            <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center">
              <i class="fa-solid fa-shield-halved text-postman mr-3"></i> 5 Key
              Control Framework
            </h3>
            <ul class="space-y-4">
              <li class="flex items-start space-x-3">
                <span
                  class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm"
                  >1</span
                >
                <div>
                  <strong class="text-slate-900">Trust:</strong> Menjamin
                  keandalan eksekusi tindakan agen AI.
                </div>
              </li>
              <li class="flex items-start space-x-3">
                <span
                  class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm"
                  >2</span
                >
                <div>
                  <strong class="text-slate-900">Access:</strong> Mengatur
                  batasan akses data dan izin API secara terperinci.
                </div>
              </li>
              <li class="flex items-start space-x-3">
                <span
                  class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm"
                  >3</span
                >
                <div>
                  <strong class="text-slate-900">Governance:</strong> Tata
                  kelola kepatuhan & standar pengujian agentic.
                </div>
              </li>
              <li class="flex items-start space-x-3">
                <span
                  class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm"
                  >4</span
                >
                <div>
                  <strong class="text-slate-900">ROI:</strong> Mengukur nilai
                  bisnis nyata dari otomatisasi LLM.
                </div>
              </li>
              <li class="flex items-start space-x-3">
                <span
                  class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm"
                  >5</span
                >
                <div>
                  <strong class="text-slate-900">Scale:</strong> Strategi
                  skalabilitas arsitektur dari prototipe ke produksi.
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Speakers Section -->
    <section id="speakers" class="py-20 bg-slate-50 border-t border-slate-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
          <span
            class="text-alldata text-xs font-semibold uppercase tracking-wider px-3 py-1 bg-blue-50 border border-blue-200 rounded-full"
          >
            Featured Experts
          </span>
          <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mt-4 mb-4">
            Pembicara & Expert Panel
          </h2>
          <p class="text-slate-600 text-sm sm:text-base">
            Dengarkan langsung dari para praktisi dan pimpinan teknologi yang
            membentuk masa depan AI Agentic SDLC.
          </p>
        </div>

        <!-- Speaker Cards Grid (2 Pembicara - Compact Portrait Style) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-xl mx-auto">
          <!-- Speaker 1: Mario Wihardja -->
          <div
            class="bg-white border border-slate-200 rounded-xl p-4 text-center relative overflow-hidden group hover:border-orange-400 transition duration-300 shadow-sm"
          >
            <!-- Portrait Photo/Avatar Area -->
            <div
              class="w-full h-48 sm:h-56 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center font-bold text-3xl text-orange-500 mb-3 overflow-hidden group-hover:scale-[1.02] transition duration-300 relative"
            >
              
              <img src="<?= base_url('assets/images/events/speakers/mario-wihardja.webp'); ?>" alt="Dr. drg. Iing Ichsan Hanafi, MARS, MH">
            </div>
            <div class="pb-1">
              <h3
                class="text-base font-bold text-slate-900 group-hover:text-orange-500 transition mb-0.5"
              >
                Mario Wihardja
              </h3>
              <span
                class="text-[10px] font-semibold text-orange-600 bg-orange-50 border border-orange-200 px-2.5 py-0.5 rounded-full inline-block"
              >
                Postman
              </span>
            </div>
          </div>

          <!-- Speaker 2: Nadhira Pratama -->
          <div
            class="bg-white border border-slate-200 rounded-xl p-4 text-center relative overflow-hidden group hover:border-alldata transition duration-300 shadow-sm"
          >
            <!-- Portrait Photo/Avatar Area -->
            <div
              class="w-full h-48 sm:h-56 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center font-bold text-3xl text-alldata mb-3 overflow-hidden group-hover:scale-[1.02] transition duration-300 relative"
            >
              <img
                src="https://alldataint.com/assets/images/events/speakers/nadhira.webp"
                alt="Nadhira Pratama"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="pb-1">
              <h3
                class="text-base font-bold text-slate-900 group-hover:text-alldata transition mb-0.5"
              >
                Nadhira Pratama
              </h3>
              <span
                class="text-[10px] font-semibold text-alldata bg-blue-50 border border-blue-200 px-2.5 py-0.5 rounded-full inline-block"
              >
                All Data International
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Key Takeaways / Objectives -->
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-slate-900">
          Apa yang Akan Anda Pelajari?
        </h2>
        <p class="text-slate-600 mt-2">
          Target capaian workshop untuk akselerasi implementasi AI di enterprise
          Anda
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div
          class="bg-white border border-slate-200 p-6 rounded-xl hover:border-alldata-light transition shadow-sm"
        >
          <div
            class="w-12 h-12 bg-blue-50 text-alldata border border-blue-100 rounded-lg flex items-center justify-center text-xl mb-4 font-bold"
          >
            01
          </div>
          <h3 class="text-lg font-bold text-slate-900 mb-2">
            API Context & Safety
          </h3>
          <p class="text-slate-600 text-sm">
            Memahami mengapa konteks API (bukan hanya model intelligence)
            menentukan keamanan eksekusi agen di sepanjang SDLC.
          </p>
        </div>

        <div
          class="bg-white border border-slate-200 p-6 rounded-xl hover:border-alldata-light transition shadow-sm"
        >
          <div
            class="w-12 h-12 bg-blue-50 text-alldata border border-blue-100 rounded-lg flex items-center justify-center text-xl mb-4 font-bold"
          >
            02
          </div>
          <h3 class="text-lg font-bold text-slate-900 mb-2">
            Mapping Agentic SDLC
          </h3>
          <p class="text-slate-600 text-sm">
            Memetakan kapabilitas agen ke setiap fase SDLC:
            <em>design, develop, test, govern, deploy,</em> dan
            <em>operate</em>.
          </p>
        </div>

        <div
          class="bg-white border border-slate-200 p-6 rounded-xl hover:border-alldata-light transition shadow-sm"
        >
          <div
            class="w-12 h-12 bg-blue-50 text-alldata border border-blue-100 rounded-lg flex items-center justify-center text-xl mb-4 font-bold"
          >
            03
          </div>
          <h3 class="text-lg font-bold text-slate-900 mb-2">
            Toolchain Evaluation
          </h3>
          <p class="text-slate-600 text-sm">
            Evaluasi penerapan Postman Agent Mode, Postman MCP Server, dan AWS
            Bedrock AgentCore dalam arsitektur eksis Anda.
          </p>
        </div>

        <div
          class="bg-white border border-slate-200 p-6 rounded-xl hover:border-alldata-light transition shadow-sm"
        >
          <div
            class="w-12 h-12 bg-blue-50 text-alldata border border-blue-100 rounded-lg flex items-center justify-center text-xl mb-4 font-bold"
          >
            04
          </div>
          <h3 class="text-lg font-bold text-slate-900 mb-2">
            Industry Risk & Value
          </h3>
          <p class="text-slate-600 text-sm">
            Identifikasi pola risiko dan value creation untuk sektor Financial
            Services, Retail, dan Digital-Native Organization.
          </p>
        </div>

        <div
          class="bg-white border border-slate-200 p-6 rounded-xl hover:border-alldata-light transition shadow-sm"
        >
          <div
            class="w-12 h-12 bg-blue-50 text-alldata border border-blue-100 rounded-lg flex items-center justify-center text-xl mb-4 font-bold"
          >
            05
          </div>
          <h3 class="text-lg font-bold text-slate-900 mb-2">
            Maturity Model & Roadmap
          </h3>
          <p class="text-slate-600 text-sm">
            Membawa pulang Maturity Model, acuan scope pilot proyek, prasyarat
            tata kelola, dan kepemilikan platform.
          </p>
        </div>

        <div
          class="bg-white border border-slate-200 p-6 rounded-xl hover:border-alldata-light transition shadow-sm"
        >
          <div
            class="w-12 h-12 bg-blue-50 text-alldata border border-blue-100 rounded-lg flex items-center justify-center text-xl mb-4 font-bold"
          >
            06
          </div>
          <h3 class="text-lg font-bold text-slate-900 mb-2">Peer Networking</h3>
          <p class="text-slate-600 text-sm">
            Berdiskusi langsung dengan 40 praktisi dan pengambil keputusan
            teknis dari 20-30 perusahaan terkemuka.
          </p>
        </div>
      </div>
    </section>

    <!-- Event Agenda & Rundown Section -->
    <section id="agenda" class="py-20 bg-white border-t border-slate-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
          <span
            class="text-alldata text-xs font-semibold uppercase tracking-wider px-3 py-1 bg-blue-50 border border-blue-200 rounded-full"
          >
            Schedule & Topics
          </span>
          <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mt-4 mb-4">
            Agenda & Rundown Acara
          </h2>
        </div>

        <!-- Rundown Table -->
        <div
          class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm mb-12"
        >
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr
                  class="bg-slate-100/80 border-b border-slate-200 text-xs font-semibold text-slate-600 uppercase tracking-wider"
                >
                  <th class="py-4 px-6">Waktu</th>
                  <th class="py-4 px-6">Durasi</th>
                  <th class="py-4 px-6">Agenda & Sesi</th>
                  <th class="py-4 px-6">PIC / Speaker</th>
                </tr>
              </thead>

              <tbody class="divide-y divide-slate-200 text-sm">
                <?php foreach ($rundown as [$time, $duration, $title, $description, $pic, $picStyle]): ?>
                  <tr class="hover:bg-slate-50 transition">
                    <td class="py-4 px-6 font-mono text-slate-700 font-medium whitespace-nowrap">
                      <?= esc($time) ?>
                    </td>
                    <td class="py-4 px-6 text-slate-500 whitespace-nowrap">
                      <?= esc($duration) ?>
                    </td>
                    <td class="py-4 px-6 text-slate-700">
                      <?php if ($description === ''): ?>
                        <strong class="text-slate-900 font-semibold"><?= esc($title) ?></strong>
                      <?php else: ?>
                        <strong class="text-slate-900 block mb-0.5"><?= esc($title) ?></strong>
                        <span class="text-slate-500 italic font-normal">
                          <?= esc($description) ?>
                        </span>
                      <?php endif; ?>
                    </td>
                    <td class="py-4 px-6 <?= $picStyle === 'postman' ? 'text-postman font-semibold' : 'text-slate-600' ?>">
                      <?= esc($pic) ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Target Audience Criteria -->
    <section class="py-16 bg-slate-100/70 border-y border-slate-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-slate-900 text-center mb-12">
          Siapa yang Wajib Hadir?
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div
            class="bg-white p-6 rounded-xl border border-slate-200 text-center shadow-sm"
          >
            <div
              class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4 text-alldata text-2xl border border-blue-100"
            >
              <i class="fa-solid fa-laptop-code"></i>
            </div>
            <h3 class="font-bold text-slate-900 text-lg mb-2">
              Engineering & Platform Team
            </h3>
            <p class="text-slate-600 text-sm">
              VP of Engineering, Software Architects, Lead Developers, &
              Platform Engineers yang mendesain pipeline CI/CD dan API.
            </p>
          </div>

          <div
            class="bg-white p-6 rounded-xl border border-slate-200 text-center shadow-sm"
          >
            <div
              class="w-16 h-16 bg-amber-50 rounded-full flex items-center justify-center mx-auto mb-4 text-aws text-2xl border border-amber-100"
            >
              <i class="fa-solid fa-user-shield"></i>
            </div>
            <h3 class="font-bold text-slate-900 text-lg mb-2">
              Security, AI & Governance
            </h3>
            <p class="text-slate-600 text-sm">
              Head of Security, AI/LLM Specialists, & Compliance Leads yang
              fokus pada keamanan data dan keandalan akses API.
            </p>
          </div>

          <div
            class="bg-white p-6 rounded-xl border border-slate-200 text-center shadow-sm"
          >
            <div
              class="w-16 h-16 bg-purple-50 rounded-full flex items-center justify-center mx-auto mb-4 text-purple-600 text-2xl border border-purple-100"
            >
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <h3 class="font-bold text-slate-900 text-lg mb-2">
              Tech Decision Makers
            </h3>
            <p class="text-slate-600 text-sm">
              CTO, CIO, & Head of Digital Transformation yang mencari acuan ROI
              dan framework skalabilitas AI Agent.
            </p>
          </div>
        </div>
        
      </div>
    </section>

    <!-- Key Participant Benefits Section -->
    <section id="benefits" class="py-16 bg-white border-t border-slate-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
          class="bg-slate-50 border border-slate-200 rounded-2xl p-8 sm:p-10 shadow-sm relative overflow-hidden"
        >
          <div class="max-w-3xl mb-8">
            <span
              class="text-alldata text-xs font-semibold uppercase tracking-wider px-3 py-1 bg-blue-50 border border-blue-200 rounded-full"
            >
              Key Takeaways
            </span>
            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-3">
              Apa yang Akan Anda Dapatkan?
            </h2>
          </div>

          <!-- Benefit Cards Grid -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Benefit 1 -->
            <div
              class="bg-white border border-slate-200 rounded-xl p-6 hover:border-alldata-light transition shadow-sm"
            >
              <div
                class="w-10 h-10 rounded-lg bg-blue-50 border border-blue-100 flex items-center justify-center text-alldata font-bold mb-4"
              >
                <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                  />
                </svg>
              </div>
              <h3 class="text-slate-900 font-bold text-base mb-2">
                Enterprise AI Control
              </h3>
              <p class="text-slate-600 text-sm leading-relaxed">
                Gambaran jelas mengenai tata kelola AI agent: hak akses (who may
                access what), pengujian workflow API real, dan kesiapan API
                untuk LLM.
              </p>
            </div>

            <!-- Benefit 2 -->
            <div
              class="bg-white border border-slate-200 rounded-xl p-6 hover:border-alldata-light transition shadow-sm"
            >
              <div
                class="w-10 h-10 rounded-lg bg-blue-50 border border-blue-100 flex items-center justify-center text-alldata font-bold mb-4"
              >
                <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
                  />
                </svg>
              </div>
              <h3 class="text-slate-900 font-bold text-base mb-2">
                Practical Framework
              </h3>
              <p class="text-slate-600 text-sm leading-relaxed">
                Membawa pulang field evidence serta 5-question control framework
                yang dapat langsung diterapkan bersama tim Anda.
              </p>
            </div>

            <!-- Benefit 3 -->
            <div
              class="bg-white border border-slate-200 rounded-xl p-6 hover:border-alldata-light transition shadow-sm"
            >
              <div
                class="w-10 h-10 rounded-lg bg-blue-50 border border-blue-100 flex items-center justify-center text-alldata font-bold mb-4"
              >
                <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                  />
                </svg>
              </div>
              <h3 class="text-slate-900 font-bold text-base mb-2">
                Peer Benchmarking
              </h3>
              <p class="text-slate-600 text-sm leading-relaxed">
                Kesempatan berdiskusi dan bertukar pandangan secara langsung
                dengan para praktisi dari 20–30 perusahaan ternama.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Location & Venue Detail -->
    <section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div
        class="bg-white border border-slate-200 rounded-2xl p-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center shadow-sm"
      >
        <div>
          <span
            class="text-alldata text-sm font-semibold uppercase tracking-wider"
            >Venue Details</span
          >
          <h2 class="text-3xl font-bold text-slate-900 mt-1 mb-4">
            AWS Office Jakarta
          </h2>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Sinarmas MSIG Tower, 16th Floor <br />
            Jl. Jenderal Sudirman No.Kav. 21, RT.12/RW.1, Kuningan, Karet,
            Setiabudi, Jakarta Selatan, Jakarta 12920
          </p>
          <div class="space-y-2 text-sm text-slate-600">
            <p>
              <i class="fa-regular fa-clock text-alldata mr-2"></i>
              <strong>Waktu Acara:</strong> Rabu, 9 Desember 2026
            </p>
            <!-- <p>
              <i class="fa-solid fa-chair text-alldata mr-2"></i>
              <strong>Kapasitas Terbatas:</strong> Maksimal 40 Peserta
            </p> -->
          </div>
        </div>
        <div
          class="h-72 sm:h-80 rounded-xl overflow-hidden border border-slate-200 bg-slate-100 relative"
        >
          <!-- Google Maps Embed -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4637.798367906033!2d106.8222426!3d-6.2105702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f77096869e7b%3A0x984349475d16370d!2sAWS%20(Amazon%20Web%20Services)%20Jakarta%20Office!5e1!3m2!1sen!2sid!4v1794291513150!5m2!1sen!2sid"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"
            class="w-full h-full"
          >
          </iframe>
        </div>
      </div>
    </section>

    <!-- Registration CTA Section -->
    <section
      id="register"
      class="py-20 bg-slate-100/70 border-t border-slate-200"
    >
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
          class="bg-white border border-slate-200 rounded-2xl p-8 sm:p-12 shadow-lg text-center relative overflow-hidden"
        >
          <div class="relative z-10">
            <span
              class="inline-block px-3 py-1 bg-blue-50 border border-blue-200 text-alldata text-xs font-semibold rounded-full uppercase tracking-wider mb-4"
            >
              Registrasi Peserta
            </span>

            <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">
              Secure Your Spot!
            </h2>

            <p
              class="text-slate-600 text-base sm:text-lg mb-8 max-w-xl mx-auto leading-relaxed"
            >
              Segera daftarkan diri Anda dan jadilah bagian dari diskusi
              eksklusif bersama para profesional dan pemimpin industri.
            </p>

            <!-- Microsoft Forms Link / Button -->
            <a
              href="<?= esc($registrationUrl, 'attr') ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="inline-flex items-center justify-center gap-3 gradient-bg text-white font-bold text-lg px-8 py-4 rounded-xl shadow-lg shadow-blue-500/20 hover:scale-[1.02] hover:opacity-95 transition transform duration-200 w-full sm:w-auto"
            >
              <span>Isi Formulir Pendaftaran</span>
              <svg
                class="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer
      class="bg-white py-8 border-t border-slate-200 text-center text-xs text-slate-500"
    >
      <div class="max-w-7xl mx-auto px-4">
        <p>© 2026 All Data International. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
