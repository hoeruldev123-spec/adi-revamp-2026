<?php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'FAQ - Frequently Asked Questions',
            'faqs' => [
                [
                    'id' => 1,
                    'question' => 'Question-01',
                    'answer' => 'Lorem ipsum dolor sit amet consectetur. Vulputate aliquet vitae placerat id. In imperdiet enim ultricies.'
                ],
                [
                    'id' => 2,
                    'question' => 'Question-02',
                    'answer' => 'Lorem ipsum dolor sit amet consectetur. Vulputate aliquet vitae placerat id. In imperdiet enim ultricies.'
                ],
                [
                    'id' => 3,
                    'question' => 'Question-03',
                    'answer' => 'Lorem ipsum dolor sit amet consectetur. Vulputate aliquet vitae placerat id. In imperdiet enim ultricies.'
                ],
                [
                    'id' => 4,
                    'question' => 'Question-04',
                    'answer' => 'Lorem ipsum dolor sit amet consectetur. Vulputate aliquet vitae placerat id. In imperdiet enim ultricies.'
                ],
                [
                    'id' => 5,
                    'question' => 'Question-05',
                    'answer' => 'Lorem ipsum dolor sit amet consectetur. Vulputate aliquet vitae placerat id. In imperdiet enim ultricies.'
                ]
            ]
        ];

        return view('faq/index', $data);
    }
}
