<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="search-hero bg-gradient py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <div class="mb-4">
                    <i class="bi bi-search display-3 text-white mb-3 d-block"></i>
                    <h1 class="display-4 fw-bold text-white mb-3">Search</h1>
                    <p class="lead text-white-50 mb-4">Find solutions, services, and resources</p>
                </div>

                <form action="<?= base_url('search/results') ?>" method="get" class="search-form">
                    <div class="input-group input-group-lg shadow-lg rounded-pill overflow-hidden">
                        <span class="input-group-text bg-white border-0 ps-4 pe-2">
                            <i class="bi bi-search text-primary fs-5"></i>
                        </span>
                        <input
                            type="text"
                            class="form-control border-0 ps-2 py-3"
                            placeholder="What are you looking for?"
                            name="q"
                            id="searchInput"
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

<!-- Popular Searches -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4" data-aos="fade-up">
                <h3 class="mb-2">Popular Searches</h3>
                <p class="text-muted">Quick access to trending topics</p>
            </div>
        </div>

        <div class="row g-3 g-md-4">
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                <a href="<?= base_url('search/results?q=big+data') ?>" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-scale">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-primary-subtle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; border-radius: 50%;">
                                <i class="bi bi-database-fill text-primary fs-2"></i>
                            </div>
                            <h6 class="card-title mb-1">Big Data</h6>
                            <p class="card-text text-muted small mb-0">Analytics & Insights</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                <a href="<?= base_url('search/results?q=cloud') ?>" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-scale">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-success-subtle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; border-radius: 50%;">
                                <i class="bi bi-cloud-fill text-success fs-2"></i>
                            </div>
                            <h6 class="card-title mb-1">Cloud Solutions</h6>
                            <p class="card-text text-muted small mb-0">Infrastructure</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                <a href="<?= base_url('search/results?q=AI') ?>" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-scale">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-info-subtle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; border-radius: 50%;">
                                <i class="bi bi-cpu-fill text-info fs-2"></i>
                            </div>
                            <h6 class="card-title mb-1">AI & ML</h6>
                            <p class="card-text text-muted small mb-0">Intelligence</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                <a href="<?= base_url('search/results?q=integration') ?>" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-scale">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-warning-subtle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; border-radius: 50%;">
                                <i class="bi bi-diagram-3-fill text-warning fs-2"></i>
                            </div>
                            <h6 class="card-title mb-1">Integration</h6>
                            <p class="card-text text-muted small mb-0">Data Flow</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Browse Categories -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-12 text-center mb-4">
                <h3 class="mb-2">Browse by Category</h3>
                <p class="text-muted">Explore our content organized by topics</p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-body p-4">
                        <a href="<?= base_url('solutions') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-primary text-white rounded-3 p-3 me-3">
                                        <i class="bi bi-box-seam fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 text-dark">Solutions</h5>
                                        <p class="text-muted small mb-0">Industry-specific solutions</p>
                                    </div>
                                </div>
                                <i class="bi bi-chevron-right text-primary fs-4"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-body p-4">
                        <a href="<?= base_url('services') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-success text-white rounded-3 p-3 me-3">
                                        <i class="bi bi-gear fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 text-dark">Services</h5>
                                        <p class="text-muted small mb-0">Professional services</p>
                                    </div>
                                </div>
                                <i class="bi bi-chevron-right text-success fs-4"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-body p-4">
                        <a href="<?= base_url('articles') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-info text-white rounded-3 p-3 me-3">
                                        <i class="bi bi-newspaper fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 text-dark">Articles</h5>
                                        <p class="text-muted small mb-0">Latest insights & news</p>
                                    </div>
                                </div>
                                <i class="bi bi-chevron-right text-info fs-4"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-body p-4">
                        <a href="<?= base_url('company') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-secondary text-white rounded-3 p-3 me-3">
                                        <i class="bi bi-building fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1 text-dark">Company</h5>
                                        <p class="text-muted small mb-0">About us & partners</p>
                                    </div>
                                </div>
                                <i class="bi bi-chevron-right text-secondary fs-4"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Styles -->
<style>
    /* Hover Effects */
    .hover-scale {
        transition: all 0.3s ease;
    }

    .hover-scale:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
    }

    /* Icon Styles */
    .icon-circle {
        transition: all 0.3s ease;
    }

    .hover-scale:hover .icon-circle {
        transform: scale(1.1);
    }

    .icon-box {
        transition: all 0.3s ease;
    }

    .hover-scale:hover .icon-box {
        transform: scale(1.05);
    }

    /* Badge Subtle Colors */
    .bg-primary-subtle {
        background-color: rgba(13, 110, 253, 0.1) !important;
    }

    .bg-success-subtle {
        background-color: rgba(25, 135, 84, 0.1) !important;
    }

    .bg-info-subtle {
        background-color: rgba(13, 202, 240, 0.1) !important;
    }

    .bg-warning-subtle {
        background-color: rgba(255, 193, 7, 0.1) !important;
    }

    /* Search Input Focus */
    .search-form .form-control {
        font-size: 1.1rem;
    }

    .search-form .form-control:focus {
        box-shadow: none;
        outline: none;
    }

    .search-form .input-group:focus-within {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    /* Button Hover */
    .search-form .btn-primary {
        transition: all 0.3s ease;
    }

    .search-form .btn-primary:hover {
        transform: scale(1.02);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hover-scale:hover {
            transform: translateY(-3px);
        }

        .search-hero h1 {
            font-size: 2rem;
        }

        .icon-circle {
            width: 60px !important;
            height: 60px !important;
        }

        .icon-circle i {
            font-size: 1.5rem !important;
        }
    }

    /* Focus State */
    #searchInput:focus {
        border-color: transparent !important;
    }

    /* Smooth transitions */
    * {
        transition: all 0.2s ease-in-out;
    }

    a {
        text-decoration: none !important;
    }
</style>

<!-- Auto Focus Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        if (searchInput && window.innerWidth > 768) {
            setTimeout(() => searchInput.focus(), 300);
        }
    });
</script>

<?= $this->endSection() ?>