<?php

if (!function_exists('wp_get_posts')) {
    /**
     * Get WordPress posts via REST API
     * 
     * @param array $params Query parameters
     * @return array|null
     */
    function wp_get_posts(array $params = []): ?array
    {
        $config = config('WordPress');
        $cache = \Config\Services::cache();

        // Generate cache key
        $cacheKey = 'wp_posts_' . md5(json_encode($params));

        // Check cache
        if ($config->enableCache) {
            $cached = $cache->get($cacheKey);
            if ($cached !== null) {
                return $cached;
            }
        }

        // Build URL
        $config = config('WordPress');
        $url = $config->apiBaseUrl . $config->postsEndpoint;

        // Default parameters
        $defaultParams = [
            'per_page' => $config->postsPerPage,
            '_embed' => true
        ];

        $params = array_merge($defaultParams, $params);
        $url .= '?' . http_build_query($params);

        // Make request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $config->timeout);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $config->sslVerify);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode == 200 && $response !== false) {
            $posts = json_decode($response, true);

            if (is_array($posts)) {
                // Cache results
                if ($config->enableCache) {
                    $cache->save($cacheKey, $posts, $config->cacheDuration);
                }

                return $posts;
            }
        }

        return null;
    }
}

if (!function_exists('wp_search_posts')) {
    /**
     * Search WordPress posts
     * 
     * @param string $query Search query
     * @param int $perPage Number of results
     * @return array
     */
    function wp_search_posts(string $query, int $perPage = 20): array
    {
        $posts = wp_get_posts([
            'search' => $query,
            'per_page' => $perPage
        ]);

        if (!$posts) {
            return [];
        }

        $results = [];

        foreach ($posts as $post) {
            // Extract excerpt
            $excerpt = strip_tags($post['excerpt']['rendered'] ?? '');
            $excerpt = trim($excerpt);
            $excerpt = mb_substr($excerpt, 0, 200) . '...';

            // Get featured image
            $thumbnail = '';
            if (isset($post['_embedded']['wp:featuredmedia'][0]['source_url'])) {
                $thumbnail = $post['_embedded']['wp:featuredmedia'][0]['source_url'];
            }

            // Get categories
            $categories = [];
            if (isset($post['_embedded']['wp:term'][0])) {
                foreach ($post['_embedded']['wp:term'][0] as $term) {
                    $categories[] = $term['name'];
                }
            }

            $results[] = [
                'id' => $post['id'],
                'title' => html_entity_decode($post['title']['rendered'], ENT_QUOTES),
                'description' => $excerpt,
                'content' => $post['content']['rendered'] ?? '',
                'url' => $post['link'],
                'category' => 'Articles',
                'date' => date('d M Y', strtotime($post['date'])),
                'author' => $post['_embedded']['author'][0]['name'] ?? 'Admin',
                'thumbnail' => $thumbnail,
                'categories' => $categories
            ];
        }

        return $results;
    }
}

if (!function_exists('wp_clear_cache')) {
    /**
     * Clear WordPress cache
     * 
     * @return bool
     */
    function wp_clear_cache(): bool
    {
        $cache = \Config\Services::cache();
        return $cache->deleteMatching('wp_posts_*');
    }
}
