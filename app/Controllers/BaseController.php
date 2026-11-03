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

        // chunk → 3 card per slide
        $data['principal_slides'] = array_chunk($principals, 3);

        return $data;
    }

    // SERVICES
    protected function getServices(): array
    {
        return [
            'consulting' => [
                'key' => 'consulting',
                'title' => 'Consulting',
                'description' => 'Expert guidance to design data and AI strategies.',
                'image' => 'services-card1.webp',
                'icon' => 'icon-service-consulting.svg',
                'url' => 'services/consulting',
            ],
            'use-case-development' => [
                'key' => 'use-case-development',
                'title' => 'Use Case Development',
                'description' => 'Build tailored AI and analytics solutions.',
                'image' => 'services-card2.webp',
                'icon' => 'icon-service-usecase-development.svg',
                'url' => 'services/use-case-development',
            ],
            'maintenance-support' => [
                'key' => 'maintenance-support',
                'title' => 'Maintenance Support',
                'description' => 'Ensure system reliability and optimization.',
                'image' => 'services-card3.webp',
                'icon' => 'icon-service-maintenance-support.svg',
                'url' => 'services/maintenance-support',
            ],
            'managed-services' => [
                'key' => 'managed-services',
                'title' => 'Managed Services',
                'description' => 'End-to-end infrastructure management.',
                'image' => 'services-card4.webp',
                'icon' => 'icon-service-manage-service.svg',
                'url' => 'services/managed-services',
            ],
            'training' => [
                'key' => 'training',
                'title' => 'Training',
                'description' => 'Professional data & AI training programs.',
                'image' => 'services-card5.webp',
                'icon' => 'icon-service-training.svg',
                'url' => 'services/training',
            ],
        ];
    }
}
