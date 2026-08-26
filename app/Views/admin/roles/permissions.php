<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Permissions: <?= esc($role['name']) ?></h2>
    <a href="/admin/roles" class="btn btn-outline-secondary btn-sm">Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="post" action="/admin/roles/permissions/save/<?= $role['id'] ?>">
            <?= csrf_field() ?>
            <div class="row">
                <?php foreach ($grouped as $module => $perms): ?>
                    <div class="col-md-4 mb-4">
                        <h6 class="text-uppercase text-muted"><?= esc($module) ?></h6>
                        <?php foreach ($perms as $p): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permissions[]" value="<?= $p['id'] ?>" id="perm_<?= $p['id'] ?>" <?= in_array($p['id'], $assigned_ids) ? 'checked' : '' ?>>
                                <label class="form-check-label" for="perm_<?= $p['id'] ?>"><?= esc($p['name']) ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Permission</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
