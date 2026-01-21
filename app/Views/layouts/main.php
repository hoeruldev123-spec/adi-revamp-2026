<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $this->renderSection('title') ?></title>

  <?= $this->include('layouts/header') ?>
  <?= $this->renderSection('meta') ?>
</head>

<body>

  <?= $this->include('layouts/navbar') ?>

  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <?= $this->include('layouts/footer') ?>

  <?= $this->renderSection('scripts') ?>
</body>

</html>