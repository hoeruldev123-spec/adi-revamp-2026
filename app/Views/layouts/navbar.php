<!-- ===== NAVBAR START ===== -->
<?php $uri = service('uri'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 sticky-top" data-aos="fade-down">
  <div class="container d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center fw-bold text-primary" href="<?= base_url() ?>">
      <img src="<?= base_url('assets/images/alldata_logo.png'); ?>" alt="All Data" height="40" class="me-2">
    </a>

    <!-- Toggle Button (Mobile) -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto ms-3 align-items-lg-center">
        <!-- Solutions dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= ($uri->getSegment(1) == 'solutions') ? 'active text-primary' : ''; ?>" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Solutions
          </a>
          <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
            <li><a class="dropdown-item" href="<?= base_url('solutions/ai'); ?>">AI Solutions</a></li>
            <li><a class="dropdown-item" href="<?= base_url('solutions/data'); ?>">Data Integration</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= base_url('solutions'); ?>">All Solutions</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link <?= ($uri->getSegment(1) == 'services') ? 'active text-primary' : ''; ?>" href="<?= base_url('services'); ?>">Services</a></li>
        <li class="nav-item"><a class="nav-link <?= ($uri->getSegment(1) == 'company') ? 'active text-primary' : ''; ?>" href="<?= base_url('company'); ?>">Company</a></li>
        <li class="nav-item"><a class="nav-link <?= ($uri->getSegment(1) == 'resources') ? 'active text-primary' : ''; ?>" href="<?= base_url('resources'); ?>">Resources</a></li>
      </ul>

      <!-- Search & Contact -->
      <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
        <a href="#" class="text-secondary fs-5"><i class="bi bi-search"></i></a>
        <a href="<?= base_url('contact'); ?>" class="btn btn-primary rounded-pill px-4">Contact Us</a>
      </div>
    </div>
  </div>
</nav>
<!-- ===== NAVBAR END ===== -->