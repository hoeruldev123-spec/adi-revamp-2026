<!-- ===== NAVBAR START ===== -->
<?php $uri = service('uri'); ?>
<nav class="navbar navbar-expand-lg navbar-white bg-white py-3 sticky-top border-bottom" data-aos="fade-down">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand me-5" href="<?= base_url() ?>">
      <img src="<?= base_url('assets/images/logo_coloured.png'); ?>" alt="All Data" height="35">
    </a>

    <!-- Toggle Button (Mobile) -->
    <button class="navbar-toggler border-1" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto align-items-center">



        <!-- Solutions dengan dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'solutions') ? 'active text-primary fw-semibold' : 'text-dark'; ?>"
            href="<?= base_url('solutions') ?>"
            id="solutionsDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Solutions
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2" aria-labelledby="solutionsDropdown">
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('solutions/fmcg'); ?>">FMCG</a></li>
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('solutions/telecom'); ?>">Telecom</a></li>
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('solutions/government'); ?>">Government</a></li>
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('solutions/financial'); ?>">Financial</a></li>
            <li>
              <hr class="dropdown-divider mx-4 my-2">
            </li>
            <li><a class="dropdown-item py-2 px-4 fw-semibold text-primary"
                href="<?= base_url('contact'); ?>">
                <i class="bi bi-chat-dots me-2"></i>Consult with Our Experts
              </a></li>
          </ul>
        </li>

        <!-- Services - Tanpa dropdown -->
        <li class="nav-item">
          <a class="nav-link <?= ($uri->getSegment(1) == 'services') ? 'active text-primary fw-semibold' : 'text-dark'; ?>"
            href="<?= base_url('services'); ?>">
            Services
          </a>
        </li>

        <!-- Company dengan dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'company' || $uri->getSegment(1) == 'about') ? 'active text-primary fw-semibold' : 'text-dark'; ?>"
            href="<?= base_url('company') ?>"
            id="companyDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Company
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2" aria-labelledby="companyDropdown">
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('company/our_partners'); ?>">Our Partners</a></li>
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('company/our_clients'); ?>">Our Clients</a></li>
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('company/our_competencies'); ?>">Our Competencies</a></li>
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('company/about'); ?>">About Us</a></li>

          </ul>
        </li>

        <!-- Resources dengan dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'resources') ? 'active text-primary fw-semibold' : 'text-dark'; ?>"
            href="<?= base_url('resources') ?>"
            id="resourcesDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Resources
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2" aria-labelledby="resourcesDropdown">
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('resources/blog'); ?>">Blog</a></li>
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('company/careers'); ?>">Careers</a></li>
            <li><a class="dropdown-item py-2 px-4" href="<?= base_url('resources/events'); ?>">Events</a></li>
          </ul>
        </li>

      </ul>

      <!-- Search Icon (Q) di gambar -->
      <div class="d-flex align-items-center gap-4 ms-auto">
        <!-- Search Icon/Link -->
        <a href="<?= base_url('search'); ?>" class="nav-link text-dark position-relative">
          <i class="bi bi-search fs-5"></i>

        </a>

        <!-- Contact Button -->
        <a href="<?= base_url('contact'); ?>" class="btn btn-primary rounded-pill px-4">
          Contact <i class="bi bi-chevron-right"></i>
        </a>
      </div>
    </div>
  </div>
</nav>
<!-- ===== NAVBAR END ===== -->