<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?><?= $title ?? 'Articles | All Data International' ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="articles-hero bg-primary py-4 py-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white" data-aos="fade-up">
                <h1 class="display-5 display-lg-4 fw-bold mb-3">Articles & Insights</h1>
                <p class="lead mb-0 fs-6 fs-lg-5">Explore the latest trends, insights, and updates in data technology</p>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($latestArticles) && empty($search) && empty($selectedCategory) && empty($selectedTag) && $currentPage == 1): ?>
    <section class="py-4 py-lg-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="h3 fw-bold mb-3">Latest Articles</h2>
                    <div class="border-bottom border-primary" style="width: 60px; height: 3px;"></div>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach (array_slice($latestArticles, 0, 3) as $index => $article): ?>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
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
        </div>
    </section>
<?php endif; ?>

<!-- Articles List with Sidebar -->
<section class="py-4 py-lg-5 bg-light/50">
    <div class="container">
        <div class="row g-4">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="mb-4" data-aos="fade-up">
                    <h2 class="h4 fw-bold mb-2">More Articles</h2>
                    <div class="bg-primary" style="width: 50px; height: 3px; border-radius: 2px;"></div>
                </div>

                <!-- Active Filters -->
                <?php if (!empty($search) || !empty($selectedCategory) || !empty($selectedTag)): ?>
                    <div class="mb-4 p-3 bg-white border rounded shadow-sm" data-aos="fade-up">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div class="d-flex flex-wrap gap-2 align-items-center">
                                <span class="small fw-bold text-muted text-uppercase">Filters:</span>
                                <?php if (!empty($search)): ?>
                                    <span class="badge rounded-pill bg-light text-dark border">"<?= esc($search) ?>"</span>
                                <?php endif; ?>
                                <?php if (!empty($selectedCategory)): ?>
                                    <span class="badge rounded-pill bg-primary-subtle text-primary">Category</span>
                                <?php endif; ?>
                                <?php if (!empty($selectedTag)): ?>
                                    <span class="badge rounded-pill bg-secondary-subtle text-secondary">Tag</span>
                                <?php endif; ?>
                            </div>
                            <a href="<?= base_url('resources/articles') ?>" class="btn btn-sm btn-link text-decoration-none p-0 text-danger">
                                <i class="bi bi-x-circle me-1"></i>Clear All
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Articles List -->
                <?php if (!empty($articles)): ?>
                    <div class="article-list-wrapper">
                        <?php foreach ($articles as $article): ?>
                            <div class="col-12 mb-3" data-aos="fade-up">
                                <article class="card border-0 shadow-sm hover-card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-column flex-md-row">
                                            <!-- Thumbnail Container -->
                                            <?php if (!empty($article['thumbnail'])): ?>
                                                <div class="article-thumb-container">
                                                    <img src="<?= esc($article['thumbnail']) ?>"
                                                        alt="<?= esc($article['title']) ?>"
                                                        class="article-img"
                                                        loading="lazy">
                                                    <!-- Category Badge Overlay for Mobile -->
                                                    <div class="position-absolute top-0 start-0 p-2 d-md-none">
                                                        <?php if (!empty($article['categories'])): ?>
                                                            <span class="badge bg-primary shadow-sm"><?= esc($article['categories'][0]['name']) ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <!-- Content Container -->
                                            <div class="article-content p-3 p-md-4 flex-grow-1 d-flex flex-column">
                                                <!-- Category Desktop -->
                                                <div class="mb-2 d-none d-md-flex flex-wrap gap-1">
                                                    <?php foreach (array_slice($article['categories'], 0, 2) as $cat): ?>
                                                        <span class="badge bg-primary-subtle text-primary fw-normal">
                                                            <?= esc($cat['name']) ?>
                                                        </span>
                                                    <?php endforeach; ?>
                                                </div>

                                                <h5 class="article-title mb-2">
                                                    <a href="<?= esc($article['url']) ?>" class="text-dark text-decoration-none stretched-link">
                                                        <?= esc($article['title']) ?>
                                                    </a>
                                                </h5>

                                                <p class="article-excerpt text-muted mb-3 d-none d-sm-block">
                                                    <?= esc($article['excerpt']) ?>
                                                </p>

                                                <!-- Meta Info -->
                                                <div class="mt-auto pt-2 border-top-mobile">
                                                    <div class="d-flex flex-wrap align-items-center gap-3 text-muted small">
                                                        <span class="d-flex align-items-center">
                                                            <i class="bi bi-calendar3 me-1 text-primary"></i>
                                                            <?= date('d M Y', strtotime($article['date'])) ?>
                                                        </span>
                                                        <span class="d-flex align-items-center">
                                                            <i class="bi bi-person me-1 text-primary"></i>
                                                            <span class="text-truncate" style="max-width: 120px;"><?= esc($article['author']) ?></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <?php if ($totalPages > 1): ?>
                        <nav class="mt-5">
                            <ul class="pagination justify-content-center">
                                <?= $pagination ?>
                            </ul>
                        </nav>
                    <?php endif; ?>

                <?php else: ?>
                    <div class="text-center py-5 bg-white rounded shadow-sm">
                        <i class="bi bi-search display-4 text-muted mb-3"></i>
                        <h5>No results found</h5>
                        <p class="text-muted">Try adjusting your filters or search keywords.</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <aside class="sidebar-sticky">
                    <!-- Search -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h6 class="fw-bold mb-3">Search</h6>
                            <form action="<?= base_url('resources/articles') ?>" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control border-end-0" placeholder="Keywords..." name="search" value="<?= esc($search) ?>">
                                    <button class="btn btn-primary px-3" type="submit"><svg class="icon icon-search text-light d-block"
                                            viewBox="0 0 16 16"
                                            aria-hidden="true">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398l.098.115 3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h6 class="fw-bold mb-3">Categories</h6>
                            <div class="d-flex flex-column gap-1">
                                <?php foreach (array_slice($categories, 0, 8) as $cat): ?>
                                    <a href="?category=<?= $cat['id'] ?>" class="text-decoration-none d-flex justify-content-between align-items-center py-2 px-3 rounded category-link <?= $selectedCategory == $cat['id'] ? 'active' : '' ?>">
                                        <span class="small"><?= esc($cat['name']) ?></span>
                                        <span class="badge rounded-pill bg-light text-dark border fw-normal"><?= $cat['count'] ?></span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Tags Widget -->
                    <?php if (!empty($tags)): ?>
                        <div class="card border-0 shadow-sm mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <i class="bi bi-tags me-2 text-primary"></i>Popular Tags
                                </h5>
                                <div class="d-flex flex-wrap gap-2">
                                    <?php foreach (array_slice($tags, 0, 15) as $tag): ?>
                                        <a href="<?= base_url('resources/articles?tag=' . $tag['id']) ?>"
                                            class="badge text-decoration-none py-2 px-3 rounded-3 tag-item
                                            <?= $selectedTag == $tag['id']
                                                ? 'bg-primary text-white'
                                                : 'bg-secondary-subtle text-secondary' ?>">
                                            #<?= esc($tag['name']) ?>
                                        </a>

                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </aside>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>