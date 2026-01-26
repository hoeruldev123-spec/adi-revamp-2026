<?php if (!empty($principal_slides) && is_array($principal_slides)): ?>

    <section class="partnership-section">
        <div class="container" data-aos="fade-up">

            <div class="text-center">
                <div class="section-label">PRINCIPAL</div>
                <h2 class="section-title">Driven by Strong Partnerships</h2>
                <p class="section-description">
                    Our collaboration with top principals drives innovation and growth, empowering businesses to move forward with confidence.
                </p>
            </div>

            <div id="partnershipCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">

                    <?php foreach ($principal_slides as $slideIndex => $slide): ?>
                        <div class="carousel-item <?= $slideIndex === 0 ? 'active' : '' ?>">
                            <div class="row g-4">
                                <?php foreach ($slide as $principal): ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="principal-card h-100">
                                            <div class="card-header mb-3">
                                                <div class="principal-logo">
                                                    <img src="<?= base_url('assets/images/principals/' . $principal['logo']) ?>"
                                                        alt="<?= esc($principal['alt']) ?>"
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="principal-description text-muted">
                                                    <?= esc($principal['description']) ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <div class="carousel-dots">
                    <?php foreach ($principal_slides as $index => $_): ?>
                        <button type="button"
                            class="carousel-dot <?= $index === 0 ? 'active' : '' ?>"
                            data-bs-target="#partnershipCarousel"
                            data-bs-slide-to="<?= $index ?>"
                            aria-label="Slide <?= $index + 1 ?>">
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>