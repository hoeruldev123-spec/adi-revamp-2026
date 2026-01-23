<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class WordPress extends BaseConfig
{
    /**
     * WordPress API Base URL
     */
    public string $apiBaseUrl = 'https://staging-adi2026.alldataint.com/articles/wp-json/wp/v2/';

    /**
     * WordPress Posts Endpoint
     */
    public string $postsEndpoint = 'posts';

    /**
     * WordPress Categories Endpoint
     */
    public string $categoriesEndpoint = 'categories';

    /**
     * WordPress Tags Endpoint
     */
    public string $tagsEndpoint = 'tags';

    /**
     * Default number of posts per page
     */
    public int $postsPerPage = 20;

    /**
     * Enable/disable caching
     */
    public bool $enableCache = true;

    /**
     * Cache duration in seconds (1 hour)
     */
    public int $cacheDuration = 3600;

    /**
     * Connection timeout in seconds
     */
    public int $timeout = 10;

    /**
     * SSL verification (set to false for development)
     */
    public bool $sslVerify = false;
}
