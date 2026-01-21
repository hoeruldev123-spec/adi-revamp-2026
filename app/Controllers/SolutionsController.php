<?php

namespace App\Controllers;

class SolutionsController extends BaseController
{
    public function index()
    {
        $data = [
            'subtitle' => 'Our Solutions',
            'title' => 'Industry-Focused Solutions for Real Business Impact',
            'description' => 'We deliver tailored data, analytics, and AI solutions designed to address the unique challenges of each industry.',
        ];

        return view('pages/solutions/index', $data);
    }

    public function fmcg()
    {
        return view('pages/solutions/fmcg', [
            // ===== SEO =====
            'title'            => 'AI Solutions for FMCG Industry | All Data International',
            'meta_description' => 'AI-powered FMCG solutions to optimize demand forecasting, inventory management, and supply chain efficiency.',
            'meta_keywords'    => 'AI FMCG, demand forecasting, supply chain AI, retail analytics, FMCG data solution',
            'og_image'         => base_url('assets/images/og/solutions-fmcg.png'),

            // ===== PAGE CONTENT =====
            'subtitle'   => 'DETAIL SOLUTIONS',
            'description' => 'Optimize demand forecasting and supply chain with AI-powered analytics for smarter market decisions.',
            'image'      => 'solutions/solutions-fmcg.webp',

            // ===== CTA =====
            'cta_text'   => 'Explore Now',
            'cta_link'   => '#detail-solutions',
            'cta_action' => 'scroll',
            'cta_icon'   => 'bi bi-arrow-down-right',
        ]);
    }


    public function telecom()
    {
        return view('pages/solutions/telecom', [
            // ===== SEO =====
            'title'            => 'AI Solutions for Telecom Industry | All Data International',
            'meta_description' => 'AI-powered telecom solutions to optimize network performance, customer analytics, and churn prediction.',
            'meta_keywords'    => 'AI telecom, network analytics, churn prediction, telecom big data, AI telco',


            // ===== PAGE CONTENT =====
            'subtitle'    => 'DETAIL SOLUTIONS',
            'description' => 'Leverage AI-driven insights to enhance network reliability and customer experience.',
            'image'       => 'solutions/solutions-telecom.webp',

            // ===== CTA =====
            'cta_text'    => 'Explore Now',
            'cta_link'    => '#detail-solutions',
            'cta_action'  => 'scroll',
            'cta_icon'    => 'bi bi-arrow-down-right',
        ]);
    }


    public function government()
    {
        return view('pages/solutions/government', [
            // ===== SEO =====
            'title'            => 'AI Solutions for Government & Public Sector | All Data International',
            'meta_description' => 'AI solutions for government to support smart city initiatives, public data analytics, and digital transformation.',
            'meta_keywords'    => 'AI government, smart city, public sector analytics, digital government, AI public service',


            // ===== PAGE CONTENT =====
            'subtitle'    => 'DETAIL SOLUTIONS',
            'description' => 'Empowering government institutions with secure, data-driven, and intelligent solutions.',
            'image'       => 'solutions/solutions-government.webp',

            // ===== CTA =====
            'cta_text'    => 'Explore Now',
            'cta_link'    => '#detail-solutions',
            'cta_action'  => 'scroll',
            'cta_icon'    => 'bi bi-arrow-down-right',
        ]);
    }


    public function financial()
    {
        return view('pages/solutions/financial', [
            'title'            => 'AI Solutions for Finance Industry | All Data International',
            'meta_description' => 'AI-driven financial analytics for risk management, fraud detection, and predictive insights.',
            'meta_keywords'    => 'AI finance, fraud detection, financial analytics, risk management AI',


            'subtitle'    => 'DETAIL SOLUTIONS',
            'description' => 'Enhance financial decisions with intelligent analytics and automation.',
            'image'       => 'solutions/solutions-financial.webp',

            'cta_text'    => 'Explore Now',
            'cta_link'    => '#detail-solutions',
            'cta_action'  => 'scroll',
        ]);
    }
}
