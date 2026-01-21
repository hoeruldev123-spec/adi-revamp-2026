<section id="principal-section" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="pe-lg-4 position-relative">
                    <div class="hero-subtitle text-uppercase text-primary fw-semibold">
                        MORE PARTNERS
                    </div>

                    <h1 class="display-5 fw-bold mb-4">Driven by Strong Partnerships</h1>

                    <p class="lead text-muted mb-4">
                        Our collaboration with top principals drives innovation and growth, empowering businesses to move forward with confidence.
                    </p>

                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a href="<?= base_url('company/our_partners'); ?>" class="btn btn-primary btn-lg rounded-pill px-4 py-2 shadow-sm">
                            Explore Partners <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div id="principalCards">
                    <!-- Page 1 (First 6 cards) -->
                    <div class="principal-page active">
                        <div class="row g-4">
                            <div class="container">
                                <div class="row justify-content-center certifications-grid">

                                    <!-- Column 1 (down) -->
                                    <div class="col certification-col down">
                                        <div class="cert-track">
                                            <img src="<?= base_url('assets/images/principals/Logo-Alibaba-Cloud.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-AWS.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-ClickHouse.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Cloudera.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Confluent.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Creatio.png'); ?>">

                                            <!-- CLONE -->
                                            <img src="<?= base_url('assets/images/principals/Logo-Alibaba-Cloud.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-AWS.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-ClickHouse.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Cloudera.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Confluent.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Creatio.png'); ?>">
                                        </div>
                                    </div>

                                    <!-- Column 2 (up) -->
                                    <div class="col certification-col up">
                                        <div class="cert-track">
                                            <img src="<?= base_url('assets/images/principals/Logo-Dataiku.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Dell.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Denodo.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Hasura.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Helett Packard.png'); ?>">

                                            <img src="<?= base_url('assets/images/principals/Logo-Dataiku.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Dell.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Denodo.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Hasura.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Helett Packard.png'); ?>">
                                        </div>

                                    </div>

                                    <!-- Column 3 -->
                                    <div class="col certification-col down">
                                        <div class="cert-track">
                                            <img src="<?= base_url('assets/images/principals/Logo-Qlik.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-redis.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Snowflake.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Tableau.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-YugabyteDB.png'); ?>">

                                            <img src="<?= base_url('assets/images/principals/Logo-Qlik.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-redis.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Snowflake.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-Tableau.png'); ?>">
                                            <img src="<?= base_url('assets/images/principals/Logo-YugabyteDB.png'); ?>">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <style>
        .certifications-grid {
            gap: 10px;
        }

        /* Kolom */
        .certification-col {
            height: 380px;
            overflow: hidden;
        }


        /* Track icon */
        .cert-track {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 40px;
            padding: 0;
        }

        /* Animation */
        .certification-col.down .cert-track {
            animation: scrollDown 12s linear infinite;
        }

        .certification-col.up .cert-track {
            animation: scrollUp 12s linear infinite;
        }

        /* Icon */
        .cert-track img {
            max-height: 60px;
            width: auto;
            max-width: 60%;
            object-fit: contain;
            transition: transform .3s ease;
        }



        .certification-col::before,
        .certification-col::after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 70px;
            z-index: 2;
            pointer-events: none;
        }

        /* Fade atas */
        .certification-col::before {
            top: 0;
            background: linear-gradient(to bottom,
                    #ffffff 0%,
                    rgba(255, 255, 255, 0) 100%);
        }

        /* Fade bawah */
        .certification-col::after {
            bottom: 0;
            background: linear-gradient(to top,
                    #ffffff 0%,
                    rgba(255, 255, 255, 0) 100%);
        }


        /* Keyframes */
        @keyframes scrollDown {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-50%);
            }
        }

        @keyframes scrollUp {
            from {
                transform: translateY(-50%);
            }

            to {
                transform: translateY(0);
            }
        }


        /* Pause on hover */
        .certification-col:hover .cert-track {
            animation-play-state: paused;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .certification-col {
                height: 220px;
            }
        }

        @media (max-width: 768px) {
            .certifications-grid {
                gap: 15px;
            }

            .cert-track img {
                height: 35px;
            }
        }

        @media (max-width: 768px) {
            .certification-col {
                height: 260px;
            }

            .cert-track {
                padding: 25px 0;
                gap: 18px;
            }

            .cert-track img {
                max-height: 42px;
            }

            .certification-col::before,
            .certification-col::after {
                height: 45px;
            }
        }
    </style>

</section>