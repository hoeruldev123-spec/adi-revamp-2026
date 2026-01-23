<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="search-hero bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h1 class="display-4 fw-bold mb-3">Search</h1>
                <p class="lead text-muted mb-4">Find solutions, services, and resources</p>

                <form action="<?= base_url('search/results') ?>" method="get" class="search-form">
                    <div class="input-group input-group-lg shadow-lg rounded-pill overflow-hidden">
                        <span class="input-group-text bg-white border-0 ps-4">
                            <i class="bi bi-search text-primary fs-5"></i>
                        </span>
                        <input
                            type="text"
                            class="form-control border-0 ps-2"
                            placeholder="What are you looking for?"
                            name="q"
                            id="searchInput"
                            autocomplete="off"
                            required>
                        <button class="btn btn-primary px-5 rounded-pill" type="submit">
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
        <div class="row g-4">
            <div class="col-12" data-aos="fade-up">
                <h3 class="mb-4">Popular Searches</h3>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <a href="<?= base_url('search/results?q=big+data') ?>" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-database-fill text-primary fs-1 mb-3"></i>
                            <h5 class="card-title">Big Data</h5>
                            <p class="card-text text-muted small">Analytics & Insights</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <a href="<?= base_url('search/results?q=cloud') ?>" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-cloud-fill text-primary fs-1 mb-3"></i>
                            <h5 class="card-title">Cloud Solutions</h5>
                            <p class="card-text text-muted small">Infrastructure & Services</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <a href="<?= base_url('search/results?q=AI') ?>" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-cpu-fill text-primary fs-1 mb-3"></i>
                            <h5 class="card-title">AI & ML</h5>
                            <p class="card-text text-muted small">Artificial Intelligence</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <a href="<?= base_url('search/results?q=integration') ?>" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-diagram-3-fill text-primary fs-1 mb-3"></i>
                            <h5 class="card-title">Integration</h5>
                            <p class="card-text text-muted small">Data Integration</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-5" data-aos="fade-up">
            <div class="col-12">
                <h3 class="mb-4">Browse by Category</h3>
            </div>

            <div class="col-md-6 mb-3">
                <div class="list-group">
                    <a href="<?= base_url('solutions') ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-box-seam text-primary me-2"></i>
                            <strong>Solutions</strong>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </a>
                    <a href="<?= base_url('services') ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-gear text-primary me-2"></i>
                            <strong>Services</strong>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="list-group">
                    <a href="<?= base_url('articles') ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-newspaper text-primary me-2"></i>
                            <strong>Articles</strong>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </a>
                    <a href="<?= base_url('company') ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-building text-primary me-2"></i>
                            <strong>Company</strong>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
    }

    .list-group-item {
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
        border-color: var(--bs-primary);
    }
</style>

<?= $this->endSection() ?>