<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Consulting Services | Your Company<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('partials/small_hero', []) ?>

<section class="py-5" data-aos="fade-up">
    <div class="container">
        <h5>What to Expect</h5>
        <p>Every great transformation starts with the right strategy. Our consultants dive deep into your business goals to design a clear, data-driven roadmap for AI adoption and integration. We help you uncover opportunities, minimize risks, and make confident technology decisions.
        </p>

        <h5>Why It Works</h5>
        <p>Because we don’t just talk technology — we align it with your business vision. Our mix of technical depth and strategic insight ensures every recommendation creates measurable impact.
        </p>

        <h5>Who It's For</h5>
        <p>Organizations ready to embrace data and AI but seeking clarity, direction, and expert partnership to move forward.
        </p>
        <!-- Konten detail di sini -->
    </div>
</section>

<?= $this->include('components/cards/service_card') ?>
<?= $this->include('components/sections/our_commitments') ?>
<?= $this->include('components/sections/partners_section') ?>

<?= $this->endSection() ?>