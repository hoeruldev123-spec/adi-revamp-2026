<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Events | All Data International<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="description" content="<?= esc($meta_description ?? 'Explore our upcoming events, webinars, and conferences from All Data International.') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<style>
    .event-date-badge {
        position: absolute;
        top: 16px;
        left: 16px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-width: 62px;
        padding: 8px 12px;
        border-radius: 12px;
        background: rgba(19, 47, 99, 0.92);
        color: #ffffff;
        line-height: 1.1;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .event-date-badge .day {
        font-size: 24px;
        font-weight: 800;
    }

    .event-date-badge .month {
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        opacity: 0.85;
    }

    .event-status-badge {
        position: absolute;
        top: 16px;
        right: 16px;
        z-index: 2;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.04em;
        text-transform: uppercase;
    }

    .event-thumb-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
        background: linear-gradient(135deg, #0f2c5c 0%, #1e90ff 100%);
        color: rgba(255, 255, 255, 0.9);
        font-size: 2.5rem;
    }

    .event-meta {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .event-meta span {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        color: #6c757d;
    }

    .event-meta i {
        color: #008bf9;
        margin-top: 3px;
    }
</style>

<!-- ================= HERO ================= -->
<section class="small-hero py-5 position-relative overflow-hidden bg-white">
    <div class="pattern-overlay"></div>

    <div class="container py-4 position-relative">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <div class="text-uppercase text-primary fw-semibold mb-2" style="letter-spacing: 0.08em;">
                    Resources
                </div>
                <h1 class="mb-4">Events & Webinars</h1>
                <p class="lead text-muted mb-4">
                    Stay up to date with our upcoming events, webinars, and workshops — or catch up on recaps from sessions we've already delivered.
                </p>
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a href="#upcoming-events" class="btn btn-primary rounded-pill px-4 btn-hover-up">
                        Upcoming Events <i class="bi bi-arrow-up-right ms-2"></i>
                    </a>
                    <a href="#past-events" class="btn-outline-pill d-inline-flex align-items-center gap-2">
                        <span class="btn-text">Past Events</span>
                        <i class="bi bi-arrow-down-right btn-icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= UPCOMING EVENTS ================= -->
<section id="upcoming-events" class="py-5 position-relative overflow-hidden" data-aos="fade-up">
    <div class="container py-3">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-primary mb-2">Upcoming Events</h6>
                <h2 class="mb-3">Don't Miss Our Next Sessions</h2>
                <p class="text-muted mb-0">Register now to secure your seat.</p>
            </div>
        </div>

        <?php if (empty($upcoming_events)): ?>
            <div class="text-center py-5">
                <i class="bi bi-calendar-x" style="font-size: 3rem; color: #adb5bd;"></i>
                <h4 class="mt-3">No Upcoming Events</h4>
                <p class="text-muted mb-0">New events will be announced soon. Stay tuned!</p>
            </div>
        <?php else: ?>
            <div class="row g-4">
                <?php foreach ($upcoming_events as $i => $event): ?>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i * 120 ?>">
                        <article class="card h-100 border-0 shadow-sm hover-lift overflow-hidden">
                            <div class="position-relative w-100 overflow-hidden" style="aspect-ratio: 16 / 9;">
                                <?php if (!empty($event['image'])): ?>
                                    <img
                                        src="<?= base_url($event['image']) ?>"
                                        alt="<?= esc($event['title']) ?>"
                                        class="w-100 h-100 object-fit-cover position-absolute top-0 start-0"
                                        loading="lazy">
                                <?php else: ?>
                                    <div class="event-thumb-placeholder w-100 h-100 d-flex align-items-center justify-content-center position-absolute top-0 start-0">
                                        <i class="bi bi-calendar-event fs-1"></i>
                                    </div>
                                <?php endif; ?>

                                <div class="event-date-badge">
                                    <span class="day"><?= esc($event['day']) ?></span>
                                    <span class="month"><?= esc($event['month']) ?></span>
                                </div>
                                <span class="badge bg-primary event-status-badge">Upcoming</span>
                            </div>

                            <div class="card-body d-flex flex-column p-3 p-lg-4">
                                <div class="mb-2">
                                    <span class="badge bg-primary-subtle text-primary"><?= esc($event['type']) ?></span>
                                </div>

                                <h5 class="card-title mb-2 fs-6 fs-lg-5"><?= esc($event['title']) ?></h5>

                                <p class="card-text text-muted small mb-3 flex-grow-1">
                                    <?= esc($event['excerpt']) ?>
                                </p>

                                <div class="event-meta small mt-auto mb-3">
                                    <span>
                                        <i class="bi bi-calendar3"></i>
                                        <?= esc($event['date_text']) ?>
                                    </span>
                                    <span>
                                        <i class="bi bi-clock"></i>
                                        <?= esc($event['time']) ?>
                                    </span>
                                    <span>
                                        <i class="bi bi-geo-alt"></i>
                                        <?= esc($event['location']) ?>
                                    </span>
                                </div>

                                <div class="d-flex flex-wrap gap-2">
                                    <?php if (!empty($event['register_url'])): ?>
                                        <a href="<?= esc($event['register_url']) ?>"
                                            class="btn btn-primary rounded-pill px-4 btn-hover-up"
                                            <?= $event['register_url'] === '#' ? 'onclick="return false;"' : '' ?>
                                            title="Link pendaftaran event">
                                            Detail Event
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($event['detail_url'])): ?>
                                        <a href="<?= esc($event['detail_url']) ?>" class="btn btn-outline-pill">
                                            Detail Event
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- ================= PAST EVENTS ================= -->
<section id="past-events" class="py-5 bg-light position-relative overflow-hidden" data-aos="fade-up">
    <div class="container py-3">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-primary mb-2">Past Events</h6>
                <h2 class="mb-3">Sessions We've Delivered</h2>
                <p class="text-muted mb-0">Explore recaps and materials from our completed events.</p>
            </div>
        </div>

        <?php if (empty($finished_events)): ?>
            <div class="text-center py-5">
                <i class="bi bi-journal-text" style="font-size: 3rem; color: #adb5bd;"></i>
                <h4 class="mt-3">No Past Events Yet</h4>
                <p class="text-muted mb-0">Recaps will appear here after our first session.</p>
            </div>
        <?php else: ?>
            <div class="row g-4">
                <?php foreach ($finished_events as $i => $event): ?>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i * 120 ?>">
                        <article class="card h-100 border-0 shadow-sm hover-lift overflow-hidden">
                            <div class="position-relative w-100 overflow-hidden" style="aspect-ratio: 16 / 9;">
                                <?php if (!empty($event['image'])): ?>
                                    <img
                                        src="<?= base_url($event['image']) ?>"
                                        alt="<?= esc($event['title']) ?>"
                                        class="w-100 h-100 object-fit-cover position-absolute top-0 start-0"
                                        loading="lazy">
                                <?php else: ?>
                                    <div class="event-thumb-placeholder w-100 h-100 d-flex align-items-center justify-content-center position-absolute top-0 start-0">
                                        <i class="bi bi-calendar-event fs-1"></i>
                                    </div>
                                <?php endif; ?>

                                <div class="event-date-badge">
                                    <span class="day"><?= esc($event['day']) ?></span>
                                    <span class="month"><?= esc($event['month']) ?></span>
                                </div>
                                <span class="badge bg-secondary event-status-badge">Ended</span>
                            </div>

                            <div class="card-body d-flex flex-column p-3 p-lg-4">
                                <div class="mb-2">
                                    <span class="badge bg-primary-subtle text-primary"><?= esc($event['type']) ?></span>
                                </div>

                                <h5 class="card-title mb-2 fs-6 fs-lg-5"><?= esc($event['title']) ?></h5>

                                <p class="card-text text-muted small mb-3 flex-grow-1">
                                    <?= esc($event['excerpt']) ?>
                                </p>

                                <div class="event-meta small mt-auto mb-3">
                                    <span>
                                        <i class="bi bi-calendar3"></i>
                                        <?= esc($event['date_text']) ?>
                                    </span>
                                    <span>
                                        <i class="bi bi-clock"></i>
                                        <?= esc($event['time']) ?>
                                    </span>
                                    <span>
                                        <i class="bi bi-geo-alt"></i>
                                        <?= esc($event['location']) ?>
                                    </span>
                                </div>

                                <div class="d-flex flex-wrap gap-2">
                                    <?php if (!empty($event['detail_url'])): ?>
                                        <a href="<?= esc($event['detail_url']) ?>" class="btn btn-outline-pill">
                                            Lihat Rekap
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>