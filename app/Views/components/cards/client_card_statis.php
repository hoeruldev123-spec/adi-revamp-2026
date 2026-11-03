<div class="container py-5">
  <div class="row g-4 justify-content-center" data-aos="fade-up">

    <?php if (!empty($clients)): ?>
      <?php foreach ($clients as $client): ?>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="client-card-statis">
            <img
              src="<?= base_url('assets/images/client/' . $client['logo']); ?>"
              alt="<?= esc($client['alt']) ?>"
              title="<?= esc($client['name'] ?? $client['alt']) ?>"
              class="img-fluid">
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col-12 text-center py-5">
        <p class="text-muted">No clients available at the moment.</p>
      </div>
    <?php endif; ?>

  </div>
</div>