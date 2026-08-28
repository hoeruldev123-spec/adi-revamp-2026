<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Forms</h2>
    <?php if (has_permission('forms.create')): ?>
        <a href="/admin/forms/create" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg"></i> Create Form</a>
    <?php endif; ?>
</div>

<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Form</th>
                        <th>Event</th>
                        <th>Fields</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($forms as $f): ?>
                        <tr>
                            <td><?= esc($f['title']) ?></td>
                            <td><code><?= esc($f['event_code']) ?></code><br><?= esc($f['event_name']) ?></td>
                            <td><?= $f['field_count'] ?></td>
                            <td>
                                <span class="badge bg-<?= $f['status'] === 'active' ? 'success' : 'secondary' ?>">
                                    <?= esc($f['status']) ?>
                                </span>
                            </td>
                            <td class="text-end">
                                <?php if (has_permission('forms.edit')): ?>
                                    <a href="/admin/forms/edit/<?= $f['id'] ?>" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></a>
                                    <a href="/admin/forms/preview/<?= $f['id'] ?>" class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></a>
                                <?php endif; ?>
                                <?php if (has_permission('forms.delete')): ?>
                                    <a href="/admin/forms/delete/<?= $f['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus form ini?')"><i class="bi bi-trash"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (empty($forms)): ?>
                        <tr><td colspan="5" class="text-center text-muted py-4">Belum ada form.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
