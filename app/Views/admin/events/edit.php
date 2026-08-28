<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Edit Event</h2>
    <a href="/admin/events" class="btn btn-outline-secondary btn-sm">Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="post" action="/admin/events/update/<?= $event['id'] ?>">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Event Code <span class="text-danger">*</span></label>
                <input type="text" name="event_code" class="form-control"
                       value="<?= esc(old('event_code', $event['event_code'])) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Event Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control"
                       value="<?= esc(old('name', $event['name'])) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control"
                       value="<?= esc(old('slug', $event['slug'] ?? '')) ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control"
                       value="<?= esc(old('location', $event['location'] ?? '')) ?>">
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Start Date</label>
                    <input type="datetime-local" name="start_date" class="form-control"
                           value="<?= esc(old('start_date', $event['start_date'] ?? '')) ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">End Date</label>
                    <input type="datetime-local" name="end_date" class="form-control"
                           value="<?= esc(old('end_date', $event['end_date'] ?? '')) ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4"><?= esc(old('description', $event['description'] ?? '')) ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <?php foreach (['active', 'inactive', 'closed'] as $s): ?>
                        <option value="<?= $s ?>" <?= (old('status', $event['status']) === $s) ? 'selected' : '' ?>>
                            <?= ucfirst($s) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
