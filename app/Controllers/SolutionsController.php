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
            'title'            => 'AI-Powered Demand Forecasting for Retail & FMCG',
            'meta_description' => 'Predict demand accurately across seasons and peak periods to reduce excess inventory, prevent stockouts, and maximize revenue with AI-driven forecasting.',
            'meta_keywords'    => 'AI FMCG, demand forecasting, supply chain AI, retail analytics, FMCG data solution',
            'og_image'         => base_url('assets/images/og/solutions-fmcg.png'),

            // ===== HERO =====
            'subtitle'    => 'DETAIL SOLUTIONS',
            'description' => 'Predict demand accurately across seasons and peak periods to reduce excess inventory, prevent stockouts, and maximize revenue with AI-driven forecasting.',
            'image'       => 'solutions/solutions-fmcg.webp',

            // ===== CTA =====
            'cta_text'   => 'Explore Now',
            'cta_link'   => '#detail-solutions',
            'cta_action' => 'scroll',
            'cta_style'  => 'btn-outline-pill',

            // icon option: up-right | down-right
            'cta_icon'   => 'down-right',

            // ===== DETAIL SOLUTIONS CONTENT =====
            'solutions' => [
                [
                    'title'       => 'AI-Driven Demand Forecasting',
                    'description' => 'Leverage AI models to automatically capture complex seasonal and holiday demand patterns—such as Lebaran—across thousands of SKUs with higher accuracy than manual forecasting.',
                    'image'       => 'solutions/fmcg-1.webp',
                ],
                [
                    'title'       => 'Inventory Optimization at Scale',
                    'description' => 'Optimize safety stock levels and replenishment decisions to reduce excess inventory while maintaining high product availability during peak demand periods.',
                    'image'       => 'solutions/fmcg-2.webp',
                ],
                [
                    'title'       => 'Human-in-the-Loop Planning',
                    'description' => 'Empower supply chain planners to focus on strategic adjustments while AI handles forecasting complexity—combining automation with human expertise for better outcomes.',
                    'image'       => 'solutions/fmcg-3.webp',
                ],
            ],
        ]);
    }

    public function telecom()
    {
        return view('pages/solutions/telecom', [
            // ===== SEO =====
            'title'            => 'Reduce Customer Churn Before It Happens',
            'meta_description' => 'Leverage AI powered analytics to detect early churn signals and trigger pre-emptive retention protecting revenue and strengthening customer loyalty.',
            'meta_keywords'    => 'telecom, network analytics, churn prediction, telecom big data, AI telco',


            // ===== HERO SMALL =====
            'subtitle'    => 'DETAIL SOLUTIONS',
            'description' => 'Leverage AI powered analytics to detect early churn signals and trigger pre-emptive retention protecting revenue and strengthening customer loyalty.',
            'image'       => 'solutions/solutions-telecom.webp',

            // ===== CTA =====
            'cta_text'   => 'Explore Now',
            'cta_link'   => '#detail-solutions',
            'cta_action' => 'scroll',
            'cta_style'  => 'btn-outline-pill',

            // icon option: up-right | down-right
            'cta_icon'   => 'down-right',

            // ===== DETAIL SOLUTIONS CONTENT =====
            'solutions' => [
                [
                    'title'       => 'Pre-Emptive Churn Detection',
                    'description' => 'Use AI models to identify early warning signals such as declining usage and engagement—detecting “silent churn” weeks before customers decide to leave.',
                    'image'       => 'solutions/telecom-1.webp',
                ],
                [
                    'title'       => 'Intelligent Retention Actions',
                    'description' => 'Automatically trigger personalized retention offers and interventions while customers are still receptive—maximizing retention success and campaign efficiency.',
                    'image'       => 'solutions/telecom-2.webp',
                ],
                [
                    'title'       => 'Revenue Protection & Impact Measurement',
                    'description' => 'Measure the financial impact of churn prevention initiatives with clear visibility into retention success, revenue saved, and monthly ROI.',
                    'image'       => 'solutions/telecom-3.webp',
                ],
            ],
        ]);
    }

    public function government()
    {
        return view('pages/solutions/government', [
            // ===== SEO =====
            'title'            => 'AI Solutions for Government & Public Sector | All Data International',
            'meta_description' => 'AI solutions for government to support smart city initiatives, public data analytics, and digital transformation.',
            'meta_keywords'    => 'AI government, smart city, public sector analytics, digital government, AI public service',

            // ===== HERO SMALL =====
            'subtitle'    => 'DETAIL SOLUTIONS',
            'description' => 'Empowering government institutions with secure, data-driven, and intelligent solutions.',
            'image'       => 'solutions/solutions-government.webp',

            // ===== CTA =====
            'cta_text'    => 'Explore Now',
            'cta_link'    => '#detail-solutions',
            'cta_action'  => 'scroll',
        ]);
    }


    public function financial()
    {
        return view('pages/solutions/financial', [
            // ===== SEO =====
            'title'            => 'Smarter Financial Decisions with AI',
            'meta_description' => 'Transform customer data into personalized offers, higher conversion rates, and measurable business impact.',
            'meta_keywords'    => 'finance, fraud detection, financial analytics, risk management AI',

            // ===== HERO SMALL =====
            'subtitle'    => 'DETAIL SOLUTIONS',
            'description' => 'Transform customer data into personalized offers, higher conversion rates, and measurable business impact.',
            'image'       => 'solutions/solutions-financial.webp',

            // ===== CTA =====
            'cta_text'   => 'Explore Now',
            'cta_link'   => '#detail-solutions',
            'cta_action' => 'scroll',
            'cta_style'  => 'btn-outline-pill',

            // icon option: up-right | down-right
            'cta_icon'   => 'down-right',

            // ===== DETAIL SOLUTIONS CONTENT =====
            'solutions' => [
                [
                    'title'       => 'Next Best Offer (AI Personalization)',
                    'description' => 'Leverage AI to identify customer life events and behavioural patterns from transaction data, enabling financial institutions to recommend the most relevant product or service at the right time.',
                    'image'       => 'solutions/financial-industry-1.webp',
                ],
                [
                    'title'       => '360° Customer Intelligence',
                    'description' => 'Build a unified view of customer data across channels and transactions to understand intent, needs, and financial behaviour moving beyond traditional balance-based segmentation.',
                    'image'       => 'solutions/financial-industry-2.webp',
                ],
                [
                    'title'       => 'Campaign Performance Optimization',
                    'description' => 'Focus campaigns on the right customers with the right offers—improving conversion rates and campaign ROI.',
                    'image'       => 'solutions/financial-industry-3.webp',
                ],
            ],
        ]);
    }
}
