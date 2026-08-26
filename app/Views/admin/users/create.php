<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Create User</h2>
    <a href="/admin/users" class="btn btn-outline-secondary btn-sm">Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="post" action="/admin/users/store">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?= old('name') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= old('email') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" minlength="8" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="active" <?= old('status') === 'active' || !old('status') ? 'selected' : '' ?>>Active</option>
                    <option value="inactive" <?= old('status') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Roles</label>
                <?php foreach ($roles as $r): ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="roles[]" value="<?= $r['id'] ?>" id="role_<?= $r['id'] ?>" <?= in_array($r['id'], old('roles') ?? []) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="role_<?= $r['id'] ?>"><?= esc($r['name']) ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
