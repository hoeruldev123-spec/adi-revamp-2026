<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .faq-section {
        padding: 60px 0;
    }

    .faq-header {
        margin-bottom: 50px;
    }

    .faq-badge {
        color: #0d6efd;
        font-weight: 600;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        display: inline-block;
    }

    .faq-title {
        font-size: 48px;
        font-weight: 700;
        color: #212529;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .faq-description {
        color: #6c757d;
        font-size: 16px;
        max-width: 600px;
    }

    .accordion-item {
        border: none;
        background: white;
        border-radius: 12px !important;
        margin-bottom: 16px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .accordion-button {
        font-size: 18px;
        font-weight: 600;
        color: #212529;
        padding: 24px 28px;
        background-color: white;
        border: none;
        box-shadow: none !important;
    }

    .accordion-button:not(.collapsed) {
        background-color: white;
        color: #212529;
    }

    .accordion-button::after {
        width: 24px;
        height: 24px;
        background-size: 24px;
        font-size: 24px;
        font-weight: 300;
    }

    .accordion-button:not(.collapsed)::after {
        transform: rotate(45deg);
    }

    .accordion-body {
        padding: 0 28px 24px 28px;
        color: #6c757d;
        font-size: 15px;
        line-height: 1.7;
    }

    .accordion-button:hover {
        background-color: #f8f9fa;
    }
</style>

<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="faq-header">
                    <span class="faq-badge">FAQ</span>
                    <h1 class="faq-title">Frequently Asked Questions</h1>
                    <p class="faq-description">
                        Have questions? Our FAQ section has you covered with quick answers to the most common inquiries.
                    </p>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="accordion" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $faq['id'] ?>">
                                <button class="accordion-button <?= $index > 0 ? 'collapsed' : '' ?>"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse<?= $faq['id'] ?>"
                                    aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                    aria-controls="collapse<?= $faq['id'] ?>">
                                    <?= esc($faq['question']) ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $faq['id'] ?>"
                                class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                                aria-labelledby="heading<?= $faq['id'] ?>"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <?= esc($faq['answer']) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>