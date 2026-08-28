<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Registrations</h2>
</div>

<form method="get" class="row g-2 mb-3">
    <div class="col-auto">
        <select name="event_id" class="form-select">
            <option value="">Semua Event</option>
            <?php foreach ($events as $e): ?>
                <option value="<?= $e['id'] ?>" <?= $event_id === $e['id'] ? 'selected' : '' ?>>
                    <?= esc($e['event_code']) ?> — <?= esc($e['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-auto">
        <input type="text" name="search" class="form-control" placeholder="Cari..." value="<?= esc($search ?? '') ?>">
    </div>
    <div class="col-auto">
        <button class="btn btn-outline-secondary" type="submit">Filter</button>
    </div>
    <?php if ($event_id && has_permission('registrations.export')): ?>
        <div class="col-auto ms-auto">
            <a href="/admin/registrations/export/<?= $event_id ?>" class="btn btn-success">
                <i class="bi bi-download"></i> Export Excel
            </a>
        </div>
    <?php endif; ?>
</form>

<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Event</th>
                        <th>Kontak Utama</th>
                        <th>Submitted At</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($registrations as $r): ?>
                        <tr>
                            <td>#<?= $r['id'] ?></td>
                            <td><code><?= esc($r['event_code']) ?></code></td>
                            <td><?= esc($r['primary']) ?></td>
                            <td><?= esc($r['submitted_at']) ?></td>
                            <td>
                                <span class="badge bg-<?= $r['status'] === 'new' ? 'primary' : ($r['status'] === 'confirmed' ? 'success' : 'secondary') ?>">
                                    <?= esc($r['status']) ?>
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="/admin/registrations/view/<?= $r['id'] ?>" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a>
                                <?php if (has_permission('registrations.delete')): ?>
                                    <a href="/admin/registrations/delete/<?= $r['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus registration ini?')"><i class="bi bi-trash"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (empty($registrations)): ?>
                        <tr><td colspan="6" class="text-center text-muted py-4">Belum ada registrasi.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php if ($pager): ?>
        <div class="card-footer"><?= $pager->links() ?></div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>
