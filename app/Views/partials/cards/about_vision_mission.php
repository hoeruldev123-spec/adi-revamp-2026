<section class="py-5 bg-light position-relative text-center" data-aos="fade-up">
  <div class="container py-5">
    
    <!-- Vision / Mission Switch -->
    <div class="btn-group shadow-sm mb-4" role="group" aria-label="Vision Mission Toggle">
      <input type="radio" class="btn-check" name="vm-toggle" id="vision" autocomplete="off" checked>
      <label class="btn btn-outline-primary px-4 rounded-start-pill" for="vision">Our Vision</label>

      <input type="radio" class="btn-check" name="vm-toggle" id="mission" autocomplete="off">
      <label class="btn btn-outline-primary px-4 rounded-end-pill" for="mission">Our Mission</label>
    </div>

    <!-- Heading -->
    <h2 class="fw-bold display-5 mb-3">
      <span class="text-primary">Empowering</span> Intelligent Enterprises Through <br>
      <span class="text-secondary">Data and AI</span>
    </h2>

    <!-- Subtext -->
    <p class="lead text-muted mx-auto" style="max-width: 700px;">
      To be the trusted partner that helps organizations unlock their potential through integration,
      data-driven insights, and intelligent innovation.
    </p>

    <!-- Button -->
    <div class="mt-4">
      <a href="<?= base_url('company'); ?>" class="btn btn-primary btn-lg rounded-pill px-5">
        About Us <i class="bi bi-arrow-up-right ms-2"></i>
      </a>
    </div>

    <!-- Background Pattern -->
    <div class="position-absolute bottom-0 start-50 translate-middle-x w-100" 
        style="z-index:-1; background-image: url('<?= base_url('assets/images/Patern.png') ?>'); 
            background-size: cover; background-position: center; height: 300px;">
    </div>

  </div>
</section>
