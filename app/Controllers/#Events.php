<?php

namespace App\Controllers;

class Events extends BaseController
{
    public function awsEndToEndDataSolution()
    {
        $data['speakers'] = [
            [
                'name' => 'Nadhira Pramatma',
                'title' => 'VP of Technology',
                'photo' => '/assets/images/events/speakers/nadhira.webp'
            ],
            [
                'name' => 'Shandy Tsalasa',
                'title' => 'Solution Architect',
                'photo' => '/assets/images/events/speakers/shandy.webp'
            ],
            [
                'name' => 'Alpin Noza',
                'title' => 'Data Science Lead',
                'photo' => '/assets/images/events/speakers/alpin.webp'
            ],
            [
                'name' => 'Aditya Permana',
                'title' => 'Platform and Data Engineer',
                'photo' => '/assets/images/events/speakers/aditya.webp'
            ],
            [
                'name' => 'Aji Nugroho',
                'title' => 'Account Manager',
                'photo' => '/assets/images/events/speakers/aji.webp'
            ],
        ];

        return view('pages/events/aws-end-to-end-data-solution', $data);
    }
}
