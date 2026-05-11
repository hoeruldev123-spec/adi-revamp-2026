<!DOCTYPE html>
<html lang="id" data-rg-mode="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <!-- Primary Meta Tags -->
    <title>End-to-End Data Solution: Customer 360 | All Data International - AWS Partner</title>
    <meta name="title" content="End-to-End Data Solution: Customer 360 | All Data International - AWS Partner">
    <meta name="description" content="Bergabunglah dalam event End-to-End Data Solution: Customer 360 bersama All Data International, partner AWS di Indonesia. Pelajari arsitektur data modern, data pipeline, hingga AI/ML.">
    <meta name="keywords" content="AWS, All Data International, End-to-End Data Solution, Customer 360, Data Pipeline, Data Analytics, Machine Learning, AI, Cloud Data, Jakarta Event 2026">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="event">
    <meta property="og:site_name" content="All Data International">
    <meta property="og:title" content="End-to-End Data Solution: Customer 360 | All Data International - AWS Partner">
    <meta property="og:description" content="Diskusi komprehensif tentang arsitektur data modern - dari data pipeline hingga Customer 360, analytics, dan AI/ML. 2 Juni 2026 | Jakarta Selatan">
    <meta property="og:url" content="https://alldataint.com/events/end-to-end-data-solution">
    <meta property="og:image" content="https://alldataint.com/assets/images/og/event-customer-360.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="End-to-End Data Solution: Customer 360 - All Data International × AWS">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="End-to-End Data Solution: Customer 360 | All Data International - AWS Partner">
    <meta name="twitter:description" content="Event data solution terbaru dari All Data International (partner AWS). Customer 360, pipeline, analytics, dan AI/ML. Daftar sekarang!">
    <meta name="twitter:image" content="https://alldataint.com/assets/images/og/event-customer-360.webp">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ═══════════════════════════════════════════════════════════════
        1. CSS RESET & VARIABLES
        ═══════════════════════════════════════════════════════════════ */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            /* Typography */
            --font-display: "Plus Jakarta Sans", "Amazon Ember Display", "Helvetica Neue", Helvetica, Arial, sans-serif;
            --font-body: "Plus Jakarta Sans", "Amazon Ember", "Helvetica Neue", Helvetica, Arial, sans-serif;

            /* Base font size (minimum 20px for body) */
            --text-base: 20px;
            --text-small: 20px;
            /* semua teks minimal 20px, kecuali navbar & footer */
            --text-caption: 20px;

            /* Colors - Gray Scale */
            --gray-0: #ffffff;
            --gray-50: #fcfcfd;
            --gray-100: #f9f9fb;
            --gray-150: #f6f6f9;
            --gray-200: #f3f3f7;
            --gray-250: #ebebf0;
            --gray-300: #dedee3;
            --gray-350: #ccccd1;
            --gray-400: #b4b4bb;
            --gray-450: #a4a4ad;
            --gray-500: #8c8c94;
            --gray-550: #72747e;
            --gray-600: #656871;
            --gray-650: #424650;
            --gray-700: #333843;
            --gray-750: #232b37;
            --gray-800: #1b232d;
            --gray-850: #161d26;
            --gray-900: #131920;
            --gray-950: #0f141a;
            --gray-1000: #06080a;

            /* Brand Colors */
            --amber-400: #f90;
            --amber-500: #fa6f00;
            --amber-600: #d14600;
            --blue-500: #0099ff;
            --blue-600: #006ce0;
            --blue-700: #004a9e;
            --blue-800: #003b8f;

            /* Background Colors */
            --amber-bg: #ffe8bd;
            --blue-bg: #d1f1ff;

            /* Semantic Tokens */
            --color-page-bg: var(--gray-0);
            --color-page-bg-inv: var(--gray-950);
            --color-object-bg: var(--gray-200);
            --color-text-primary: var(--gray-850);
            --color-text-body: var(--gray-750);
            --color-text-faded: var(--gray-850);
            --color-text-title: var(--gray-850);
            --color-border-low: var(--gray-350);
            --color-border-med: var(--gray-550);
            --color-link: var(--blue-600);
            --color-link-hover: var(--blue-800);

            /* Button Tokens */
            --btn-primary-bg: var(--gray-850);
            --btn-primary-fg: #ffffff;
            --btn-radius: 40px;
            --btn-border: 2px solid var(--gray-850);
            --btn-height: 48px;
            --btn-pad-h: 28px;

            /* Border Radius */
            --radius-1: 4px;
            --radius-2: 8px;
            --radius-3: 12px;
            --radius-4: 16px;
            --radius-6: 24px;
            --radius-10: 40px;

            /* Shadows */
            --shadow-1: 1px 1px 20px rgba(0, 0, 0, .1);
            --shadow-2: 1px 1px 24px rgba(0, 0, 0, .25);

            /* Spacing */
            --space-xs: 8px;
            --space-sm: 16px;
            --space-md: 24px;
            --space-lg: 48px;
            --space-xl: 80px;
        }

        html {
            scroll-behavior: smooth;
            -webkit-font-smoothing: antialiased;
        }

        body {
            font-family: var(--font-body);
            font-size: var(--text-base);
            line-height: 1.6;
            color: var(--color-text-body);
            background: var(--color-page-bg);
            overflow-x: hidden;
        }

        /* ═══════════════════════════════════════════════════════════════
   2. TYPOGRAPHY (Minimal 20px, kecuali navbar & footer)
   ═══════════════════════════════════════════════════════════════ */
        .t-display-xl {
            font-family: var(--font-display);
            font-size: clamp(42px, 5.5vw, 68px);
            font-weight: 800;
            line-height: 1.1;
            color: var(--color-text-title);
            letter-spacing: -0.015em;
        }

        .t-display-lg {
            font-family: var(--font-display);
            font-size: clamp(36px, 4.5vw, 52px);
            font-weight: 600;
            line-height: 1.2;
            color: var(--color-text-title);
            letter-spacing: -0.01em;
        }

        .t-display-md {
            font-family: var(--font-display);
            font-size: clamp(30px, 3.5vw, 42px);
            font-weight: 600;
            line-height: 1.25;
            color: var(--color-text-title);
        }

        .t-heading {
            font-family: var(--font-display);
            font-size: 26px;
            font-weight: 700;
            line-height: 1.3;
            color: var(--color-text-primary);
        }

        .t-body-lg {
            font-size: 22px;
            font-weight: 400;
            line-height: 1.65;
            color: var(--color-text-body);
        }

        .t-body {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.65;
            color: var(--color-text-body);
        }

        .t-body-sm {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.6;
            color: var(--color-text-faded);
        }

        .t-label {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .05em;
            text-transform: uppercase;
        }

        .t-inv {
            color: #ffffff !important;
        }

        .t-inv-muted {
            color: rgba(255, 255, 255, .7) !important;
        }

        .t-amber {
            color: var(--amber-400);
        }

        .t-blue {
            color: var(--blue-600);
        }

        /* Small text exceptions (navbar & footer only) */
        .navbar,
        .navbar *,
        footer,
        footer * {
            font-size: 14px;
        }

        .navbar .btn,
        footer .footer-copyright,
        footer .footer-badge {
            font-size: 13px;
        }

        /* Buttons base */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            height: var(--btn-height);
            padding: 10px var(--btn-pad-h);
            border-radius: var(--btn-radius);
            border: var(--btn-border);
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 600;
            text-decoration: none !important;
            cursor: pointer;
            transition: all .3s ease;
            white-space: nowrap;
        }

        .btn-primary {
            background: var(--btn-primary-bg);
            color: var(--btn-primary-fg);
            border-color: var(--btn-primary-bg);
        }

        .btn-primary:hover {
            background: var(--gray-700);
            border-color: var(--gray-700);
            color: #fff;
        }

        .btn-primary-inv {
            background: #ffffff;
            color: var(--gray-850);
            border-color: #ffffff;
        }

        .btn-primary-inv:hover {
            background: var(--gray-100);
            border-color: var(--gray-100);
        }

        .btn-secondary {
            background: transparent;
            color: var(--gray-850);
            border-color: var(--gray-850);
        }

        .btn-secondary:hover {
            background: var(--gray-200);
            color: var(--gray-850);
        }

        .btn-secondary-inv {
            background: transparent;
            color: #ffffff;
            border-color: rgba(255, 255, 255, .6);
        }

        .btn-secondary-inv:hover {
            border-color: #ffffff;
            color: #ffffff;
            background: rgba(255, 255, 255, .1);
        }

        .btn-amber {
            background: var(--amber-400);
            color: var(--gray-850);
            border-color: var(--amber-400);
            font-weight: 700;
        }

        .btn-amber:hover {
            background: var(--amber-500);
            border-color: var(--amber-500);
            color: #fff;
        }

        /* Highlight span */
        .highlight {
            position: relative;
            display: inline-block;
            animation: scaleIn 0.5s ease-out 0.2s both;
        }

        .highlight::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 30%;
            background: linear-gradient(90deg, #f90, #f90);
            z-index: -1;
            transform: scaleX(0);
            transform-origin: left;
            animation: scaleIn 0.6s ease-out 0.5s forwards;
        }

        /* ═══════════════════════════════════════════════════════════════
   3. LAYOUT & CONTAINER
   ═══════════════════════════════════════════════════════════════ */
        .container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .section {
            padding: var(--space-xl) 0;
        }

        .section-sm {
            padding: 60px 0;
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 20px;
            }

            .section {
                padding: 60px 0;
            }
        }

        /* ═══════════════════════════════════════════════════════════════
   4. NAVBAR
   ═══════════════════════════════════════════════════════════════ */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            background: #0f1923;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
            height: 70px;
            display: flex;
            align-items: center;
        }

        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            height: 70px;
        }

        .nav-brand img {
            height: 42px;
            width: auto;
            object-fit: contain;
            transition: all .3s ease;
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.2));
        }

        .nav-brand img:hover {
            transform: scale(1.03);
            filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.3));
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
            list-style: none;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: 500;
            color: rgba(255, 255, 255, .7);
            text-decoration: none;
            transition: color .2s;
        }

        .nav-links a:hover {
            color: #ffffff;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        @media (max-width: 900px) {
            .nav-links {
                display: none;
            }
        }

        /* ═══════════════════════════════════════════════════════════════
   5. HERO SECTION
   ═══════════════════════════════════════════════════════════════ */
        .hero {
            background: linear-gradient(135deg, #f9a87a 0%, #e8a0c8 30%, #c9a0e8 55%, #a0b8f0 80%, #a8cef8 100%);
            padding: 140px 5% 100px;
            min-height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .hero-content-full {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 60px;
            align-items: center;
            width: 100%;
        }

        .hero-badge-finished {
            display: inline-block;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #c0392b;
            margin-bottom: 20px;
        }

        .hero h1 {
            margin: 0 0 24px;
        }

        .hero h1 .highlight {
            color: var(--gray-850);
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 36px;
        }

        .hero-speakers {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 32px;
            width: 100%;
        }

        .hero-speaker-card {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 18px 22px;
            background: rgba(255, 255, 255, .88);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, .8);
            border-radius: 20px;
            transition: all .25s ease;
            width: 100%;
        }

        .hero-speaker-card:hover {
            background: rgba(255, 255, 255, .96);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .hero-speaker-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
            border: 3px solid white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .15);
        }

        .hero-speaker-avatar img {
            display: block !important;
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            opacity: 1 !important;
            visibility: visible !important;
        }

        .hero-speaker-name {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .hero-speaker-role {
            font-size: 20px;
            color: #4a5568;
            line-height: 1.4;
        }

        .hero-panel {
            background: rgba(255, 255, 255, .88);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, .6);
            border-radius: 24px;
            padding: 36px;
            box-shadow: 0 8px 40px rgba(0, 0, 0, .12);
        }

        .hero-info-row {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            margin-bottom: 28px;
        }

        .hero-info-icon {
            width: 52px;
            height: 52px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-600);
        }

        .hero-info-icon svg {
            width: 28px;
            height: 28px;
        }

        .hero-info-label {
            font-size: 20px;
            font-weight: 700;
            color: var(--gray-700);
            margin-bottom: 6px;
            letter-spacing: 0.5px;
        }

        .hero-info-value {
            font-size: 20px;
            color: var(--blue-600);
            line-height: 1.5;
            font-weight: 600;
        }

        .hero-info-value.plain {
            color: var(--gray-700);
            font-size: 20px;
        }

        .hero-panel-divider {
            border: none;
            border-top: 2px solid rgba(0, 0, 0, .08);
            margin: 8px 0 28px;
        }

        .hero-tags {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .hero-tag {
            font-size: 20px;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 40px;
            border: 1.5px solid var(--gray-350);
            color: var(--gray-650);
            background: rgba(255, 255, 255, .7);
        }

        @media (max-width: 1024px) {
            .hero-grid {
                grid-template-columns: 1fr 380px;
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .hero {
                padding: 120px 20px 80px;
            }

            .hero-speakers {
                grid-template-columns: 1fr;
            }
        }

        /* ═══════════════════════════════════════════════════════════════
   6. OVERVIEW SECTION
   ═══════════════════════════════════════════════════════════════ */
        .overview {
            background: var(--gray-0);
            border-bottom: 1px solid var(--color-border-low);
        }

        .overview-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: start;
        }

        .section-eyebrow {
            display: inline-block;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--amber-400);
            margin-bottom: 16px;
        }



        .overview-desc {
            font-size: 20px;
            color: var(--color-text-faded);
            line-height: 1.7;
            margin: 20px 0 36px;
        }

        .overview-points {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .overview-point {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            padding: 24px 0;
            border-bottom: 1px solid var(--color-border-low);
        }

        .overview-point:first-child {
            padding-top: 0;
        }

        .overview-point:last-child {
            border-bottom: none;
        }

        .point-num {
            font-family: var(--font-display);
            font-size: 32px;
            font-weight: 600;
            color: var(--amber-400);
            flex-shrink: 0;
            min-width: 42px;
            line-height: 1;
        }

        .point-title {
            font-family: var(--font-display);
            font-size: 20px;
            font-weight: 700;
            color: var(--color-text-primary);
            margin-bottom: 6px;
        }

        .point-desc {
            font-size: 20px;
            color: var(--color-text-faded);
            line-height: 1.6;
        }

        /* AWS Architecture Card */
        .arch-card {
            background: var(--gray-950);
            border-radius: var(--radius-4);
            overflow: hidden;
            box-shadow: var(--shadow-2);
        }

        .arch-card-header {
            padding: 20px 26px;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .arch-card-title {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: .05em;
            text-transform: uppercase;
            color: var(--amber-400);
        }

        .arch-flow {
            padding: 20px 26px;
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .arch-step {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 16px 18px;
            border-radius: var(--radius-2);
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .07);
            transition: background .2s;
        }

        .arch-step:hover {
            background: rgba(255, 255, 255, .08);
        }

        .arch-connector {
            width: 2px;
            height: 20px;
            background: linear-gradient(to bottom, rgba(255, 153, 0, .4), rgba(255, 153, 0, .1));
            margin: 0 0 0 25px;
        }

        .arch-step-ico {
            width: 36px;
            height: 36px;
            border-radius: var(--radius-2);
            background: rgba(255, 153, 0, .1);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 18px;
        }

        .arch-step-name {
            font-size: 20px;
            font-weight: 1000;
            color: rgba(255, 255, 255, .85);
        }

        .arch-step-tools {
            font-size: 20px;
            color: rgb(255, 255, 255);
            margin-top: 4px;
            font-weight: 400;
        }

        .arch-tier {
            margin-left: auto;
            flex-shrink: 0;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: .04em;
            color: var(--amber-400);
            background: rgba(255, 153, 0, .1);
            border: 1px solid rgba(255, 153, 0, .2);
            padding: 4px 12px;
            border-radius: var(--radius-10);
        }

        .arch-card-footer {
            padding: 16px 26px;
            border-top: 1px solid rgba(255, 255, 255, .06);
            background: rgba(255, 255, 255, .02);
            font-size: 20px;
            color: rgba(255, 255, 255, .3);
        }

        @media (max-width: 768px) {
            .overview-grid {
                grid-template-columns: 1fr;
                gap: 48px;
            }
        }

        /* ═══════════════════════════════════════════════════════════════
   7. LEARNING SECTION
   ═══════════════════════════════════════════════════════════════ */
        .learning {
            background: var(--gray-100);
            border-bottom: 1px solid var(--color-border-low);
        }

        .learn-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            margin-top: 48px;
        }

        .learn-card {
            background: var(--gray-0);
            border: 1px solid var(--color-border-low);
            border-radius: var(--radius-4);
            padding: 32px;
            box-shadow: var(--shadow-1);
            transition: all .3s ease;
        }

        .learn-card:hover {
            box-shadow: var(--shadow-2);
            transform: translateY(-2px);
            border-color: var(--gray-400);
        }

        .learn-num {
            font-family: var(--font-display);
            font-size: 52px;
            font-weight: 600;
            color: var(--amber-400);
            line-height: 1;
            margin-bottom: 16px;
        }

        .learn-card h3 {
            font-family: var(--font-display);
            font-size: 24px;
            font-weight: 700;
            color: var(--color-text-primary);
            margin-bottom: 12px;
        }

        .learn-card p {
            font-size: 20px;
            color: var(--color-text-faded);
            line-height: 1.65;
        }

        .learn-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .tag {
            font-size: 20px;
            font-weight: 500;
            color: var(--blue-600);
            background: var(--blue-bg);
            padding: 6px 14px;
            border-radius: var(--radius-10);
        }

        @media (max-width: 768px) {
            .learn-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ═══════════════════════════════════════════════════════════════
   8. AGENDA SECTION
   ═══════════════════════════════════════════════════════════════ */
        .agenda {
            background: var(--gray-950);
        }

        .agenda .section-eyebrow {
            color: var(--amber-400);
        }

        .agenda .section-eyebrow::before {
            background: var(--amber-400);
        }

        .agenda-list {
            margin-top: 48px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .agenda-item {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .agenda-time {
            width: 150px;
            font-size: 20px;
            color: rgba(255, 255, 255, .7);
            text-align: right;
            line-height: 1.4;
        }

        .agenda-time span {
            display: block;
            font-size: 20px;
            color: rgba(255, 255, 255, .5);
            margin-top: 4px;
        }

        .agenda-card {
            flex: 1;
            padding: 20px 24px;
            border-radius: 16px;
            background: rgba(255, 255, 255, .08);
            border: 1px solid rgba(255, 255, 255, .1);
            color: #fff;
            font-weight: 600;
            letter-spacing: .02em;
            line-height: 1.5;
            text-align: center;
            transition: all .25s ease;
            font-size: 24px;
        }

        .agenda-card small {
            display: block;
            font-size: 18px;
            color: rgba(255, 255, 255, .7);
            margin-top: 6px;
            line-height: 1.4;
        }

        .agenda-card:hover {
            background: rgba(255, 255, 255, .12);
            transform: translateY(-2px);
        }

        .agenda-card.highlight-agenda {
            background: #1f3f5b;
            border: none;
        }

        @media (max-width: 768px) {
            .agenda-item {
                display: grid;
                grid-template-columns: 90px 1fr;
                gap: 14px;
            }

            .agenda-time {
                width: 100%;
                text-align: left;
                font-size: 18px;
            }

            .agenda-time span {
                font-size: 16px;
            }

            .agenda-card {
                padding: 14px;
                font-size: 16px;
                text-align: left;
            }

            .agenda-card small {
                font-size: 14px;
            }
        }

        /* ═══════════════════════════════════════════════════════════════
   9. DETAILS SECTION
   ═══════════════════════════════════════════════════════════════ */
        .details {
            background: var(--gray-0);
            border-bottom: 1px solid var(--color-border-low);
        }

        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 64px;
            align-items: start;
        }

        .detail-list {
            display: flex;
            flex-direction: column;
            gap: 0;
            margin-top: 32px;
        }

        .detail-row {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            padding: 24px 0;
            border-bottom: 1px solid var(--color-border-low);
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-icon {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            border-radius: var(--radius-2);
            background: var(--amber-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--amber-600);
        }

        .detail-label {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: .05em;
            text-transform: uppercase;
            color: var(--color-text-faded);
            margin-bottom: 6px;
        }

        .detail-value {
            font-family: var(--font-display);
            font-size: 20px;
            font-weight: 500;
            color: var(--color-text-primary);
            line-height: 1.5;
        }

        /* Register Card */
        .register-card {
            background: var(--gray-0);
            border: 1px solid var(--color-border-low);
            border-radius: var(--radius-4);
            box-shadow: var(--shadow-2);
            overflow: hidden;
            position: sticky;
            top: 82px;
        }

        .register-card-header {
            padding: 28px 32px;
            border-bottom: 1px solid var(--color-border-low);
        }

        .register-card-header h3 {
            font-family: var(--font-display);
            font-size: 24px;
            font-weight: 700;
            color: var(--color-text-primary);
            margin-bottom: 6px;
        }

        .register-card-body {
            padding: 24px 32px 32px;
        }

        @media (max-width: 900px) {
            .details-grid {
                grid-template-columns: 1fr;
                gap: 48px;
            }
        }

        /* ═══════════════════════════════════════════════════════════════
   10. CTA BAND
   ═══════════════════════════════════════════════════════════════ */
        .cta-band {
            background: #f9fafb;
            padding: var(--space-xl) 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-band::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(0, 0, 0, .03) 1px, transparent 1px);
            background-size: 28px 28px;
        }

        .cta-band::after {
            content: '';
            position: absolute;
            left: 50%;
            top: -60px;
            transform: translateX(-50%);
            width: 600px;
            height: 300px;
            background: radial-gradient(ellipse, rgba(0, 108, 224, .06) 0%, transparent 65%);
        }

        .cta-band-inner {
            position: relative;
            z-index: 1;
            max-width: 650px;
            margin: 0 auto;
        }

        .cta-band h2 {
            margin: 16px 0 20px;
            color: #111827;
        }

        .cta-band .sub {
            margin-bottom: 40px;
            color: #4b5563;
            font-size: 20px;
        }

        .cta-btns {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* ═══════════════════════════════════════════════════════════════
   11. FOOTER
   ═══════════════════════════════════════════════════════════════ */

        /* ═══════════════════════════════════════════════════════════════
   FOOTER
   ═══════════════════════════════════════════════════════════════ */
        footer {
            background: var(--gray-1000);
            border-top: 1px solid rgba(255, 255, 255, .06);
            padding: 56px 0 0;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 36px;
            border-bottom: 1px solid rgba(255, 255, 255, .07);
            margin-bottom: 36px;
        }

        .footer-brand-name {
            font-family: var(--font-display);
            font-size: 15px;
            font-weight: 700;
            color: rgb(255, 255, 255);
            margin-bottom: 8px;
        }

        .footer-brand-tagline {
            font-size: 13px;
            color: rgb(255, 255, 255);
            max-width: 220px;
            line-height: 1.6;
        }

        .footer-social {
            display: flex;
            gap: 10px;
            margin-top: 16px;
        }

        .social-icon {
            width: 34px;
            height: 34px;
            border-radius: var(--radius-2);
            background: rgba(255, 255, 255, .07);
            border: 1px solid rgb(255, 255, 255);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(255, 255, 255);
            text-decoration: none;
            transition: all .25s;
        }

        .social-icon:hover {
            background: rgba(255, 153, 0, .15);
            border-color: rgba(255, 153, 0, .3);
            color: var(--amber-400);
        }

        .footer-cols {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            padding-bottom: 48px;
        }

        .footer-col h6 {
            font-family: var(--font-display);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: rgb(255, 255, 255);
            margin-bottom: 14px;
        }

        .footer-col ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .footer-col ul a {
            text-decoration: none;
            /* ← HILANGKAN UNDERLINE */
            font-size: 14px;
            color: rgba(255, 255, 255, .45);
            transition: color .2s;
        }

        .footer-col ul a:hover {
            text-decoration: none;
            /* ← pastikan hover juga tidak underline */
            color: rgba(255, 255, 255, .85);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .06);
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-copyright {
            font-size: 12px;
            color: rgba(255, 255, 255, .2);
        }

        .footer-badge {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .05em;
            color: var(--amber-400);
            border: 1px solid rgba(255, 153, 0, .2);
            padding: 4px 12px;
            border-radius: var(--radius-10);
        }

        @media (max-width: 768px) {
            .footer-top {
                flex-direction: column;
                gap: 24px;
            }

            .footer-cols {
                grid-template-columns: 1fr 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 12px;
                text-align: center;
            }
        }

        .logo-aws {
            height: 48px;
            width: auto;
            object-fit: contain;
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .logo-all-data {
            height: 48px;
            width: auto;
            object-fit: contain;
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .logo-aws:hover,
        .logo-all-data:hover {
            opacity: 1;
            transform: translateY(-2px);
        }

        /* ═══════════════════════════════════════════════════════════════
   12. ANIMATIONS & REVEAL
   ═══════════════════════════════════════════════════════════════ */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .6s ease, transform .6s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .hero {
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-grid {
            animation: fadeInLeft 0.7s ease-out;
        }

        .hero-panel {
            animation: fadeInRight 0.8s ease-out 0.2s both;
        }

        .hero-speaker-card {
            animation: scaleIn 0.5s ease-out;
            transition: all 0.3s ease;
        }

        .hero-speaker-card:hover {
            transform: translateY(-5px) scale(1.02);
        }

        @media (prefers-reduced-motion: reduce) {

            .hero *,
            .reveal {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- ═══ NAVBAR ═══ -->
    <nav class="navbar">
        <div class="container">
            <a href="https://alldataint.com/" class="nav-brand">
                <img
                    src="<?= base_url('assets/images/events/banner/alldatainternational-aws-logo-light.png') ?>" alr="aldata-aws" />
            </a>
            <ul class="nav-links">
                <li><a href="https://alldataint.com/solutions/fmcg">Solutions</a></li>
                <li><a href="https://alldataint.com/services">Services</a></li>
                <li><a href="https://alldataint.com/company/about-us">Company</a></li>
                <li><a href="https://alldataint.com/resources/articles">Resources</a></li>
            </ul>
            <div class="nav-actions">
                <a href="https://forms.cloud.microsoft/r/imJjtmHiuH" target="_blank" class="btn btn-amber" style="height:38px;padding:6px 20px;font-size:13px;">Daftar Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- ═══ HERO ═══ -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <!-- Left — Judul & keterangan -->
                <div>
                    <div class="hero-badge-finished">All Data International - AWS</div>
                    <h1 class="t-display-xl">
                        End-to-End<br>
                        <span class="highlight">Data Solution<br>Customer 360</span>
                    </h1>
                    <div class="hero-speakers">
                        <div class="hero-speaker-card">
                            <div class="hero-speaker-avatar">
                                <img
                                    src="<?= base_url('assets/images/events/speakers/nadhira.webp') ?>"
                                    alt="Nadhira"
                                    onerror="this.onerror=null; this.src='https://placehold.co/70x70/1a1a2e/FF9900?text=N'">
                            </div>
                            <div>
                                <div class="hero-speaker-name">Nadhira Pramatma</div>
                                <div class="hero-speaker-role">VP of Technology</br>All Data International</div>
                            </div>
                        </div>

                        <div class="hero-speaker-card">
                            <div class="hero-speaker-avatar">
                                <img
                                    src="<?= base_url('assets/images/events/speakers/muhammadisaiful-islam.webp') ?>"
                                    alt="saiful"
                                    onerror="this.onerror=null; this.src='https://placehold.co/70x70/1a1a2e/FF9900?text=N'">
                            </div>
                            <div>
                                <div class="hero-speaker-name">Muhammad Saiful Islam</div>
                                <div class="hero-speaker-role">Partner Solutions Architect</br>AWS</div>
                            </div>
                        </div>

                        <div class="hero-speaker-card">
                            <div class="hero-speaker-avatar">
                                <img
                                    src="<?= base_url('assets/images/events/speakers/shandy.webp') ?>"
                                    alt="shandy"
                                    onerror="this.onerror=null; this.src='https://placehold.co/70x70/1a1a2e/FF9900?text=N'">
                            </div>
                            <div>
                                <div class="hero-speaker-name">Shandy Tsalasa</div>
                                <div class="hero-speaker-role">Solution Architect</br>All Data International</div>
                            </div>
                        </div>

                    </div>
                    <div class="hero-actions">
                        <a href="#overview" class="btn btn-primary">Lihat Detail Event</a>
                        <a href="#agenda" class="btn btn-secondary">Lihat Rundown</a>
                    </div>
                </div>

                <!-- Right — Event Info Card seperti referensi -->
                <div class="hero-panel">
                    <div class="hero-info-row">
                        <div class="hero-info-icon">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                                <circle cx="12" cy="9" r="2.5" />
                            </svg>
                        </div>
                        <div>
                            <div class="hero-info-label">Lokasi</div>
                            <div class="hero-info-value">Jl. Jenderal Sudirman, Jakarta Selatan</a></div>
                        </div>
                    </div>
                    <div class="hero-info-row">
                        <div class="hero-info-icon">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                        </div>
                        <div>
                            <div class="hero-info-label">Tanggal</div>
                            <div class="hero-info-value plain">Rabu, 2 Juni 2026</div>
                        </div>
                    </div>
                    <div class="hero-info-row">
                        <div class="hero-info-icon">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <div>
                            <div class="hero-info-label">Waktu</div>
                            <div class="hero-info-value plain">12:30 – Selesai (WIB / GMT+7)</div>
                        </div>
                    </div>
                    <hr class="hero-panel-divider">
                    <div class="hero-tags">
                        <span class="hero-tag">Workshop</span>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ OVERVIEW ═══ -->
    <section class="section overview" id="overview">
        <div class="container">
            <div class="overview-grid">
                <div>
                    <div class="reveal">
                        <span class="section-eyebrow t-blue">Event Overview</span>
                        <h2 class="t-display-lg">Kenapa Event Ini Penting untuk Bisnis Anda?</h2>
                        <p class="overview-desc">
                            Event ini memberikan pemahaman komprehensif tentang arsitektur data modern dan end-to-end data management — mulai dari membangun pipeline hingga mengimplementasikan business use case nyata seperti Customer 360.
                        </p>
                    </div>
                    <div class="overview-points">
                        <div class="overview-point reveal">
                            <div class="point-num">01</div>
                            <div>
                                <div class="point-title">Skalabilitas Data Pipeline</div>
                                <p class="point-desc">Pelajari cara membangun pipeline yang scalable dengan pendekatan Medallion Architecture di atas infrastruktur AWS yang proven.</p>
                            </div>
                        </div>
                        <div class="overview-point reveal">
                            <div class="point-num">02</div>
                            <div>
                                <div class="point-title">Governance &amp; Kepatuhan Regulasi</div>
                                <p class="point-desc">Implementasi data governance yang sesuai dengan regulasi PDP Indonesia dan standar GDPR internasional.</p>
                            </div>
                        </div>
                        <div class="overview-point reveal">
                            <div class="point-num">03</div>
                            <div>
                                <div class="point-title">Real Business Use Cases</div>
                                <p class="point-desc">Demo langsung Customer 360: upselling, cross-selling, CLTV, dan segmentasi pelanggan dengan SageMaker &amp; QuickSight.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal">
                    <div class="arch-card">
                        <div class="arch-card-header">
                            <span class="arch-card-title">Full Materials</span>
                            <span style="font-size:11px;color:rgba(255,255,255,.3);">AWS Workshop</span>
                        </div>

                        <div class="arch-flow">

                            <div class="arch-step">
                                <div>
                                    <div class="arch-step-name">Introduction</div>
                                    <div class="arch-step-tools">
                                        Introduction to Medallion Architecture as an approach to modern data pipelines
                                    </div>
                                </div>
                            </div>

                            <div class="arch-connector"></div>

                            <div class="arch-step">
                                <div>
                                    <div class="arch-step-name">Data Storage</div>
                                    <div class="arch-step-tools">
                                        Data storage strategies using Amazon S3, Redshift, Athena, and RDS
                                    </div>
                                </div>
                            </div>

                            <div class="arch-connector"></div>

                            <div class="arch-step">
                                <div>
                                    <div class="arch-step-name">Data Quality</div>
                                    <div class="arch-step-tools">
                                        Data quality checking using AWS Glue
                                    </div>
                                </div>
                            </div>

                            <div class="arch-connector"></div>

                            <div class="arch-step">
                                <div>
                                    <div class="arch-step-name">Data Processing</div>
                                    <div class="arch-step-tools">
                                        Data cleansing and transformation processes with AWS Glue
                                    </div>
                                </div>
                            </div>

                            <div class="arch-connector"></div>

                            <div class="arch-step">
                                <div>
                                    <div class="arch-step-name">Data Governance</div>
                                    <div class="arch-step-tools">
                                        Implementation of data governance within organizations
                                    </div>
                                </div>
                            </div>

                            <div class="arch-connector"></div>

                            <div class="arch-step">
                                <div>
                                    <div class="arch-step-name">Compliance</div>
                                    <div class="arch-step-tools">
                                        Compliance with data protection regulations (PDP & GDPR)
                                    </div>
                                </div>
                            </div>

                            <div class="arch-connector"></div>

                            <div class="arch-step">
                                <div>
                                    <div class="arch-step-name">Customer 360 Use Cases</div>
                                    <div class="arch-step-tools">
                                        Up-selling & cross-selling · Customer Lifetime Value (CLTV) · Customer segmentation using SageMaker & QuickSight
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="arch-card-footer">
                            Powered by Amazon Web Services · Jakarta Region
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ LEARNING ═══ -->
    <section class="section learning" id="learning">
        <div class="container">
            <div class="reveal">
                <span class="section-eyebrow t-blue">Kurikulum</span>
                <h2 class="t-display-lg">Apa yang Akan Anda Pelajari</h2>
                <p class="t-body" style="color:var(--color-text-faded);max-width:600px;margin-top:12px;">Materi dirancang untuk praktisi dan decision-maker — dari konsep arsitektur hingga implementasi nyata di lingkungan AWS.</p>
            </div>
            <div class="learn-grid">
                <div class="learn-card reveal">
                    <div class="learn-num">01</div>
                    <h3>Medallion Architecture</h3>
                    <p>Pendekatan bertingkat Bronze → Silver → Gold untuk membangun data pipeline yang terstruktur, scalable, dan maintainable di long-term.</p>
                    <div class="learn-tags">
                        <span class="tag">Data Pipeline</span>
                        <span class="tag">Best Practice</span>
                    </div>
                </div>
                <div class="learn-card reveal">
                    <div class="learn-num">02</div>
                    <h3>Data Storage Strategy</h3>
                    <p>Strategi penyimpanan menggunakan Amazon S3, Redshift, Athena, dan RDS sesuai karakteristik data dan kebutuhan bisnis spesifik Anda.</p>
                    <div class="learn-tags">
                        <span class="tag">S3</span>
                        <span class="tag">Redshift</span>
                        <span class="tag">Athena</span>
                        <span class="tag">RDS</span>
                    </div>
                </div>
                <div class="learn-card reveal">
                    <div class="learn-num">03</div>
                    <h3>Data Quality &amp; Cleansing</h3>
                    <p>Pengecekan kualitas data, proses cleansing, dan transformasi menggunakan AWS Glue untuk memastikan data yang bersih dan reliable.</p>
                    <div class="learn-tags">
                        <span class="tag">AWS Glue</span>
                        <span class="tag">Data Quality</span>
                    </div>
                </div>
                <div class="learn-card reveal">
                    <div class="learn-num">04</div>
                    <h3>Customer 360 &amp; Use Cases</h3>
                    <p>Implementasi Customer 360 untuk up-selling, cross-selling, CLTV, dan segmentasi pelanggan menggunakan SageMaker dan QuickSight.</p>
                    <div class="learn-tags">
                        <span class="tag">SageMaker</span>
                        <span class="tag">QuickSight</span>
                        <span class="tag">CLTV</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ AGENDA ═══ -->
    <section class="section agenda" id="agenda">
        <div class="container">
            <div class="reveal" style="text-align:center;">
                <span class="section-eyebrow">Agenda</span>
                <h2 class="t-display-lg t-inv" style="margin-top:8px;">Rundown Event</h2>
            </div>

            <div class="agenda-list">

                <div class="agenda-item">
                    <div class="agenda-time">12:30 – 13:00<br><span>30 minutes</span></div>
                    <div class="agenda-card">Open Registration</div>
                </div>

                <div class="agenda-item">
                    <div class="agenda-time">13:00 – 13:15<br><span>15 minutes</span></div>
                    <div class="agenda-card">Opening & Introduction</div>
                </div>

                <div class="agenda-item">
                    <div class="agenda-time">13:15 – 13:45<br><span>30 minutes</span></div>
                    <div class="agenda-card">
                        General Explanation of End-to-End Data Solutions<br>
                        <small>(Customer 360, Transformation, Architecture, AWS)</small>
                    </div>
                </div>

                <div class="agenda-item">
                    <div class="agenda-time">13:45 – 14:30<br><span>45 minutes</span></div>
                    <div class="agenda-card">
                        Modern Data Architecture on AWS: From Ingestion to Analytics
                    </div>
                </div>

                <div class="agenda-item">
                    <div class="agenda-time">14:30 – 14:45<br><span>15 minutes</span></div>
                    <div class="agenda-card highlight-agenda">Q&A</div>
                </div>

                <div class="agenda-item">
                    <div class="agenda-time">14:45 – 15:15<br><span>30 minutes</span></div>
                    <div class="agenda-card">
                        Implementing Data Governance on AWS with Catalog, RBAC, and Data Masking
                    </div>
                </div>

                <div class="agenda-item">
                    <div class="agenda-time">15:15 – 15:30<br><span>15 minutes</span></div>
                    <div class="agenda-card highlight-agenda">Break</div>
                </div>

                <div class="agenda-item">
                    <div class="agenda-time">15:30 – 16:15<br><span>45 minutes</span></div>
                    <div class="agenda-card">
                        Customer 360: Driving Retention, Segmentation, and Revenue Growth with SageMaker & QuickSight
                    </div>
                </div>

                <div class="agenda-item">
                    <div class="agenda-time">16:15 – 16:35<br><span>20 minutes</span></div>
                    <div class="agenda-card highlight-agenda">Q&A</div>
                </div>

                <div class="agenda-item">
                    <div class="agenda-time">16:20 – 16:35<br><span>15 minutes</span></div>
                    <div class="agenda-card highlight-agenda">
                        Closing & Sales Session<br>
                        <small>(How to Contact All Data)</small>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ═══ CTA BAND ═══ -->
    <section class="cta-band">
        <div class="cta-band-inner reveal">
            <span class="section-eyebrow" style="color:var(--amber-400);">Mulai Transformasi Data Anda</span>
            <h2 class="t-display-md">Siap Memaksimalkan Kekuatan <span class="t-amber">Data</span> untuk Bisnis Anda?</h2>
            <p class="t-body sub">Jadikan data sebagai aset strategis bersama All Data International dan AWS — wujudkan transformasi data yang nyata dan terukur.</p>
            <div class="cta-btns">
                <a href="https://forms.cloud.microsoft/r/imJjtmHiuH" target="_blank" class="btn btn-amber">
                    Daftar Sekarang
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="https://alldataint.com/contact" class="btn btn-secondary">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <!-- ═══ FOOTER ═══ -->
    <footer>
        <div class="container">
            <div class="footer-top">
                <div>
                    <img src="<?= base_url('assets/images/events/banner/all-data-international-light.png') ?>" alt="all-data-logo" class="logo-all-data">
                    <div class="footer-brand-tagline">Driving Organizations into Smart Decisions with AI</div>
                    <div class="footer-social">
                        <a href="https://id.linkedin.com/company/all-data-international" target="_blank" class="social-icon" title="LinkedIn">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com/alldataint" target="_blank" class="social-icon" title="Instagram">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </a>
                        <a href="https://facebook.com/alldataint" target="_blank" class="social-icon" title="Facebook">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div style="text-align:right;">
                    <p style="font-size:13px;color:rgb(255, 255, 255);margin-bottom:8px;"><strong>Partner Resmi</strong></p>
                    <img src="<?= base_url('assets/images/events/banner/amazon-web-services.png') ?>" alt="AWS" class="logo-aws">
                </div>
            </div>

            <div class="footer-cols">
                <!-- Solutions -->
                <div class="footer-col">
                    <h6>Solutions</h6>
                    <ul>
                        <li><a href="<?= base_url('solutions/fmcg') ?>">FMCG &amp; Retail</a></li>
                        <li><a href="<?= base_url('solutions/telecom') ?>">Telecom</a></li>
                        <li><a href="<?= base_url('solutions/financial') ?>">Financial</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-col">
                    <h6>Services</h6>
                    <ul>
                        <li><a href="<?= base_url('services/consulting') ?>">Consulting</a></li>
                        <li><a href="<?= base_url('services/use-case-development') ?>">Use Case Development</a></li>
                        <li><a href="<?= base_url('services/managed-services') ?>">Managed Services</a></li>
                        <li><a href="<?= base_url('services/maintenance-support') ?>">Maintenance Support</a></li>
                        <li><a href="<?= base_url('services/training') ?>">Training</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div class="footer-col">
                    <h6>Resources</h6>
                    <ul>
                        <li><a href="<?= base_url('articles') ?>">Articles</a></li>
                        <li><a href="<?= base_url('events') ?>">Events</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="footer-col">
                    <h6>Kontak</h6>
                    <ul>
                        <li>
                            <a href="tel:+622129319396">
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58z" />
                                </svg>
                                +62 21 2931 9396
                            </a>
                        </li>
                        <li>
                            <a href="tel:+622129319397">
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58z" />
                                </svg>
                                +62 21 2931 9397
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@alldataint.com">
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                </svg>
                                info@alldataint.com
                            </a>
                        </li>
                        <li>
                            <a href="https://maps.app.goo.gl/f9Z8MYaZtK1wNsm9A" target="_blank" rel="noopener">
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                </svg>
                                Grand Aries Niaga, Jakarta 11620
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="footer-copyright">Copyright © 2026, All Data International. All Rights Reserved.</p>
                <span class="footer-badge">Elevate Your Business with AI</span>
            </div>
        </div>
    </footer>

    <script>
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('in');
            });
        }, {
            threshold: 0.1
        });
        document.querySelectorAll('.reveal').forEach(el => io.observe(el));

        function handleSubmit(e) {
            e.preventDefault();
            const form = document.getElementById('regForm');
            const success = document.getElementById('regSuccess');
            const submitBtn = form.querySelector('.reg-submit');

            submitBtn.textContent = 'Memproses...';
            submitBtn.disabled = true;

            // Simulasi submit — di produksi ganti dengan fetch() ke endpoint
            setTimeout(() => {
                form.style.display = 'none';
                success.style.display = 'block';
            }, 900);
        }
    </script>
</body>

</html>