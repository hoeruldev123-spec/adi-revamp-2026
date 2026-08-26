<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<h2 class="h4 mb-3">Permissions</h2>

<div class="row">
    <?php foreach ($grouped as $module => $perms): ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-light fw-semibold text-uppercase"><?= esc($module) ?></div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($perms as $p): ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><?= esc($p['name']) ?></span>
                            <code class="text-muted"><?= esc($p['slug']) ?></code>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>
