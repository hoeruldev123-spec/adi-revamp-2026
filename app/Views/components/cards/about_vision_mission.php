<section class="py-5 bg-light position-relative text-center" data-aos="fade-up">
  <div class="container py-5">

    <div class="vm-switcher mx-auto mb-4">
      <button class="vm-btn active" data-target="vision">Our Vision</button>
      <button class="vm-btn" data-target="mission">Our Mission</button>
      <span class="vm-slider"></span>
    </div>

    <div id="vm-content" class="mx-auto" style="max-width: 700px;">

      <div id="content-vision" class="vm-box active">

        <h2 class=" mb-3">
          <span class="animate-fade-blue" style="--delay: 0.5s">Empowering</span>
          <span class="word-fade" style="--delay: 0.8s">Intelligent</span>
          <span class="word-fade" style="--delay: 1.1s">Enterprises</span>
          <span class="word-fade" style="--delay: 1.4s">Through</span>
          <br>
          <span class="word-fade" style="--delay: 1.7s">Data</span>
          <span class="word-fade" style="--delay: 2.0s">and</span>
          <span class="word-fade" style="--delay: 2.3s">AI</span>

        </h2>

        <p class=" text-muted">
          To be the trusted partner empowering organizations to transform with integrated data,
          advanced analytics, and AI-driven innovation.
        </p>
      </div>

      <div id="content-mission" class="vm-box hide-right">

        <h2 class="mb-3">
          <span class="animate-fade-blue" style="--delay: 0.5s">Transforming</span>
          <span class="word-fade" style="--delay: 0.8s">Technology</span>
          <span class="word-fade" style="--delay: 1.1s">into</span>
          <span class="word-fade" style="--delay: 1.4s">Business</span>
          <span class="word-fade" style="--delay: 1.7s">Value</span>
        </h2>

        <p class=" text-muted">
          Deliver innovative end-to-end data solutions</br>
          Help organizations accelerate digital transformation</br>
          Enable smarter decisions with AI & analytics</br>
          Build a collaborative ecosystem with clients & partners</br>
        </p>
      </div>

    </div>

    <?php if (uri_string() !== 'company/about-us'): ?>
      <div class="mt-4">
        <a href="<?= base_url('company/about-us'); ?>" class="btn btn-primary btn-lg rounded-pill px-5">
          About Us <i class="bi bi-arrow-up-right ms-2"></i>
        </a>
      </div>
    <?php endif; ?>

    <div class="position-absolute bottom-0 start-50 translate-middle-x w-100"
      style="z-index:-1; background-image: url('<?= base_url('assets/images/Patern.png') ?>'); 
      background-size: cover; background-position: center; height: 300px;">
    </div>
  </div>
</section>