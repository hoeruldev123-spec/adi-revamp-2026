<?php
$uri = service('uri');

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
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
              class="ms-1 <?= ($segment1 == 'solutions') ? 'text-primary' : '' ?>">
              <path d="M7.646 10.854a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0-.708-.708L8 9.793 4.354 6.146a.5.5 0 1 0-.708.708z" />
            </svg>
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2 mt-1 mt-lg-2" aria-labelledby="solutionsDropdown">
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'fmcg') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('solutions/fmcg'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                  class="me-2 <?= ($segment2 == 'fmcg') ? 'text-white' : 'text-muted' ?>">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg>
                Retail & FMCG
              </a></li>

            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'telecom') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('solutions/telecom'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                  class="me-2 <?= ($segment2 == 'telecom') ? 'text-white' : 'text-muted' ?>">
                  <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                </svg>
                Telecom
              </a></li>

            <!-- <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'government') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('solutions/government'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                  class="me-2 <?= ($segment2 == 'government') ? 'text-white' : 'text-muted' ?>">
                  <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z" />
                  <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z" />
                </svg>
                Government
              </a></li> -->

            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'financial') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('solutions/financial'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                  class="me-2 <?= ($segment2 == 'financial') ? 'text-white' : 'text-muted' ?>">
                  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                </svg>
                Financial
              </a></li>
            <li>
              <hr class="dropdown-divider mx-3 mx-lg-4 my-2">
            </li>
            <li>
              <a class="dropdown-item py-2 px-3 px-lg-4 fw-semibold text-primary"
                href="<?= base_url('contact'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-2">
                  <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                </svg>
                Consult with Our Experts
              </a>
            </li>
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
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
              class="ms-1 <?= ($segment1 == 'company' || $segment1 == 'about') ? 'text-primary' : '' ?>">
              <path d="M7.646 10.854a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0-.708-.708L8 9.793 4.354 6.146a.5.5 0 1 0-.708.708z" />
            </svg>
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2 mt-1 mt-lg-2" aria-labelledby="companyDropdown">
            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'our-partners') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('company/our-partners'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                  class="me-2 <?= ($segment2 == 'our-partners') ? 'text-white' : 'text-muted' ?>">
                  <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z" />
                  <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z" />
                </svg>
                Our Partners
              </a></li>

            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'our-clients') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('company/our-clients'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                  class="me-2 <?= ($segment2 == 'our-clients') ? 'text-white' : 'text-muted' ?>">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg>
                Our Clients
              </a></li>

            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'our-competencies') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('company/our-competencies'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                  class="me-2 <?= ($segment2 == 'our-competencies') ? 'text-white' : 'text-muted' ?>">
                  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.46 1.46 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.46 1.46 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.46 1.46 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.46 1.46 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.46 1.46 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.46 1.46 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.46 1.46 0 0 1-2.105-.872zM8 10.93a2.93 2.93 0 1 1 0-5.86 2.93 2.93 0 0 1 0 5.858z" />
                </svg>
                Our Competencies
              </a></li>

            <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'about-us') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('company/about-us'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                  class="me-2 <?= ($segment2 == 'about-us') ? 'text-white' : 'text-muted' ?>">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                </svg>
                About Us
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
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
              class="ms-1 <?= ($segment1 == 'resources') ? 'text-primary' : '' ?>">
              <path d="M7.646 10.854a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0-.708-.708L8 9.793 4.354 6.146a.5.5 0 1 0-.708.708z" />
            </svg>
          </a>
          <ul class="dropdown-menu border-0 shadow-lg rounded-3 py-2 mt-1 mt-lg-2" aria-labelledby="resourcesDropdown">
            <li>
            <li>
              <a class="dropdown-item py-2 px-3 px-lg-4 <?= (uri_string() === 'resources/articles') ? 'active bg-primary text-white' : '' ?>"
                href="<?= base_url('resources/articles'); ?>">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                  class="me-2 <?= (uri_string() === 'resources/articles') ? 'text-white' : 'text-muted' ?>">
                  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                  <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                </svg>
                Articles
              </a>
            </li>
        </li>
        <!-- <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'careers') ? 'active bg-primary text-white' : '' ?>"
            href="<?= base_url('company/careers'); ?>">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
              class="me-2 <?= ($segment2 == 'careers') ? 'text-white' : 'text-muted' ?>">
              <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5" />
            </svg>
            Careers
          </a></li>

        <li><a class="dropdown-item py-2 px-3 px-lg-4 <?= ($segment2 == 'events') ? 'active bg-primary text-white' : '' ?>"
            href="<?= base_url('resources/events'); ?>">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
              class="me-2 <?= ($segment2 == 'events') ? 'text-white' : 'text-muted' ?>">
              <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
            </svg>
            Events
          </a></li> -->
      </ul>
      </li>

      </ul>

      <div class="d-none d-lg-flex align-items-center gap-4 ms-auto">
        <a href="<?= base_url('search'); ?>" class="nav-link text-dark position-relative">
          <i class="bi bi-search fs-5"></i>
        </a>

        <a href="<?= base_url('contact'); ?>" class="btn btn-primary rounded-pill px-4">
          Contact <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor">
            <path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
          </svg>

        </a>
      </div>

      <div class="d-lg-none mt-4 pt-3 border-top">

        <a href="<?= base_url('contact'); ?>" class="btn btn-primary rounded-pill w-100 mb-3 py-3 fw-semibold">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-2">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58z" />
          </svg>
          Contact Us
        </a>

        <div class="text-center">
          <small class="text-muted">Or call us directly:</small>
          <div class="mt-1">
            <a href="tel:+622178945678" class="text-primary text-decoration-none">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="me-1">
                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
              </svg>
              +62 21 7894 5678
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>