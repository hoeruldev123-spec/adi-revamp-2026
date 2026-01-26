<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="search-results-hero bg-light py-4 py-md-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="<?= base_url('search/results') ?>" method="get" class="search-form">
                    <div class="input-group input-group-lg shadow-sm rounded-pill overflow-hidden bg-white">
                        <span class="input-group-text bg-white border-0 ps-4 pe-2">
                            <i class="bi bi-search text-primary fs-5"></i>
                        </span>
                        <input
                            type="text"
                            class="form-control border-0 ps-2"
                            placeholder="Search for solutions, services, articles..."
                            name="q"
                            value="<?= esc($query) ?>"
                            autocomplete="off"
                            required>
                        <button class="btn btn-primary px-4 px-md-5 fw-semibold" type="submit">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="py-4 py-md-5">
    <div class="container">
        <div class="row">
            <!-- Results Header -->
            <div class="col-12 mb-4">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                    <div>
                        <h4 class="mb-1">Search Results</h4>
                        <p class="text-muted mb-0">
                            Found <strong class="text-primary"><?= $results['total'] ?></strong> result<?= $results['total'] != 1 ? 's' : '' ?> for
                            "<strong><?= esc($query) ?></strong>"
                        </p>
                    </div>
                    <a href="<?= base_url('search') ?>" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-2"></i>New Search
                    </a>
                </div>
            </div>

            <?php if ($results['total'] > 0): ?>

                <!-- Solutions Results -->
                <?php if (!empty($results['solutions'])): ?>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-box-seam text-primary fs-4 me-2"></i>
                            <h5 class="mb-0">Solutions</h5>
                            <span class="badge bg-primary ms-2"><?= count($results['solutions']) ?></span>
                        </div>

                        <div class="row g-3">
                            <?php foreach ($results['solutions'] as $item): ?>
                                <div class="col-12">
                                    <div class="card border-0 shadow-sm hover-card h-100">
                                        <div class="card-body p-3 p-md-4">
                                            <div class="d-flex flex-column">
                                                <div class="mb-2">
                                                    <span class="badge bg-primary-subtle text-primary small"><?= esc($item['category']) ?></span>
                                                </div>
                                                <h6 class="card-title mb-2">
                                                    <a href="<?= $item['url'] ?>" class="text-decoration-none text-dark stretched-link">
                                                        <?= $item['title'] ?>
                                                    </a>
                                                </h6>
                                                <p class="card-text text-muted mb-2 small"><?= $item['description'] ?></p>
                                                <div class="mt-auto pt-2">
                                                    <small class="text-primary">
                                                        Learn more <i class="bi bi-arrow-right ms-1"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Services Results -->
                <?php if (!empty($results['services'])): ?>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-gear text-success fs-4 me-2"></i>
                            <h5 class="mb-0">Services</h5>
                            <span class="badge bg-success ms-2"><?= count($results['services']) ?></span>
                        </div>

                        <div class="row g-3">
                            <?php foreach ($results['services'] as $item): ?>
                                <div class="col-12">
                                    <div class="card border-0 shadow-sm hover-card h-100">
                                        <div class="card-body p-3 p-md-4">
                                            <div class="d-flex flex-column">
                                                <div class="mb-2">
                                                    <span class="badge bg-success-subtle text-success small"><?= esc($item['category']) ?></span>
                                                </div>
                                                <h6 class="card-title mb-2">
                                                    <a href="<?= $item['url'] ?>" class="text-decoration-none text-dark stretched-link">
                                                        <?= $item['title'] ?>
                                                    </a>
                                                </h6>
                                                <p class="card-text text-muted mb-2 small"><?= $item['description'] ?></p>
                                                <div class="mt-auto pt-2">
                                                    <small class="text-success">
                                                        Explore service <i class="bi bi-arrow-right ms-1"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Articles Results -->
                <?php if (!empty($results['articles'])): ?>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-newspaper text-info fs-4 me-2"></i>
                            <h5 class="mb-0">Articles</h5>
                            <span class="badge bg-info ms-2"><?= count($results['articles']) ?></span>
                        </div>

                        <div class="row g-3">
                            <?php foreach ($results['articles'] as $item): ?>
                                <div class="col-12">
                                    <div class="card border-0 shadow-sm hover-card h-100">
                                        <div class="card-body p-3 p-md-4">
                                            <div class="row g-3">
                                                <!-- Thumbnail -->
                                                <?php if (!empty($item['thumbnail'])): ?>
                                                    <div class="col-md-3 col-lg-2">
                                                        <div class="ratio ratio-4x3 ratio-md-1x1">
                                                            <img
                                                                src="<?= esc($item['thumbnail']) ?>"
                                                                alt="<?= esc(strip_tags($item['title'])) ?>"
                                                                class="object-fit-cover rounded"
                                                                loading="lazy">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-lg-10">
                                                    <?php else: ?>
                                                        <div class="col-12">
                                                        <?php endif; ?>
                                                        <div class="d-flex flex-column h-100">
                                                            <!-- Badges -->
                                                            <div class="mb-2 d-flex flex-wrap gap-1">
                                                                <span class="badge bg-info-subtle text-info small">Articles</span>
                                                                <?php if (!empty($item['categories'])): ?>
                                                                    <?php foreach (array_slice($item['categories'], 0, 3) as $cat): ?>
                                                                        <span class="badge bg-secondary-subtle text-secondary small"><?= esc($cat) ?></span>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </div>

                                                            <!-- Title -->
                                                            <h6 class="card-title mb-2 fw-semibold">
                                                                <a href="<?= esc($item['url']) ?>" class="text-decoration-none text-dark stretched-link" target="_blank" rel="noopener">
                                                                    <?= strip_tags($item['title']) ?>
                                                                </a>
                                                            </h6>

                                                            <!-- Description -->
                                                            <p class="card-text text-muted mb-2 small lh-sm">
                                                                <?= strip_tags($item['description']) ?>
                                                            </p>

                                                            <!-- Meta Info -->
                                                            <?php if (isset($item['date']) && isset($item['author'])): ?>
                                                                <div class="mt-auto pt-2 d-flex flex-wrap align-items-center gap-2 gap-md-3 text-muted">
                                                                    <small class="d-flex align-items-center">
                                                                        <i class="bi bi-calendar3 me-1"></i>
                                                                        <?= esc($item['date']) ?>
                                                                    </small>
                                                                    <small class="d-flex align-items-center">
                                                                        <i class="bi bi-person me-1"></i>
                                                                        <?= esc($item['author']) ?>
                                                                    </small>
                                                                    <small class="text-info ms-auto">
                                                                        Read article <i class="bi bi-arrow-right ms-1"></i>
                                                                    </small>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                        </div>
                    <?php endif; ?>

                    <!-- Pages Results -->
                    <?php if (!empty($results['pages'])): ?>
                        <div class="col-12 mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-file-text text-secondary fs-4 me-2"></i>
                                <h5 class="mb-0">Pages</h5>
                                <span class="badge bg-secondary ms-2"><?= count($results['pages']) ?></span>
                            </div>

                            <div class="row g-3">
                                <?php foreach ($results['pages'] as $item): ?>
                                    <div class="col-12">
                                        <div class="card border-0 shadow-sm hover-card h-100">
                                            <div class="card-body p-3 p-md-4">
                                                <div class="d-flex flex-column">
                                                    <div class="mb-2">
                                                        <span class="badge bg-secondary-subtle text-secondary small"><?= esc($item['category']) ?></span>
                                                    </div>
                                                    <h6 class="card-title mb-2">
                                                        <a href="<?= $item['url'] ?>" class="text-decoration-none text-dark stretched-link">
                                                            <?= $item['title'] ?>
                                                        </a>
                                                    </h6>
                                                    <p class="card-text text-muted mb-2 small"><?= $item['description'] ?></p>
                                                    <div class="mt-auto pt-2">
                                                        <small class="text-secondary">
                                                            Visit page <i class="bi bi-arrow-right ms-1"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php else: ?>

                    <!-- No Results -->
                    <div class="col-12">
                        <div class="text-center py-5">
                            <div class="mb-4">
                                <i class="bi bi-search fs-1 text-muted d-block mb-3"></i>
                                <h4 class="mb-3">No results found</h4>
                                <p class="text-muted mb-0">
                                    We couldn't find anything matching "<strong><?= esc($query) ?></strong>"
                                </p>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2 fw-semibold">Suggestions:</p>
                                <ul class="list-unstyled text-muted small">
                                    <li>• Check your spelling</li>
                                    <li>• Try different or more general keywords</li>
                                    <li>• Browse our categories below</li>
                                </ul>
                            </div>

                            <a href="<?= base_url('search') ?>" class="btn btn-primary mb-4">
                                <i class="bi bi-arrow-left me-2"></i>Try New Search
                            </a>

                            <!-- Quick Links -->
                            <div class="row g-3 mt-4 justify-content-center">
                                <div class="col-12">
                                    <h5 class="mb-3">Browse by category:</h5>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="<?= base_url('solutions') ?>" class="btn btn-outline-primary w-100 py-3">
                                        <i class="bi bi-box-seam d-block fs-3 mb-2"></i>
                                        <small>Solutions</small>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="<?= base_url('services') ?>" class="btn btn-outline-primary w-100 py-3">
                                        <i class="bi bi-gear d-block fs-3 mb-2"></i>
                                        <small>Services</small>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="<?= base_url('articles') ?>" class="btn btn-outline-primary w-100 py-3">
                                        <i class="bi bi-newspaper d-block fs-3 mb-2"></i>
                                        <small>Articles</small>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="<?= base_url('contact') ?>" class="btn btn-outline-primary w-100 py-3">
                                        <i class="bi bi-envelope d-block fs-3 mb-2"></i>
                                        <small>Contact</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>
                    </div>
        </div>
</section>


<?= $this->endSection() ?>