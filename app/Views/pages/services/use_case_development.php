<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Use Case Development | All Data International<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= view('partials/small_hero', [
    'title' => $title,
    'description' => $description,
    'image' => $image,
    'cta_text' => $cta_text,
    'cta_link' => $cta_link,
    'bg_class' => $bg_class,
    'pattern' => $pattern ?? false,
    'pattern_opacity' => $pattern_opacity ?? 100,
]) ?>

<section class="py-5">
    <div class="container" data-aos="fade-up">
        <h5>What to Expect</h5>
        <p>
            From vision to value — we turn your business challenges into real, working AI solutions. Together, we build use cases powered by machine learning, predictive analytics, and automation that directly address your most critical needs.
        </p>

        <h5>Why It Works</h5>
        <p>
            Our hands-on collaboration ensures every solution is practical, measurable, and built for real business impact — not just experimentation.
        </p>

        <h5>Who It's For</h5>
        <p>
            Enterprises looking to move beyond data collection and start applying AI for measurable business outcomes.
        </p>
    </div>
</section>

<?= $this->include('components/cards/service_card') ?>
<?= $this->include('components/sections/our_commitments') ?>
<?= $this->include('components/sections/partners_section') ?>

<?= $this->endSection() ?>