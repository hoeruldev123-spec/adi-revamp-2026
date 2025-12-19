<!-- File: principal.php -->
<section id="certifications-section" class="py-5 bg-white">
    <div class="container">
        <!-- Header Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-primary mb-2">OUR CERTIFICATIONS</h6>
                <h2 class="fw-bold mb-3">Building Trust Through Certified Excellence</h2>
                <p class="mb-5">
                    Certified for quality and trusted for excellence our credentials ensure every solution we deliver meets the highest industry standards.
                </p>
            </div>
        </div>


    </div>

    <div class="container">
        <div class="row justify-content-center certifications-grid">

            <!-- Column 1 (down) -->
            <div class="col certification-col down">
                <div class="cert-track">
                    <img src="<?= base_url('assets/images/certifications/certifications-1.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-2.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-3.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-4.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-5.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-6.png'); ?>">
                </div>
            </div>

            <!-- Column 2 (up) -->
            <div class="col certification-col up">
                <div class="cert-track">

                    <img src="<?= base_url('assets/images/certifications/certifications-4.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-7.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-8.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-9.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-10.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-11.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-12.png'); ?>">
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col certification-col down">
                <div class="cert-track">
                    <img src="<?= base_url('assets/images/certifications/certifications-1.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-2.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-3.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-4.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-5.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-6.png'); ?>">
                </div>
            </div>

            <!-- Column 4 -->
            <div class="col certification-col up">
                <div class="cert-track">
                    <img src="<?= base_url('assets/images/certifications/certifications-7.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-8.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-9.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-10.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-11.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-12.png'); ?>">
                </div>
            </div>

            <!-- Column 5 -->
            <div class="col certification-col down">
                <div class="cert-track">
                    <img src="<?= base_url('assets/images/certifications/certifications-4.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-5.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-6.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-1.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-2.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-3.png'); ?>">
                </div>
            </div>

            <!-- Column 6 -->
            <div class="col certification-col up">
                <div class="cert-track">
                    <img src="<?= base_url('assets/images/certifications/certifications-7.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-8.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-9.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-10.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-11.png'); ?>">
                    <img src="<?= base_url('assets/images/certifications/certifications-12.png'); ?>">
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
            position: relative;
        }

        /* Track icon */
        .cert-track {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            padding: 80px 0;
        }

        /* Icon */
        .cert-track img {
            height: 100px;
            object-fit: contain;
            transition: transform .3s ease;
        }

        .cert-track img:hover {
            transform: scale(1.15);
        }

        /* Animation */
        .certification-col.down .cert-track {
            animation: moveDown 10s linear infinite;
        }

        .certification-col.up .cert-track {
            animation: moveUp 10s linear infinite;
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
        @keyframes moveDown {
            0% {
                transform: translateY(-50%);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes moveUp {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-50%);
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

            .certification-col::before,
            .certification-col::after {
                height: 50px;
            }

            .cert-track img {
                height: 35px;
            }
        }
    </style>
</section>