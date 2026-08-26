<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Roles</h2>
    <?php if (has_permission('roles.create')): ?>
        <a href="/admin/roles/create" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg"></i> Create Role</a>
    <?php endif; ?>
</div>

<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Role</th>
                        <th>Description</th>
                        <th>Users</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($roles as $r): ?>
                        <tr>
                            <td><?= esc($r['name']) ?></td>
                            <td class="text-muted"><?= esc($r['description'] ?? '') ?></td>
                            <td><?= esc($r['user_count']) ?></td>
                            <td class="text-end">
                                <?php if (has_permission('roles.edit')): ?>
                                    <a href="/admin/roles/permissions/<?= $r['id'] ?>" class="btn btn-sm btn-outline-info">Permissions</a>
                                    <a href="/admin/roles/edit/<?= $r['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                <?php endif; ?>
                                <?php if (has_permission('roles.delete')): ?>
                                    <a href="/admin/roles/delete/<?= $r['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus role ini?')">Delete</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
