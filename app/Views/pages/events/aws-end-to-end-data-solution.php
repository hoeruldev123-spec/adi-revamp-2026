<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Events End-to-End Data Solution | All Data International<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="py-5">
    <div class="container">

        <!-- HERO -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-7">
                <h1 class="fw-bold display-5">End-to-End Data Solution</h1>
                <p class="lead text-muted">Build scalable data pipelines & unlock business insights with modern data architecture.</p>
                <a href="https://forms.cloud.microsoft/r/imJjtmHiuH" target="_blank" class="btn btn-primary btn-lg mt-3">Register Now</a>
            </div>
        </div>

        <!-- OVERVIEW -->
        <div class="row mb-5">
            <div class="col-lg-10">
                <h2 class="fw-bold mb-3">Event Overview</h2>
                <p class="text-muted">
                    This event aimed at providing a comprehensive understanding of modern data architecture and end-to-end data management. Participants will gain insights into building scalable data pipelines, ensuring data quality, and leveraging data for business use cases such as Customer 360. The session will also cover important aspects of data governance and compliance with data protection regulations.
                </p>
            </div>
        </div>

        <!-- LEARNING -->
        <div class="row mb-5">
            <h2 class="fw-bold mb-4">What You Will Learn</h2>

            <div class="col-md-6 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-semibold">Medallion Architecture</h5>
                        <p class="text-muted small">Approach to modern data pipelines</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-semibold">Data Storage</h5>
                        <p class="text-muted small">S3, Redshift, Athena, RDS</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-semibold">Data Quality & Cleansing</h5>
                        <p class="text-muted small">Using AWS Glue</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-semibold">Customer 360</h5>
                        <p class="text-muted small">CLTV, segmentation, upselling</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-10">
                <h2 class="fw-bold mb-3">Full Materials</h2>
                <ul class="text-muted">
                    <li>Introduction to Medallion Architecture as an approach to modern data pipelines</li>
                    <li>Data storage strategies using Amazon S3, Redshift, Athena, and RDS</li>
                    <li>Data quality checking using AWS Glue</li>
                    <li>Data cleansing and transformation processes with AWS Glue</li>
                    <li>Implementation of data governance within organizations</li>
                    <li>Compliance with data protection regulations (PDP & GDPR)</li>
                    <li>Customer 360 use cases:
                        <ul>
                            <li>Up-selling & cross-selling</li>
                            <li>Customer Lifetime Value (CLTV)</li>
                            <li>Customer segmentation using SageMaker & QuickSight</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- SPEAKERS -->
        <div class="row rounded-3 mb-5 text-center justify-content-center py-5" style="background-color: #409dfd;">
            <h2 class="fw-bold text-white mb-4">Speakers</h2>

            <div class="row mb-5 text-center justify-content-center">

                <?php foreach ($speakers as $speaker): ?>
                    <div class="col-md-2 col-6 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">

                                <img
                                    src="<?= isset($speaker['photo'])
                                                ? base_url($speaker['photo'])
                                                : 'https://ui-avatars.com/api/?name=' . urlencode($speaker['name']) ?>"
                                    class="img-fluid rounded-3 mb-3"
                                    style="width:100px;height:100px;object-fit:cover;">

                                <h6 class="fw-semibold mb-0"><?= esc($speaker['name']) ?></h6>
                                <p class="text-muted small mb-0"><?= esc($speaker['title']) ?></p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>

        <!-- EVENT DETAILS -->
        <div class="row mb-5">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3">Event Details</h2>
                <ul class="list-unstyled text-muted">

                    <li class="d-flex align-items-center mb-2">
                        <!-- Calendar Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="me-2" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h.5A1.5 1.5 0 0 1 15 2.5v11A1.5 1.5 0 0 1 13.5 15h-11A1.5 1.5 0 0 1 1 13.5v-11A1.5 1.5 0 0 1 2.5 1H3V.5a.5.5 0 0 1 .5-.5zM2 5v8.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V5H2z" />
                        </svg>
                        <span>21 Mei 2026</span>
                    </li>

                    <li class="d-flex align-items-center mb-2">
                        <!-- Clock Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="me-2" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 1 .5.5v4l3 1.5a.5.5 0 1 1-.5.866l-3.25-1.625A.5.5 0 0 1 7.5 8V4a.5.5 0 0 1 .5-.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14z" />
                        </svg>
                        <span>13.00 WIB - Selesai</span>
                    </li>

                    <li class="d-flex align-items-center">
                        <!-- Location Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="me-2" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 1 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <span><strong>Amazon Web Services office</strong><br>Sinarmas MSIG Tower, 16th Floor, Jl. Jenderal Sudirman No.Kav. 21, South Jakarta City, Jakarta 12920
                        </span>
                    </li>

                </ul>
            </div>
        </div>

        <!-- REGISTER -->
        <section id="register" class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-6">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">

                                <h3 class="fw-bold mb-3 text-center">Register for the Event</h3>
                                <p class="text-muted text-center mb-4">
                                    Please prepare the following information before registering:
                                </p>

                                <!-- Preview Fields -->
                                <ul class="list-group list-group-flush mb-4">
                                    <li class="list-group-item">Full Name</li>
                                    <li class="list-group-item">Email Address</li>
                                    <li class="list-group-item">Phone Number</li>
                                    <li class="list-group-item">Company / Organization</li>
                                    <li class="list-group-item">Job Title</li>
                                </ul>

                                <!-- CTA Button -->
                                <div class="d-grid">
                                    <a href="https://forms.cloud.microsoft/r/imJjtmHiuH" target="_blank"
                                        class="btn btn-primary btn-lg">
                                        Register Now
                                    </a>
                                </div>

                                <p class="text-muted small text-center mt-3 mb-0">
                                    You will be redirected to Microsoft Forms
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</section>

<?= $this->include('components/sections/cta_section') ?>

<?= $this->endSection() ?>