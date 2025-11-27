<!-- File: principal.php -->
<section id="principal-section" class="py-5 bg-light">
    <div class="container">
        <!-- Header Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold text-primary mb-4">PRINCIPAL</h2>
                <p class="lead fw-bold mb-3">Driven by Strong Partnerships</p>
                <p class="text-muted fs-5">
                    Our collaboration with top principals drives innovation and growth, empowering businesses to move forward with confidence.
                </p>
            </div>
        </div>

        <!-- Logo Carousel -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="logo-carousel-container position-relative">
                    <div class="logo-carousel-track" id="logoCarousel">
                        <!-- Logo akan di-generate oleh JavaScript -->
                    </div>

                    <!-- Gradient Overlay untuk efek fade -->
                    <div class="carousel-gradient left"></div>
                    <div class="carousel-gradient right"></div>
                </div>
            </div>
        </div>

        <!-- Principal Cards -->
        <div class="row g-4" id="principalCards">
            <!-- Qlik Card -->
            <div class="col-lg-4 col-md-6">
                <div class="principal-card h-100">
                    <div class="card-header mb-3">
                        <div class="principal-logo">
                            <img src="<?= base_url('assets/images/principals/Logo-Qlik.png') ?>" alt="Qlik" class="img-fluid">
                        </div>

                    </div>
                    <div class="card-body">
                        <p class="principal-description text-muted">
                            Empowering data-driven insights through advanced analytics and intuitive visualization.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Confluent Card -->
            <div class="col-lg-4 col-md-6">
                <div class="principal-card h-100">
                    <div class="card-header mb-3">
                        <div class="principal-logo">
                            <img src="<?= base_url('assets/images/principals/Logo-Confluent.png') ?>" alt="Confluent" class="img-fluid">
                        </div>

                    </div>
                    <div class="card-body">
                        <p class="principal-description text-muted">
                            Real-time data streaming powered by Apache Kafka for smarter business operations.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Dendo Card -->
            <div class="col-lg-4 col-md-6">
                <div class="principal-card h-100">
                    <div class="card-header mb-3">
                        <div class="principal-logo">
                            <img src="<?= base_url('assets/images/principals/Logo-Denodo.png') ?>" alt="Denodo" class="img-fluid">
                        </div>

                    </div>
                    <div class="card-body">
                        <p class="principal-description text-muted">
                            Seamless data virtualization enabling unified access across multiple systems and sources.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Snowflake Card -->
            <div class="col-lg-4 col-md-6">
                <div class="principal-card h-100">
                    <div class="card-header mb-3">
                        <div class="principal-logo">
                            <img src="<?= base_url('assets/images/principals/Logo-Snowflake.png') ?>" alt="Snowflake" class="img-fluid">
                        </div>

                    </div>
                    <div class="card-body">
                        <p class="principal-description text-muted">
                            Scalable cloud data platform for high-performance analytics and AI innovation.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Dataiku Card -->
            <div class="col-lg-4 col-md-6">
                <div class="principal-card h-100">
                    <div class="card-header mb-3">
                        <div class="principal-logo">
                            <img src="<?= base_url('assets/images/principals/Logo-Dataiku.png') ?>" alt="Dataiku" class="img-fluid">
                        </div>

                    </div>
                    <div class="card-body">
                        <p class="principal-description text-muted">
                            Collaborative AI platform to build, deploy, and manage enterprise machine learning.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cloudera Card -->
            <div class="col-lg-4 col-md-6">
                <div class="principal-card h-100">
                    <div class="card-header mb-3">
                        <div class="principal-logo">
                            <img src="<?= base_url('assets/images/principals/Logo-Cloudera.png') ?>" alt="Cloudera" class="img-fluid">
                        </div>

                    </div>
                    <div class="card-body">
                        <p class="principal-description text-muted">
                            Hybrid data platform integrating analytics, AI, and data management at scale.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>