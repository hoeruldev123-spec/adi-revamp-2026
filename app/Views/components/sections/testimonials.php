<section id="testimonials" class="py-5 bg-white">
    <div class="container">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-start mb-4 flex-wrap gap-3">
            <div>
                <h6 class="text-uppercase text-primary fw-semibold mb-2">Testimonials</h6>
                <h2 class="mb-3">What our Clients are Saying</h2>
                <p class="text-muted mb-0" style="max-width:520px">
                    Hear from our clients who’ve grown with us. Their stories show how collaboration,
                    trust, and innovation make every success possible.
                </p>
            </div>

            <div class="d-flex gap-2">
                <button class="testimonial-nav prev active">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <button class="testimonial-nav next active">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- SLIDER -->
        <div class="testimonial-slider-wrapper">
            <div class="testimonial-slider">

                <?php if (!empty($testimonials)): ?>
                    <?php foreach ($testimonials as $item): ?>
                        <div class="testimonial-card">

                            <img src="<?= base_url('assets/images/client/' . $item['logo']) ?>"
                                class="testimonial-logo"
                                alt="<?= esc($item['name']) ?>">

                            <p class="testimonial-text">
                                “<?= esc($item['text']) ?>”
                            </p>

                            <div class="testimonial-footer">
                                <div class="avatar">
                                    <?php if (!empty($item['avatar'])): ?>
                                        <img src="<?= base_url('assets/images/avatar/' . $item['avatar']) ?>" alt="">
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <strong><?= esc($item['name']) ?></strong>
                                    <small><?= esc($item['position']) ?></small>
                                </div>

                                <?php if (!empty($item['video'])): ?>
                                    <button class="play-btn" data-video="<?= esc($item['video']) ?>">
                                        <i class="bi bi-play-fill"></i>
                                    </button>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>

        <div class="testimonial-progress mt-4">
            <div class="testimonial-progress-bar"></div>
        </div>


    </div>
</section>


<script>
    // TESTIMONIAL
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.querySelector('.testimonial-slider');
        const cards = [...document.querySelectorAll('.testimonial-card')];
        const nextBtn = document.querySelector('.testimonial-nav.next');
        const prevBtn = document.querySelector('.testimonial-nav.prev');
        const progressBar = document.querySelector('.testimonial-progress-bar');

        let index = 0;

        const visibleCount = () => {
            if (window.innerWidth < 576) return 1;
            if (window.innerWidth < 992) return 2;
            return 3;
        };

        const cardFullWidth = () => {
            const style = getComputedStyle(slider);
            const gap = parseInt(style.gap || style.columnGap || 0);
            return cards[0].offsetWidth + gap;
        };

        const update = () => {
            const visible = visibleCount();
            const maxIndex = Math.max(0, cards.length - visible);

            index = Math.min(index, maxIndex);

            // slide
            slider.style.transform = `translateX(-${index * cardFullWidth()}px)`;

            // buttons
            prevBtn.classList.toggle('disabled', index === 0);
            nextBtn.classList.toggle('disabled', index >= maxIndex);

            // progress
            const shown = Math.min(index + visible, cards.length);
            progressBar.style.width = `${(shown / cards.length) * 100}%`;
        };

        nextBtn.addEventListener('click', () => {
            index++;
            update();
        });

        prevBtn.addEventListener('click', () => {
            index--;
            update();
        });

        window.addEventListener('resize', update);

        update(); // init
    });
</script>