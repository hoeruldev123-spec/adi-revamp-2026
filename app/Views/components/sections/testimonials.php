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
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.querySelector('.testimonial-slider');
        const cards = document.querySelectorAll('.testimonial-card');
        const nextBtn = document.querySelector('.testimonial-nav.next');
        const prevBtn = document.querySelector('.testimonial-nav.prev');

        let index = 0;

        function visibleCount() {
            if (window.innerWidth < 576) return 1;
            if (window.innerWidth < 992) return 2;
            return 3;
        }

        function cardFullWidth() {
            const card = cards[0];
            const style = window.getComputedStyle(slider);
            const gap = parseInt(style.columnGap || style.gap || 0);
            return card.offsetWidth + gap;
        }

        function maxIndex() {
            return Math.max(0, cards.length - visibleCount());
        }

        function updateButtons() {
            prevBtn.classList.toggle('disabled', index === 0);
            nextBtn.classList.toggle('disabled', index >= maxIndex());
        }

        function updateSlider() {
            index = Math.min(index, maxIndex());
            slider.style.transform = `translateX(-${index * cardFullWidth()}px)`;
            updateButtons();
        }

        nextBtn.addEventListener('click', () => {
            if (index < maxIndex()) {
                index++;
                updateSlider();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (index > 0) {
                index--;
                updateSlider();
            }
        });

        window.addEventListener('resize', updateSlider);

        updateSlider(); // init
    });


    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.querySelector('.testimonial-slider');
        const cards = document.querySelectorAll('.testimonial-card');
        const nextBtn = document.querySelector('.testimonial-nav.next');
        const prevBtn = document.querySelector('.testimonial-nav.prev');
        const progressBar = document.querySelector('.testimonial-progress-bar');

        let index = 0;

        function visibleCount() {
            if (window.innerWidth < 576) return 1;
            if (window.innerWidth < 992) return 2;
            return 3;
        }

        function cardFullWidth() {
            const card = cards[0];
            const style = window.getComputedStyle(slider);
            const gap = parseInt(style.columnGap || style.gap || 0);
            return card.offsetWidth + gap;
        }

        function maxIndex() {
            return Math.max(0, cards.length - visibleCount());
        }

        function updateProgress() {
            const max = maxIndex();
            const percent = max === 0 ? 100 : (index / max) * 100;
            progressBar.style.width = `${percent}%`;
        }

        function updateButtons() {
            prevBtn.classList.toggle('disabled', index === 0);
            nextBtn.classList.toggle('disabled', index >= maxIndex());
        }

        function updateSlider() {
            index = Math.min(index, maxIndex());
            slider.style.transform = `translateX(-${index * cardFullWidth()}px)`;
            updateButtons();
            updateProgress();
        }

        nextBtn.addEventListener('click', () => {
            if (index < maxIndex()) {
                index++;
                updateSlider();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (index > 0) {
                index--;
                updateSlider();
            }
        });

        window.addEventListener('resize', updateSlider);

        updateSlider(); // init
    });
</script>