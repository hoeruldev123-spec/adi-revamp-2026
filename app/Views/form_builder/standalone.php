<?php
/**
 * Halaman mandiri Form Builder untuk integrasi iframe (Method 3).
 * Dapat juga diakses langsung untuk testing.
 */
use App\Models\FormFieldModel;

$fieldModel = new FormFieldModel();
$success = $success ?? false;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($form['title'] ?? 'Form') ?> | <?= esc($event['name'] ?? '') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6f9; }
        .fb-standalone { max-width: 560px; margin: 2rem auto; }
    </style>
</head>
<body>
<div class="fb-standalone p-4">
    <h3 class="mb-1"><?= esc($form['title'] ?? 'Registration') ?></h3>
    <p class="text-muted"><?= esc($event['name'] ?? '') ?></p>

    <?php if ($success): ?>
        <div class="alert alert-success">
            <?= esc(session('form_success') ?: 'Terima kasih! Registrasi Anda telah berhasil kami terima.') ?>
        </div>
    <?php else: ?>
        <?= view('form_builder/_form', [
            'event'  => $event,
            'form'   => $form,
            'fields' => $fields,
            'action' => $action,
        ]) ?>
    <?php endif; ?>
</div>
</body>
</html>
