<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <div>
        <h2 class="h4 mb-0">Edit Form</h2>
        <small class="text-muted">Event: <code><?= esc($form['event_code']) ?></code> — <?= esc($form['event_name']) ?></small>
    </div>
    <div>
        <a href="/admin/forms/preview/<?= $form['id'] ?>" class="btn btn-outline-info btn-sm"><i class="bi bi-eye"></i> Preview</a>
        <a href="/register/<?= esc($form['event_code']) ?>" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="bi bi-box-arrow-up-right"></i> Open</a>
        <a href="/admin/forms" class="btn btn-outline-secondary btn-sm">Back</a>
    </div>
</div>

<!-- Form Settings -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-white fw-semibold">Form Settings</div>
    <div class="card-body">
        <form method="post" action="/admin/forms/update/<?= $form['id'] ?>">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Form Title</label>
                <input type="text" name="title" class="form-control" value="<?= esc(old('title', $form['title'])) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="2"><?= esc(old('description', $form['description'] ?? '')) ?></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Submit Label</label>
                    <input type="text" name="submit_label" class="form-control" value="<?= esc(old('submit_label', $form['submit_label'])) ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="active" <?= old('status', $form['status']) === 'active' ? 'selected' : '' ?>>Active</option>
                        <option value="inactive" <?= old('status', $form['status']) === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Success Message</label>
                <textarea name="success_message" class="form-control" rows="2"><?= esc(old('success_message', $form['success_message'] ?? '')) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
        </form>
    </div>
</div>

<!-- Add Field -->
<?php if (has_permission('forms.edit')): ?>
<div class="card shadow-sm mb-4">
    <div class="card-header bg-white fw-semibold">Add Field</div>
    <div class="card-body">
        <form method="post" action="/admin/forms/addField/<?= $form['id'] ?>" id="addFieldForm">
            <?= csrf_field() ?>
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Label <span class="text-danger">*</span></label>
                    <input type="text" name="label" class="form-control" required placeholder="Nama Lengkap">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Field Name (machine)</label>
                    <input type="text" name="name" class="form-control" placeholder="auto dari label">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Type <span class="text-danger">*</span></label>
                    <select name="type" class="form-select" id="addFieldType">
                        <?php foreach ($fieldTypes as $k => $v): ?>
                            <option value="<?= $k ?>"><?= $v ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Placeholder</label>
                    <input type="text" name="placeholder" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Help Text</label>
                    <input type="text" name="help_text" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="0">
                </div>
                <div class="col-md-8">
                    <label class="form-label">Options <small class="text-muted">(satu per baris, untuk Dropdown/Radio/Checkbox)</small></label>
                    <textarea name="options" class="form-control" rows="2" id="addFieldOptions"></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Extra Validation</label>
                    <input type="text" name="validation" class="form-control" placeholder="min_length[3]">
                </div>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="required" value="1" id="addReq">
                        <label class="form-check-label" for="addReq">Wajib diisi (required)</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Tambah Field</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php endif; ?>

<!-- Fields list -->
<div class="card shadow-sm">
    <div class="card-header bg-white fw-semibold">Fields (<?= count($fields) ?>)</div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width:30px">#</th>
                        <th>Label</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Required</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fields as $i => $f): ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= esc($f['label']) ?></td>
                            <td><code><?= esc($f['name']) ?></code></td>
                            <td><?= esc($f['type']) ?></td>
                            <td><?= $f['required'] ? '<span class="badge bg-danger">Yes</span>' : '<span class="badge bg-light text-dark">No</span>' ?></td>
                            <td class="text-end">
                                <?php if (has_permission('forms.edit')): ?>
                                    <button class="btn btn-sm btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#editFieldModal"
                                            data-id="<?= $f['id'] ?>"
                                            data-label="<?= esc($f['label']) ?>"
                                            data-name="<?= esc($f['name']) ?>"
                                            data-type="<?= esc($f['type']) ?>"
                                            data-placeholder="<?= esc($f['placeholder'] ?? '') ?>"
                                            data-help="<?= esc($f['help_text'] ?? '') ?>"
                                            data-options='<?= esc($f['options'] ?? '') ?>'
                                            data-validation="<?= esc($f['validation'] ?? '') ?>"
                                            data-required="<?= $f['required'] ?>"
                                            data-sort="<?= $f['sort_order'] ?>">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <a href="/admin/forms/deleteField/<?= $f['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus field ini?')"><i class="bi bi-trash"></i></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (empty($fields)): ?>
                        <tr><td colspan="6" class="text-center text-muted py-4">Belum ada field. Tambahkan di atas.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Edit Field Modal -->
<?php if (has_permission('forms.edit')): ?>
<div class="modal fade" id="editFieldModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" id="editFieldForm" action="">
                <?= csrf_field() ?>
                <div class="modal-header">
                    <h5 class="modal-title">Edit Field</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Label</label>
                            <input type="text" name="label" class="form-control" id="ef_label" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Field Name</label>
                            <input type="text" name="name" class="form-control" id="ef_name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type</label>
                            <select name="type" class="form-select" id="ef_type">
                                <?php foreach ($fieldTypes as $k => $v): ?>
                                    <option value="<?= $k ?>"><?= $v ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" class="form-control" id="ef_sort">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Placeholder</label>
                            <input type="text" name="placeholder" class="form-control" id="ef_placeholder">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Help Text</label>
                            <input type="text" name="help_text" class="form-control" id="ef_help">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Extra Validation</label>
                            <input type="text" name="validation" class="form-control" id="ef_validation">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Options <small class="text-muted">(satu per baris)</small></label>
                            <textarea name="options" class="form-control" rows="3" id="ef_options"></textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="required" value="1" id="ef_required">
                                <label class="form-check-label" for="ef_required">Wajib diisi (required)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('editFieldModal');
    modal.addEventListener('show.bs.modal', function (e) {
        var btn = e.relatedTarget;
        var form = document.getElementById('editFieldForm');
        form.action = '/admin/forms/updateField/' + btn.getAttribute('data-id');
        document.getElementById('ef_label').value = btn.getAttribute('data-label');
        document.getElementById('ef_name').value = btn.getAttribute('data-name');
        document.getElementById('ef_type').value = btn.getAttribute('data-type');
        document.getElementById('ef_sort').value = btn.getAttribute('data-sort');
        document.getElementById('ef_placeholder').value = btn.getAttribute('data-placeholder');
        document.getElementById('ef_help').value = btn.getAttribute('data-help');
        document.getElementById('ef_validation').value = btn.getAttribute('data-validation');
        document.getElementById('ef_required').checked = btn.getAttribute('data-required') === '1';
        // Options JSON -> newline text.
        try {
            var opts = JSON.parse(btn.getAttribute('data-options') || '[]');
            document.getElementById('ef_options').value = Array.isArray(opts) ? opts.join("\n") : '';
        } catch (err) {
            document.getElementById('ef_options').value = '';
        }
    });
});
</script>
<?php endif; ?>
<?= $this->endSection() ?>
