<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?><?= $title ?? 'Contact | All Data International' ?><?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="keywords" content="<?= $meta['keywords'] ?? '' ?>">
<meta name="description" content="<?= $meta['description'] ?? '' ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="contact-form-section" class="py-5">
    <div class="container">
        <div class="row gx-4 gy-3" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="pe-lg-4 position-relative mb-4">
                    <div class="hero-subtitle text-uppercase text-primary fw-semibold">
                        CONTACT US
                    </div>
                    <h1 class="mb-4">How Can We Assist You<br>Today?</h1>
                    <p class="lead text-muted mb-4">
                        Need some assistance? Feel free to send us a message using this form, and we'll respond promptly!
                    </p>
                </div>

                <div class="col-lg-12">
                    <div class="card border-1 rounded-4 mb-4">
                        <div class="card-body p-4 d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="flex-grow-1">
                                    <div class="bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-3 d-flex align-items-center justify-content-center flex-shrink-0 mb-2"
                                        style="width:48px;height:48px;">
                                        <img src="<?= base_url('assets/icon-color/about-due-color.svg') ?>" alt="">
                                    </div>
                                </div>

                                <div>
                                    <h5 class="mb-1">Head Office</h5>
                                    <p class="text-muted mb-0">
                                        Grand Aries Niaga Blok G1-2T Jakarta 11620, Indonesia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row gx-4 gy-4 mb-4">
                    <div class="col-lg-6">
                        <div class="card border-1 rounded-4 h-100">
                            <div class="card-body p-4 d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <div class="bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-3 d-flex align-items-center justify-content-center flex-shrink-0 mb-2"
                                            style="width:48px;height:48px;">
                                            <img src="<?= base_url('assets/icon-color/email-outline.svg') ?>" alt="">
                                        </div>
                                    </div>

                                    <div>
                                        <h5 class="mb-2">Email</h5>
                                        <a href="mailto:info@alldata.com" class="text-decoration-none">
                                            <p class="text-muted mb-0">info@alldata.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border-1 rounded-4 h-100">
                            <div class="card-body p-4 d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <div class="bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-3 d-flex align-items-center justify-content-center flex-shrink-0 mb-2"
                                            style="width:48px;height:48px;">
                                            <img src="<?= base_url('assets/icon-color/phone-outline.svg') ?>" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-2">Call Us</h5>
                                        <a href="tel:+622125239396" class="text-decoration-none">
                                            <p class="text-muted mb-0">
                                                +62 21-29319396<br>
                                                +62 21-29319397
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card border-1 rounded-4">
                        <div class="card-body p-4 d-flex align-items-center gap-3">
                            <div class="flex-shrink-0">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 mb-2"
                                        style="width:48px;height:48px;">
                                        <img src="<?= base_url('assets/icon-color/info-whatsapp-filled.svg') ?>" alt="">
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="mb-1">WhatsApp</h5>
                                    <p class="text-muted mb-0 small">We're ready to assist and happy to connect!</p>
                                </div>

                                <div class="flex-shrink-0 mt-3">
                                    <a href="https://wa.me/6281233300382"
                                        target="_blank"
                                        class="btn btn-primary rounded-pill">
                                        Let's Chat on WhatsApp <svg class="ms-2" width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                            <path d="M14 2.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V4.707L3.354 14.854a.5.5 0 1 1-.708-.708L12.793 4H6.5a.5.5 0 0 1 0-1z"
                                                fill="currentColor" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 rounded-4 p-4 p-lg-5">

                    <!-- Success Message -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-2"></i>
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Error Message -->
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Validation Errors -->
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            <strong>Please fix the following errors:</strong>
                            <ul class="mb-0 mt-2">
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <h3 class="mb-4">Send us a message</h3>

                    <form id="contactForm" action="<?= base_url('contact/submit') ?>" method="POST">
                        <?= csrf_field() ?>

                        <div class="row g-4">

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control <?= session('errors.first_name') ? 'is-invalid' : '' ?>"
                                        id="firstName"
                                        name="first_name"
                                        placeholder="Enter first name"
                                        value="<?= old('first_name') ?>"
                                        required>
                                    <label for="firstName">First Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control <?= session('errors.last_name') ? 'is-invalid' : '' ?>"
                                        id="lastName"
                                        name="last_name"
                                        placeholder="Enter last name"
                                        value="<?= old('last_name') ?>"
                                        required>
                                    <label for="lastName">Last Name</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email"
                                        class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>"
                                        id="email"
                                        name="email"
                                        placeholder="Enter your email"
                                        value="<?= old('email') ?>"
                                        required>
                                    <label for="email">Email Address</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel"
                                        class="form-control <?= session('errors.phone') ? 'is-invalid' : '' ?>"
                                        id="phone"
                                        name="phone"
                                        placeholder="Enter phone number"
                                        value="<?= old('phone') ?>">
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control <?= session('errors.company') ? 'is-invalid' : '' ?>"
                                        id="company"
                                        name="company"
                                        placeholder="Enter company name"
                                        value="<?= old('company') ?>">
                                    <label for="company">Company</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control <?= session('errors.subject') ? 'is-invalid' : '' ?>"
                                        id="subject"
                                        name="subject"
                                        placeholder="Enter subject"
                                        value="<?= old('subject') ?>"
                                        required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control <?= session('errors.message') ? 'is-invalid' : '' ?>"
                                        id="message"
                                        name="message"
                                        placeholder="Type your message here..."
                                        style="height: 150px"
                                        required><?= old('message') ?></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="privacyPolicy" required>
                                    <label class="form-check-label text-muted small" for="privacyPolicy">
                                        By submitting this form, you agree that we'll process data according to our
                                        <a href="<?= base_url('privacy-policy') ?>" class="text-decoration-none">Privacy Policy</a>.
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary rounded-pill w-100" id="submitBtn">
                                    <span class="btn-text">Send Message</span>
                                    <span class="spinner-border spinner-border-sm d-none ms-2" role="status" aria-hidden="true"></span>
                                    <i class="bi bi-arrow-up-right ms-2 arrow-icon"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- JavaScript untuk handling form submit -->
            <script>
                document.getElementById('contactForm').addEventListener('submit', function() {
                    const btn = document.getElementById('submitBtn');
                    const btnText = btn.querySelector('.btn-text');
                    const spinner = btn.querySelector('.spinner-border');
                    const arrow = btn.querySelector('.arrow-icon');

                    btn.disabled = true;
                    btnText.textContent = 'Sending...';
                    spinner.classList.remove('d-none');
                    if (arrow) arrow.classList.add('d-none');
                });

                // Auto dismiss alerts after 5 seconds
                setTimeout(function() {
                    const alerts = document.querySelectorAll('.alert');
                    alerts.forEach(function(alert) {
                        const bsAlert = new bootstrap.Alert(alert);
                        bsAlert.close();
                    });
                }, 5000);
            </script>

        </div>
    </div>
