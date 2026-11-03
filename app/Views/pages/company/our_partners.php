<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Our Partners | All Data International<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('partials/small_hero', []) ?>

<?= $this->include('components/cards/principal_card_statis') ?>
<?= $this->include('components/sections/cta_section') ?>

<?= $this->endSection() ?>