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
    ['12:00 – 13:00', 'Open Registration, Lunch & Networking', ''],
    ['13:00 – 13:10', 'Opening Thesis', '“Agents are becoming primary API consumers. The SDLC was not designed for them.”'],
    ['13:10 – 13:20', 'Kiro: Bringing Agentic AI Across the SDLC', 'How AWS’s agentic development platform uses specs, context, and enterprise controls to make agents reliable from idea to production.'],
    ['13:20 – 13:30', 'The Context Problem', 'Why coding agents fail without API context; Postman MCP Server feeding context into Kiro.'],
    ['13:30 – 13:50', 'Kiro + Postman Power', 'Generating a Postman collection directly from the codebase, running tests inline, and keeping collections in sync.'],
    ['13:50 – 14:05', 'Fold Governance into the Kiro Powers', 'Showing how Postman Catalog boundaries and Kiro steering files constrain what the agent can generate.'],
    ['14:05 – 14:20', 'The Agentic SDLC with Kiro', 'Spec-driven loop (requirements to design to tasks) plus the Postman Power feedback loop: code changes → hooks trigger test generation → collections stay in sync.'],
    ['14:20 – 14:50', 'Industry Breakout', 'Three parallel discussion tracks: financial services, retail, and digital native.'],
    ['15:00 – 15:15', 'Q&A: Open Discussion', 'Open discussion and audience Q&A.'],
    ['15:15 – 15:25', 'Product Offering: AWS & Postman', 'Introduction to AWS and Postman product offerings, including bundling and pricing options.'],
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
          <span class="gradient-text">From Specification to Production</span>
        </h1>

        <p
          class="text-lg sm:text-xl text-slate-600 mb-8 leading-relaxed max-w-3xl mx-auto"
        >
          Pelajari bagaimana mengontrol, menguji, dan menskalakan
          <strong class="text-slate-900">AI Agents</strong> di lingkungan
          Enterprise menggunakan
          <strong class="text-slate-900">Postman & Kiro Proposal</strong>.
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
          sistem lain. <strong class="text-slate-900">AI Agents</strong>
          mendapatkan kapabilitas utamanya melalui API: mengambil data,
          mengeksekusi tindakan, menyimpan memori, serta berinteraksi
          dengan pengguna maupun agen lain.
        </p>

        <p class="text-slate-600 leading-relaxed mb-4">
          Dalam sesi eksklusif ini, peserta akan mengeksplorasi
          <strong>Postman Agent Stack</strong> dan
          <strong>AWS Kiro</strong>, memahami bagaimana API context
          membantu AI Agents bekerja secara andal di setiap tahapan
          Software Development Lifecycle (SDLC), mulai dari design,
          develop, test, govern, deploy, hingga operate.
        </p>

        <p class="text-slate-600 leading-relaxed mb-6">
          Melalui pendekatan praktis dan contoh berbasis
          <em>real-world data</em>, peserta juga akan mendiskusikan
          lima kontrol utama dalam adopsi Agentic AI:
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
              Agent Mode, MCP Server, API Catalog, dan API testing
              untuk menyediakan konteks API bagi AI Agents.
            </p>
          </div>

          <div class="border-l-4 border-aws pl-4">
            <h4 class="text-xl font-bold text-slate-900">
              AWS Kiro
            </h4>
            <p class="text-xs text-slate-500 mt-1">
              Spec-driven development dan agentic coding workflows
              untuk membangun aplikasi dari ide hingga produksi
              dengan enterprise-ready controls.
            </p>
          </div>

        </div>
      </div>

      <!-- 5 Control Questions Box -->
      <div
        class="bg-slate-50 border border-slate-200 p-8 rounded-2xl relative overflow-hidden shadow-sm"
      >
        <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center">
          <i class="fa-solid fa-shield-halved text-postman mr-3"></i>
          5 Key Control Framework
        </h3>

        <ul class="space-y-4">

          <li class="flex items-start space-x-3">
            <span class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm">1</span>
            <div>
              <strong class="text-slate-900">Trust:</strong>
              Memastikan keandalan dan akurasi tindakan yang
              dijalankan oleh AI Agents.
            </div>
          </li>

          <li class="flex items-start space-x-3">
            <span class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm">2</span>
            <div>
              <strong class="text-slate-900">Access:</strong>
              Mengatur batasan akses data, autentikasi, dan
              izin API secara terperinci.
            </div>
          </li>

          <li class="flex items-start space-x-3">
            <span class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm">3</span>
            <div>
              <strong class="text-slate-900">Governance:</strong>
              Memastikan tata kelola API, standar pengembangan,
              dan kepatuhan dalam ekosistem Agentic AI.
            </div>
          </li>

          <li class="flex items-start space-x-3">
            <span class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm">4</span>
            <div>
              <strong class="text-slate-900">ROI:</strong>
              Mengukur dampak bisnis, efisiensi engineering,
              dan nilai nyata dari implementasi AI Agents.
            </div>
          </li>

          <li class="flex items-start space-x-3">
            <span class="bg-white border border-slate-200 text-postman font-bold px-2.5 py-1 rounded text-xs shadow-sm">5</span>
            <div>
              <strong class="text-slate-900">Scale:</strong>
              Menentukan strategi skalabilitas arsitektur,
              operasional, dan adopsi Agentic AI dari pilot
              hingga lingkungan enterprise.
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

    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-14">
      <span
        class="text-alldata text-xs font-bold uppercase tracking-widest px-4 py-2 bg-blue-50 border border-blue-200 rounded-full inline-block"
      >
        Meet Our Speakers
      </span>

      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 mt-5 mb-5">
        Learn from Industry Experts
      </h2>

      <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
        Meet the technology leaders and industry practitioners sharing their
        insights on how Agentic AI, AWS Kiro, and Postman are transforming
        the Software Development Lifecycle.
      </p>
    </div>

    <!-- Speakers Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 max-w-5xl mx-auto">

      <!-- Speaker 1: Mario Wihardja -->
      <div
        class="bg-white border border-slate-200 rounded-2xl p-4 sm:p-5 text-center group hover:border-orange-400 hover:shadow-lg transition-all duration-300">
        <div
          class="w-full aspect-[4/5] rounded-xl bg-slate-100 border border-slate-200 mb-4 overflow-hidden">
          <img
            src="<?= base_url('assets/images/events/speakers/mario-wihardja.webp'); ?>"
            alt="Mario Wihardja"
            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
          />
        </div>

        <div class="min-h-[90px] flex flex-col items-center justify-start">
          <h3 class="text-base sm:text-lg font-bold text-slate-900 group-hover:text-orange-500 transition mb-2">
            Mario Wihardja
          </h3>

          <p class="text-xs text-slate-500 font-medium mb-2">
            Strategic Account Director
          </p>

          <span
            class="text-[10px] font-bold uppercase tracking-wider text-orange-600 px-3 py-1 rounded-full">
            Postman
          </span>
        </div>
      </div>

      <!-- Speaker 2: Nadhira Pratama -->
      <div
        class="bg-white border border-slate-200 rounded-2xl p-4 sm:p-5 text-center group hover:border-alldata hover:shadow-lg transition-all duration-300"
      >
        <div
          class="w-full aspect-[4/5] rounded-xl bg-slate-100 border border-slate-200 mb-4 overflow-hidden"
        >
          <img
            src="https://alldataint.com/assets/images/events/speakers/nadhira.webp"
            alt="Nadhira Pratama"
            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
          />
        </div>

        <div class="min-h-[90px] flex flex-col items-center justify-start">
          <h3 class="text-base sm:text-lg font-bold text-slate-900 group-hover:text-alldata transition mb-1">
            Nadhira Pratama
          </h3>

          <p class="text-xs text-slate-500 font-medium mb-2">
            Solutions Architect
          </p>

          <span
            class="text-[10px] font-bold uppercase tracking-wider text-alldata  px-3 py-1 rounded-full"
          >
            All Data International
          </span>
        </div>
      </div>

      <!-- Speaker 3: Muhammad Saiful Islam -->
      <div
        class="bg-white border border-slate-200 rounded-2xl p-4 sm:p-5 text-center group hover:border-orange-400 hover:shadow-lg transition-all duration-300"
      >
        <div
          class="w-full aspect-[4/5] rounded-xl bg-slate-100 border border-slate-200 mb-4 overflow-hidden"
        >
          <img
            src="<?= base_url('assets/images/events/speakers/muhammadsaifulislam.webp'); ?>"
            alt="Muhammad Saiful Islam"
            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
          />
        </div>

        <div class="min-h-[90px] flex flex-col items-center justify-start">
          <h3 class="text-base sm:text-lg font-bold text-slate-900 group-hover:text-orange-500 transition mb-1">
            Muhammad Saiful Islam
          </h3>

          <p class="text-xs text-slate-500 font-medium mb-2">
            Partner Solutions Architect
          </p>

          <span
            class="text-[10px] font-bold uppercase tracking-wider text-orange-700  px-3 py-1 rounded-full"
          >
            AWS
          </span>
        </div>
      </div>

    </div>

    <!-- Bottom Caption -->
    <div class="text-center mt-12">
      <p class="text-xs sm:text-sm text-slate-500">
        Powered by industry expertise from
        <span class="font-semibold text-slate-700">Postman, AWS, and All Data International.</span>
      </p>
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
            Berdiskusi langsung dengan praktisi dan pengambil keputusan
            teknis dari perusahaan terkemuka.
          </p>
        </div>
      </div>
    </section>

