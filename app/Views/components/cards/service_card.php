<section id="services-section" class="py-5 position-relative">
  <div class="pattern-bg"></div>

  <div class="container text-center text-white" data-aos="fade-up">

    <h6 class="text-uppercase mb-2">Services</h6>
    <h2 class="mb-3">Intelligent Services for Modern Businesses.</h2>
    <p class="mb-5">
      Unlock the true potential of your data assets, gain a competitive edge, and drive innovation across your organization.</p>

    <div class="row g-4 justify-content-center">
      <?php foreach ($services as $index => $service): ?>

        <?php
        // Card 1–3
        $isTopThree = $index < 3;

        // Grid logic
        $colClass = $isTopThree ? 'col-md-4' : 'col-md-6';
        ?>

        <div class="<?= $colClass ?> col-sm-6 col-12">
          <a href="<?= base_url($service['url']) ?>" class="text-decoration-none h-100 d-block">
            <div class="service-card ce-card card border-0 shadow-sm rounded-4 h-100">

              <div class="card-img-top position-relative overflow-hidden rounded-top-4">

                <?php if ($isTopThree): ?>
                  <div class="ratio ratio-4x3">
                    <img
                      src="<?= base_url('assets/images/' . $service['image']) ?>"
                      class="w-100 h-100 object-fit-cover rounded-4"
                      alt="<?= esc($service['title']) ?>">
                  </div>
                <?php else: ?>
                  <img
                    src="<?= base_url('assets/images/' . $service['image']) ?>"
                    class="w-100"
                    alt="<?= esc($service['title']) ?>">
                <?php endif; ?>

              </div>


              <div class="card-body text-dark text-start">
                <div class="mb-2 text-primary fs-5">
                  <img src="<?= base_url('assets/images/icon/' . $service['icon']) ?>" alt="">
                </div>
                <h5><?= esc($service['title']) ?></h5>
                <p class="text-muted small mb-0">
                  <?= esc($service['description']) ?>
                </p>
              </div>

            </div>
          </a>
        </div>

      <?php endforeach; ?>
    </div>

    <?php if (uri_string() !== 'services'): ?>
      <div class="mt-5">
        <a href="/services" class="btn btn-hover-grow btn-light btn-lg rounded-pill shadow-sm">
          See All Services <i class="bi bi-arrow-up-right ms-2"></i>
        </a>
      </div>
    <?php endif; ?>


  </div>

</section>