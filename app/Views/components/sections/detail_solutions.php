<section id="detail-solutions" class="py-5 position-relative overflow-hidden bg-white">
    <div class="container">

        <?php foreach ($solutions as $index => $item): ?>
            <div class="row align-items-center mb-5 gy-4 " data-aos="fade-up">

                <!-- IMAGE / BG -->
                <div class="col-md-6 <?= $index % 2 != 0 ? 'order-md-2' : '' ?>">
                    <div class="solution-image-wrapper rounded-4 shadow-sm">
                        <?php if (!empty($item['image'])): ?>
                            <img
                                src="<?= base_url('assets/images/' . $item['image']) ?>"
                                class="solution-image"
                                alt="<?= esc($item['title']) ?>"
                                loading="lazy">
                        <?php else: ?>
                            <div class="solution-bg d-flex align-items-center justify-content-center">
                                <h4 class="text-white fw-semibold opacity-75 text-center px-3">
                                    <?= esc($item['title']) ?>
                                </h4>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="col-md-6 <?= $index % 2 != 0 ? 'order-md-1' : '' ?>">
                    <h3 class="mb-3"><?= esc($item['title']) ?></h3>
                    <p class="text-muted mb-0"><?= esc($item['description']) ?></p>
                </div>

            </div>
        <?php endforeach; ?>

    </div>
</section>