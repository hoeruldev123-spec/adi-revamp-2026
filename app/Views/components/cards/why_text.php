<div class="why-card p-4 rounded-4 shadow-sm bg-white">
    <?php if (!empty($icon)): ?>
        <div class="why-icon mb-3">
            <i class="<?= $icon ?> fs-3 text-primary"></i>
        </div>
    <?php endif; ?>

    <h4 class="fw-semibold"><?= $title ?></h4>
    <p class="text-muted small mb-0"><?= $desc ?></p>
</div>
