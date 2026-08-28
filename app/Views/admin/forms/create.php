<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Create Form</h2>
    <a href="/admin/forms" class="btn btn-outline-secondary btn-sm">Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="post" action="/admin/forms/store">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Event <span class="text-danger">*</span></label>
                <select name="event_id" class="form-select" required>
                    <option value="">Pilih event...</option>
                    <?php foreach ($events as $e): ?>
                        <option value="<?= $e['id'] ?>" <?= $e['id'] === $preEvent ? 'selected' : '' ?>>
                            <?= esc($e['event_code']) ?> — <?= esc($e['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if (empty($events)): ?>
                    <div class="form-text text-warning">Semua event aktif sudah memiliki form. Buat event baru terlebih dahulu.</div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Form Title <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control" value="<?= old('title') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3"><?= old('description') ?></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Submit Label</label>
                    <input type="text" name="submit_label" class="form-control" value="<?= old('submit_label', 'Daftar') ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="active" <?= old('status') === 'active' || !old('status') ? 'selected' : '' ?>>Active</option>
                        <option value="inactive" <?= old('status') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Success Message</label>
                <textarea name="success_message" class="form-control" rows="2"><?= old('success_message') ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" <?= empty($events) ? 'disabled' : '' ?>>Simpan & Tambah Field</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
