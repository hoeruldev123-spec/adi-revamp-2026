<?php

namespace App\Controllers;

class Articles extends BaseController
{
    protected $wpApiUrl;
    protected $perPage = 10;

    public function __construct()
    {
        $this->wpApiUrl = 'https://alldataint.com/articles/wp-json/wp/v2/';
    }

    public function index($page = 1)
    {
        helper('pagination');
        $page = max(1, (int) $page);

        $search   = $this->request->getGet('search') ?? '';
        $category = $this->request->getGet('category') ?? '';
        $tag      = $this->request->getGet('tag') ?? '';


        // Get latest 3 articles for featured section
        $latestArticles = $this->getLatestArticles(3);
        $featuredIds = array_column($latestArticles, 'id');


        // Get articles for listing (offset by 3 to skip featured articles)
        $articles = $this->getArticles(
            $page,
            $search,
            $category,
            $tag,
            $featuredIds
        );


        // Get categories and tags for sidebar
        $categories = $this->getCategories();
        $tags = $this->getTags();

        // Calculate pagination
        $totalPages = $articles['total_pages'] ?? 1;

        $data = [
            'title' => 'Articles | All Data International',
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

        $pagination = build_pagination_links([
            'basePath'    => 'resources/articles/page',
            'currentPage' => $page,
            'totalPages'  => $totalPages,
            'queryParams' => [
                'search'   => $search,
                'category' => $category,
                'tag'      => $tag,
            ]
        ]);

        $data['pagination'] = $pagination;

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

    private function getArticles($page, $search, $category, $tag, $excludeIds = [])
    {
        $params = [
            'per_page' => $this->perPage,
            'page'     => max(1, (int)$page),
            '_embed'   => true,
        ];

        if ($excludeIds) {
            $params['exclude'] = implode(',', $excludeIds);
        }

        if ($search)   $params['search'] = $search;
        if ($category) $params['categories'] = $category;
        if ($tag)      $params['tags'] = $tag;

        $url = $this->wpApiUrl . 'posts?' . http_build_query($params);

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => true,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);

        $response = curl_exec($ch);
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        curl_close($ch);

        $header = substr($response, 0, $headerSize);
        $body   = substr($response, $headerSize);

        preg_match('/X-WP-TotalPages:\s*(\d+)/i', $header, $matches);

        return [
            'posts' => $this->formatPosts(json_decode($body, true)),
            'total_pages' => (int)($matches[1] ?? 1)
        ];
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
