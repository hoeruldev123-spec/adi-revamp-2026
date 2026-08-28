<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Events</h2>
    <?php if (has_permission('events.create')): ?>
        <a href="/admin/events/create" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg"></i> Create Event</a>
    <?php endif; ?>
</div>

<form method="get" class="row g-2 mb-3">
    <div class="col-auto">
        <input type="text" name="search" class="form-control" placeholder="Cari nama/event code..." value="<?= esc($search ?? '') ?>">
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
                        <th>Event Code</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Form</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($events as $e): ?>
                        <tr>
                            <td><code><?= esc($e['event_code']) ?></code></td>
                            <td><?= esc($e['name']) ?></td>
                            <td><?= esc($e['location'] ?? '-') ?></td>
                            <td>
                                <?php if ($e['form_id']): ?>
                                    <a href="/admin/forms/edit/<?= $e['form_id'] ?>"><?= esc($e['form_name']) ?></a>
                                <?php elseif (has_permission('forms.create')): ?>
                                    <a href="/admin/forms/create?event_id=<?= $e['id'] ?>" class="text-decoration-none">+ Buat Form</a>
                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </td>
                            <td>
                                <span class="badge bg-<?= $e['status'] === 'active' ? 'success' : ($e['status'] === 'closed' ? 'secondary' : 'warning') ?>">
                                    <?= esc($e['status']) ?>
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="/register/<?= esc($e['event_code']) ?>" target="_blank" class="btn btn-sm btn-outline-info" title="Preview"><i class="bi bi-eye"></i></a>
                                <?php if (has_permission('events.edit')): ?>
                                    <a href="/admin/events/edit/<?= $e['id'] ?>" class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></a>
                                    <a href="/admin/events/toggle/<?= $e['id'] ?>" class="btn btn-sm btn-outline-warning"><i class="bi bi-power"></i></a>
                                <?php endif; ?>
                                <?php if (has_permission('events.delete')): ?>
                                    <a href="/admin/events/delete/<?= $e['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus event ini?')"><i class="bi bi-trash"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (empty($events)): ?>
                        <tr><td colspan="6" class="text-center text-muted py-4">Belum ada event.</td></tr>
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
