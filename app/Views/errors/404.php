<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>404 Page Not Found | All Data International<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section>

    <div class="container d-flex align-items-center justify-content-center text-center">
        <div>
            <div class="error-code">
                <h1 class="display-1 fw-bold">404</h1>
            </div>

            <div class="error-text mb-2">
                Oops! Page Not Found
            </div>

            <p class="error-desc mx-auto mb-4">
                The page you’re looking for might have been moved, deleted,
                or never existed. Let’s get you back on track.
            </p>

            <a href="/" class="btn btn-primary btn-rounded">
                Back to Home
            </a>
        </div>
    </div>
</section>


<?= $this->endSection() ?>