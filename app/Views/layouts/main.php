<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->renderSection('title') ?></title>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
  <link rel="manifest" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
  <link rel="shortcut icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <!-- Custom CSS -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

  <?= $this->renderSection('meta') ?>
</head>

<body>
  <?= $this->include('layouts/header') ?>
  <?= $this->include('layouts/navbar') ?>

  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <?= $this->include('layouts/footer') ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('js/script.js') ?>"></script>
  <?= $this->renderSection('scripts') ?>
</body>

</html>