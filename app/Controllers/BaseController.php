<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = service('session');
    }

    protected function withPrincipalSlides(array $data = []): array
    {
        $principals = [
            ['logo' => 'Logo-Qlik.png', 'alt' => 'Qlik', 'description' => 'Empowering data-driven insights through advanced analytics and intuitive visualization.'],
            ['logo' => 'Logo-Confluent.png', 'alt' => 'Confluent', 'description' => 'Real-time data streaming powered by Apache Kafka for smarter business operations.'],
            ['logo' => 'Logo-Denodo.png', 'alt' => 'Denodo', 'description' => 'Seamless data virtualization enabling unified access across multiple systems and sources.'],
            ['logo' => 'Logo-Snowflake.png', 'alt' => 'Snowflake', 'description' => 'Scalable cloud data platform for high-performance analytics and AI innovation.'],
            ['logo' => 'Logo-Dataiku.png', 'alt' => 'Dataiku', 'description' => 'Collaborative AI platform to build, deploy, and manage enterprise machine learning.'],
            ['logo' => 'Logo-Cloudera.png', 'alt' => 'Cloudera', 'description' => 'Hybrid data platform integrating analytics, AI, and data management at scale.'],
            ['logo' => 'Logo-Tableau.png', 'alt' => 'Tableau', 'description' => 'Transform raw data into actionable insights with intuitive visual analytics and interactive dashboards.'],
            ['logo' => 'Logo-YugabyteDB.png', 'alt' => 'YugabyteDB', 'description' => 'Distributed SQL database for cloud-native applications.'],
            ['logo' => 'Logo-Hasura.png', 'alt' => 'Hasura', 'description' => 'Instant GraphQL APIs.'],
            ['logo' => 'Logo-ClickHouse.png', 'alt' => 'ClickHouse', 'description' => 'Real-time analytics database.'],
            ['logo' => 'Logo-Alibaba-Cloud.png', 'alt' => 'Alibaba Cloud', 'description' => 'Comprehensive cloud computing services.'],
            ['logo' => 'Logo-redis.png', 'alt' => 'Redis', 'description' => 'In-memory data store.'],
            ['logo' => 'Logo-Dell.png', 'alt' => 'Dell', 'description' => 'Enterprise IT infrastructure solutions.'],
            ['logo' => 'Logo-AWS.png', 'alt' => 'AWS', 'description' => 'Cloud computing and AI services.'],
            ['logo' => 'Logo-Helett Packard.png', 'alt' => 'Hewlett Packard', 'description' => 'Hybrid cloud solutions.'],
            ['logo' => 'Logo-Creatio.png', 'alt' => 'Creatio', 'description' => 'Empowering decisions by transforming raw data into actionable insights through interactive visual analytics.'],

        ];

        // chunk → 3 card per slide
        $data['principal_slides'] = array_chunk($principals, 3);

        return $data;
    }
}
