<?php
// Default values
$title = $title ?? 'Service Title';
$subtitle = $subtitle ?? 'SERVICE DETAILS';
$description = $description ?? 'Service description goes here.';
$image = $image ?? 'default-service.jpg';

$cta_text = $cta_text ?? 'Request this Service';
$cta_link = $cta_link ?? '#';
$bg_class = $bg_class ?? 'bg-white';

?>

<section class="small-hero py-5 <?= $bg_class ?> position-relative overflow-hidden">

    <?php if ($pattern): ?>
        <style>
            .pattern-overlay-custom {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image:
                    url('<?= base_url("assets/images/back-hero-small-1.png") ?>'),
                    url('<?= base_url("assets/images/back-hero-small-2.png") ?>');
                background-repeat: no-repeat;
                background-position: top left, bottom right;
                background-size: 400px auto, 400px auto;
                opacity: <?= $pattern_opacity ?>;
                z-index: 0;
                pointer-events: none;
            }
        </style>

        <div class="pattern-overlay-custom"></div>
    <?php endif; ?>

    <div class="container py-4 position-relative" style="z-index: 1;">

        <div class="row align-items-center g-5">
            <!-- Content -->
            <div class="col-lg-6">
                <div class="pe-lg-4 position-relative">
                    <!-- Subtitle -->
                    <div class="hero-subtitle text-uppercase text-primary fw-semibold">
                        <?= esc($subtitle) ?>
                    </div>

                    <!-- Title -->
                    <h1 class="display-5 fw-bold mb-4"><?= esc($title) ?></h1>

                    <!-- Description -->
                    <p class="lead text-muted mb-4"><?= esc($description) ?></p>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a href="<?= $cta_link ?>" class="btn btn-primary btn-lg rounded-pill px-4 py-2 shadow-sm">
                            <?= esc($cta_text) ?> <i class="bi bi-arrow-right ms-2"></i>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="<?= base_url('assets/images/' . $image) ?>"
                        alt="<?= esc($title) ?>"
                        class="img-fluid rounded-5 shadow-lg">

                    <!-- Simple decorative element -->
                    <div class="position-absolute bottom-0 end-0 translate-middle-y">
                        <div class="bg-white rounded-3 shadow-sm p-3 d-inline-block">
                            <i class="bi bi-award text-primary fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>