<?php
$uri = service('uri');

// Helper function untuk mendapatkan segment dengan aman
function getSafeSegment($index)
{
  try {
    $uri = service('uri');
    return $uri->getSegment($index);
  } catch (\CodeIgniter\HTTP\Exceptions\HTTPException $e) {
    return null;
  }
}

$segment1 = getSafeSegment(1);
$segment2 = getSafeSegment(2);
?>

<nav class="navbar navbar-expand-lg navbar-white bg-white py-2 py-lg-3 sticky-top border-bottom shadow-sm" data-aos="fade-down">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center w-100 d-lg-none">
      <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url('assets/images/logo_coloured.png'); ?>" alt="All Data" height="32">
      </a>

      <div class="d-flex align-items-center gap-3">
        <a href="<?= base_url('search'); ?>" class="nav-link text-dark p-1">
          <i class="bi bi-search fs-5"></i>
        </a>

        <button class="navbar-toggler border-1 p-1" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
          aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>

    <a class="navbar-brand me-5 d-none d-lg-block" href="<?= base_url() ?>">
      <img src="<?= base_url('assets/images/logo_coloured.png'); ?>" alt="All Data" height="35">
    </a>

    <div class="collapse navbar-collapse mt-3 mt-lg-0" id="mainNavbar">
      <ul class="navbar-nav me-auto align-items-lg-center">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between 
            <?= ($segment1 == 'solutions') ? 'active text-primary fw-semibold' : 'text-dark'; ?>"
            href="<?= base_url('solutions') ?>"
            id="solutionsDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            <span>Solutions</span>
            <i class="bi bi-chevron-down ms-1 <?= ($segment1 == 'solutions') ? 'text-primary' : '' ?>"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2 mt-1 mt-lg-2" aria-labelledby="solutionsDropdown">
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'fmcg') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('solutions/fmcg'); ?>">
                <i class="bi bi-cart3 me-2 <?= ($segment2 == 'fmcg') ? 'text-white' : 'text-muted' ?>"></i>FMCG
              </a></li>
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'telecom') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('solutions/telecom'); ?>">
                <i class="bi bi-phone me-2 <?= ($segment2 == 'telecom') ? 'text-white' : 'text-muted' ?>"></i>Telecom
              </a></li>
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'government') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('solutions/government'); ?>">
                <i class="bi bi-building me-2 <?= ($segment2 == 'government') ? 'text-white' : 'text-muted' ?>"></i>Government
              </a></li>
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'financial') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('solutions/financial'); ?>">
                <i class="bi bi-bank me-2 <?= ($segment2 == 'financial') ? 'text-white' : 'text-muted' ?>"></i>Financial
              </a></li>
            <li>
              <hr class="dropdown-divider mx-3 mx-lg-4 my-2">
            </li>
            <li><a class="dropdown-item py-2 px-3 px-lg-4 fw-semibold text-primary"
                href="<?= base_url('contact'); ?>">
                <i class="bi bi-chat-dots me-2"></i>Consult with Our Experts
              </a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($segment1 == 'services') ? 'active text-primary fw-semibold' : 'text-dark'; ?>"
            href="<?= base_url('services'); ?>">
            Services
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between
            <?= ($segment1 == 'company' || $segment1 == 'about') ? 'active text-primary fw-semibold' : 'text-dark'; ?>"
            href="<?= base_url('company') ?>"
            id="companyDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            <span>Company</span>
            <i class="bi bi-chevron-down ms-1 <?= ($segment1 == 'company' || $segment1 == 'about') ? 'text-primary' : '' ?>"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2 mt-1 mt-lg-2" aria-labelledby="companyDropdown">
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'our_partners') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('company/our_partners'); ?>">
                <i class="bi bi-link-45deg me-2 <?= ($segment2 == 'our_partners') ? 'text-white' : 'text-muted' ?>"></i>Our Partners
              </a></li>
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'our_clients') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('company/our_clients'); ?>">
                <i class="bi bi-people me-2 <?= ($segment2 == 'our_clients') ? 'text-white' : 'text-muted' ?>"></i>Our Clients
              </a></li>
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'our_competencies') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('company/our_competencies'); ?>">
                <i class="bi bi-gear me-2 <?= ($segment2 == 'our_competencies') ? 'text-white' : 'text-muted' ?>"></i>Our Competencies
              </a></li>
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'about') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('company/about'); ?>">
                <i class="bi bi-info-circle me-2 <?= ($segment2 == 'about') ? 'text-white' : 'text-muted' ?>"></i>About Us
              </a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between
            <?= ($segment1 == 'resources') ? 'active text-primary fw-semibold' : 'text-dark'; ?>"
            href="<?= base_url('resources') ?>"
            id="resourcesDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            <span>Resources</span>
            <i class="bi bi-chevron-down ms-1 <?= ($segment1 == 'resources') ? 'text-primary' : '' ?>"></i>
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2 mt-1 mt-lg-2" aria-labelledby="resourcesDropdown">
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'articles') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('resources/articles'); ?>">
                <i class="bi bi-newspaper me-2 <?= ($segment2 == 'articles') ? 'text-white' : 'text-muted' ?>"></i>Articles
              </a></li>
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'careers') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('company/careers'); ?>">
                <i class="bi bi-briefcase me-2 <?= ($segment2 == 'careers') ? 'text-white' : 'text-muted' ?>"></i>Careers
              </a></li>
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'events') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('resources/events'); ?>">
                <i class="bi bi-calendar-event me-2 <?= ($segment2 == 'events') ? 'text-white' : 'text-muted' ?>"></i>Events
              </a></li>
          </ul>
        </li>

      </ul>

      <div class="d-none d-lg-flex align-items-center gap-4 ms-auto">
        <a href="<?= base_url('search'); ?>" class="nav-link text-dark position-relative">
          <i class="bi bi-search fs-5"></i>
        </a>

        <a href="<?= base_url('contact'); ?>" class="btn btn-primary rounded-pill px-4">
          Contact <i class="bi bi-chevron-right"></i>
        </a>
      </div>

      <div class="d-lg-none mt-4 pt-3 border-top">
        <button type="button" class="btn btn-outline-secondary w-100 mb-3 d-flex align-items-center justify-content-center"
          onclick="closeMobileMenu()">
          <i class="bi bi-x-lg me-2"></i> Close Menu
        </button>

        <a href="<?= base_url('contact'); ?>" class="btn btn-primary rounded-pill w-100 mb-3 py-3 fw-semibold">
          <i class="bi bi-telephone me-2"></i>Contact Us
        </a>

        <div class="text-center">
          <small class="text-muted">Or call us directly:</small>
          <div class="mt-1">
            <a href="tel:+622178945678" class="text-primary text-decoration-none">
              <i class="bi bi-phone me-1"></i>+62 21 7894 5678
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<style>
  .nav-link.dropdown-toggle::after {
    display: none !important;
  }

  @media (max-width: 991.98px) {
    .navbar {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }

    .navbar-collapse {
      background: white;
      border-radius: 0.5rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      margin-top: 0.5rem;
      max-height: 85vh;
      overflow-y: auto;
    }

    .nav-item {
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      padding: 0.5rem 0;
    }

    .nav-item:last-child {
      border-bottom: none;
    }

    .nav-link {
      padding: 0.75rem 0.5rem !important;
      font-size: 1.1rem;
    }

    .nav-link.dropdown-toggle::after {
      display: none !important;
    }

    .nav-link.dropdown-toggle .bi-chevron-down {
      font-size: 1rem;
      transition: transform 0.3s ease;
    }

    .nav-link.dropdown-toggle.show .bi-chevron-down {
      transform: rotate(180deg);
    }

    .dropdown-menu {
      border: none !important;
      box-shadow: none !important;
      background: rgba(0, 0, 0, 0.02);
      margin-left: 1rem;
      margin-top: 0.5rem;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      max-height: 0;



      overflow: hidden;
      transition: max-height 0.3s ease-out;
      display: block !important;
      /* Important untuk custom toggle */
    }

    .dropdown-menu.show {
      max-height: 500px;
      transition: max-height 0.4s ease-in;
    }

    .dropdown-item {
      padding: 0.5rem 0.75rem !important;
      font-size: 1rem;
      border-radius: 0.375rem;
      margin-bottom: 0.25rem;
    }

    .dropdown-item:last-child {
      margin-bottom: 0;
    }
  }

  @media (min-width: 992px) {
    .navbar {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
    }

    .nav-link {
      padding: 0.5rem 1rem !important;
      font-weight: 500;
      transition: all 0.2s ease;
    }

    .nav-link:hover {
      color: var(--bs-primary) !important;
    }

    .nav-link.dropdown-toggle .bi-chevron-down {
      font-size: 0.75rem;
      margin-left: 0.25rem;
      transition: transform 0.3s ease;
    }

    .nav-link.dropdown-toggle[aria-expanded="true"] .bi-chevron-down,
    .nav-link.dropdown-toggle.show .bi-chevron-down {
      transform: rotate(180deg);
    }

    .dropdown-menu {
      min-width: 220px;
      animation: fadeIn 0.2s ease;
    }

    .dropdown-item {
      transition: all 0.2s ease;
    }

    .dropdown-item:hover {
      background-color: rgba(var(--bs-primary-rgb), 0.1);
      padding-left: 1.5rem !important;
    }
  }

  .nav-link.active .bi-chevron-down {
    color: var(--bs-primary) !important;
  }

  .dropdown-item.active {
    position: relative;
    /* padding-left: 2.5rem !important; */
  }

  /* .dropdown-item.active::before {
    content: '';
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    width: 4px;
    height: 4px;
    background: currentColor;
    border-radius: 50%;
  } */

  .nav-link.active {
    position: relative;
    border-bottom: 2px solid var(--bs-primary);
  }

  @media (max-width: 991.98px) {
    .nav-link.active {
      border-bottom: none;
      background: rgba(var(--bs-primary-rgb), 0.1);
      border-radius: 0.375rem;
      padding-left: 1rem !important;
    }
  }

  .navbar-toggler {
    width: 40px;
    height: 40px;
    padding: 0;
    border: 1px solid rgba(0, 0, 0, 0.1) !important;
    border-radius: 0.375rem;
    transition: all 0.2s ease;
  }

  /* State awal - selalu reset */
  .navbar-toggler .navbar-toggler-icon {
    transition: transform 0.3s cubic-bezier(0.68, -0.55, 0.27, 1.55);
    transform: rotate(0deg);
  }

  /* Ketika menu terbuka (aria-expanded="true") */
  .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
    transform: rotate(90deg);
  }

  /* Rotate toggle icon saat menu terbuka
  .navbar-toggler.collapsed .navbar-toggler-icon {
    transition: transform 0.3s ease;
  }

  .navbar-toggler:not(.collapsed) .navbar-toggler-icon {
    transform: rotate(90deg);
  } */

  .navbar-toggler:hover {
    background: rgba(0, 0, 0, 0.02);
  }

  .navbar-toggler:focus {
    box-shadow: 0 0 0 3px rgba(var(--bs-primary-rgb), 0.1);
  }

  @media (max-width: 991.98px) {
    .navbar-collapse {
      transition: max-height 0.35s ease, opacity 0.25s ease;
      overflow: hidden;
    }

    .navbar-collapse:not(.show) {
      max-height: 0;
      opacity: 0;
      padding: 0 1rem;
    }

    .navbar-collapse.show {
      max-height: 1000px;
      opacity: 1;
      padding: 1rem;
    }
  }

  /* Close button styling */
  .btn-outline-secondary:hover {
    background-color: rgba(0, 0, 0, 0.05);
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {

    window.closeMobileMenu = function() {
      const navbarCollapse = document.getElementById('mainNavbar');
      const navbarToggler = document.querySelector('.navbar-toggler');
      const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);

      if (bsCollapse) {
        bsCollapse.hide();
      }
    };

    document.querySelectorAll('.nav-link:not(.dropdown-toggle), .dropdown-item').forEach(link => {
      link.addEventListener('click', function() {
        if (window.innerWidth < 992) {

          const navbarCollapse = document.getElementById('mainNavbar');
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) {
            bsCollapse.hide();
          }

          document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.remove('show');
          });
          document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.setAttribute('aria-expanded', 'false');
            toggle.classList.remove('show');
          });
        }
      });
    });

    // Handle window resize
    window.addEventListener('resize', function() {
      if (window.innerWidth >= 992) {

        const navbarCollapse = document.getElementById('mainNavbar');
        if (navbarCollapse.classList.contains('show')) {
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) {
            bsCollapse.hide();
          }
        }

        document.querySelectorAll('.dropdown-menu').forEach(menu => {
          menu.classList.remove('show');
        });
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
          toggle.setAttribute('aria-expanded', 'false');
          toggle.classList.remove('show');
        });
      }
    });
  });
</script>