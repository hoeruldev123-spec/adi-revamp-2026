<section class="py-5 bg-light position-relative text-center" data-aos="fade-up">
  <div class="container py-5">

    <!-- Vision / Mission Switch -->
    <div class="vm-switcher mx-auto mb-4">
      <button class="vm-btn active" data-target="vision">Our Vision</button>
      <button class="vm-btn" data-target="mission">Our Mission</button>
      <span class="vm-slider"></span>
    </div>

    <!-- Heading -->
    <h2 class="fw-bold display-5 mb-3">
      <span class="text-primary">Empowering</span>
      <span class="text-secondary">Intelligent Enterprises Through <br> Data and AI</span>
    </h2>

    <!-- Content -->
    <div id="vm-content" class="mx-auto" style="max-width: 700px;">

      <!-- Vision -->
      <div id="content-vision" class="vm-box active" class="vm-box">
        <p class="lead text-muted">
          To be the trusted partner empowering organizations to transform with integrated data,
          advanced analytics, and AI-driven innovation.
        </p>
      </div>

      <!-- Mission -->
      <div id="content-mission" class="vm-box active" class="vm-box hide">

        <p class="lead text-muted">
          Deliver innovative end-to-end data solutions</br>
          Help organizations accelerate digital transformation</br>
          Enable smarter decisions with AI & analytics</br>
          Build a collaborative ecosystem with clients & partners</br>
        </p>
      </div>

    </div>

    <!-- CTA Button -->
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

<script>
  const btns = document.querySelectorAll(".vm-btn");
  const slider = document.querySelector(".vm-slider");

  const visionBox = document.getElementById("content-vision");
  const missionBox = document.getElementById("content-mission");

  // Set awal
  visionBox.classList.add("active");
  missionBox.classList.remove("active");

  btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {

      // Switch tombol aktif
      document.querySelector(".vm-btn.active").classList.remove("active");
      btn.classList.add("active");

      // Geser slider
      slider.style.transform = `translateX(${i * 100}%)`;

      // === LOGIC ANIMASI ===
      if (i === 0) {
        // Show Vision, hide Mission
        missionBox.classList.remove("active");
        missionBox.classList.add("hide-right");

        visionBox.classList.add("active");
        visionBox.classList.remove("hide-left");
      } else {
        // Show Mission, hide Vision
        visionBox.classList.remove("active");
        visionBox.classList.add("hide-left");

        missionBox.classList.add("active");
        missionBox.classList.remove("hide-right");
      }
    });
  });
</script>