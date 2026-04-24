<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dataiku | All Data International</title>
    <meta name="description" content="The leading Enterprise AI Platform. AllData International, an ISO 27001-certified local integrator, brings Dataiku to Indonesia's corporate ecosystem." />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --dk-teal: #1D9E75;
            --dk-teal-dark: #0F6E56;
            --dk-teal-light: #E1F5EE;
            --dk-teal-mid: #5DCAA5;
            --dk-charcoal: #1A1A2E;
            --dk-gray-900: #1C1C1E;
            --dk-gray-700: #3A3A4A;
            --dk-gray-500: #6B6B7B;
            --dk-gray-200: #E8E8F0;
            --dk-gray-100: #F5F5FA;
            --dk-white: #FFFFFF;
            --dk-accent: #0D6A6F;
            --font: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font);
            color: var(--dk-charcoal);
            background: var(--dk-white);
            -webkit-font-smoothing: antialiased;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* ─── NAVBAR ─── */
        nav {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--dk-gray-200);
            padding: 0 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 68px;
        }

        /* ============================================
   NAVBAR LOGO STYLES
   ============================================ */

        .nav-logo {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }

        .nav-logo .logo-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            gap: 12px;
            transition: opacity 0.3s ease;
        }

        .nav-logo .logo-link:hover {
            opacity: 0.8;
        }

        /* Logo images */
        .nav-logo .logo-adi-img,
        .nav-logo .logo-dk-img {
            height: 40px;
            width: auto;
            object-fit: contain;
            display: block;
        }

        /* Logo divider */
        .nav-logo .logo-divider {
            width: 1px;
            height: 30px;
            background-color: #e0e0e0;
            margin: 0 4px;
        }

        /* ============================================
   RESPONSIVE STYLES
   ============================================ */

        /* Tablet */
        @media (max-width: 992px) {

            .nav-logo .logo-adi-img,
            .nav-logo .logo-dk-img {
                height: 35px;
            }

            .nav-logo .logo-divider {
                height: 25px;
            }

            .nav-logo .logo-link {
                gap: 8px;
            }
        }

        /* Mobile */
        @media (max-width: 768px) {

            .nav-logo .logo-adi-img,
            .nav-logo .logo-dk-img {
                height: 30px;
            }

            .nav-logo .logo-divider {
                height: 20px;
            }

            .nav-logo .logo-link {
                gap: 6px;
            }
        }

        /* Mobile kecil */
        @media (max-width: 576px) {

            .nav-logo .logo-adi-img,
            .nav-logo .logo-dk-img {
                height: 25px;
            }

            .nav-logo .logo-divider {
                height: 18px;
            }
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: 500;
            color: var(--dk-gray-500);
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: var(--dk-teal);
        }

        .btn-nav {
            background: var(--dk-teal);
            color: var(--dk-white) !important;
            padding: 9px 22px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: background 0.2s, transform 0.1s;
        }

        .btn-nav:hover {
            background: var(--dk-teal-dark) !important;
            transform: translateY(-1px);
        }

        /* ─── HERO ─── */
        .hero {
            padding: 96px 5% 80px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            max-width: 1280px;
            margin: 0 auto;
        }

        .hero-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--dk-teal-light);
            color: var(--dk-teal-dark);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 20px;
            margin-bottom: 24px;
        }

        .hero-kicker::before {
            content: '';
            width: 7px;
            height: 7px;
            background: var(--dk-teal);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .hero h1 {
            font-size: clamp(32px, 4vw, 52px);
            font-weight: 800;
            line-height: 1.12;
            letter-spacing: -1.5px;
            color: var(--dk-charcoal);
            margin-bottom: 20px;
        }

        .hero h1 em {
            font-style: normal;
            color: var(--dk-teal);
        }

        .hero-sub {
            font-size: 17px;
            line-height: 1.7;
            color: var(--dk-gray-500);
            margin-bottom: 36px;
            max-width: 520px;
        }

        .hero-ctas {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }

        .btn-primary {
            background: var(--dk-teal);
            color: var(--dk-white);
            padding: 14px 28px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 700;
            transition: background 0.2s, transform 0.1s, box-shadow 0.2s;
            box-shadow: 0 4px 20px rgba(29, 158, 117, 0.3);
        }

        .btn-primary:hover {
            background: var(--dk-teal-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(29, 158, 117, 0.35);
        }

        .btn-secondary {
            background: transparent;
            color: var(--dk-charcoal);
            padding: 13px 24px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            border: 1.5px solid var(--dk-gray-200);
            transition: border-color 0.2s, color 0.2s;
        }

        .btn-secondary:hover {
            border-color: var(--dk-teal);
            color: var(--dk-teal);
        }

        .hero-trust {
            font-size: 12.5px;
            color: var(--dk-gray-500);
            line-height: 1.6;
        }

        .hero-trust strong {
            color: var(--dk-charcoal);
        }

        .hero-visual {
            position: relative;
        }

        .hero-card {
            background: var(--dk-charcoal);
            border-radius: 20px;
            padding: 32px;
            overflow: hidden;
            position: relative;
        }

        .hero-card::before {
            content: '';
            position: absolute;
            top: -60px;
            right: -60px;
            width: 220px;
            height: 220px;
            background: radial-gradient(circle, rgba(29, 158, 117, 0.25) 0%, transparent 70%);
            pointer-events: none;
        }

        .metric-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 16px;
        }

        .metric-box {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            padding: 20px;
        }

        .metric-box .num {
            font-size: 32px;
            font-weight: 800;
            color: var(--dk-teal-mid);
            letter-spacing: -1px;
            line-height: 1;
            margin-bottom: 6px;
        }

        .metric-box .label {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
            line-height: 1.4;
        }

        .flow-preview {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .flow-node {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
        }

        .node-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .dot-blue {
            background: #60a5fa;
        }

        .dot-yellow {
            background: #fbbf24;
        }

        .dot-green {
            background: var(--dk-teal-mid);
        }

        .dot-orange {
            background: #fb923c;
        }

        .flow-arrow {
            color: rgba(255, 255, 255, 0.3);
            font-size: 14px;
        }

        /* ─── SECTION UTILITIES ─── */
        section {
            padding: 80px 5%;
        }

        .section-inner {
            max-width: 1280px;
            margin: 0 auto;
        }

        .section-tag {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: var(--dk-teal);
            margin-bottom: 12px;
        }

        .section-title {
            font-size: clamp(26px, 3.5vw, 42px);
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1.15;
            color: var(--dk-charcoal);
            margin-bottom: 16px;
        }

        .section-sub {
            font-size: 16px;
            line-height: 1.7;
            color: var(--dk-gray-500);
            max-width: 640px;
        }

        /* ─── SOCIAL PROOF BAR ─── */
        .proof-bar {
            background: var(--dk-gray-100);
            padding: 44px 5%;
            border-top: 1px solid var(--dk-gray-200);
            border-bottom: 1px solid var(--dk-gray-200);
        }

        .proof-bar-inner {
            max-width: 1280px;
            margin: 0 auto;
        }

        .proof-intro {
            text-align: center;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            color: var(--dk-gray-500);
            margin-bottom: 32px;
        }

        .logo-grid {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 12px 32px;
        }

        .logo-pill {
            display: flex;
            align-items: center;
            gap: 8px;
            background: var(--dk-white);
            border: 1px solid var(--dk-gray-200);
            border-radius: 40px;
            padding: 8px 18px;
            font-size: 13px;
            font-weight: 600;
            color: var(--dk-gray-700);
            white-space: nowrap;
        }

        .logo-pill .dot-cat {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .global-pill .dot-cat {
            background: #60a5fa;
        }

        .local-pill .dot-cat {
            background: var(--dk-teal);
        }

        .proof-legend {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-top: 20px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            color: var(--dk-gray-500);
        }

        .legend-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        /* ─── PAIN POINTS ─── */
        .pain-section {
            background: var(--dk-white);
        }

        .pain-intro {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: start;
            margin-bottom: 56px;
        }

        .stat-callout {
            background: var(--dk-gray-100);
            border-left: 4px solid var(--dk-teal);
            border-radius: 0 12px 12px 0;
            padding: 24px 28px;
            margin-top: 28px;
        }

        .stat-callout .big-stat {
            font-size: 48px;
            font-weight: 800;
            color: var(--dk-teal);
            letter-spacing: -2px;
            line-height: 1;
        }

        .stat-callout .stat-desc {
            font-size: 14px;
            color: var(--dk-gray-500);
            margin-top: 6px;
            line-height: 1.5;
        }

        .pain-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .pain-card {
            background: var(--dk-white);
            border: 1.5px solid var(--dk-gray-200);
            border-radius: 16px;
            padding: 28px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .pain-card:hover {
            border-color: var(--dk-teal-mid);
            box-shadow: 0 8px 32px rgba(29, 158, 117, 0.1);
        }

        .pain-icon {
            width: 48px;
            height: 48px;
            background: var(--dk-teal-light);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
        }

        .pain-icon svg {
            width: 22px;
            height: 22px;
            stroke: var(--dk-teal-dark);
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .pain-card h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--dk-charcoal);
            margin-bottom: 10px;
        }

        .pain-card p {
            font-size: 14px;
            line-height: 1.65;
            color: var(--dk-gray-500);
        }

        /* ─── SOLUTION ─── */
        .solution-section {
            background: var(--dk-charcoal);
        }

        .solution-section .section-title {
            color: var(--dk-white);
        }

        .solution-section .section-tag {
            color: var(--dk-teal-mid);
        }

        .solution-section .section-sub {
            color: rgba(255, 255, 255, 0.55);
        }

        .solution-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 52px;
        }

        .sol-card {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 18px;
            padding: 32px;
            transition: background 0.2s, border-color 0.2s;
        }

        .sol-card:hover {
            background: rgba(29, 158, 117, 0.12);
            border-color: rgba(93, 202, 165, 0.4);
        }

        .sol-num {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: var(--dk-teal-mid);
            margin-bottom: 14px;
        }

        .sol-card h3 {
            font-size: 17px;
            font-weight: 700;
            color: var(--dk-white);
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .sol-card p {
            font-size: 14px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.5);
        }

        /* ─── LLM MESH ─── */
        .mesh-section {
            background: var(--dk-gray-100);
        }

        .mesh-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 64px;
            align-items: center;
            margin-top: 52px;
        }

        .mesh-diagram {
            background: var(--dk-charcoal);
            border-radius: 20px;
            padding: 36px;
            position: relative;
            overflow: hidden;
        }

        .mesh-diagram::before {
            content: '';
            position: absolute;
            bottom: -40px;
            left: -40px;
            width: 180px;
            height: 180px;
            background: radial-gradient(circle, rgba(29, 158, 117, 0.2) 0%, transparent 70%);
        }

        .mesh-center {
            background: var(--dk-teal);
            border-radius: 14px;
            padding: 16px 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .mesh-center .title {
            font-size: 14px;
            font-weight: 700;
            color: var(--dk-white);
        }

        .mesh-center .sub {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 3px;
        }

        .mesh-providers {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 10px;
        }

        .mesh-node {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 10px;
            padding: 12px 14px;
        }

        .mesh-node .node-name {
            font-size: 13px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.85);
        }

        .mesh-node .node-type {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.4);
            margin-top: 2px;
        }

        .mesh-features {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .mesh-features li {
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .mesh-check {
            width: 22px;
            height: 22px;
            background: var(--dk-teal-light);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .mesh-check svg {
            width: 12px;
            height: 12px;
            stroke: var(--dk-teal-dark);
            fill: none;
            stroke-width: 2.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .mesh-features li p {
            font-size: 14px;
            line-height: 1.6;
            color: var(--dk-gray-500);
        }

        .mesh-features li strong {
            font-size: 14px;
            font-weight: 600;
            color: var(--dk-charcoal);
            display: block;
            margin-bottom: 3px;
        }

        /* ─── VERTICALS ─── */
        .vertical-section {
            background: var(--dk-white);
        }

        .vertical-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 52px;
        }

        .vert-card {
            border: 1.5px solid var(--dk-gray-200);
            border-radius: 18px;
            overflow: hidden;
            transition: box-shadow 0.2s, border-color 0.2s;
        }

        .vert-card:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
            border-color: var(--dk-teal-mid);
        }

        .vert-header {
            padding: 24px 24px 20px;
            background: var(--dk-teal-light);
        }

        .vert-header h3 {
            font-size: 17px;
            font-weight: 700;
            color: var(--dk-teal-dark);
        }

        .vert-header .industry-tag {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: var(--dk-teal);
            margin-bottom: 8px;
        }

        .vert-body {
            padding: 22px 24px;
        }

        .vert-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: var(--dk-gray-500);
            margin-bottom: 7px;
        }

        .vert-body p {
            font-size: 13.5px;
            line-height: 1.65;
            color: var(--dk-gray-500);
            margin-bottom: 18px;
        }

        /* ─── TESTIMONIALS ─── */
        .testi-section {
            background: var(--dk-gray-100);
        }

        .testi-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 52px;
        }

        .testi-card {
            background: var(--dk-white);
            border: 1.5px solid var(--dk-gray-200);
            border-radius: 20px;
            padding: 36px;
            position: relative;
        }

        .testi-quote-mark {
            font-size: 72px;
            font-weight: 800;
            color: var(--dk-teal-light);
            line-height: 0.8;
            margin-bottom: 16px;
            font-family: Georgia, serif;
        }

        .testi-card blockquote {
            font-size: 15.5px;
            line-height: 1.75;
            color: var(--dk-charcoal);
            margin-bottom: 28px;
            font-style: italic;
        }

        .testi-author {
            display: flex;
            align-items: center;
            gap: 14px;
            padding-top: 20px;
            border-top: 1px solid var(--dk-gray-200);
        }

        .author-avatar {
            width: 44px;
            height: 44px;
            background: var(--dk-teal-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 700;
            color: var(--dk-teal-dark);
            flex-shrink: 0;
        }

        .author-name {
            font-size: 14px;
            font-weight: 700;
            color: var(--dk-charcoal);
        }

        .author-role {
            font-size: 12.5px;
            color: var(--dk-gray-500);
            margin-top: 2px;
        }

        /* ─── PARTNER BADGE ─── */
        .partner-section {
            background: var(--dk-white);
        }

        .partner-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 64px;
            align-items: center;
            margin-top: 52px;
        }

        .partner-badge-box {
            background: var(--dk-gray-100);
            border: 1.5px solid var(--dk-gray-200);
            border-radius: 20px;
            padding: 36px;
            text-align: center;
        }

        .partner-badge-box .badge-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--dk-charcoal);
            margin-bottom: 8px;
        }

        .partner-badge-box .badge-desc {
            font-size: 14px;
            color: var(--dk-gray-500);
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .badge-graphic {
            width: 160px;
            height: 160px;
            background: var(--dk-charcoal);
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            border: 4px solid var(--dk-teal);
        }

        .badge-graphic .badge-year {
            font-size: 12px;
            font-weight: 600;
            color: var(--dk-teal-mid);
            letter-spacing: 1px;
        }

        .badge-graphic .badge-word {
            font-size: 13px;
            font-weight: 700;
            color: var(--dk-white);
            text-align: center;
            line-height: 1.3;
            padding: 0 16px;
            margin-top: 4px;
        }

        .cert-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .cert-item {
            display: flex;
            align-items: center;
            gap: 14px;
            background: var(--dk-gray-100);
            border-radius: 12px;
            padding: 14px 18px;
        }

        .cert-badge {
            width: 40px;
            height: 40px;
            background: var(--dk-teal);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 800;
            color: var(--dk-white);
            letter-spacing: 0.5px;
            text-align: center;
            line-height: 1.2;
            flex-shrink: 0;
        }

        .cert-info .cert-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--dk-charcoal);
        }

        .cert-info .cert-desc {
            font-size: 12px;
            color: var(--dk-gray-500);
            margin-top: 2px;
        }

        /* ─── CTA SECTION ─── */
        .cta-section {
            background: var(--dk-charcoal);
            text-align: center;
            padding: 96px 5%;
        }

        .cta-section .section-tag {
            color: var(--dk-teal-mid);
            margin-bottom: 16px;
        }

        .cta-section h2 {
            font-size: clamp(28px, 4vw, 48px);
            font-weight: 800;
            color: var(--dk-white);
            letter-spacing: -1px;
            line-height: 1.15;
            margin-bottom: 16px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-section p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.55);
            margin-bottom: 40px;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }

        .cta-form-row {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .cta-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 13px 18px;
            font-size: 15px;
            font-family: var(--font);
            color: var(--dk-white);
            width: 240px;
            transition: border-color 0.2s;
        }

        .cta-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .cta-input:focus {
            outline: none;
            border-color: var(--dk-teal-mid);
        }

        .btn-cta {
            background: var(--dk-teal);
            color: var(--dk-white);
            padding: 13px 28px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            font-family: var(--font);
            transition: background 0.2s, transform 0.1s;
            box-shadow: 0 4px 20px rgba(29, 158, 117, 0.4);
        }

        .btn-cta:hover {
            background: var(--dk-teal-dark);
            transform: translateY(-1px);
        }

        .cta-trust-note {
            font-size: 12.5px;
            color: rgba(255, 255, 255, 0.35);
            line-height: 1.6;
        }

        .cta-trust-note strong {
            color: rgba(255, 255, 255, 0.6);
        }

        /* ─── FOOTER ─── */
        footer {
            background: #0E0E14;
            padding: 64px 5% 32px;
            color: rgba(255, 255, 255, 0.6);
        }

        .footer-grid {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 48px;
            padding-bottom: 48px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .footer-brand .footer-logo {
            font-size: 16px;
            font-weight: 800;
            color: var(--dk-white);
            margin-bottom: 12px;
        }

        .footer-brand p {
            font-size: 13.5px;
            line-height: 1.7;
            margin-bottom: 16px;
        }

        .footer-contact {
            font-size: 13px;
            line-height: 2;
        }

        .footer-col h4 {
            font-size: 13px;
            font-weight: 700;
            color: var(--dk-white);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 16px;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.5);
            transition: color 0.2s;
        }

        .footer-col ul li a:hover {
            color: var(--dk-teal-mid);
        }

        .footer-bottom {
            max-width: 1280px;
            margin: 28px auto 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 12.5px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .footer-bottom a {
            color: rgba(255, 255, 255, 0.4);
        }

        .footer-bottom a:hover {
            color: var(--dk-teal-mid);
        }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 1024px) {
            .hero {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .hero-visual {
                display: none;
            }

            .pain-intro {
                grid-template-columns: 1fr;
            }

            .pain-cards {
                grid-template-columns: 1fr 1fr;
            }

            .solution-grid {
                grid-template-columns: 1fr 1fr;
            }

            .mesh-layout {
                grid-template-columns: 1fr;
            }

            .testi-grid {
                grid-template-columns: 1fr;
            }

            .partner-content {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 680px) {
            nav {
                padding: 0 4%;
            }

            .nav-links {
                display: none;
            }

            section {
                padding: 60px 4%;
            }

            .hero {
                padding: 60px 4% 52px;
            }

            .pain-cards {
                grid-template-columns: 1fr;
            }

            .solution-grid {
                grid-template-columns: 1fr;
            }

            .vertical-grid {
                grid-template-columns: 1fr;
            }

            .cta-form-row {
                flex-direction: column;
                align-items: center;
            }

            .cta-input {
                width: 100%;
                max-width: 360px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .metric-row {
                grid-template-columns: 1fr;
            }

        }
    </style>
</head>

<body>

    <!-- ╔══════════════════════════════╗ -->
    <!-- ║         NAVIGATION           ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <nav>
        <div class="nav-logo">
            <a href="<?= base_url('/'); ?>" class="logo-link">
                <img src="<?= base_url('/assets/images/principals/adi_dataiku.png'); ?>"
                    alt="All Data International & Dataiku"
                    style="max-height: 80px; width: auto; display: block;">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="#solutions">Solutions</a></li>
            <li><a href="#industries">Industries</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="https://alldataint.com/contact" target="_blank">Contact</a></li>
            <li><a href="#contact" class="btn-nav">Schedule a Consultation</a></li>
        </ul>
    </nav>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║           HERO               ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <section style="padding: 0; background: var(--dk-white);">
        <div class="hero">
            <div class="hero-content">
                <div class="hero-kicker">Orchestrating the Future of Your Enterprise AI</div>
                <h1>Take Control of Data Chaos. <em>Scale AI</em> Across Your Entire Organization.</h1>
                <p class="hero-sub">
                    Transform artificial intelligence experiments into measurable business operations.
                    AllData International, an ISO 27001-certified local integrator, brings the power of the
                    Dataiku AI Platform into your existing infrastructure ecosystem.
                </p>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary">Request an Architecture Demo</a>
                    <a href="#solutions" class="btn-secondary">Explore the Platform →</a>
                </div>
                <p class="hero-trust">
                    <strong>Trusted by over 750 global organizations</strong>, delivered with ISO 27001 security
                    precision in Indonesia. APJ System Integrator Award 2026.
                </p>
            </div>
            <div class="hero-visual">
                <div class="hero-card">
                    <div class="metric-row">
                        <div class="metric-box">
                            <div class="num">750<span style="font-size:20px">+</span></div>
                            <div class="label">Global organizations trust Dataiku</div>
                        </div>
                        <div class="metric-box">
                            <div class="num">90<span style="font-size:20px">%</span></div>
                            <div class="label">Data pipeline automation</div>
                        </div>
                    </div>
                    <div class="metric-row">
                        <div class="metric-box">
                            <div class="num">4×</div>
                            <div class="label">Consecutive Gartner Magic Quadrant Leader</div>
                        </div>
                        <div class="metric-box">
                            <div class="num">6<span style="font-size:20px">%</span></div>
                            <div class="label">Companies that truly achieve ROI from AI</div>
                        </div>
                    </div>
                    <div class="flow-preview">
                        <div class="flow-node"><span class="node-dot dot-blue"></span>Dataset S3</div>
                        <span class="flow-arrow">→</span>
                        <div class="flow-node"><span class="node-dot dot-yellow"></span>Visual Recipe</div>
                        <span class="flow-arrow">→</span>
                        <div class="flow-node"><span class="node-dot dot-green"></span>ML Model</div>
                        <span class="flow-arrow">→</span>
                        <div class="flow-node"><span class="node-dot dot-orange"></span>Python Deploy</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║      SOCIAL PROOF BAR        ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <div class="proof-bar">
        <div class="proof-bar-inner">
            <p class="proof-intro">The intelligence platform powering local & global industry leaders</p>
            <div class="logo-grid">
                <div class="logo-pill global-pill"><span class="dot-cat"></span>General Electric</div>
                <div class="logo-pill global-pill"><span class="dot-cat"></span>Toyota</div>
                <div class="logo-pill global-pill"><span class="dot-cat"></span>Novartis</div>
                <div class="logo-pill global-pill"><span class="dot-cat"></span>Johnson & Johnson</div>
                <div class="logo-pill local-pill"><span class="dot-cat"></span>FIF Group</div>
                <div class="logo-pill local-pill"><span class="dot-cat"></span>Allianz Indonesia</div>
                <div class="logo-pill local-pill"><span class="dot-cat"></span>BPJS Ketenagakerjaan</div>
                <div class="logo-pill local-pill"><span class="dot-cat"></span>Adira Finance</div>
                <div class="logo-pill local-pill"><span class="dot-cat"></span>Bank Syariah Indonesia</div>
            </div>
            <div class="proof-legend">
                <div class="legend-item">
                    <div class="legend-dot" style="background:#60a5fa"></div>Global Dataiku Clients
                </div>
                <div class="legend-item">
                    <div class="legend-dot" style="background:var(--dk-teal)"></div>AllData International Clients
                </div>
            </div>
        </div>
    </div>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║       PAIN POINTS            ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <section class="pain-section" id="pain">
        <div class="section-inner">
            <div class="pain-intro">
                <div>
                    <p class="section-tag">Enterprise Problem Diagnosis</p>
                    <h2 class="section-title">Why Do So Many AI Initiatives End Up as Failed Experiments?</h2>
                    <p class="section-sub">
                        Global research confirms executives' greatest concern: the majority of companies are already using AI,
                        yet nearly all of them fail to convert that investment into real, measurable business value.
                    </p>
                </div>
                <div>
                    <div class="stat-callout">
                        <div class="big-stat">88%</div>
                        <div class="stat-desc">Of companies have already implemented AI — yet only <strong>6%</strong> successfully derive real business value from their investment.</div>
                    </div>
                    <div class="stat-callout" style="margin-top: 16px;">
                        <div class="big-stat">82%</div>
                        <div class="stat-desc"><strong>CIOs</strong> believe their employees are building AI agents and using third-party LLMs without IT department oversight.</div>
                    </div>
                </div>
            </div>
            <div class="pain-cards">
                <div class="pain-card">
                    <div class="pain-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="3" width="7" height="7" rx="1" />
                            <rect x="14" y="3" width="7" height="7" rx="1" />
                            <rect x="3" y="14" width="7" height="7" rx="1" />
                            <rect x="14" y="14" width="7" height="7" rx="1" />
                            <line x1="10" y1="6.5" x2="14" y2="6.5" />
                            <line x1="10" y1="17.5" x2="14" y2="17.5" />
                            <line x1="6.5" y1="10" x2="6.5" y2="14" />
                            <line x1="17.5" y1="10" x2="17.5" y2="14" />
                        </svg>
                    </div>
                    <h3>The Epidemic of Siloed Tools & Technical Debt</h3>
                    <p>AI agents implemented separately by different teams create an unaudited ecosystem. Investment costs balloon far beyond the business impact they generate.</p>
                </div>
                <div class="pain-card">
                    <div class="pain-icon">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                            <line x1="19" y1="8" x2="23" y2="8" />
                            <line x1="21" y1="6" x2="21" y2="10" />
                        </svg>
                    </div>
                    <h3>Skills Crisis & Collaboration Friction</h3>
                    <p>Relying solely on a handful of Ph.D. data scientists causes project backlogs. Business analysts with domain knowledge lack the technical access needed to operate predictive models.</p>
                </div>
                <div class="pain-card">
                    <div class="pain-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5z" />
                            <path d="M2 17l10 5 10-5" />
                            <path d="M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <h3>Uncontrolled Shadow AI</h3>
                    <p>82% of CIOs report employees are building Generative AI applications faster than IT can govern them. Risks of IP leakage, data privacy violations, and regulatory non-compliance are rising exponentially.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║        SOLUTION CORE         ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <section class="solution-section" id="solutions">
        <div class="section-inner">
            <p class="section-tag">Solution Platform</p>
            <h2 class="section-title">Dataiku: One Managed Ecosystem to Unite Every One of Your Data Initiatives.</h2>
            <p class="section-sub">
                More than just an analytics tool — Dataiku is an enterprise-grade orchestration layer that enables
                AI development, deployment, and governance within a single, centralized environment.
            </p>
            <div class="solution-grid">
                <div class="sol-card">
                    <div class="sol-num">01 — Democratization</div>
                    <h3>Seamless Cross-Role Collaboration</h3>
                    <p>Visual (no-code/low-code) interfaces for business analysts, all the way to full-code environments for data engineers. Automate data pipelines by up to 90%, freeing your team for high-value work.</p>
                </div>
                <div class="sol-card">
                    <div class="sol-num">02 — Flexibility</div>
                    <h3>Infrastructure Freedom Without Vendor Lock-in</h3>
                    <p>Operates on top of your existing technology stack — hybrid cloud, Kubernetes, on-premise, or multi-cloud. Native integration with Snowflake, Alibaba Cloud, and the entire modern data ecosystem.</p>
                </div>
                <div class="sol-card">
                    <div class="sol-num">03 — Governance</div>
                    <h3>End-to-End Governance via Dataiku Govern</h3>
                    <p>A single control panel to proactively track all AI initiatives. Manage the full lifecycle from raw data to production models with standardized, documented processes.</p>
                </div>
                <div class="sol-card">
                    <div class="sol-num">04 — Speed</div>
                    <h3>From Experiment to Production, Faster</h3>
                    <p>Standardize MLOps processes with an intuitive visual grammar. Blue datasets, yellow visual recipes, green ML models, orange code recipes — every team speaks the same language.</p>
                </div>
                <div class="sol-card">
                    <div class="sol-num">05 — Scale</div>
                    <h3>Scale AI Across the Entire Organization</h3>
                    <p>From small teams to enterprises with thousands of users. Dataiku is trusted by 1 in 4 of the world's top companies on the Forbes Global 2000 — proven in the most complex environments.</p>
                </div>
                <div class="sol-card">
                    <div class="sol-num">06 — Local Expertise</div>
                    <h3>AllData: ISO-Certified Local Execution</h3>
                    <p>End-to-end implementation with deep knowledge of the Indonesian ecosystem. More than just a reseller — our team designs the architecture, builds use cases, and supports you throughout the full lifecycle.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║         LLM MESH             ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <section class="mesh-section" id="llm">
        <div class="section-inner">
            <p class="section-tag">Generative AI Enterprise</p>
            <h2 class="section-title">Navigate the Generative AI Era Responsibly with Dataiku LLM Mesh.</h2>
            <p class="section-sub">Manage the cost, performance, and compliance of your entire LLM ecosystem from a single, centralized control point.</p>
            <div class="mesh-layout">
                <div class="mesh-diagram">
                    <div style="font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:rgba(255,255,255,0.4);margin-bottom:14px;">LLM Mesh Architecture</div>
                    <div class="mesh-center">
                        <div class="title">Dataiku LLM Mesh</div>
                        <div class="sub">Routing Layer — PII Filter — Cost Monitor — Audit Trail</div>
                    </div>
                    <div style="text-align:center;font-size:20px;color:rgba(255,255,255,0.3);margin:10px 0;">↕</div>
                    <div class="mesh-providers">
                        <div class="mesh-node">
                            <div class="node-name">OpenAI GPT-4</div>
                            <div class="node-type">Public Commercial</div>
                        </div>
                        <div class="mesh-node">
                            <div class="node-name">Anthropic Claude</div>
                            <div class="node-type">Public Commercial</div>
                        </div>
                        <div class="mesh-node">
                            <div class="node-name">Azure AI Foundry</div>
                            <div class="node-type">Public Commercial</div>
                        </div>
                        <div class="mesh-node">
                            <div class="node-name">Mistral / HuggingFace</div>
                            <div class="node-type">Private Self-Hosted</div>
                        </div>
                    </div>
                    <div style="text-align:center;font-size:12px;color:rgba(255,255,255,0.3);margin-top:14px;">Confidential data → automatically routed to private models</div>
                </div>
                <div>
                    <ul class="mesh-features">
                        <li>
                            <div class="mesh-check"><svg viewBox="0 0 12 12">
                                    <polyline points="1,6 4,9 11,2" />
                                </svg></div>
                            <div>
                                <strong>Provider-Agnostic Framework</strong>
                                <p>Break free from dependency on a single LLM. Automatically route queries to OpenAI, Anthropic, Azure, or private models based on data sensitivity and cost.</p>
                            </div>
                        </li>
                        <li>
                            <div class="mesh-check"><svg viewBox="0 0 12 12">
                                    <polyline points="1,6 4,9 11,2" />
                                </svg></div>
                            <div>
                                <strong>Real-Time Cost Control</strong>
                                <p>Monitor token spending instantly. Intelligent caching prevents repeated charges for identical queries, maintaining SLAs with maximum financial efficiency.</p>
                            </div>
                        </li>
                        <li>
                            <div class="mesh-check"><svg viewBox="0 0 12 12">
                                    <polyline points="1,6 4,9 11,2" />
                                </svg></div>
                            <div>
                                <strong>Compliance Fortress & PII Protection</strong>
                                <p>Automatic PII filtering before prompts leave the corporate network. Detailed audit trails for every agent action — ready for regulatory oversight and compliance audits.</p>
                            </div>
                        </li>
                        <li>
                            <div class="mesh-check"><svg viewBox="0 0 12 12">
                                    <polyline points="1,6 4,9 11,2" />
                                </svg></div>
                            <div>
                                <strong>Shadow AI Solution</strong>
                                <p>Provide a secure, official channel for employees to innovate with Generative AI without exposing corporate intellectual property to unregulated public LLMs.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║     INDUSTRY VERTICALS       ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <section class="vertical-section" id="industries">
        <div class="section-inner">
            <p class="section-tag">Industry Applications in Indonesia</p>
            <h2 class="section-title">Contextual Solutions for Every Critical Sector in Indonesia</h2>
            <p class="section-sub">Dataiku and AllData International bridge global capabilities with proven local relevance in the Indonesian market.</p>
            <div class="vertical-grid">
                <div class="vert-card">
                    <div class="vert-header">
                        <div class="industry-tag">Financial Services & Insurance</div>
                        <h3>AML Triage & Fraud Detection</h3>
                    </div>
                    <div class="vert-body">
                        <div class="vert-label">Operational Symptoms</div>
                        <p>Manual analysis of money laundering alerts produces high false positives and "alert fatigue" that drains compliance team productivity.</p>
                        <div class="vert-label">Solution via Dataiku & AllData</div>
                        <p>AI-orchestrated AML Alert Triage to prioritize threats based on the probability of true positives. Proven in the banking ecosystem with Allianz Indonesia & FIF Group.</p>
                    </div>
                </div>
                <div class="vert-card">
                    <div class="vert-header">
                        <div class="industry-tag">Telecommunications & Networks</div>
                        <h3>Predictive Maintenance & Customer 360</h3>
                    </div>
                    <div class="vert-body">
                        <div class="vert-label">Operational Symptoms</div>
                        <p>Competitive pressure demands optimization of BTS infrastructure maintenance costs and real-time improvement of prepaid customer retention.</p>
                        <div class="vert-label">Solution via Dataiku & AllData</div>
                        <p>A predictive maintenance alert system and unified Customer 360 data platform using an Apache Kafka/Confluent streaming ecosystem for real-time insights.</p>
                    </div>
                </div>
                <div class="vert-card">
                    <div class="vert-header">
                        <div class="industry-tag">Retail & FMCG</div>
                        <h3>Dynamic Pricing & Supply Chain Intelligence</h3>
                    </div>
                    <div class="vert-body">
                        <div class="vert-label">Operational Symptoms</div>
                        <p>Supply chain disruptions and shifting consumption patterns in the era of social commerce create dead stock and lost revenue opportunities.</p>
                        <div class="vert-label">Solution via Dataiku & AllData</div>
                        <p>Dynamic pricing optimization analytics and adaptive inventory forecasting that enable rapid responses to market changes and consumer trends.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║       TESTIMONIALS           ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <section class="testi-section" id="testimonials">
        <div class="section-inner">
            <p class="section-tag">Voices of Local Clients</p>
            <h2 class="section-title">Executed. Proven. Trusted.</h2>
            <div class="testi-grid">
                <div class="testi-card">
                    <div class="testi-quote-mark">"</div>
                    <blockquote>
                        All Data International was highly responsive, communicative, and professional in both project management
                        and technical execution — capable of delivering effective solutions through strong collaboration, and highly
                        recommended for future engagements.
                    </blockquote>
                    <div class="testi-author">
                        <div class="author-avatar">FIF</div>
                        <div>
                            <div class="author-name">Customer Relationship Management Analyst</div>
                            <div class="author-role">FIF Group · Jakarta, Indonesia</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="testi-quote-mark">"</div>
                    <blockquote>
                        The collaboration between Allianz Indonesia and All Data International has been excellent.
                        The team proved to be supportive, responsive, and technically competent in handling challenges
                        that arose throughout the project.
                    </blockquote>
                    <div class="testi-author">
                        <div class="author-avatar">ALZ</div>
                        <div>
                            <div class="author-name">Head of Data Architect and Solutions</div>
                            <div class="author-role">Allianz Indonesia · Jakarta, Indonesia</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║     PARTNER & CERTS          ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <section class="partner-section" id="about">
        <div class="section-inner">
            <p class="section-tag">Partnership & Certification</p>
            <h2 class="section-title">Global Trust. Local Precision.</h2>
            <div class="partner-content">
                <div class="partner-badge-box">
                    <p class="badge-title">Dataiku Certified System Integrator</p>
                    <p class="badge-desc">AllData International is the winner of the APJ System Integrator Award 2026 — the certified Dataiku execution partner for the Asia Pacific and Japan region.</p>
                    <div class="badge-graphic">
                        <span class="badge-year">2026</span>
                        <span class="badge-word">APJ System Integrator Award</span>
                        <span class="badge-year" style="margin-top:4px;">Dataiku</span>
                    </div>
                </div>
                <div>
                    <ul class="cert-list">
                        <li class="cert-item">
                            <div class="cert-badge">ISO<br>27001</div>
                            <div class="cert-info">
                                <div class="cert-title">Information Security Management</div>
                                <div class="cert-desc">Client data security upheld to the highest international standards</div>
                            </div>
                        </li>
                        <li class="cert-item">
                            <div class="cert-badge">ISO<br>9001</div>
                            <div class="cert-info">
                                <div class="cert-title">Quality Management System</div>
                                <div class="cert-desc">Consistent service quality and standardized delivery processes</div>
                            </div>
                        </li>
                        <li class="cert-item">
                            <div class="cert-badge">ISO<br>45001</div>
                            <div class="cert-info">
                                <div class="cert-title">Occupational Health & Safety</div>
                                <div class="cert-desc">Safety and health standards for our professional team</div>
                            </div>
                        </li>
                        <li class="cert-item">
                            <div class="cert-badge">ISO<br>14001</div>
                            <div class="cert-info">
                                <div class="cert-title">Environmental Management</div>
                                <div class="cert-desc">Environmentally responsible operations</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║     CTA / LEAD FORM          ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <section class="cta-section" id="contact">
        <div class="section-tag">Get Started Today</div>
        <h2>Catalyze Your Enterprise AI Potential</h2>
        <p>
            Consult our expert engineers about your data architecture for a personalized demonstration
            of how Dataiku can be seamlessly integrated into your specific IT environment.
        </p>
        <div class="cta-form-row">
            <input class="cta-input" type="text" placeholder="Full Name" />
            <input class="cta-input" type="email" placeholder="Corporate Email" />
            <input class="cta-input" type="text" placeholder="Company Name" />
            <button class="btn-cta" onclick="window.open('https://alldataint.com/contact_us/','_blank')">Book an Architecture Demo Session →</button>
        </div>
        <p class="cta-trust-note">
            Your information is processed under the <strong>ISO 27001</strong>-certified security framework and will never be shared with third parties.<br />
            © 2026 All Data International. Dataiku and the Dataiku logo are trademarks of Dataiku.
        </p>
    </section>


    <!-- ╔══════════════════════════════╗ -->
    <!-- ║           FOOTER             ║ -->
    <!-- ╚══════════════════════════════╝ -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="footer-logo-imgs">
                    <a href="<?= base_url('/'); ?>" class="logo-link">
                        <img src="<?= base_url('/assets/images/principals/adi_dataiku-light.png'); ?>"
                            alt="All Data International & Dataiku"
                            style="max-height: 80px; width: auto; display: block;">
                    </a>
                </div>
                <p>An ISO-certified systems integrator delivering the Dataiku enterprise AI platform to Indonesia's corporate ecosystem. ~95 dedicated professionals, serving 80% of banking and financial sector clients.</p>
                <div class="footer-contact">
                    <div>Grand Aries Niaga, Blok G1-2T</div>
                    <div>Jakarta 11620, Indonesia</div>
                    <div>+6221-29319396 / +6221-29319397</div>
                    <div>info@alldataint.com</div>
                </div>
            </div>
            <div class="footer-col">
                <h4>Platform</h4>
                <ul>
                    <li><a href="#solutions">Dataiku DSS</a></li>
                    <li><a href="#llm">LLM Mesh</a></li>
                    <li><a href="#solutions">Dataiku Govern</a></li>
                    <li><a href="#solutions">MLOps</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="https://alldataint.com/services/" target="_blank">Consulting</a></li>
                    <li><a href="https://alldataint.com/services/" target="_blank">Use Case Development</a></li>
                    <li><a href="https://alldataint.com/services/" target="_blank">Managed Services</a></li>
                    <li><a href="https://alldataint.com/services/" target="_blank">Maintenance Support</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Industry Solutions</h4>
                <ul>
                    <li><a href="https://alldataint.com/solutions/financial" target="_blank">Financial Services</a></li>
                    <li><a href="https://alldataint.com/solutions/fmcg/" target="_blank">FMCG & Retail</a></li>
                    <!-- <li><a href="https://alldataint.com/goverenment/" target="_blank">Government</a></li> -->
                    <li><a href="https://alldataint.com/about-us/" target="_blank">About Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© 2026 <strong style="color:rgba(255,255,255,0.7)">All Data International</strong>. All rights reserved. Dataiku and the Dataiku logo are trademarks of Dataiku.</span>
            <span>
                <a href="https://alldataint.com/legal/" target="_blank">Terms of Use</a> ·
                <a href="https://alldataint.com/legal/privacy/" target="_blank">Privacy Policy</a> ·
                <a href="https://alldataint.com/" target="_blank">alldataint.com</a>
            </span>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const id = a.getAttribute('href').slice(1);
                const el = document.getElementById(id);
                if (el) {
                    e.preventDefault();
                    el.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            nav.style.boxShadow = window.scrollY > 10 ? '0 2px 20px rgba(0,0,0,0.08)' : 'none';
        });
    </script>
</body>

</html>