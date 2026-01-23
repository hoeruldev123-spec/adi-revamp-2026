<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="search-results-hero bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="<?= base_url('search/results') ?>" method="get" class="search-form">
                    <div class="input-group input-group-lg shadow rounded-pill overflow-hidden">
                        <span class="input-group-text bg-white border-0 ps-4">
                            <i class="bi bi-search text-primary fs-5"></i>
                        </span>
                        <input
                            type="text"
                            class="form-control border-0 ps-2"
                            placeholder="Search..."
                            name="q"
                            value="<?= esc($query) ?>"
                            autocomplete="off"
                            required>
                        <button class="btn btn-primary px-5" type="submit">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-1">Search Results</h4>
                        <p class="text-muted mb-0">
                            Found <strong><?= $results['total'] ?></strong> results for
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
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-box-seam me-2"></i>Solutions (<?= count($results['solutions']) ?>)
                        </h5>
                        <?php foreach ($results['solutions'] as $item): ?>
                            <div class="card mb-3 border-0 shadow-sm hover-lift">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <span class="badge bg-primary-subtle text-primary mb-2"><?= $item['category'] ?></span>
                                            <h6 class="card-title mb-2">
                                                <a href="<?= $item['url'] ?>" class="text-decoration-none text-dark">
                                                    <?= $item['title'] ?>
                                                </a>
                                            </h6>
                                            <p class="card-text text-muted mb-2"><?= $item['description'] ?></p>
                                            <a href="<?= $item['url'] ?>" class="text-primary small text-decoration-none">
                                                <?= $item['url'] ?> <i class="bi bi-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Services Results -->
                <?php if (!empty($results['services'])): ?>
                    <div class="col-12 mb-4">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-gear me-2"></i>Services (<?= count($results['services']) ?>)
                        </h5>
                        <?php foreach ($results['services'] as $item): ?>
                            <div class="card mb-3 border-0 shadow-sm hover-lift">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <span class="badge bg-success-subtle text-success mb-2"><?= $item['category'] ?></span>
                                            <h6 class="card-title mb-2">
                                                <a href="<?= $item['url'] ?>" class="text-decoration-none text-dark">
                                                    <?= $item['title'] ?>
                                                </a>
                                            </h6>
                                            <p class="card-text text-muted mb-2"><?= $item['description'] ?></p>
                                            <a href="<?= $item['url'] ?>" class="text-primary small text-decoration-none">
                                                <?= $item['url'] ?> <i class="bi bi-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Articles Results -->
                <?php if (!empty($results['articles'])): ?>
                    <div class="col-12 mb-4">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-newspaper me-2"></i>Articles (<?= count($results['articles']) ?>)
                        </h5>
                        <?php foreach ($results['articles'] as $item): ?>
                            <div class="card mb-3 border-0 shadow-sm hover-lift">
                                <div class="card-body">
                                    <div class="row align-items-start">
                                        <?php if (!empty($item['thumbnail'])): ?>
                                            <div class="col-md-2 mb-3 mb-md-0">
                                                <img src="<?= esc($item['thumbnail']) ?>"
                                                    alt="<?= esc($item['title']) ?>"
                                                    class="img-fluid rounded"
                                                    style="width: 100%; height: 100px; object-fit: cover;">
                                            </div>
                                            <div class="col-md-10">
                                            <?php else: ?>
                                                <div class="col-12">
                                                <?php endif; ?>
                                                <div class="d-flex gap-2 mb-2">
                                                    <span class="badge bg-info-subtle text-info"><?= $item['category'] ?></span>
                                                    <?php if (!empty($item['categories'])): ?>
                                                        <?php foreach (array_slice($item['categories'], 0, 2) as $cat): ?>
                                                            <span class="badge bg-secondary-subtle text-secondary"><?= esc($cat) ?></span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>

                                                <h6 class="card-title mb-2">
                                                    <a href="<?= $item['url'] ?>" class="text-decoration-none text-dark" target="_blank">
                                                        <?= $item['title'] ?>
                                                    </a>
                                                </h6>

                                                <p class="card-text text-muted mb-2 small"><?= $item['description'] ?></p>

                                                <?php if (isset($item['date']) && isset($item['author'])): ?>
                                                    <div class="d-flex align-items-center gap-3 mb-2 text-muted small">
                                                        <span><i class="bi bi-calendar3 me-1"></i><?= $item['date'] ?></span>
                                                        <span><i class="bi bi-person me-1"></i><?= $item['author'] ?></span>
                                                    </div>
                                                <?php endif; ?>

                                                <a href="<?= $item['url'] ?>" class="text-primary small text-decoration-none" target="_blank">
                                                    Read more <i class="bi bi-arrow-right ms-1"></i>
                                                </a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Pages Results -->
                        <?php if (!empty($results['pages'])): ?>
                            <div class="col-12 mb-4">
                                <h5 class="text-primary mb-3">
                                    <i class="bi bi-file-text me-2"></i>Pages (<?= count($results['pages']) ?>)
                                </h5>
                                <?php foreach ($results['pages'] as $item): ?>
                                    <div class="card mb-3 border-0 shadow-sm hover-lift">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="flex-grow-1">
                                                    <span class="badge bg-secondary-subtle text-secondary mb-2"><?= $item['category'] ?></span>
                                                    <h6 class="card-title mb-2">
                                                        <a href="<?= $item['url'] ?>" class="text-decoration-none text-dark">
                                                            <?= $item['title'] ?>
                                                        </a>
                                                    </h6>
                                                    <p class="card-text text-muted mb-2"><?= $item['description'] ?></p>
                                                    <a href="<?= $item['url'] ?>" class="text-primary small text-decoration-none">
                                                        <?= $item['url'] ?> <i class="bi bi-arrow-right ms-1"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    <?php else: ?>

                        <!-- No Results -->
                        <div class="col-12">
                            <div class="text-center py-5">
                                <i class="bi bi-search fs-1 text-muted mb-3"></i>
                                <h4 class="mb-3">No results found</h4>
                                <p class="text-muted mb-4">
                                    We couldn't find anything matching "<strong><?= esc($query) ?></strong>"
                                </p>

                                <div class="mb-4">
                                    <p class="mb-2"><strong>Suggestions:</strong></p>
                                    <ul class="list-unstyled text-muted">
                                        <li>• Check your spelling</li>
                                        <li>• Try different keywords</li>
                                        <li>• Try more general keywords</li>
                                        <li>• Browse our popular categories below</li>
                                    </ul>
                                </div>

                                <a href="<?= base_url('search') ?>" class="btn btn-primary">
                                    <i class="bi bi-arrow-left me-2"></i>Back to Search
                                </a>
                            </div>

                            <div class="row g-3 mt-4">
                                <div class="col-12">
                                    <h5 class="mb-3">Try browsing these sections:</h5>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="<?= base_url('solutions') ?>" class="btn btn-outline-primary w-100">
                                        <i class="bi bi-box-seam d-block fs-3 mb-2"></i>
                                        Solutions
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="<?= base_url('services') ?>" class="btn btn-outline-primary w-100">
                                        <i class="bi bi-gear d-block fs-3 mb-2"></i>
                                        Services
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="<?= base_url('articles') ?>" class="btn btn-outline-primary w-100">
                                        <i class="bi bi-newspaper d-block fs-3 mb-2"></i>
                                        Articles
                                    </a>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="<?= base_url('contact') ?>" class="btn btn-outline-primary w-100">
                                        <i class="bi bi-envelope d-block fs-3 mb-2"></i>
                                        Contact
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>
                    </div>
        </div>
</section>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
    }

    mark {
        padding: 2px 4px;
        border-radius: 3px;
    }
</style>

<?= $this->endSection() ?>