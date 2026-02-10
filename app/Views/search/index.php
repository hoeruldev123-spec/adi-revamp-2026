<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="search-hero bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <div class="mb-4 d-flex flex-column align-items-center">
                    <svg class="icon icon-search display-3 text-primary mb-3 d-block"
                        viewBox="0 0 16 16"
                        aria-hidden="true">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398l.098.115 3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>

                    <!-- <h1 class="display-4 fw-bold text-primary mb-3">Search</h1> -->
                    <p class="lead text-primary-50 mb-4">Find solutions, services, and resources</p>
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
                                <svg width="48" height="48" class="text-primary" viewBox="0 0 16 16" fill="currentColor">
                                    <path d=" M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223Z" />
                                    <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.711 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z" />
                                    <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z" />
                                    <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z" />
                                </svg>
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
                                <svg width="48" height="48" viewBox="0 0 16 16" fill="#198754">
                                    <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z" />
                                </svg>
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
                                <svg width="48" height="48" viewBox="0 0 16 16" fill="#0dcaf0">
                                    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                                    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
                                </svg>
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
                                <svg width="48" height="48" viewBox="0 0 16 16" fill="#ffc107">
                                    <path d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 15 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z" />
                                </svg>
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

        <div class="row g-3" data-aos="fade-up">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 hover-scale">
                    <div class="card-body p-4">
                        <a href="<?= base_url('solutions/fmcg') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-primary text-white rounded-3 me-3">
                                        <svg width="32" height="32" viewBox="0 0 16 16" fill="#ffffff">
                                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                        </svg>
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
                                    <div class="icon-box bg-success text-white rounded-3 me-3">
                                        <svg width="32" height="32" viewBox="0 0 16 16" fill="#ffffff">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                        </svg>
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
                        <a href="<?= base_url('resources/articles') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-info text-white rounded-3 me-3">
                                        <svg width="32" height="32" viewBox="0 0 16 16" fill="#ffffff">
                                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                                        </svg>
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
                        <a href="<?= base_url('company/about-us') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-secondary text-white rounded-3 me-3">
                                        <svg width="32" height="32" viewBox="0 0 16 16" fill="#ffffff">
                                            <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                                            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z" />
                                        </svg>
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

<?= $this->endSection() ?>