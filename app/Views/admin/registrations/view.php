<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Registration #<?= $registration['id'] ?></h2>
    <a href="/admin/registrations" class="btn btn-outline-secondary btn-sm">Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-3"><strong>Event</strong><br><?= esc($registration['event_name']) ?></div>
            <div class="col-md-3"><strong>Event Code</strong><br><code><?= esc($registration['event_code']) ?></code></div>
            <div class="col-md-3"><strong>Submitted At</strong><br><?= esc($registration['submitted_at']) ?></div>
            <div class="col-md-3"><strong>Status</strong><br><?= esc($registration['status']) ?></div>
        </div>
        <hr>
        <dl class="row">
            <?php foreach ($rows as $row): ?>
                <dt class="col-sm-4"><?= esc($row['label']) ?></dt>
                <dd class="col-sm-8"><?= nl2br(esc($row['value'] ?: '-')) ?></dd>
            <?php endforeach; ?>
        </dl>
    </div>
</div>

<?php if (has_permission('registrations.delete')): ?>
    <div class="mt-3">
        <a href="/admin/registrations/delete/<?= $registration['id'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Hapus registration ini?')">
            <i class="bi bi-trash"></i> Hapus Registration
        </a>
    </div>
<?php endif; ?>
<?= $this->endSection() ?>
