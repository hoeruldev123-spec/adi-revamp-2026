<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>About Us | All Data International<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Panggil Small Hero -->
<?= $this->include('partials/small_hero', []) ?>

<!-- Konten detail service di bawah hero -->
<section class="py-5">

</section>

<?= $this->include('components/cards/client_card') ?>
<?= $this->include('components/cards/core_value') ?>
<?= $this->include('components/cards/about_vision_mission') ?>
<?= $this->include('components/sections/our_team') ?>
<?= $this->include('components/sections/journey') ?>
<?= $this->include('components/cards/principal_card') ?>
<?= $this->include('components/sections/certifications') ?>
<?= $this->include('components/sections/cta_section') ?>

<?= $this->endSection() ?>