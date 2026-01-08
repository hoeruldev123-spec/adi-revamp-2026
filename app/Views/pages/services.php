<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?><?= $title ?? 'Services' ?><?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="keywords" content="<?= $meta['keywords'] ?? '' ?>">
<meta name="description" content="<?= $meta['description'] ?? '' ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('components/cards/service_card-all') ?>
<?= $this->include('components/cards/principal_card') ?>
<?= $this->include('components/sections/cta_section') ?>

<?= $this->endSection() ?>