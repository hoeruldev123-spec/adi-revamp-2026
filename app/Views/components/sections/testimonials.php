<section id="testimonials" class="py-5 bg-white">
    <div class="container">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-start mb-4 flex-wrap gap-3">
            <div>
                <h6 class="text-uppercase text-primary fw-semibold mb-2">Testimonials</h6>
                <h2 class="mb-3">What our Clients are Saying</h2>
                <p class="text-muted mb-0" style="max-width:520px">
                    Hear from our clients who’ve grown with us. Their stories show how collaboration,
                    trust, and innovation make every success possible.
                </p>
            </div>

            <!-- Navigation -->
            <div class="d-flex gap-2">
                <button class="testimonial-nav prev">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <button class="testimonial-nav next active">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Slider -->
        <div class="testimonial-slider-wrapper">
            <div class="testimonial-slider">

                <!-- Card -->
                <div class="testimonial-card">
                    <img src="<?= base_url('assets/images/client/Logo-BPJS.png') ?>" class="testimonial-logo" alt="">
                    <p class="testimonial-text">
                        “Lorem ipsum dolor sit amet consectetur. Lobortis hendrerit aliquam et congue urna in.
                        Lectus dolor elit egestas tincidunt amet risus.”
                    </p>

                    <div class="testimonial-footer">
                        <div class="avatar"></div>
                        <div>
                            <strong>Name</strong>
                            <small>Position</small>
                        </div>
                        <button class="play-btn">
                            <i class="bi bi-play-fill"></i>
                        </button>
                    </div>
                </div>

                <!-- Duplikat card -->
                <div class="testimonial-card">
                    <img src="<?= base_url('assets/images/client/Logo-BRI.png') ?>" class="testimonial-logo" alt="">
                    <p class="testimonial-text">
                        “Mauris aenean ac augue amet. feugiat eget tellus tristique nullam accumsan blandit.”
                    </p>
                    <div class="testimonial-footer">
                        <div class="avatar"></div>
                        <div>
                            <strong>Name</strong>
                            <small>Position</small>
                        </div>
                        <button class="play-btn">
                            <i class="bi bi-play-fill"></i>
                        </button>
                    </div>
                </div>

                <div class="testimonial-card">
                    <img src="<?= base_url('assets/images/client/Logo-PLN.png') ?>" class="testimonial-logo" alt="">
                    <p class="testimonial-text">
                        “Sed ut donec quis netus. Mauris aenean ac augue amet.”
                    </p>
                    <div class="testimonial-footer">
                        <div class="avatar"></div>
                        <div>
                            <strong>Name</strong>
                            <small>Position</small>
                        </div>
                        <button class="play-btn">
                            <i class="bi bi-play-fill"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<style>
    .testimonial-slider-wrapper {
        overflow: hidden;
    }

    .testimonial-slider {
        display: flex;
        gap: 24px;
        transition: transform .5s ease;
    }

    /* Card */
    .testimonial-card {
        flex: 0 0 calc(33.333% - 16px);
        background: #F1F4F7;
        border-radius: 28px;
        padding: 28px;
        position: relative;
    }

    /* Logo */
    .testimonial-logo {
        height: 36px;
        margin-bottom: 20px;
        object-fit: contain;
    }

    /* Text */
    .testimonial-text {
        font-size: 16px;
        color: #1f2937;
        line-height: 1.6;
        margin-bottom: 24px;
    }

    /* Footer */
    .testimonial-footer {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #d1d5db;
    }

    .testimonial-footer small {
        display: block;
        color: #6b7280;
    }

    /* Play Button */
    .play-btn {
        margin-left: auto;
        width: 40px;
        height: 40px;
        border-radius: 12px;
        border: none;
        background: #0d6efd;
        color: #fff;
    }

    /* Navigation */
    .testimonial-nav {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: none;
        background: #e5e7eb;
        color: #6b7280;
    }

    .testimonial-nav.active {
        background: #0d6efd;
        color: #fff;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .testimonial-card {
            flex: 0 0 calc(50% - 12px);
        }
    }

    @media (max-width: 576px) {
        .testimonial-card {
            flex: 0 0 100%;
        }
    }
</style>

<script>
    const slider = document.querySelector('.testimonial-slider');
    const cards = document.querySelectorAll('.testimonial-card');
    const next = document.querySelector('.testimonial-nav.next');
    const prev = document.querySelector('.testimonial-nav.prev');

    let index = 0;

    function visibleCount() {
        if (window.innerWidth < 576) return 1;
        if (window.innerWidth < 992) return 2;
        return 3;
    }

    function updateSlider() {
        const cardWidth = cards[0].offsetWidth + 24;
        slider.style.transform = `translateX(-${index * cardWidth}px)`;
    }

    next.addEventListener('click', () => {
        if (index < cards.length - visibleCount()) {
            index++;
            updateSlider();
        }
    });

    prev.addEventListener('click', () => {
        if (index > 0) {
            index--;
            updateSlider();
        }
    });

    window.addEventListener('resize', updateSlider);
</script>