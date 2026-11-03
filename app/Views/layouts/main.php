<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $this->renderSection('title') ?></title>

  <?= $this->include('layouts/header') ?>
  <?= $this->renderSection('meta') ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRH39T6"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?= $this->include('layouts/navbar') ?>

  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <?= $this->include('layouts/footer') ?>

  <?= $this->include('whatsapp_floating') ?>

  <?= $this->renderSection('scripts') ?>
</body>

</html>