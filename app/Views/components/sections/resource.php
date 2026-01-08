<section id="principal-section" class="py-5 bg-light">
    <div class="container">
        <!-- Header Section -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h6 class="text-uppercase text-primary mb-2">RESOURCES</h6>
                <h2 class="mb-3">Stay Informed with Our Latest Updates</h2>

            </div>
        </div>

        <div class="row g-4">

            <?php
            // Fungsi untuk fetch data dari API
            function fetchWordPressPosts()
            {
                // URL endpoint WordPress API
                $api_url = 'https://alldataint.com/wp-json/wp/v2/posts';
                $api_params = array(
                    'per_page' => 3, // Jumlah post yang diambil
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

        <div class="justify-content-center text-center">
            <a href="<?= base_url('resources/articles') ?>" class="btn btn-primary rounded-pill px-4 btn-hover-up">
                All Post
            </a>
        </div>

    </div>
</section>