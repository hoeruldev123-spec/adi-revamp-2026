<?php

if (!function_exists('build_articles_url')) {
    /**
     * Build URL for articles with query parameters
     * 
     * @param int $page
     * @param string $search
     * @param string $category
     * @param string $tag
     * @return string
     */
    function build_articles_url($page = 1, $search = '', $category = '', $tag = '')
    {
        $params = [];

        if ($page > 1) {
            $params['page'] = $page;
        }

        if (!empty($search)) {
            $params['search'] = $search;
        }

        if (!empty($category)) {
            $params['category'] = $category;
        }

        if (!empty($tag)) {
            $params['tag'] = $tag;
        }

        $url = base_url('articles');

        if (!empty($params)) {
            $url .= '?' . http_build_query($params);
        }

        return $url;
    }
}

if (!function_exists('get_reading_time')) {
    /**
     * Calculate reading time for article
     * 
     * @param string $content
     * @return string
     */
    function get_reading_time($content)
    {
        $wordCount = str_word_count(strip_tags($content));
        $minutes = ceil($wordCount / 200); // Average reading speed: 200 words/minute

        return $minutes . ' min read';
    }
}

if (!function_exists('truncate_text')) {
    /**
     * Truncate text to specified length
     * 
     * @param string $text
     * @param int $length
     * @param string $suffix
     * @return string
     */
    function truncate_text($text, $length = 150, $suffix = '...')
    {
        $text = strip_tags($text);
        $text = trim($text);

        if (mb_strlen($text) <= $length) {
            return $text;
        }

        return mb_substr($text, 0, $length) . $suffix;
    }
}
