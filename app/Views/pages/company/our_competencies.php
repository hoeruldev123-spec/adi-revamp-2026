<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Our Competencies | All Data International<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('partials/small_hero', []) ?>

<?= $this->include('components/sections/our_competencies') ?>
<?= $this->include('components/sections/cta_section') ?>

<?= $this->endSection() ?>