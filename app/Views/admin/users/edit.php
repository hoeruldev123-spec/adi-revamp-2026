<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Edit User</h2>
    <a href="/admin/users" class="btn btn-outline-secondary btn-sm">Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="post" action="/admin/users/update/<?= $user['id'] ?>">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?= old('name', $user['name']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= old('email', $user['email']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password <span class="text-muted">(kosongkan jika tidak diubah)</span></label>
                <input type="password" name="password" class="form-control" minlength="8">
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="active" <?= $user['status'] === 'active' ? 'selected' : '' ?>>Active</option>
                    <option value="inactive" <?= $user['status'] === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Roles</label>
                <?php foreach ($roles as $r): ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="roles[]" value="<?= $r['id'] ?>" id="role_<?= $r['id'] ?>" <?= in_array($r['id'], $assigned_ids) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="role_<?= $r['id'] ?>"><?= esc($r['name']) ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
