<?php

namespace App\Controllers;

class Articles extends BaseController
{
    protected $wpApiUrl;
    protected $perPage = 10;

    public function __construct()
    {
        $this->wpApiUrl = 'https://staging-adi2026.alldataint.com/articles/wp-json/wp/v2/';
    }

    public function index()
    {
        $page = $this->request->getGet('page') ?? 1;
        $search = $this->request->getGet('search') ?? '';
        $category = $this->request->getGet('category') ?? '';
        $tag = $this->request->getGet('tag') ?? '';

        // Get latest 3 articles for featured section
        $latestArticles = $this->getLatestArticles(3);

        // Get articles for listing (offset by 3 to skip featured articles)
        $articles = $this->getArticles($page, $search, $category, $tag);

        // Get categories and tags for sidebar
        $categories = $this->getCategories();
        $tags = $this->getTags();

        // Calculate pagination
        $totalPages = $articles['total_pages'] ?? 1;

        $data = [
            'title' => 'Articles - All Data International',
            'meta_description' => 'Read the latest articles, insights, and news from All Data International',
            'meta_keywords' => 'articles, blog, insights, news, data solutions',
            'latestArticles' => $latestArticles,
            'articles' => $articles['posts'] ?? [],
            'categories' => $categories,
            'tags' => $tags,
            'currentPage' => (int)$page,
            'totalPages' => $totalPages,
            'search' => $search,
            'selectedCategory' => $category,
            'selectedTag' => $tag
        ];

        return view('articles/index', $data);
    }

    private function getLatestArticles($limit = 3)
    {
        try {
            $url = $this->wpApiUrl . 'posts?per_page=' . $limit . '&_embed=true';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode == 200 && $response) {
                $posts = json_decode($response, true);
                return $this->formatPosts($posts);
            }
        } catch (\Exception $e) {
            log_message('error', 'WordPress Latest Articles Error: ' . $e->getMessage());
        }

        return [];
    }

    private function getArticles($page = 1, $search = '', $category = '', $tag = '')
    {
        try {
            // Start from offset 3 to skip featured articles
            $offset = ($page == 1) ? 3 : (($page - 1) * $this->perPage) + 3;

            $params = [
                'per_page' => $this->perPage,
                'offset' => $offset,
                '_embed' => true
            ];

            if (!empty($search)) {
                $params['search'] = $search;
                $offset = ($page - 1) * $this->perPage; // Reset offset for search
                unset($params['offset']);
                $params['offset'] = $offset;
            }

            if (!empty($category)) {
                $params['categories'] = $category;
            }

            if (!empty($tag)) {
                $params['tags'] = $tag;
            }

            $url = $this->wpApiUrl . 'posts?' . http_build_query($params);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, true);

            $response = curl_exec($ch);
            $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode == 200 && $response) {
                $header = substr($response, 0, $headerSize);
                $body = substr($response, $headerSize);

                // Get total pages from header
                preg_match('/X-WP-TotalPages: (\d+)/', $header, $matches);
                $totalPages = isset($matches[1]) ? (int)$matches[1] : 1;

                $posts = json_decode($body, true);

                return [
                    'posts' => $this->formatPosts($posts),
                    'total_pages' => $totalPages
                ];
            }
        } catch (\Exception $e) {
            log_message('error', 'WordPress Articles Error: ' . $e->getMessage());
        }

        return ['posts' => [], 'total_pages' => 1];
    }

    private function getCategories()
    {
        try {
            $url = $this->wpApiUrl . 'categories?per_page=20&hide_empty=true';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode == 200 && $response) {
                return json_decode($response, true);
            }
        } catch (\Exception $e) {
            log_message('error', 'WordPress Categories Error: ' . $e->getMessage());
        }

        return [];
    }

    private function getTags()
    {
        try {
            $url = $this->wpApiUrl . 'tags?per_page=20&hide_empty=true';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode == 200 && $response) {
                return json_decode($response, true);
            }
        } catch (\Exception $e) {
            log_message('error', 'WordPress Tags Error: ' . $e->getMessage());
        }

        return [];
    }

    private function formatPosts($posts)
    {
        if (!is_array($posts)) {
            return [];
        }

        $formatted = [];

        foreach ($posts as $post) {
            $excerpt = strip_tags($post['excerpt']['rendered'] ?? '');
            $excerpt = trim($excerpt);
            $excerpt = mb_substr($excerpt, 0, 150) . '...';

            $thumbnail = '';
            if (isset($post['_embedded']['wp:featuredmedia'][0]['source_url'])) {
                $thumbnail = $post['_embedded']['wp:featuredmedia'][0]['source_url'];
            }

            $categories = [];
            if (isset($post['_embedded']['wp:term'][0])) {
                foreach ($post['_embedded']['wp:term'][0] as $term) {
                    $categories[] = [
                        'id' => $term['id'],
                        'name' => $term['name'],
                        'slug' => $term['slug']
                    ];
                }
            }

            $tags = [];
            if (isset($post['_embedded']['wp:term'][1])) {
                foreach ($post['_embedded']['wp:term'][1] as $term) {
                    $tags[] = [
                        'id' => $term['id'],
                        'name' => $term['name'],
                        'slug' => $term['slug']
                    ];
                }
            }

            $formatted[] = [
                'id' => $post['id'],
                'title' => html_entity_decode($post['title']['rendered'], ENT_QUOTES),
                'excerpt' => $excerpt,
                'content' => $post['content']['rendered'] ?? '',
                'url' => $post['link'],
                'date' => date('d M Y', strtotime($post['date'])),
                'date_full' => date('F j, Y', strtotime($post['date'])),
                'author' => $post['_embedded']['author'][0]['name'] ?? 'Admin',
                'thumbnail' => $thumbnail,
                'categories' => $categories,
                'tags' => $tags
            ];
        }

        return $formatted;
    }
}
