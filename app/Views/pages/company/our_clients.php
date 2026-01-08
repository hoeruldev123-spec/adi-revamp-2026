<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Our Clients | All Data International<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('partials/small_hero', []) ?>

<?= $this->include('components/cards/client_card_statis', ['clients' => $clients]) ?>

<?= $this->include('components/sections/cta_section') ?>

<?= $this->endSection() ?>