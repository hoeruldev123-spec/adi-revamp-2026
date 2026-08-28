<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Create Event</h2>
    <a href="/admin/events" class="btn btn-outline-secondary btn-sm">Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="post" action="/admin/events/store">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Event Code <span class="text-danger">*</span></label>
                <input type="text" name="event_code" class="form-control" placeholder="EVT-2026-DATAIKU-001"
                       value="<?= old('event_code') ?>" required>
                <div class="form-text">Identifier unik. Format disarankan: EVT-TAHUN-PREFIX-001</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Event Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" value="<?= old('name') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" value="<?= old('slug') ?>" placeholder="optional">
            </div>
            <div class="mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" value="<?= old('location') ?>">
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Start Date</label>
                    <input type="datetime-local" name="start_date" class="form-control" value="<?= old('start_date') ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">End Date</label>
                    <input type="datetime-local" name="end_date" class="form-control" value="<?= old('end_date') ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4"><?= old('description') ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="active" <?= old('status') === 'active' || !old('status') ? 'selected' : '' ?>>Active</option>
                    <option value="inactive" <?= old('status') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                    <option value="closed" <?= old('status') === 'closed' ? 'selected' : '' ?>>Closed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
