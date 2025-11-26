<?= $this->extend('layouts/main') ?>

<!-- perlu di review -->
<?= $this->section('hero') ?>
<?= view('partials/hero/hero_large', [
  'title' => 'Empowering Smarter Business Through Data & AI Integration',
  'subtitle' => 'We deliver integrated solutions that transform complex data into clear insights and smarter business outcomes.',
  'buttonText' => 'Learn More',
  'buttonLink' => '/solutions'
]) ?>
<?= $this->endSection() ?>
<!-- /perlu direview -->

<?= $this->section('content') ?>

<section class="hero-home hero-home-bg py-5 position-relative overflow-hidden">
  <div class="container py-5">
    <div class="row align-items-center">

      <div class="col-lg-6">
        <div class="badge bg-white text-primary border px-3 py-2 mb-3 shadow-sm d-inline-flex align-items-center">
          <i class="bi bi-stars me-2"></i> Elevate Your Business with AI
        </div>

        <h1 class="display-5 fw-bold text-dark mb-4">
          Empowering Smarter<br>
          Business Through Data<br>
          & AI Integration
        </h1>

        <p class="lead text-muted mb-4">
          We deliver integrated solutions that transform complex data into clear insights and smarter business outcomes.
        </p>

        <a href="/solutions" class="btn btn-primary btn-lg rounded-pill px-4 py-2 shadow-sm">
          Learn More <i class="bi bi-arrow-up-right ms-2"></i>
        </a>
      </div>

      <div class="col-lg-6 text-center mt-5 mt-lg-0">
        <img src="/assets/images/cloud-hero.png" alt="Cloud Illustration" class="img-fluid" style="max-height: 350px;">
      </div>

    </div>
  </div>
</section>


<?= $this->include('partials/cards/client.php') ?>
<?= $this->include('partials/cards/about_vision_mission.php') ?>
<?= $this->include('partials/cards/services') ?>
<?= $this->include('partials/sections/why_choose_us') ?>


<?= $this->endSection() ?>