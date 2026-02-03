<section id="solutions-section" class="py-5">
    <div class="container" data-aos="fade-up">

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

        <div class="row align-items-center">

            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="solution-list">

                    <?php foreach ($solutions as $index => $solution): ?>
                        <div class="solution-item <?= $solution['active'] ? 'active' : '' ?>"
                            data-target="<?= $solution['id'] ?>"
                            data-image="<?= $solution['image'] ?>">


                            <div class="solution-header d-flex align-items-center gap-3">
                                <div class="icon-box">
                                    <img
                                        src="<?= $solution['icon'] ?>">
                                </div>
                                <h5 class="mb-0"><?= $solution['title'] ?></h5>
                            </div>


                            <div class="solution-content pt-2">

                                <div class="solution-full <?= $solution['active'] ? 'show' : '' ?>">
                                    <p class="mb-3 text-muted">
                                        <?= $solution['description'] ?>
                                    </p>
                                    <a href="<?= base_url('solutions/' . $solution['id']) ?>" class="btn btn-outline-primary btn-sm">
                                        Learn More <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>


                                <div class="solution-collapsed">

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="solution-home-image-wrapper">
                    <img src="<?= $solutions[0]['image'] ?>"
                        alt="<?= $solutions[0]['title'] ?> Solution"
                        class="img-fluid solution-image"
                        id="solution-main-image">
                </div>
            </div>
        </div>
    </div>
</section>