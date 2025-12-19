<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?><?= $title ?? 'Contact' ?><?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="keywords" content="<?= $meta['keywords'] ?? '' ?>">
<meta name="description" content="<?= $meta['description'] ?? '' ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<!-- ===== CONTACT FORM SECTION ===== -->
<section id="contact-form-section" class="py-5">

    <div class="container">
        <div class="row g-5" data-aos="fade-up">


            <!-- Contact Information -->
            <div class="col-lg-6">

                <div class="pe-lg-4 position-relative mb-5">
                    <!-- Subtitle -->
                    <div class="hero-subtitle text-uppercase text-primary fw-semibold">
                        CONTACT US
                    </div>

                    <!-- Title -->
                    <h1 class="mb-4">How Can We Assist You<br>Today?</h1>

                    <!-- Description -->
                    <p class="lead text-muted mb-4">
                        Need some assistance? Feel free to send us a message using this form, and we'll respond promptly!
                    </p>


                </div>

                <!-- Head Office -->
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body p-4">

                        <div class="bg-primary bg-opacity-10 rounded-3 me-3 mb-2 d-inline-flex align-items-center justify-content-center"
                            style="width:48px;height:48px;">
                            <i class="bi bi-building text-primary fs-4"></i>
                        </div>
                        <div>
                            <h5 class=" mb-2">Head Office</h5>
                            <p class="text-muted mb-2">
                                Grand Aries Niaga Blok G1-2TJakarta 11620Indonesia
                            </p>

                        </div>

                    </div>
                </div>

                <div class="row gx-4 gy-4 mb-4">

                    <!-- Email -->
                    <div class="col-lg-6 ">
                        <div class="card border-0 shadow-sm rounded-4 h-100">
                            <div class="card-body p-4">
                                <div class="bg-primary bg-opacity-10 rounded-3 me-3 mb-2 d-flex align-items-center justify-content-center"
                                    style="width:48px;height:48px;">
                                    <i class="bi bi-envelope text-primary fs-4"></i>
                                </div>

                                <div>
                                    <h5 class=" mb-2">Email</h5>
                                    <a href="mailto:info@alldata.com" class="text-decoration-none">
                                        <p class="text-muted mb-1">info@alldata.com</p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call Us -->
                    <div class="col-lg-6">
                        <div class="card border-0 shadow-sm rounded-4 h-100">
                            <div class="card-body p-4">
                                <div class="bg-primary bg-opacity-10 rounded-3 me-3 mb-2 d-inline-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                                    <i class="bi bi-telephone text-primary fs-4"></i>
                                </div>
                                <div>
                                    <h5 class=" mb-2">Call Us</h5>
                                    <a href="tel:+622125239396" class="text-decoration-none">
                                        <p class="text-muted mb-1">
                                            +62 21-29319396 <br>
                                            +62 21-29319397</p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- WhatsApp -->
                <div class="card border-0 shadow-sm rounded-4 ">
                    <div class="card-body p-4">

                        <div class="bg-primary bg-opacity-10 rounded-3  me-3 mb-2 d-inline-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                            <i class="bi bi-whatsapp text-primary fs-4"></i>
                        </div>

                        <div>
                            <h5 class=" mb-2">WhatsApp</h5>

                            <p class="text-muted mb-4 small mb-0">We’re ready to assist and happy to connect!</p>
                        </div>

                        <div>
                            <a href="https://wa.me/6281233300382"
                                target="_blank"
                                class="btn btn-primary btn-lg rounded-pill">
                                Let’s Chat on WhatsApp <i class="bi bi-arrow-up-right ms-2"></i>
                            </a>
                        </div>


                    </div>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="card border-0  rounded-4 p-4 p-lg-5">


                    <form id="contactForm" action="<?= base_url('contact/submit') ?>" method="POST">
                        <div class="row g-4">
                            <!-- First Name -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control"
                                        id="firstName"
                                        name="first_name"
                                        placeholder="Enter first name"
                                        required>
                                    <label for="firstName">First Name</label>
                                </div>
                            </div>

                            <!-- Last Name -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control"
                                        id="lastName"
                                        name="last_name"
                                        placeholder="Enter last name"
                                        required>
                                    <label for="lastName">Last Name</label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Enter your email"
                                        required>
                                    <label for="email">Email Address</label>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                        placeholder="Enter phone number">
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>

                            <!-- Company -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control"
                                        id="company"
                                        name="company"
                                        placeholder="Enter company name">
                                    <label for="company">Company</label>
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text"
                                        class="form-control"
                                        id="subject"
                                        name="subject"
                                        placeholder="Enter subject"
                                        required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control"
                                        id="message"
                                        name="message"
                                        placeholder="Type your message here..."
                                        style="height: 150px"
                                        required></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                            </div>

                            <!-- Privacy Policy -->
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="privacyPolicy" required>
                                    <label class="form-check-label text-muted small" for="privacyPolicy">
                                        By submitting this form, you agree that we'll process data according to our
                                        <a href="<?= base_url('privacy-policy') ?>" class="text-decoration-none">Privacy Policy</a>.
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill">
                                    Send Message <i class="bi bi-arrow-up-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- ===== OUR LOCATIONS SECTION ===== -->
