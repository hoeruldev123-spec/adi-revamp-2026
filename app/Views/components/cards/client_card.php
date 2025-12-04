<!-- Client Logos -->
<div class="container-fluid my-5 text-center client-appear">
  <p class="text-muted mb-6">
    Trusted by 1000+ Clients as a partner in technology
    <a href="#" class="text-primary text-decoration-none">
      More Clients <i class="bi bi-arrow-right"></i>
    </a>
  </p>

  <div class="container h-100">
    <div class="row align-items-center h-100">
      <div class="client-slider-wrapper position-relative">
        <div class="client-slider-container">
          <div class="slider">
            <div class="logos">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-01.png'); ?>" height="45" alt="Allianz">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-02.png'); ?>" height="45" alt="BCA Digital">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-03.png'); ?>" height="45" alt="BPJS">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-04.png'); ?>" height="45" alt="Kalbe">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-05.png'); ?>" height="45" alt="FIF">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-06.png'); ?>" height="45" alt="PLN">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-07.png'); ?>" height="45" alt="Adira">
            </div>
            <div class="logos">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-01.png'); ?>" height="45" alt="Allianz">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-02.png'); ?>" height="45" alt="BCA Digital">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-03.png'); ?>" height="45" alt="BPJS">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-04.png'); ?>" height="45" alt="Kalbe">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-05.png'); ?>" height="45" alt="FIF">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-06.png'); ?>" height="45" alt="PLN">
              <img class="img-hover-zoom" src="<?= base_url('assets/images/client/Logo-07.png'); ?>" height="45" alt="Adira">
            </div>
          </div>
        </div>
        <!-- Gradient Overlay -->
        <div class="gradient-overlay left"></div>
        <div class="gradient-overlay right"></div>
      </div>
    </div>
  </div>

</div>

<style>
  .client-slider-wrapper {
    width: 100%;
    padding: 20px 0;
  }

  .client-slider-container {
    overflow: hidden;
    position: relative;
    width: 100%;
  }

  .slider {
    display: flex;
    animation: slidein 40s linear infinite;
    width: max-content;
  }

  .logos {
    display: flex;
    align-items: center;
    gap: 50px;
    padding: 0 25px;
  }

  .img-hover-zoom {
    /* filter: grayscale(100%); */

    transition: all 0.3s ease;
    object-fit: contain;
  }

  .img-hover-zoom:hover {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.15);
  }

  /* Gradient Overlay */
  .gradient-overlay {
    position: absolute;
    top: 0;
    width: 100px;
    height: 100%;
    pointer-events: none;
    z-index: 2;
  }

  .gradient-overlay.left {
    left: 0;
    background: linear-gradient(to right, white 0%, transparent 100%);
  }

  .gradient-overlay.right {
    right: 0;
    background: linear-gradient(to left, white 0%, transparent 100%);
  }

  @keyframes slidein {
    0% {
      transform: translate3d(0, 0, 0);
    }

    100% {
      transform: translate3d(-50%, 0, 0);
    }
  }

  /* Pause animation on hover */
  .client-slider-container:hover .slider {
    animation-play-state: paused;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .logos {
      gap: 30px;
    }

    .img-hover-zoom {
      height: 35px !important;
    }

    .gradient-overlay {
      width: 50px;
    }
  }
</style>