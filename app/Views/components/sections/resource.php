<section id="principal-section" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-primary mb-2">RESOURCES</h6>
                <h2 class="mb-3">Stay Informed with Our Latest Updates</h2>
            </div>
        </div>

        <?php if (!empty($latestArticles)): ?>
            <div class="row g-4 mb-5">
                <?php foreach (array_slice($latestArticles, 0, 3) as $index => $article): ?>
                    <div class="col-12 col-md-6 col-lg-4" data-aos-delay="<?= $index * 100 ?>">
                        <article class="card h-100 border-0 shadow-sm hover-lift">
                            <?php if (!empty($article['thumbnail'])): ?>
                                <div class="card-img-wrapper" style="height: 180px; overflow: hidden;">
                                    <img
                                        src="<?= esc($article['thumbnail']) ?>"
                                        alt="<?= esc($article['title']) ?>"
                                        class="card-img-top h-100 w-100 object-fit-cover"
                                        loading="lazy">
                                </div>
                            <?php endif; ?>

                            <div class="card-body d-flex flex-column p-3 p-lg-4">
                                <div class="mb-2 d-flex flex-wrap">
                                    <?php if (!empty($article['categories'])): ?>
                                        <?php foreach (array_slice($article['categories'], 0, 2) as $cat): ?>
                                            <a href="<?= base_url('articles?category=' . $cat['id']) ?>" class="badge bg-primary-subtle text-primary text-decoration-none me-1 mb-1">
                                                <?= esc($cat['name']) ?>
                                            </a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                                <h5 class="card-title mb-2 fs-6 fs-lg-5">
                                    <a href="<?= esc($article['url']) ?>" class="text-dark text-decoration-none stretched-link" target="_blank">
                                        <?= esc($article['title']) ?>
                                    </a>
                                </h5>

                                <p class="card-text text-muted small mb-3 flex-grow-1 d-none d-md-block">
                                    <?= esc($article['excerpt']) ?>
                                </p>

                                <div class="d-flex flex-wrap align-items-center text-muted small mt-auto gap-2 gap-lg-3">
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        <span class="d-none d-sm-inline"><?= esc($article['date']) ?></span>
                                        <span class="d-inline d-sm-none"><?= date('d/m/y', strtotime($article['date'])) ?></span>
                                    </span>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-person me-1"></i>
                                        <span class="text-truncate" style="max-width: 100px;"><?= esc($article['author']) ?></span>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="justify-content-center text-center">
            <a href="<?= base_url('resources/articles') ?>" class="btn btn-primary rounded-pill px-4 btn-hover-up">
                Check out more Articles
            </a>
        </div>

    </div>
</section>