<section id="our-locations" class="py-5 bg-light">
    <div class="container py-5" data-aos="fade-up">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-primary mb-2">OUR LOCATIONS</h6>
                <h2 class="mb-3">Discover Our Global Offices</h2>

            </div>
        </div>

    </div>

</section>

<!-- ===== SOCIAL CONNECT SECTION ===== -->
<section id="social-connect" class="py-5" data-aos="fade-up">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-3">Connect With Us</h2>
                <p class="text-muted">Stay updated with our latest news and insights</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- LinkedIn -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4 hover-lift">
                    <div class="bg-linkedin bg-opacity-10 rounded-3 p-3 d-inline-block mb-4">
                        <i class="bi bi-linkedin text-linkedin fs-1"></i>
                    </div>
                    <h4 class=" mb-3">Connect on LinkedIn</h4>
                    <p class="text-muted mb-4">
                        Connect with us and get inspired by stories of growth and collaboration
                    </p>
                    <a href="https://linkedin.com/company/alldata"
                        target="_blank"
                        class="btn btn-outline-linkedin rounded-pill w-100">
                        Connect Now
                    </a>
                </div>
            </div>

            <!-- Instagram -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4 hover-lift">
                    <div class="bg-instagram bg-opacity-10 rounded-3 p-3 d-inline-block mb-4">
                        <i class="bi bi-instagram text-instagram fs-1"></i>
                    </div>
                    <h4 class=" mb-3">Follow on Instagram</h4>
                    <p class="text-muted mb-4">
                        Don't miss our latest updates. Follow us on Instagram and be part of our community.
                    </p>
                    <a href="https://instagram.com/alldata"
                        target="_blank"
                        class="btn btn-outline-instagram rounded-pill w-100">
                        Follow Us
                    </a>
                </div>
            </div>

            <!-- Facebook -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4 hover-lift">
                    <div class="bg-facebook bg-opacity-10 rounded-3 p-3 d-inline-block mb-4">
                        <i class="bi bi-facebook text-facebook fs-1"></i>
                    </div>
                    <h4 class=" mb-3">Like on Facebook</h4>
                    <p class="text-muted mb-4">
                        Follow us on Facebook for the latest news, events, and updates.
                    </p>
                    <a href="https://facebook.com/alldata"
                        target="_blank"
                        class="btn btn-outline-facebook rounded-pill w-100">
                        Like Page
                    </a>
                </div>
            </div>

            <!-- YouTube -->
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4 hover-lift">
                    <div class="bg-youtube bg-opacity-10 rounded-3 p-3 d-inline-block mb-4">
                        <i class="bi bi-youtube text-youtube fs-1"></i>
                    </div>
                    <h4 class=" mb-3">Subscribe on YouTube</h4>
                    <p class="text-muted mb-4">
                        Watch our tutorials, webinars, and success stories on our YouTube channel.
                    </p>
                    <a href="https://youtube.com/c/alldata"
                        target="_blank"
                        class="btn btn-outline-youtube rounded-pill w-100">
                        Subscribe
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>