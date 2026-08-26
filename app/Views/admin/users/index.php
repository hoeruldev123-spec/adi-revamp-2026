<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Users</h2>
    <?php if (has_permission('users.create')): ?>
        <a href="/admin/users/create" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg"></i> Create User</a>
    <?php endif; ?>
</div>

<form method="get" class="row g-2 mb-3">
    <div class="col-auto">
        <input type="text" name="search" class="form-control" placeholder="Cari nama/email..." value="<?= esc($search ?? '') ?>">
    </div>
    <div class="col-auto">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
    </div>
</form>

<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $u): ?>
                        <tr>
                            <td><?= esc($u['name']) ?></td>
                            <td><?= esc($u['email']) ?></td>
                            <td>
                                <?php foreach ($u['roles'] as $r): ?>
                                    <span class="badge bg-info text-dark"><?= esc($r['name']) ?></span>
                                <?php endforeach; ?>
                                <?php if (empty($u['roles'])): ?><span class="text-muted">—</span><?php endif; ?>
                            </td>
                            <td>
                                <?php if ($u['status'] === 'active'): ?>
                                    <span class="badge bg-success">Active</span>
                                <?php else: ?>
                                    <span class="badge bg-secondary">Inactive</span>
                                <?php endif; ?>
                            </td>
                            <td><?= esc($u['created_at']) ?></td>
                            <td class="text-end">
                                <?php if (has_permission('users.edit')): ?>
                                    <a href="/admin/users/edit/<?= $u['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="/admin/users/toggle/<?= $u['id'] ?>" class="btn btn-sm btn-outline-warning">
                                        <?= $u['status'] === 'active' ? 'Deactivate' : 'Activate' ?>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#resetModal" data-id="<?= $u['id'] ?>" data-name="<?= esc($u['name']) ?>">
                                        Reset PW
                                    </button>
                                <?php endif; ?>
                                <?php if (has_permission('users.delete') && $u['id'] != session('user_id')): ?>
                                    <a href="/admin/users/delete/<?= $u['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus user ini?')">Delete</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $pager->links() ?>

<!-- Reset Password Modal -->
<div class="modal fade" id="resetModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="post" id="resetForm">
            <?= csrf_field() ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reset Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Reset password untuk <strong id="resetName"></strong>.</p>
                    <div class="mb-3">
                        <label class="form-label">Password Baru</label>
                        <input type="password" name="password" class="form-control" minlength="8" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    var resetModal = document.getElementById('resetModal');
    resetModal.addEventListener('show.bs.modal', function (e) {
        var id = e.relatedTarget.getAttribute('data-id');
        var name = e.relatedTarget.getAttribute('data-name');
        document.getElementById('resetName').textContent = name;
        document.getElementById('resetForm').action = '/admin/users/reset/' + id;
    });
</script>
<?= $this->endSection() ?>
