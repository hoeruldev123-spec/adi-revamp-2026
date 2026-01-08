<footer class="pt-5 mt-5" data-aos="fade-up">
  <div class="container">

    <div class="row align-items-start mb-3">
      <div class="col-md-6 col-lg-5 mb-4">
        <a href="<?= base_url(); ?>" class="d-inline-flex align-items-center mb-3">
          <img src="<?= base_url('assets/images/alldata_logo.png'); ?>" alt="All Data International" height="45">
        </a>
        <p class="text-muted mb-0">Driving Organizations into Smart Decisions with AI</p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4 text-md-end">
        <p class="mb-2 fw-semibold">Let's connect on Social Media</p>
        <div class="d-flex justify-content-md-end gap-3">
          <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
        </div>
      </div>
    </div>

    <div class="border-top"></div>
    <hr>

    <div class="row mt-4">
      <div class="col-md-3 mb-4">
        <h6 class="mb-3">Solutions</h6>
        <ul class="list-unstyled text-muted">
          <li><a href="#" class="footer-link">FMCG</a></li>
          <li><a href="#" class="footer-link">Telecom</a></li>
          <li><a href="#" class="footer-link">Government</a></li>
          <li><a href="#" class="footer-link">Financial</a></li>
        </ul>
      </div>

      <div class="col-md-3 mb-4">
        <h6 class="mb-3">Services</h6>
        <ul class="list-unstyled text-muted">
          <li><a href="#" class="footer-link">Consultation</a></li>
          <li><a href="#" class="footer-link">Use Case Development</a></li>
          <li><a href="#" class="footer-link">Manage Services</a></li>
          <li><a href="#" class="footer-link">Maintenance Support</a></li>
          <li><a href="#" class="footer-link">Training</a></li>
        </ul>
      </div>

      <div class="col-md-3 mb-4">
        <h6 class="mb-3">Resources</h6>
        <ul class="list-unstyled text-muted">
          <li><a href="#" class="footer-link">Article</a></li>
          <li><a href="#" class="footer-link">Career</a></li>
          <li><a href="#" class="footer-link">Event</a></li>
        </ul>
      </div>

      <div class="col-md-3 mb-4">
        <h6 class="mb-3">Contact</h6>
        <ul class="list-unstyled text-muted">
          <li class="mb-2"><i class="bi bi-telephone me-2 text-primary"></i> +6221-29319396</li>
          <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i> info@alldataint.com</li>
          <li><i class="bi bi-geo-alt me-2 text-primary"></i> Grand Aries Niaga, Blok G1–2T, Jakarta 11620 Indonesia</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="bg-dark py-3 mt-4 border-top border-secondary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-2 mb-md-0">
          <div class="badge border border-white text-white border px-3 py-2 shadow-sm d-inline-flex align-items-center">
            <i class="bi bi-stars me-2"></i>
            <?= $hero['badge'] ?? 'Elevate Your Business with AI' ?>
          </div>
        </div>

        <div class="col-md-6 text-md-end">
          <small class="text-white">
            Copyright © <?= date('Y'); ?>, All Data International | All Rights Reserved.
          </small>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });

  document.addEventListener('DOMContentLoaded', function() {
    if (typeof bootstrap === 'undefined') {
      console.error('Bootstrap JS tidak terdeteksi. Pastikan bootstrap.bundle.min.js dimuat.');
    }
  });
</script>
<script src="<?= base_url('js/script.js') ?>"></script>