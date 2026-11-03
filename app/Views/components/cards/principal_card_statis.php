<?php
$principalItems = [];

if (!empty($principals) && is_array($principals)) {
    $principalItems = $principals;
} elseif (!empty($principal_slides) && is_array($principal_slides)) {
    foreach ($principal_slides as $slide) {
        if (is_array($slide)) {
            $principalItems = array_merge($principalItems, $slide);
        }
    }
}

if (empty($principalItems)) {
    $principalItems = [
        [
            'logo' => 'Logo-Qlik.png',
            'alt' => 'Qlik',
            'description' => 'Empowering data-driven insights through advanced analytics and intuitive visualization.'
        ],
        [
            'logo' => 'Logo-Confluent.png',
            'alt' => 'Confluent',
            'description' => 'Real-time data streaming powered by Apache Kafka for smarter business operations.'
        ],
        [
            'logo' => 'Logo-Denodo.png',
            'alt' => 'Denodo',
            'description' => 'Seamless data virtualization enabling unified access across multiple systems and sources.'
        ],
        [
            'logo' => 'Logo-Snowflake.png',
            'alt' => 'Snowflake',
            'description' => 'Scalable cloud data platform for high-performance analytics and AI innovation.'
        ],
        [
            'logo' => 'Dataiku-logo.png',
            'alt' => 'Dataiku',
            'description' => 'Collaborative AI platform to build, deploy, and manage enterprise machine learning.',
            'link' => 'our-partners/dataiku'
        ],
        [
            'logo' => 'Logo-Cloudera.png',
            'alt' => 'Cloudera',
            'description' => 'Hybrid data platform integrating analytics, AI, and data management at scale.'
        ],
        [
            'logo' => 'Logo-Tableau.png',
            'alt' => 'Tableau',
            'description' => 'Transform raw data into actionable insights with intuitive visual analytics and interactive dashboards.'
        ],
        [
            'logo' => 'Logo-Hasura.png',
            'alt' => 'Hasura',
            'description' => 'Instant GraphQL APIs that accelerate development by connecting directly to your databases and services.'
        ],
        [
            'logo' => 'Logo-ClickHouse.png',
            'alt' => 'ClickHouse',
            'description' => 'Real-time analytics database that delivers lightning-fast queries on massive volumes of structured data.',
            'badge' => 'assets/images/principals/badges/Service-Partner-ACCELERATE.webp'
        ],
        [
            'logo' => 'Logo-Alibaba-Cloud.png',
            'alt' => 'Alibaba Cloud',
            'description' => 'Comprehensive cloud computing services driving digital transformation across Asia and global markets.'
        ],
        [
            'logo' => 'Logo-redis.png',
            'alt' => 'Redis',
            'description' => 'In-memory data structure store enabling high-performance caching, messaging, and real-time applications.'
        ],
        [
            'logo' => 'Logo-Dell.png',
            'alt' => 'Dell',
            'description' => 'End-to-end IT infrastructure solutions that power modern enterprises with reliable hardware and software.'
        ],
        [
            'logo' => 'Logo-AWS.png',
            'alt' => 'AWS',
            'description' => "World's most comprehensive and broadly adopted cloud platform for scalable computing, storage, and AI services.",
            'badge' => 'https://aws.alldataint.com/assets/img/awsb-1.png',
            'link' => 'https://aws.alldataint.com/'
        ],
        [
            'logo' => 'Logo-Helett Packard.png',
            'alt' => 'Hewlett Packard',
            'description' => 'Hybrid cloud solutions and intelligent edge technologies that accelerate data-first modernization.'
        ],
        [
            'logo' => 'huawei.webp',
            'alt' => 'Huawei Cloud',
            'description' => 'Comprehensive cloud computing platform offering scalable infrastructure, data storage, database, analytics, and AI services to accelerate enterprise digital transformation.'
        ],
        [
            'logo' => 'logo-alldata-cloud-pacs.webp',
            'alt' => 'All Data Cloud PACS',
            'description' => 'Cloud-based PACS & RIS platform providing seamless digital radiology workflow, AI-ready analysis, and SATUSEHAT integration.'
        ],
        [
            'logo' => 'sada-logo.webp',
            'alt' => 'SADA - Scalable Advanced Data Architecture',
            'description' => 'Integrated end-to-end data platform combining lakehouse storage, data integration, governance, and AI-ready data capabilities to simplify enterprise data management.'
        ],
        [
            'logo' => 'argos-logo.webp',
            'alt' => 'ARGOS',
            'description' => 'Enterprise AI operations & infrastructure platform featuring secure multi-tenant control, automated incident response, and conversational telemetry analytics.'
        ],
    ];
}
?>
<section id="principal-statis-section" class="py-5" style="background-color:#F8F9FA;">
    <div class="container col-lg-8" data-aos="fade-up">
        <div class="principal-statis-container">
            <div id="principal-statisCards">

                <div class="principal-statis-page container">
                    <div class="row g-4">
                        <?php foreach ($principalItems as $principal): ?>
                            <?php
                            $logo = $principal['logo'] ?? '';
                            $alt = $principal['alt'] ?? '';
                            $description = $principal['description'] ?? '';
                            $badge = $principal['badge'] ?? '';
                            $link = $principal['link'] ?? '';
                            $badgeUrl = $badge !== '' && !str_starts_with($badge, 'http') ? base_url($badge) : $badge;
                            $linkUrl = $link !== '' && !str_starts_with($link, 'http') ? base_url($link) : $link;
                            $isExternalLink = $link !== '' && str_starts_with($link, 'http');
                            ?>
                            <div class="col-lg-6 col-md-6 principal-statis-item">
                                <div class="principal-statis-card h-100">
                                    <div class="card-header mb-3">
                                        <?php if ($badge !== ''): ?>
                                            <div class="principal-header">
                                                <div class="principal-statis-logo">
                                                    <img src="<?= base_url('assets/images/principals/' . $logo) ?>"
                                                        alt="<?= esc($alt) ?>"
                                                        class="img-fluid">
                                                </div>
                                                <div class="principal-statis-badges">
                                                    <img src="<?= esc($badgeUrl) ?>" alt="Partner Badge">
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="principal-statis-logo">
                                                <img src="<?= base_url('assets/images/principals/' . $logo) ?>"
                                                    alt="<?= esc($alt) ?>"
                                                    class="img-fluid">
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="card-body">
                                        <p class="principal-statis-description text-muted">
                                            <?= esc($description) ?>
                                        </p>
                                    </div>

                                    <?php if ($link !== ''): ?>
                                        <div class="card-footer bg-transparent border-0 pt-0 pb-3">
                                            <a href="<?= esc($linkUrl) ?>"
                                               class="btn btn-primary btn-sm"
                                               <?= $isExternalLink ? 'target="_blank" rel="noopener noreferrer"' : '' ?>>
                                                Learn More
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
