<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="articles-hero bg-primary py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white" data-aos="fade-up">
                <h1 class="display-4 fw-bold mb-3">Articles & Insights</h1>
                <p class="lead mb-0">Explore the latest trends, insights, and updates in data technology</p>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($latestArticles) && empty($search) && empty($selectedCategory) && empty($selectedTag) && $currentPage == 1): ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="h3 fw-bold mb-3" data-aos="fade-up">Latest Articles</h2>
                    <div class="border-bottom border-primary" style="width: 60px; height: 3px;"></div>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach (array_slice($latestArticles, 0, 3) as $index => $article): ?>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                        <article class="card h-100 border-0 shadow-sm hover-lift">
                            <?php if (!empty($article['thumbnail'])): ?>
                                <div class="card-img-wrapper" style="height: 220px; overflow: hidden;">
                                    <img
                                        src="<?= esc($article['thumbnail']) ?>"
                                        alt="<?= esc($article['title']) ?>"
                                        class="card-img-top h-100 w-100 object-fit-cover"
                                        loading="lazy">
                                </div>
                            <?php endif; ?>

                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    <?php if (!empty($article['categories'])): ?>
                                        <?php foreach (array_slice($article['categories'], 0, 2) as $cat): ?>
                                            <a href="<?= base_url('articles?category=' . $cat['id']) ?>" class="badge bg-primary-subtle text-primary text-decoration-none me-1">
                                                <?= esc($cat['name']) ?>
                                            </a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                                <h5 class="card-title mb-3">
                                    <a href="<?= esc($article['url']) ?>" class="text-dark text-decoration-none stretched-link" target="_blank">
                                        <?= esc($article['title']) ?>
                                    </a>
                                </h5>

                                <p class="card-text text-muted small mb-3 flex-grow-1">
                                    <?= esc($article['excerpt']) ?>
                                </p>

                                <div class="d-flex align-items-center text-muted small mt-auto">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    <span class="me-3"><?= esc($article['date']) ?></span>
                                    <i class="bi bi-person me-1"></i>
                                    <span><?= esc($article['author']) ?></span>
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
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Main Content -->
            <div class="col-lg-8">

                <!-- Active Filters -->
                <?php if (!empty($search) || !empty($selectedCategory) || !empty($selectedTag)): ?>
                    <div class="mb-4 p-3 bg-light rounded">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                            <div>
                                <strong>Active Filters:</strong>
                                <?php if (!empty($search)): ?>
                                    <span class="badge bg-info ms-2">Search: <?= esc($search) ?></span>
                                <?php endif; ?>
                                <?php if (!empty($selectedCategory)): ?>
                                    <?php
                                    $catName = 'Category';
                                    foreach ($categories as $cat) {
                                        if ($cat['id'] == $selectedCategory) {
                                            $catName = $cat['name'];
                                            break;
                                        }
                                    }
                                    ?>
                                    <span class="badge bg-primary ms-2"><?= esc($catName) ?></span>
                                <?php endif; ?>
                                <?php if (!empty($selectedTag)): ?>
                                    <?php
                                    $tagName = 'Tag';
                                    foreach ($tags as $tag) {
                                        if ($tag['id'] == $selectedTag) {
                                            $tagName = $tag['name'];
                                            break;
                                        }
                                    }
                                    ?>
                                    <span class="badge bg-secondary ms-2"><?= esc($tagName) ?></span>
                                <?php endif; ?>
                            </div>
                            <a href="<?= base_url('resources/articles') ?>" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-x-circle me-1"></i>Clear Filters
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Articles List (10 items) -->
                <?php if (!empty($articles)): ?>
                    <div class="row g-3">
                        <?php foreach ($articles as $article): ?>
                            <div class="col-12" data-aos="fade-up">
                                <article class="card border-0 shadow-sm hover-card">
                                    <div class="card-body p-3 p-md-4">
                                        <div class="row g-3">
                                            <?php if (!empty($article['thumbnail'])): ?>
                                                <div class="col-md-4">
                                                    <div class="ratio ratio-16x9 rounded overflow-hidden">
                                                        <img
                                                            src="<?= esc($article['thumbnail']) ?>"
                                                            alt="<?= esc($article['title']) ?>"
                                                            class="object-fit-cover"
                                                            loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                <?php else: ?>
                                                    <div class="col-12">
                                                    <?php endif; ?>
                                                    <div class="d-flex flex-column h-100">
                                                        <!-- Categories -->
                                                        <div class="mb-2">
                                                            <?php if (!empty($article['categories'])): ?>
                                                                <?php foreach (array_slice($article['categories'], 0, 2) as $cat): ?>
                                                                    <a href="<?= base_url('articles?category=' . $cat['id']) ?>"
                                                                        class="badge bg-primary-subtle text-primary text-decoration-none me-1 small">
                                                                        <?= esc($cat['name']) ?>
                                                                    </a>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </div>

                                                        <!-- Title -->
                                                        <h5 class="card-title mb-2">
                                                            <a href="<?= esc($article['url']) ?>"
                                                                class="text-dark text-decoration-none stretched-link"
                                                                target="_blank">
                                                                <?= esc($article['title']) ?>
                                                            </a>
                                                        </h5>

                                                        <!-- Excerpt -->
                                                        <p class="card-text text-muted small mb-3 flex-grow-1">
                                                            <?= esc($article['excerpt']) ?>
                                                        </p>

                                                        <!-- Meta -->
                                                        <div class="d-flex align-items-center flex-wrap gap-3 text-muted small mt-auto">
                                                            <span class="d-flex align-items-center">
                                                                <i class="bi bi-calendar3 me-1"></i>
                                                                <?= esc($article['date']) ?>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <i class="bi bi-person me-1"></i>
                                                                <?= esc($article['author']) ?>
                                                            </span>
                                                            <?php if (!empty($article['tags'])): ?>
                                                                <span class="d-flex align-items-center">
                                                                    <i class="bi bi-tags me-1"></i>
                                                                    <?php foreach (array_slice($article['tags'], 0, 2) as $tag): ?>
                                                                        <a href="<?= base_url('articles?tag=' . $tag['id']) ?>"
                                                                            class="text-decoration-none text-muted me-1">
                                                                            #<?= esc($tag['name']) ?>
                                                                        </a>
                                                                    <?php endforeach; ?>
                                                                </span>
                                                            <?php endif; ?>
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
                        <nav aria-label="Articles pagination" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <?= $pagination ?>
                            </ul>
                        </nav>
                    <?php endif; ?>

                <?php else: ?>
                    <!-- No Articles -->
                    <div class="text-center py-5">
                        <i class="bi bi-inbox display-1 text-muted mb-3"></i>
                        <h4 class="mb-3">No Articles Found</h4>
                        <p class="text-muted mb-4">Try adjusting your search or filters</p>
                        <a href="<?= base_url('articles') ?>" class="btn btn-primary">
                            <i class="bi bi-arrow-left me-2"></i>View All Articles
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">

                    <!-- Search Widget -->
                    <div class="card border-0 shadow-sm mb-4" data-aos="fade-up">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <i class="bi bi-search me-2 text-primary"></i>Search Articles
                            </h5>
                            <form action="<?= base_url('resources/articles') ?>" method="get">
                                <div class="input-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search..."
                                        name="search"
                                        value="<?= esc($search) ?>">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <?php if (!empty($categories)): ?>
                        <div class="card border-0 shadow-sm mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <i class="bi bi-folder me-2 text-primary"></i>Categories
                                </h5>
                                <div class="list-group list-group-flush">
                                    <?php foreach (array_slice($categories, 0, 10) as $category): ?>
                                        <a href="<?= base_url('resources/articles?category=' . $category['id']) ?>"
                                            class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center
                                            px-3 py-2 rounded-3
                                            <?= $selectedCategory == $category['id'] ? 'bg-primary text-white fw-semibold' : '' ?>">
                                            <span><?= esc($category['name']) ?></span>
                                            <span class="badge <?= $selectedCategory == $category['id']
                                                                    ? 'bg-white text-primary'
                                                                    : 'bg-primary-subtle text-primary'
                                                                ?>">
                                                <?= $category['count'] ?>
                                            </span>

                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

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

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Styles -->
<style>
    .hover-lift,
    .hover-card {
        transition: all 0.3s ease;
    }

    .hover-lift:hover,
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
    }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        content: "";
    }

    .card-body {
        position: relative;
    }

    .object-fit-cover {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .bg-primary-subtle {
        background-color: rgba(13, 110, 253, 0.1) !important;
    }

    .bg-secondary-subtle {
        background-color: rgba(108, 117, 125, 0.1) !important;
    }

    .list-group-item.active {
        background-color: var(--bs-primary);
        border-color: var(--bs-primary);
        color: white;
    }

    .pagination .page-link {
        border-radius: 0.375rem;
        margin: 0 0.25rem;
        border: 1px solid #dee2e6;
    }

    .pagination .page-item.active .page-link {
        background-color: var(--bs-primary);
        border-color: var(--bs-primary);
    }

    .tag-item {
        transition: background-color .2s ease, color .2s ease;
    }

    .tag-item:hover:not(.bg-primary) {
        transform: translateY(-1px);
    }

    @media (max-width: 991px) {
        .sticky-top {
            position: relative !important;
            top: 0 !important;
        }

        .hover-lift:hover,
        .hover-card:hover {
            transform: translateY(-3px);
        }
    }
</style>

<?= $this->endSection() ?>