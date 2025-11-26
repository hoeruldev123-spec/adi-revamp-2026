<!DOCTYPE html>
<html lang="id">
<head>
  <?= $this->include('layouts/header') ?>   
</head>
<body>
    <?= $this->include('layouts/navbar') ?>
    
  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <?= $this->include('layouts/footer') ?>
</body>
</html>
