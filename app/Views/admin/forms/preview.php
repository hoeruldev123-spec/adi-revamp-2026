<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Preview Form</h2>
    <a href="/admin/forms/edit/<?= $form['id'] ?>" class="btn btn-outline-secondary btn-sm">Back</a>
</div>

<div class="alert alert-info">
    Event: <code><?= esc($form['event_code']) ?></code> — <?= esc($form['event_name']) ?>.
    Untuk menampilkan form ini di landing page, panggil:
    <code>&lt;?= eventForm('<?= esc($form['event_code']) ?>') ?&gt;</code>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <?= $rendered ?>
    </div>
</div>
<?= $this->endSection() ?>
