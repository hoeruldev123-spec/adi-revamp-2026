<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SolutionsController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Solutions - All Data International',
            'meta_description' => 'Temukan solusi lengkap untuk data integration, analytics, dan AI di All Data International.',
            'meta_keywords' => 'Data Integration, Analytics, AI, Big Data, Indonesia',
        ];

        return view('solutions/SolutionsView', $data);
    }
}
