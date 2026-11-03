<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>404 Page Not Found | All Data International<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="d-flex align-items-center">
    <div class="container my-5 py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 text-center">
                <div class="error-code mb-3">
                    <h1 class="display-1 fw-bold text-primary">404</h1>
                </div>

                <div class="error-text h2 mb-3 text-secondary">
                    Oops! Page Not Found
                </div>

                <p class="error-desc lead text-muted mb-4 mx-auto" style="max-width: 600px;">
                    The page you're looking for might have been moved, deleted,
                    or never existed. Let's get you back on track.
                </p>

                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="/" class="btn btn-primary btn-lg rounded-pill">
                        Back to Home
                    </a>

                </div>


            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>