<!-- Agenda Section -->
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
              <th class="py-4 px-6 w-40">Waktu</th>
              <th class="py-4 px-6">Agenda & Sesi</th>
            </tr>
          </thead>

          <tbody class="divide-y divide-slate-200 text-sm">

            <?php foreach ($rundown as [$time, $title, $description]): ?>
              <tr class="hover:bg-slate-50 transition">

                <!-- Time -->
                <td class="py-5 px-6 font-mono text-slate-700 font-semibold whitespace-nowrap align-top">
                  <?= esc($time) ?>
                </td>

                <!-- Agenda -->
                <td class="py-5 px-6 text-slate-700">
                  <strong class="text-slate-900 block mb-1 font-semibold">
                    <?= esc($title) ?>
                  </strong>

                  <?php if ($description !== ''): ?>
                    <span class="text-slate-500 italic font-normal leading-relaxed">
                      <?= esc($description) ?>
                    </span>
                  <?php endif; ?>
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
                dengan para praktisi perusahaan ternama.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


<section id="special-offer" class="relative py-16 sm:py-20 overflow-hidden bg-[#0B1730]">
    <!-- Background Decoration -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-32 -right-20 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-20 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">

            <!-- Header -->
            <div class="text-center mb-10">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full
                    bg-amber-400/10 border border-amber-400/30
                    text-amber-300 text-xs sm:text-sm font-bold tracking-wider uppercase">
                    <i class="fas fa-star"></i>
                    Exclusive for Event Attendees
                </span>

                <h2 class="mt-6 text-3xl sm:text-4xl lg:text-5xl font-extrabold
                    text-white tracking-tight leading-tight">
                    Unlock <span class="text-amber-400">Special Pricing</span>
                    for Your Next Technology Initiative
                </h2>

                <p class="mt-5 text-slate-300 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto">
                    Sebagai apresiasi bagi peserta yang hadir dalam event ini,
                    All Data International menghadirkan penawaran harga spesial
                    untuk mendukung transformasi teknologi dan kebutuhan bisnis Anda.
                </p>
            </div>

            <!-- Offer Card -->
            <div class="relative bg-white rounded-3xl shadow-2xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-5">

                    <!-- Left Content -->
                    <div class="md:col-span-3 p-7 sm:p-10">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-amber-100
                                flex items-center justify-center">
                                <i class="fas fa-gift text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">
                                    Your Exclusive Benefit
                                </p>
                                <h3 class="text-xl font-bold text-slate-900">
                                    Special Attendee Offer
                                </h3>
                            </div>
                        </div>

                        <p class="text-slate-600 leading-relaxed mb-6">
                            Dapatkan penawaran harga khusus dari All Data International
                            untuk solusi dan layanan yang sesuai dengan kebutuhan
                            organisasi Anda.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-green-100
                                    flex items-center justify-center shrink-0 mt-0.5">
                                    <i class="fas fa-check text-green-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Exclusive Special Pricing
                                    </p>
                                    <p class="text-sm text-slate-500">
                                        Penawaran harga spesial khusus peserta yang hadir.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-green-100
                                    flex items-center justify-center shrink-0 mt-0.5">
                                    <i class="fas fa-check text-green-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">
                                        Business & Technology Consultation
                                    </p>
                                    <p class="text-sm text-slate-500">
                                        Diskusikan kebutuhan dan solusi teknologi
                                        bersama tim All Data.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Deadline -->
                    <div class="md:col-span-2 bg-slate-50 border-t md:border-t-0
                        md:border-l border-slate-200 p-7 sm:p-10
                        flex flex-col justify-center text-center">

                        <span class="text-xs font-bold tracking-widest
                            uppercase text-slate-500">
                            Offer Valid Until
                        </span>

                        <div class="my-4">
                            <p class="text-6xl sm:text-7xl font-black
                                text-[#0B1730] tracking-tight leading-none">
                                15
                            </p>
                            <p class="text-2xl font-extrabold text-amber-600 mt-2">
                                DECEMBER
                            </p>
                            <p class="text-lg font-bold text-slate-600">
                                2026
                            </p>
                        </div>

                        <div class="border-t border-slate-200 pt-5 mt-2">
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Lakukan <strong>Order Commitment</strong> atau
                                terbitkan <strong>Purchase Order (PO)</strong>
                                paling lambat pada tanggal tersebut.
                            </p>
                        </div>

                        <!-- <a href="#contact"
                            class="mt-6 inline-flex items-center justify-center gap-2
                            w-full px-6 py-4 rounded-xl bg-amber-500
                            hover:bg-amber-400 text-slate-950 font-bold
                            transition-all duration-300 shadow-lg shadow-amber-500/20">
                            Claim Your Special Offer
                            <i class="fas fa-arrow-right"></i>
                        </a> -->

                        <p class="text-[11px] text-slate-400 mt-4">
                            Terms & Conditions Apply
                        </p>
                    </div>

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
