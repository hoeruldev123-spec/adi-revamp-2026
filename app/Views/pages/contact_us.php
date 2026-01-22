<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?><?= $title ?? 'Contact' ?><?= $this->endSection() ?>

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
                                    <div class="bg-primary bg-opacity-10 rounded-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width:48px;height:48px;">
                                        <i class="bi bi-building text-primary fs-4"></i>
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
                                        <div class="bg-primary bg-opacity-10 rounded-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                            style="width:48px;height:48px;">
                                            <i class="bi bi-envelope text-primary fs-4"></i>
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
                                        <div class="bg-primary bg-opacity-10 rounded-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                            style="width:48px;height:48px;">
                                            <i class="bi bi-telephone text-primary fs-4"></i>
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
                                    <div class="bg-primary bg-opacity-10 rounded-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width:48px;height:48px;">
                                        <i class="bi bi-whatsapp text-primary fs-4"></i>
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
                                        Let's Chat on WhatsApp <i class="bi bi-arrow-up-right ms-2"></i>
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
                                <button type="submit" class="btn btn-primary rounded-pill" id="submitBtn">
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

<section id="our-locations" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12 text-center">

                <h6 class="text-uppercase text-primary mb-2">OUR LOCATIONS</h6>
                <h2 class="mb-5">Discover Our Offices</h2>
                <div class="position-relative overflow-hidden shadow-sm" style="height: 400px; background-color: #0dcaf0;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.544637975645!2d106.7513134!3d-6.1916294999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7e1905d9f27%3A0xad148812b785f3ee!2sPT.%20All%20Data%20International!5e0!3m2!1sen!2sid!4v1767847866575!5m2!1sen!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="h-100 w-100"
                        style="border:0; filter: invert(95%) hue-rotate(180deg) saturate(150%) brightness(115%) contrast(90%) sepia(15%);">
                    </iframe>
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
                    <div class="bg-linkedin bg-opacity-10 rounded-3 d-inline-block mb-2">
                        <i class="bi bi-linkedin text-linkedin text-primary fs-1"></i>
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
                    <div class="bg-instagram bg-opacity-10 rounded-3 d-inline-block mb-2">
                        <i class="bi bi-instagram text-instagram text-primary fs-1"></i>
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
                    <div class="bg-facebook bg-opacity-10 rounded-3 d-inline-block mb-2">
                        <i class="bi bi-facebook text-facebook text-primary fs-1"></i>
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