</section>

<section id="our-locations" class="py-5 bg-white" data-aos="fade-up">
    <div class="container-fluid px-0">
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">

                <h6 class="text-uppercase text-primary mb-2">OUR LOCATIONS</h6>
                <h2 class="mb-5">Discover Our Offices</h2>
                <div class="map-wrapper position-relative overflow-hidden w-100">

                    <img
                        src="<?= base_url('assets/images/map-location.webp') ?>"
                        alt="Map Location"
                        class="map-bg w-100 d-block"
                        loading="lazy">

                    <div class="location-card position-absolute">
                        <h6 class="fw-semibold mb-2">PT. All Data International</h6>

                        <p class="text-muted small mb-3">
                            Jakarta Grand Aries Niaga Blok G1–2T, Jl. Taman Aries No.1,
                            RT.10/RW.3, Meruya Utara, Kec. Kembangan,
                            Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11620
                        </p>

                        <a href="https://maps.app.goo.gl/aeqgeW9h6VWeU8Va6" target="_blank"
                            rel="noopener noreferrer" class="btn btn-outline-primary btn-sm rounded-pill d-inline-flex align-items-center gap-2">
                            Show Detail Location
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="btn-icon">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                            </svg>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section id="social-connect" class="py-5" data-aos="fade-up">
    <div class="container py-5">
        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="card border-1 rounded-4 h-100 p-4">
                    <div class="d-inline-block mb-2">
                        <img src="<?= base_url('assets/icon-filled/info-linkedin-filled.svg') ?>" alt="Linkedin"
                            style="width: 40px; height: 40px;">
                    </div>
                    <h4 class=" mb-3">Connect on LinkedIn</h4>
                    <p class="text-muted mb-4">
                        Connect with us and get inspired by stories of growth and collaboration
                    </p>
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a href="https://id.linkedin.com/company/all-data-international"
                            target="_blank"
                            class="btn btn-outline-pill">
                            Connect Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card border-1 rounded-4 h-100 p-4">
                    <div class="d-inline-block mb-2">
                        <img src="<?= base_url('assets/icon-filled/info-instagram-filled.svg') ?>" alt="Instagram" style="width: 40px; height: 40px;">
                    </div>
                    <h4 class=" mb-3">Follow on Instagram</h4>
                    <p class="text-muted mb-4">
                        Don't miss our latest updates. Follow us on Instagram and be part of our community.
                    </p>
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a href="https://instagram.com/alldataint"
                            target="_blank"
                            class="btn btn-outline-pill">
                            Follow Us
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card border-1 rounded-4 h-100 p-4">
                    <div class="d-inline-block mb-2">
                        <img src="<?= base_url('assets/icon-filled/info-facebook-filled.svg') ?>" alt="Facebook" style="width: 40px; height: 40px;">
                    </div>
                    <h4 class=" mb-3">Like on Facebook</h4>
                    <p class="text-muted mb-4">
                        Follow us on Facebook for the latest news, events, and updates.
                    </p>
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a href="https://facebook.com/alldataint"
                            target="_blank"
                            class="btn btn-outline-pill">
                            Like Page
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>