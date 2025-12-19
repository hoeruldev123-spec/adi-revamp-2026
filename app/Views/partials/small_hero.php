<?php
// Normalize data (safe defaults)
$title            = $title            ?? null;
$subtitle         = $subtitle         ?? null;
$description      = $description      ?? null;
$image            = $image            ?? null;

$cta_text         = $cta_text         ?? null;
$cta_link         = $cta_link         ?? null;
$cta_icon         = $cta_icon ?? 'bi bi-arrow-up-right';

$pattern          = $pattern          ?? true;
$pattern_opacity  = $pattern_opacity  ?? 1; // pakai 0–1 biar konsisten CSS
$bg_class         = $bg_class         ?? 'bg-white';
?>

<section class="small-hero py-5 <?= esc($bg_class) ?> position-relative overflow-hidden">

    <?php if ($pattern): ?>
        <style>
            .pattern-overlay-custom {
                position: absolute;
                inset: 0;
                background-image:
                    url('<?= base_url('assets/images/back-hero-small-1.png') ?>'),
                    url('<?= base_url('assets/images/back-hero-small-2.png') ?>');
                background-repeat: no-repeat;
                background-position: top left, bottom right;
                background-size: 400px auto, 400px auto;
                opacity: <?= esc($pattern_opacity) ?>;
                pointer-events: none;
                z-index: 0;
            }
        </style>

        <div class="pattern-overlay-custom"></div>
    <?php endif; ?>

    <div class="container py-4 position-relative z-1">

        <div class="row align-items-center g-5">
            <!-- Content -->
            <div class="<?= $image ? 'col-lg-6' : 'col-8' ?>">
                <div class="pe-lg-4">

                    <?php if ($subtitle): ?>
                        <div class="hero-subtitle text-uppercase text-primary fw-semibold mb-2">
                            <?= esc($subtitle) ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($title): ?>
                        <h1 class="mb-4"><?= esc($title) ?></h1>
                    <?php endif; ?>

                    <?php if ($description): ?>
                        <p class="lead text-muted mb-4">
                            <?= esc($description) ?>
                        </p>
                    <?php endif; ?>

                    <?php if ($cta_text && $cta_link): ?>
                        <div class="d-flex flex-wrap gap-3 align-items-center">
                            <a href="<?= esc($cta_link) ?>" class="btn-outline-pill">
                                <span class="btn-text"><?= esc($cta_text) ?></span>
                                <i class="<?= esc($cta_icon) ?> btn-icon"></i>
                            </a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <?php if ($image): ?>
                <div class="col-lg-6">
                    <div class="ratio ratio-4x3 shadow-lg rounded-5 overflow-hidden">
                        <img
                            src="<?= base_url('assets/images/' . $image) ?>"
                            alt="<?= esc($title ?? '') ?>"
                            class="w-100 h-100 object-fit-cover">
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>