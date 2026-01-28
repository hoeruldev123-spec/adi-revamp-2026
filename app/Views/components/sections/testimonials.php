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
                <button class="testimonial-nav prev active" aria-label="Previous testimonial">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                </button>

                <button class="testimonial-nav next active" aria-label="Next testimonial">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                    </svg>
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