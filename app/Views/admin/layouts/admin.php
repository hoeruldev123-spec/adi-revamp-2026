<?php
/**
 * Admin layout: header + sidebar + content.
 * Menggunakan Bootstrap 5 (CDN). Menu menyesuaikan permission user.
 */
$uri   = service('uri');
$segment2 = $uri->getSegment(2); // /admin/{segment2}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Admin') ?> | ADI Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; background: #f4f6f9; }
        .admin-sidebar { width: 240px; background: #1f2937; min-height: 100vh; }
        .admin-sidebar .nav-link { color: #cbd5e1; border-radius: .375rem; }
        .admin-sidebar .nav-link:hover,
        .admin-sidebar .nav-link.active { background: #374151; color: #fff; }
        .admin-sidebar .nav-section { color: #94a3b8; font-size: .72rem; text-transform: uppercase; letter-spacing: .06em; padding: .5rem 1rem; }
        .admin-header { background: #fff; border-bottom: 1px solid #e5e7eb; }
        .admin-content { padding: 1.5rem; }
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <aside class="admin-sidebar d-none d-md-block p-3">
        <div class="text-white fw-bold mb-4 fs-5">ADI Admin</div>
        <ul class="nav flex-column gap-1">
            <li><a class="nav-link <?= $segment2 === 'dashboard' || $segment2 === '' ? 'active' : '' ?>" href="/admin/dashboard"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>

            <li class="nav-section">Event Management</li>
            <li>
                <a class="nav-link <?= $segment2 === 'events' ? 'active' : '' ?>" href="/admin/events" <?= has_permission('events.view') ? '' : 'style="display:none"' ?>>
                    <i class="bi bi-calendar-event me-2"></i>Events
                </a>
            </li>
            <li>
                <a class="nav-link <?= $segment2 === 'forms' ? 'active' : '' ?>" href="/admin/forms" <?= has_permission('forms.view') ? '' : 'style="display:none"' ?>>
                    <i class="bi bi-ui-checks me-2"></i>Forms
                </a>
            </li>
            <li>
                <a class="nav-link <?= $segment2 === 'registrations' ? 'active' : '' ?>" href="/admin/registrations" <?= has_permission('registrations.view') ? '' : 'style="display:none"' ?>>
                    <i class="bi bi-people me-2"></i>Registrations
                </a>
            </li>

            <li class="nav-section">User Management</li>
            <li>
                <a class="nav-link <?= $segment2 === 'users' ? 'active' : '' ?>" href="/admin/users" <?= has_permission('users.view') ? '' : 'style="display:none"' ?>>
                    <i class="bi bi-person me-2"></i>Users
                </a>
            </li>
            <li>
                <a class="nav-link <?= $segment2 === 'roles' ? 'active' : '' ?>" href="/admin/roles" <?= has_permission('roles.view') ? '' : 'style="display:none"' ?>>
                    <i class="bi bi-shield me-2"></i>Roles
                </a>
            </li>
            <li>
                <a class="nav-link <?= $segment2 === 'permissions' ? 'active' : '' ?>" href="/admin/permissions" <?= has_permission('permissions.view') ? '' : 'style="display:none"' ?>>
                    <i class="bi bi-key me-2"></i>Permissions
                </a>
            </li>

            <li class="nav-section">System</li>
            <li>
                <a class="nav-link" href="/admin/settings" <?= has_permission('dashboard.view') ? '' : 'style="display:none"' ?>>
                    <i class="bi bi-gear me-2"></i>Settings
                </a>
            </li>
            <li>
                <a class="nav-link" href="/admin/logout"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
            </li>
        </ul>
    </aside>

    <!-- Main -->
    <div class="flex-grow-1">
        <header class="admin-header d-flex justify-content-between align-items-center px-4 py-3">
            <button class="btn btn-sm btn-outline-secondary d-md-none" type="button" onclick="document.querySelector('.admin-sidebar').classList.toggle('d-none')">
                <i class="bi bi-list"></i>
            </button>
            <div class="ms-auto d-flex align-items-center gap-2">
                <span class="text-secondary"><?= esc(current_user()['name'] ?? 'User') ?></span>
                <i class="bi bi-person-circle fs-4 text-secondary"></i>
            </div>
        </header>

        <main class="admin-content">
            <?= $this->include('admin/partials/alerts') ?>
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?= $this->renderSection('scripts') ?>
</body>
</html>
