<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?><?= $title ?? 'Home' ?><?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="keywords" content="<?= $meta['keywords'] ?? '' ?>">
<meta name="description" content="<?= $meta['description'] ?? '' ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-home hero-home-bg py-5 position-relative overflow-hidden">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="badge bg-white text-primary border px-3 py-2 mb-3 shadow-sm d-inline-flex align-items-center">
          <i class="bi bi-stars me-2"></i>
          <?= $hero['badge'] ?? 'Elevate Your Business with AI' ?>
        </div>

        <h1 class="text-dark mb-4">
          <?= $hero['title'] ?? 'Empowering Smarter Business Through Data & AI Integration' ?>
        </h1>

        <p class="lead text-muted mb-4">
          <?= $hero['description'] ?? 'We deliver integrated solutions that transform complex data into clear insights and smarter business outcomes.' ?>
        </p>

        <a href="/services" class="btn btn-primary btn-lg rounded-pill shadow-sm">
          Learn More <i class="bi bi-arrow-up-right ms-2"></i>
        </a>
      </div>

      <div class="col-lg-6 text-center mt-5 mt-lg-0">
        <img src="<?= base_url('assets/images/' . ($hero['image'] ?? 'cloud-hero.png')) ?>"
          alt="Cloud Illustration" class="img-fluid" style="max-height: 350px;">
      </div>
    </div>
  </div>
</section>

<!-- Components dengan Data Passing -->
<?= $this->include('components/cards/client_card') ?>
<?= $this->include('components/cards/about_vision_mission') ?>
<?= $this->include('components/cards/service_card') ?>
<?= $this->include('components/sections/why_choose_us') ?>
<?= $this->include('components/cards/solution_card') ?>
<?= $this->include('components/cards/principal_card') ?>
<?= $this->include('components/sections/our_commitments') ?>
<?= $this->include('components/sections/testimonials') ?>
<?= $this->include('components/sections/resource') ?>
<?= $this->include('components/sections/cta_section') ?>

<?= $this->endSection() ?>