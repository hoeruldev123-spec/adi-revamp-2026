<?php

namespace App\Controllers;

class SearchController extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        helper('wordpress');
    }

    public function index()
    {
        $data = [
            'title' => 'Search - All Data International',
            'meta_description' => 'Search for solutions, services, and resources at All Data International',
            'meta_keywords' => 'search, all data, solutions, services'
        ];

        return view('search/index', $data);
    }

    public function results()
    {
        $query = $this->request->getGet('q');

        if (empty($query)) {
            return redirect()->to(base_url('search'));
        }

        // Sanitize query
        $query = esc($query);

        $data = [
            'title' => 'Search Results: ' . $query . ' - All Data International',
            'meta_description' => 'Search results for: ' . $query,
            'query' => $query,
            'results' => $this->performSearch($query)
        ];

        return view('search/results', $data);
    }

    private function performSearch($query)
    {
        $results = [
            'solutions' => $this->searchSolutions($query),
            'services' => $this->searchServices($query),
            'articles' => $this->searchArticles($query),
            'pages' => $this->searchStaticPages($query)
        ];

        // Count total results
        $results['total'] = count($results['solutions']) +
            count($results['services']) +
            count($results['articles']) +
            count($results['pages']);

        return $results;
    }

    private function searchSolutions($query)
    {
        $solutions = [
            [
                'title' => 'FMCG Solutions',
                'description' => 'Comprehensive data solutions for Fast-Moving Consumer Goods industry including inventory management, supply chain optimization, and consumer insights',
                'url' => base_url('solutions/fmcg'),
                'category' => 'Solutions'
            ],
            [
                'title' => 'Telecom Solutions',
                'description' => 'Advanced telecommunications data integration and analytics for network optimization and customer experience',
                'url' => base_url('solutions/telecom'),
                'category' => 'Solutions'
            ],
            [
                'title' => 'Government Solutions',
                'description' => 'Secure and efficient data management for government agencies with compliance and security features',
                'url' => base_url('solutions/government'),
                'category' => 'Solutions'
            ],
            [
                'title' => 'Financial Solutions',
                'description' => 'Data-driven solutions for financial institutions including risk management and fraud detection',
                'url' => base_url('solutions/financial'),
                'category' => 'Solutions'
            ]
        ];

        return $this->filterResults($solutions, $query);
    }

    private function searchServices($query)
    {
        $services = [
            [
                'title' => 'Data Integration Services',
                'description' => 'Seamless integration of data from multiple sources with ETL processes and real-time synchronization',
                'url' => base_url('services#data-integration'),
                'category' => 'Services'
            ],
            [
                'title' => 'Big Data Analytics',
                'description' => 'Advanced analytics and insights from big data using machine learning and AI technologies',
                'url' => base_url('services#big-data'),
                'category' => 'Services'
            ],
            [
                'title' => 'Cloud Solutions',
                'description' => 'Scalable cloud infrastructure and services for modern businesses with AWS, Azure, and GCP support',
                'url' => base_url('services#cloud'),
                'category' => 'Services'
            ],
            [
                'title' => 'AI & Machine Learning',
                'description' => 'Intelligent automation and predictive analytics powered by artificial intelligence',
                'url' => base_url('services#ai-ml'),
                'category' => 'Services'
            ]
        ];

        return $this->filterResults($services, $query);
    }

    private function searchArticles($query)
    {
        try {
            // Use WordPress helper
            $articles = wp_search_posts($query, 20);
            return $articles;
        } catch (\Exception $e) {
            log_message('error', 'WordPress Search Error: ' . $e->getMessage());
            return [];
        }
    }

    private function searchStaticPages($query)
    {
        $pages = [
            [
                'title' => 'About Us',
                'description' => 'Learn more about All Data International, our mission, vision, and values',
                'url' => base_url('company/about-us'),
                'category' => 'Company'
            ],
            [
                'title' => 'Our Partners',
                'description' => 'Meet our trusted technology partners and strategic alliances',
                'url' => base_url('company/our-partners'),
                'category' => 'Company'
            ],
            [
                'title' => 'Our Clients',
                'description' => 'Discover who trusts us with their data solutions and digital transformation',
                'url' => base_url('company/our-clients'),
                'category' => 'Company'
            ],
            [
                'title' => 'Our Competencies',
                'description' => 'Explore our core competencies and technical expertise',
                'url' => base_url('company/our-competencies'),
                'category' => 'Company'
            ],
            [
                'title' => 'Contact Us',
                'description' => 'Get in touch with our team for consultations and inquiries',
                'url' => base_url('contact'),
                'category' => 'Contact'
            ]
        ];

        return $this->filterResults($pages, $query);
    }

    private function filterResults($items, $query)
    {
        $query = strtolower($query);
        $filtered = [];

        foreach ($items as $item) {
            $titleMatch = stripos($item['title'], $query) !== false;
            $descMatch = stripos($item['description'], $query) !== false;

            if ($titleMatch || $descMatch) {
                // Highlight matched text (skip for WordPress articles)
                if (!isset($item['date'])) {
                    $item['title'] = $this->highlightText($item['title'], $query);
                    $item['description'] = $this->highlightText($item['description'], $query);
                }
                $filtered[] = $item;
            }
        }

        return $filtered;
    }

    private function highlightText($text, $query)
    {
        return preg_replace('/(' . preg_quote($query, '/') . ')/i', '<mark class="bg-warning">$1</mark>', $text);
    }

    /**
     * Clear WordPress cache (admin function)
     */
    public function clearCache()
    {
        if (wp_clear_cache()) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Cache cleared successfully'
            ]);
        }

        return $this->response->setJSON([
            'success' => false,
            'message' => 'Failed to clear cache'
        ]);
    }
}
