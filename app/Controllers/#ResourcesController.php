<?php

namespace App\Controllers;

class ResourcesController extends BaseController
{
    /**
     * Articles Page
     */
    // public function articles()
    // {
    //     $data = [
    //         'title' => 'Articles & Insights | All Data International',
    //         'meta_description' => 'Browse our latest articles and industry insights from All Data International.',
    //         'active_page' => 'resources',
    //         'active_subpage' => 'articles'
    //     ];


    //     return view('pages/resources/articles', $data);
    // }

    /**
     * Events Page
     */
    public function events()
    {
        $data = [
            'title' => 'Events & Webinars | All Data International',
            'meta_description' => 'Join our upcoming events, webinars, and conferences.',
            'active_page' => 'resources',
            'active_subpage' => 'events'
        ];

        return view('pages/resources/events', $data);
    }
}
