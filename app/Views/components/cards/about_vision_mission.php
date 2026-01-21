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

<script>
  const btns = document.querySelectorAll(".vm-btn");
  const slider = document.querySelector(".vm-slider");

  const visionBox = document.getElementById("content-vision");
  const missionBox = document.getElementById("content-mission");

  btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {

      document.querySelector(".vm-btn.active").classList.remove("active");
      btn.classList.add("active");

      slider.style.transform = `translateX(${i * 100}%)`;

      const show = i === 0 ? visionBox : missionBox;
      const hide = i === 0 ? missionBox : visionBox;

      hide.classList.remove("active");
      hide.classList.add(i === 0 ? "hide-right" : "hide-left");

      show.classList.add("active");
      show.classList.remove("hide-left", "hide-right");

      // retrigger word animation
      show.querySelectorAll(".word-fade, .animate-fade-blue").forEach(el => {
        el.classList.remove("animate");
        void el.offsetWidth;
        el.classList.add("animate");
      });
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const vmButtons = document.querySelectorAll('.vm-btn');

    vmButtons.forEach(button => {
      button.addEventListener('click', function() {

        const target = this.dataset.target;
        const activeBox = document.getElementById(`content-${target}`);
        const animatedWords = activeBox.querySelectorAll('.animate-fade-blue, .word-fade');

        animatedWords.forEach(word => {
          word.style.animation = 'none';
          word.classList.remove('animate-again');
          void word.offsetWidth;
          word.classList.add('animate-again');
          word.style.animation = '';
        });

      });
    });
  });
</script>