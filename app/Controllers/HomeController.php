<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        // Load model data jika ada
        // $serviceModel = new ServiceModel();
        // $services = $serviceModel->getFeaturedServices();

        $data = [
            'title' => 'Home - All Data international',
            // 'hero' => $this->getHeroData(),
            // 'services' => $this->getServicesData(),
            // 'solutions' => $this->getSolutionsData(),
            // 'testimonials' => $this->getTestimonialsData()
        ];

        return view('pages/home', $data);
    }

    private function getHeroData()
    {
        return [
            'badge' => 'Elevate Your Business with AI',
            'title' => 'Empowering Smarter<br>Business Through Data<br>& AI Integration',
            'description' => 'We deliver integrated solutions that transform complex data into clear insights and smarter business outcomes.',
            'image' => 'cloud-hero.png',
            'cta_text' => 'Learn More',
            'cta_link' => '/solutions'
        ];
    }

    private function getServicesData()
    {
        return [
            // ... service data
        ];
    }
}
