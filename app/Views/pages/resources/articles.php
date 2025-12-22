<!-- app/Views/pages/resources/articles.php -->
<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Articles | All Data International<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="articles-section" class="py-5 position-relative">
    <div class="container text-center text-white">
        <div class="pattern-articles min-height-section">
            <div class="container">
                <h6 class="text-uppercase mb-2">ARTICLES</h6>
                <h2 class="mb-3">Product Updates, Tips and Insights to Help Your Team Thrive</h2>

                <div class="mt-5 mb-5">
                    <a href="#" class="btn btn-hover-grow btn-light btn-lg rounded-pill shadow-sm">
                        View All Post <i class="bi bi-arrow-down ms-2"></i>
                    </a>
                </div>
            </div>
        </div>


        <div class="row g-4 mt-5 bg-white p-4 rounded-4 text-dark">
            <h4 class="mb-3 text-start">Most Recent Post</h4>

            <?php
            // Helper functions
            function fetchArticlesWithRetry()
            {
                $endpoints = [
                    'https://alldataint.com/wp-json/wp/v2/posts',
                    'https://alldataint.com/index.php/wp-json/wp/v2/posts'
                ];

                foreach ($endpoints as $api_url) {
                    $api_params = [
                        'per_page' => 3,
                        '_embed' => true,
                        'orderby' => 'date',
                        'order' => 'desc'
                    ];

                    $full_url = $api_url . '?' . http_build_query($api_params);

                    $ch = curl_init();
                    curl_setopt_array($ch, [
                        CURLOPT_URL => $full_url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 10,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_USERAGENT => 'Mozilla/5.0'
                    ]);

                    $response = curl_exec($ch);
                    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    curl_close($ch);

                    if ($http_code === 200 && $response) {
                        $data = json_decode($response, true);
                        if (!empty($data)) {
                            return $data;
                        }
                    }
                }

                return null;
            }

            function getThumbnailUrl($article, $size = 'large')
            {
                $default_large = "https://placehold.co/800x400/0d6efd/ffffff?text=Featured+Article";
                $default_small = "https://placehold.co/400x200/6c757d/ffffff?text=Article";

                // Cek jika ada embedded media
                if (!isset($article['_embedded']['wp:featuredmedia'][0])) {
                    return $size === 'large' ? $default_large : $default_small;
                }

                $media = $article['_embedded']['wp:featuredmedia'][0];

                // Priority 1: Check direct source_url
                if (!empty($media['source_url'])) {
                    return $media['source_url'];
                }

                // Priority 2: Check media_details sizes
                if (isset($media['media_details']['sizes'])) {
                    $sizes = $media['media_details']['sizes'];

                    if ($size === 'large') {
                        if (!empty($sizes['large']['source_url'])) return $sizes['large']['source_url'];
                        if (!empty($sizes['medium_large']['source_url'])) return $sizes['medium_large']['source_url'];
                        if (!empty($sizes['full']['source_url'])) return $sizes['full']['source_url'];
                        if (!empty($sizes['medium']['source_url'])) return $sizes['medium']['source_url'];
                    } else {
                        if (!empty($sizes['medium']['source_url'])) return $sizes['medium']['source_url'];
                        if (!empty($sizes['thumbnail']['source_url'])) return $sizes['thumbnail']['source_url'];
                        if (!empty($sizes['full']['source_url'])) return $sizes['full']['source_url'];
                    }
                }

                // Priority 3: Check guid
                if (!empty($media['guid']['rendered'])) {
                    return $media['guid']['rendered'];
                }

                return $size === 'large' ? $default_large : $default_small;
            }

            // Fetch articles
            $articles = fetchArticlesWithRetry();

            // Fallback demo data
            if (!$articles || empty($articles)) {
                $articles = [
                    [
                        'title' => ['rendered' => 'Latest in Data Analytics'],
                        'excerpt' => ['rendered' => '<p>Discover how modern data analytics solutions are transforming businesses.</p>'],
                        'date' => date('Y-m-d\TH:i:s'),
                        'link' => '#',
                        '_embedded' => [
                            'wp:term' => [[['name' => 'Technology', 'taxonomy' => 'category']]],
                            'wp:featuredmedia' => []
                        ]
                    ],
                    [
                        'title' => ['rendered' => 'Data Security Best Practices'],
                        'excerpt' => ['rendered' => '<p>Essential security measures for protecting your business data.</p>'],
                        'date' => date('Y-m-d\TH:i:s', strtotime('-2 days')),
                        'link' => '#',
                        '_embedded' => [
                            'wp:term' => [[['name' => 'Security', 'taxonomy' => 'category']]],
                            'wp:featuredmedia' => []
                        ]
                    ],
                    [
                        'title' => ['rendered' => 'Cloud Migration Guide 2024'],
                        'excerpt' => ['rendered' => '<p>Complete guide to successful cloud migration strategies.</p>'],
                        'date' => date('Y-m-d\TH:i:s', strtotime('-5 days')),
                        'link' => '#',
                        '_embedded' => [
                            'wp:term' => [[['name' => 'Cloud', 'taxonomy' => 'category']]],
                            'wp:featuredmedia' => []
                        ]
                    ]
                ];
            }

            // Pastikan minimal ada 1 artikel
            if (empty($articles)) {
                echo '<div class="col-12"><div class="alert alert-info">No articles available at the moment.</div></div>';
            } else {
                $main_article = $articles[0];
            ?>

                <!-- KOLOM KIRI: Artikel Utama -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden">
                        <!-- Thumbnail Besar dengan Fallback -->
                        <div class="position-relative overflow-hidden" style="height: 450px; background: #f8f9fa;">
                            <?php
                            $main_thumb = getThumbnailUrl($main_article, 'large');
                            $main_title = htmlspecialchars($main_article['title']['rendered'] ?? 'Featured Article');
                            ?>
                            <img src="<?= $main_thumb ?>"
                                class="w-100 h-100 object-fit-cover"
                                alt="<?= $main_title ?>"
                                loading="lazy"
                                onerror="this.onerror=null; this.src='https://placehold.co/800x400/0d6efd/ffffff?text=<?= urlencode(substr($main_title, 0, 30)) ?>'">

                        </div>

                        <div class="card-body p-4 text-start">
                            <div class="d-flex align-items-center mb-3 gap-3">
                                <!-- Category kiri -->
                                <div class="d-flex flex-wrap gap-1">
                                    <?php
                                    $main_categories = [];
                                    if (isset($main_article['_embedded']['wp:term'][0])) {
                                        foreach ($main_article['_embedded']['wp:term'][0] as $term) {
                                            if ($term['taxonomy'] === 'category') {
                                                $main_categories[] = $term['name'];
                                            }
                                        }
                                    }

                                    if (!empty($main_categories)): ?>
                                        <div class="d-flex flex-wrap gap-1">
                                            <?php foreach (array_slice($main_categories, 0, 2) as $category): ?>
                                                <span class="badge bg-primary px-3 py-2 fw-normal">
                                                    <?= htmlspecialchars($category) ?>
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <span class="badge bg-secondary px-3 py-2 fw-normal">
                                            Uncategorized
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <!-- Date kanan -->
                                <?php
                                $main_date = $main_article['date'] ?? '';
                                if ($main_date):
                                    $main_formatted_date = date('M d, Y', strtotime($main_date));
                                ?>
                                    <div class="text-muted">
                                        <i class="bi bi-calendar3 me-1"></i><?= $main_formatted_date ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- Title -->
                            <h3 class="h2 mb-3">
                                <a href="<?= $main_article['link'] ?? '#' ?>"
                                    class="text-decoration-none text-dark">
                                    <?= $main_title ?>
                                </a>
                            </h3>

                            <!-- Excerpt -->
                            <?php
                            $main_excerpt = isset($main_article['excerpt']['rendered'])
                                ? strip_tags($main_article['excerpt']['rendered'])
                                : 'Read the full article for more insights.';
                            $short_excerpt = strlen($main_excerpt) > 150
                                ? substr($main_excerpt, 0, 150) . '...'
                                : $main_excerpt;
                            ?>
                            <p class="text-muted mb-4">
                                <?= htmlspecialchars($short_excerpt) ?>
                            </p>

                            <!-- Read More -->
                            <a href="<?= $main_article['link'] ?? '#' ?>"
                                class="btn btn-primary px-4 py-2">
                                Read Full Article <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: 2 Artikel Kecil -->
                <div class="col-lg-4">
                    <div class="d-flex flex-column h-100 gap-3">
                        <?php for ($i = 1; $i <= min(2, count($articles) - 1); $i++):
                            $article = $articles[$i];
                            $title = htmlspecialchars($article['title']['rendered'] ?? 'Article');
                            $thumb = getThumbnailUrl($article, 'small');

                            // Categories
                            $categories = [];
                            if (isset($article['_embedded']['wp:term'][0])) {
                                foreach ($article['_embedded']['wp:term'][0] as $term) {
                                    if ($term['taxonomy'] === 'category') {
                                        $categories[] = $term['name'];
                                    }
                                }
                            }

                            // Excerpt
                            $excerpt = isset($article['excerpt']['rendered'])
                                ? strip_tags($article['excerpt']['rendered'])
                                : 'Click to read more.';
                            $short_excerpt = strlen($excerpt) > 80
                                ? substr($excerpt, 0, 80) . '...'
                                : $excerpt;

                            // Date
                            $date = $article['date'] ?? '';
                            $formatted_date = $date ? date('M d, Y', strtotime($date)) : '';
                        ?>

                            <div class="card border-0 shadow-sm rounded-4">
                                <!-- Thumbnail atas -->
                                <div class="position-relative thumbnail-container">
                                    <img src="<?= $thumb ?>"
                                        class="w-100 thumbnail-image rounded-3"
                                        alt="<?= $title ?>"
                                        loading="lazy"
                                        onerror="this.onerror=null; this.src='https://placehold.co/300x150/6c757d/ffffff?text=<?= urlencode(substr($title, 0, 20)) ?>'">

                                </div>

                                <!-- Content bawah -->
                                <div class="card-body p-3 d-flex flex-column text-start rounded-3">

                                    <!-- Category & Date dalam satu baris -->
                                    <div class="d-flex align-items-center mb-3 gap-3">
                                        <!-- Category kiri -->
                                        <?php if (!empty($categories)): ?>
                                            <div class="d-flex flex-wrap gap-1">
                                                <?php foreach (array_slice($categories, 0, 2) as $category): ?>
                                                    <span class="badge bg-primary bg-opacity-90 small py-1 px-2">
                                                        <?= htmlspecialchars($category) ?>
                                                    </span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Date kanan -->
                                        <?php if ($formatted_date): ?>
                                            <small class="text-muted small">
                                                <i class="bi bi-calendar3 me-1"></i><?= $formatted_date ?>
                                            </small>
                                        <?php endif; ?>
                                    </div>

                                    <h6 class="card-title mb-2">
                                        <a href="<?= $article['link'] ?? '#' ?>"
                                            class="text-decoration-none text-dark">
                                            <?= $title ?>
                                        </a>
                                    </h6>

                                    <p class="card-text text-muted small mb-3 line-clamp-2">
                                        <?= htmlspecialchars($short_excerpt) ?>
                                    </p>

                                    <div class="mt-auto">
                                        <a href="<?= $article['link'] ?? '#' ?>"
                                            class="text-primary small text-decoration-none fw-medium">
                                            Read More <i class="bi bi-arrow-right small ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php endfor; ?>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

</section>

<section id="all-articles-section" class="py-5 position-relative">
    <div class="container text-center text-white">
        <div class="row g-4 mt-5 bg-white p-4 rounded-4 text-dark">
            <h4 class="mb-3 text-start">All Post</h4>

            <?php
            // Fungsi untuk fetch data dari API
            function fetchWordPressPosts()
            {
                // URL endpoint WordPress API
                $api_url = 'https://alldataint.com/wp-json/wp/v2/posts';
                $api_params = array(
                    'per_page' => 6, // Jumlah post yang diambil
                    '_embed' => 'wp:featuredmedia,wp:term', // Embed media dan kategori
                    '_fields' => 'id,title,excerpt,date,link,_embedded,_links'
                );

                $full_url = $api_url . '?' . http_build_query($api_params);

                // Setup cURL untuk fetch data
                $ch = curl_init();
                curl_setopt_array($ch, [
                    CURLOPT_URL => $full_url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_SSL_VERIFYPEER => false, // Hati-hati di production
                    CURLOPT_HTTPHEADER => [
                        'Accept: application/json',
                        'User-Agent: AllDataInternational/1.0'
                    ]
                ]);

                $response = curl_exec($ch);
                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                if ($http_code === 200 && $response) {
                    return json_decode($response, true);
                }

                return null;
            }

            // Fetch data posts
            $posts = fetchWordPressPosts();

            // Check if API call failed
            if (!$posts):
            ?>
                <div class="col-12">
                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        Tidak dapat terhubung ke blog feed. API mungkin tidak tersedia.
                    </div>
                </div>
                <?php
            else:
                // Loop melalui setiap post
                foreach ($posts as $post):
                    // Extract data dari post
                    $post_id = $post['id'] ?? 0;
                    $title = htmlspecialchars($post['title']['rendered'] ?? 'No Title');
                    $excerpt = isset($post['excerpt']['rendered'])
                        ? strip_tags($post['excerpt']['rendered'])
                        : 'No description available.';

                    // Truncate excerpt untuk preview
                    $short_excerpt = strlen($excerpt) > 120
                        ? substr($excerpt, 0, 120) . '...'
                        : $excerpt;

                    // Format tanggal
                    $date = $post['date'] ?? '';
                    $formatted_date = $date ? date('M d, Y', strtotime($date)) : '';

                    // Ambil thumbnail image
                    $thumbnail_url = 'https://placehold.co/400x250/0d6efd/ffffff?text=Blog+Post';

                    if (isset($post['_embedded']['wp:featuredmedia'][0]['source_url'])) {
                        $thumbnail_url = $post['_embedded']['wp:featuredmedia'][0]['source_url'];
                    } elseif (isset($post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['medium']['source_url'])) {
                        $thumbnail_url = $post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['medium']['source_url'];
                    }

                    // Ambil kategori
                    $categories = [];
                    if (isset($post['_embedded']['wp:term'][0])) {
                        foreach ($post['_embedded']['wp:term'][0] as $term) {
                            if ($term['taxonomy'] === 'category') {
                                $categories[] = $term['name'];
                            }
                        }
                    }

                    // Link post
                    $post_link = $post['link'] ?? '#';
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm blog-card text-start">
                            <!-- Thumbnail -->
                            <div class="position-relative">
                                <img src="<?= $thumbnail_url ?>"
                                    class="card-img-top blog-thumbnail"
                                    alt="<?= $title ?>"
                                    loading="lazy"
                                    onerror="this.src='https://placehold.co/400x250/f8f9fa/495057?text=<?= urlencode($title) ?>'">

                            </div>

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <!-- Categories kiri -->
                                    <?php if (!empty($categories) && count($categories) > 1): ?>
                                        <div class="d-flex flex-wrap gap-1">
                                            <?php foreach (array_slice($categories, 0, 2) as $category): ?>
                                                <span class="badge bg-light text-dark border small">
                                                    <?= htmlspecialchars($category) ?>
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <div></div> <!-- Spacer jika tidak ada kategori -->
                                    <?php endif; ?>

                                    <!-- Date kanan -->
                                    <?php if ($formatted_date): ?>
                                        <small class="text-muted">
                                            <i class="bi bi-calendar3 me-1"></i>
                                            <?= $formatted_date ?>
                                        </small>
                                    <?php endif; ?>
                                </div>

                                <!-- Title -->
                                <h5 class="card-title text-dark mb-3">
                                    <a href="<?= $post_link ?>" target="_blank" class="text-decoration-none text-dark">
                                        <?= $title ?>
                                    </a>
                                </h5>

                                <!-- Excerpt -->
                                <p class="card-text text-muted flex-grow-1">
                                    <?= htmlspecialchars($short_excerpt) ?>
                                </p>



                                <!-- Read More Button -->
                                <div class="mt-auto">
                                    <a href="<?= $post_link ?>" target="_blank"
                                        class="btn btn-outline-primary btn-sm w-100">
                                        Read More <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>

</section>


<?= $this->include('components/sections/cta_section') ?>

<?= $this->endSection() ?>