<?php
/**
 * CONTOH EVENT DETAIL PAGE — integrasi Form Builder (Native CI4, Method 1).
 *
 * File ini dibuat sebagai contoh untuk testing manual form:
 *   - Form dirender otomatis dari Event ID via helper eventForm().
 *   - Tidak ada hardcode field; field dikelola dari Admin Dashboard (Forms).
 *
 * Event ID di bawah mengacu pada seeder FormBuilderSeeder:
 *   EVT-2026-DATAIKU-001  ->  Akselerasi Kapabilitas Enterprise AI dengan Dataiku
 *
 * Catatan: pemanggilan list -> detail dari resources/events.php akan dihubungkan
 * ke Form Builder pada tahap berikutnya. File ini murni contoh tampilan + testing.
 */
$event_code = $event_code ?? 'EVT-2026-DATAIKU-001';
?>

<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Akselerasi Kapabilitas Enterprise AI dengan Dataiku | All Data International<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="description" content="<?= esc($meta_description ?? 'Ikuti sesi Enterprise AI dengan Dataiku. Pelajari bagaimana AI dapat mempercepat transformasi bisnis Anda.') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<style>
    .event-hero {
        background: linear-gradient(135deg, #0f2c5c 0%, #1e90ff 100%);
        color: #fff;
    }
    .event-hero .badge-soft {
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        letter-spacing: 0.08em;
    }
    .event-meta span {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #6c757d;
    }
    .event-meta i { color: #008bf9; }
    .register-card {
        max-width: 520px;
        margin: 0 auto;
    }
</style>

<!-- ================= HERO ================= -->
<section class="event-hero py-5 position-relative overflow-hidden">
    <div class="container py-5 position-relative">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge badge-soft text-uppercase fw-semibold mb-3 px-3 py-2">
                    AI-POWERED. ENTERPRISE READY.
                </span>
                <h1 class="mb-3 display-5 fw-bold">
                    Akselerasi Kapabilitas Enterprise AI dengan Dataiku
                </h1>
                <p class="lead mb-4 opacity-75">
                    Temukan bagaimana Enterprise AI dapat mempercepat transformasi bisnis
                    dan bagaimana tim Anda membangun, mendeploy, serta mengelola machine
                    learning secara terpadu.
                </p>

                <div class="event-meta mb-4">
                    <span><i class="bi bi-calendar3"></i> Kamis, 25 September 2026 | 13.00 - 17.00 WIB</span>
                    <span><i class="bi bi-geo-alt"></i> Jakarta</span>
                    <span><i class="bi bi-ticket-detailed"></i> Gratis (slot terbatas)</span>
                </div>

                <a href="#register" class="btn btn-light rounded-pill px-4 btn-hover-up">
                    Daftar Sekarang <i class="bi bi-arrow-down ms-2"></i>
                </a>
            </div>

            <!-- Form Builder ditempatkan di dalam hero (PRD §5) -->
            <div class="col-lg-5">
                <div class="register-card bg-white p-4 rounded-4 shadow">
                    <h5 class="mb-3 text-dark">Daftar ke sesi ini</h5>
                    <?= eventForm($event_code) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= ABOUT ================= -->
<section class="py-5 bg-light">
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-primary mb-2">Tentang Event</h6>
                <h2 class="mb-3">Why Enterprise AI?</h2>
                <p class="text-muted">
                    Enterprise AI bukan sekadar model, tetapi seluruh alur kerja mulai dari data
                    preparation, governance, hingga deployment yang aman dan terukur. Sesi ini akan
                    menunjukkan praktik terbaik langsung dari tim Dataiku.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ================= REGISTER SECTION ================= -->
<section id="register" class="py-5 position-relative overflow-hidden">
    <div class="container py-3">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-primary mb-2">Registration</h6>
                <h2 class="mb-3">Daftar Sekarang</h2>
                <p class="text-muted mb-0">Isi form di bawah ini untuk mengamankan tempat Anda.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="register-card bg-white p-4 rounded-4 shadow-sm">
                    <?= eventForm($event_code) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
