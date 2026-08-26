<?= $this->extend('admin/layouts/admin') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h4 mb-0">Dashboard</h2>
</div>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="text-muted small text-uppercase">Total Events</div>
                <div class="fs-3 fw-bold"><?= esc($stats['total_events']) ?></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="text-muted small text-uppercase">Registrants</div>
                <div class="fs-3 fw-bold"><?= esc($stats['registrants']) ?></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="text-muted small text-uppercase">Active Events</div>
                <div class="fs-3 fw-bold"><?= esc($stats['active_events']) ?></div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mt-1">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Total Users</h6>
                <div class="fs-4 fw-bold"><?= esc($stats['total_users']) ?></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Recent Activity</h6>
                <p class="text-muted mb-0">Belum tersedia.</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
