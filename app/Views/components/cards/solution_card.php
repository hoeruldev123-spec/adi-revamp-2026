<!-- File: solutions.php -->
<section id="solutions-section" class="py-5">
    <div class="container">
        <!-- Header -->
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center mb-5">
                <h6 class="text-uppercase text-primary mb-2">Solutions</h6>
                <h2 class="mb-3">
                    Discover smart solutions designed to help many industries grow and innovate.
                </h2>
                <p class="text-muted">
                    Grow your business smarter with specialized solutions from the banking, telecom, insurance and government industries.
                </p>
            </div>
        </div>
        <!-- end header -->

        <div class="row align-items-center">
            <!-- LEFT : Solutions List -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="solution-list">
                    <?php
                    // Data solutions
                    $solutions = [
                        [
                            'id' => 'fmcg',
                            'title' => 'FMCG',
                            'icon' => 'bi-basket',
                            'description' => 'Optimize demand forecasting and supply chain with AI-powered analytics for smarter market decisions.',
                            'image' => base_url('assets/images/solutions-fmcg.webp'),
                            'active' => true
                        ],
                        [
                            'id' => 'telecom',
                            'title' => 'Telecom',
                            'icon' => 'bi-phone',
                            'description' => 'Enhance network performance and customer experience with real-time data analytics and predictive maintenance.',
                            'image' => base_url('assets/images/solutions-telecom.webp'),
                            'active' => false
                        ],
                        [
                            'id' => 'government',
                            'title' => 'Government',
                            'icon' => 'bi-building',
                            'description' => 'Transform public services with data-driven decision making and efficient resource allocation.',
                            'image' => base_url('assets/images/solutions-government.webp'),
                            'active' => false
                        ],
                        [
                            'id' => 'financial',
                            'title' => 'Financial',
                            'icon' => 'bi-bank',
                            'description' => 'Mitigate risks and detect fraud with advanced analytics and AI-powered security solutions.',
                            'image' => base_url('assets/images/solutions-financial.webp'), // Ganti dengan gambar yang sesuai
                            'active' => false
                        ]
                    ];
                    ?>

                    <?php foreach ($solutions as $index => $solution): ?>
                        <div class="solution-item <?= $solution['active'] ? 'active' : '' ?>"
                            data-target="<?= $solution['id'] ?>"
                            data-image="<?= $solution['image'] ?>">

                            <!-- Bagian atas: header dengan icon dan title -->
                            <div class="solution-header d-flex align-items-center gap-3">
                                <div class="icon-box">
                                    <i class="bi <?= $solution['icon'] ?>"></i>
                                </div>
                                <h5 class="mb-0"><?= $solution['title'] ?></h5>
                            </div>

                            <!-- Bagian bawah: konten deskripsi dan tombol -->
                            <div class="solution-content pt-2">
                                <!-- Full content (visible when active) -->
                                <div class="solution-full <?= $solution['active'] ? 'show' : '' ?>">
                                    <p class="mb-3 text-muted">
                                        <?= $solution['description'] ?>
                                    </p>
                                    <a href="<?= base_url('solutions/' . $solution['id']) ?>" class="btn btn-outline-primary btn-sm">
                                        Learn More <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>

                                <!-- Collapsed content (visible when inactive) -->
                                <div class="solution-collapsed">

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- RIGHT : Image Card -->
            <div class="col-lg-7">
                <div class="solution-image-wrapper">
                    <img src="<?= $solutions[0]['image'] ?>"
                        alt="<?= $solutions[0]['title'] ?> Solution"
                        class="img-fluid solution-image"
                        id="solution-main-image">
                </div>
            </div>
        </div>
    </div>
</section>