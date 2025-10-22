<?php

namespace App\Controllers;

class NewsController
{
    public function index()
    {
        $news = [
            [
                "id"=> 1,
                "title"=> "Werkzeugabweichung",
                "description"=> "Wussten Sie schon,
                dass es möglich ist, anhand der Werkstückabweichungen eine korrigierte Werkzeugkontur zu errechnen.",
                "date"=> new \DateTime('2020-03-03'),
                'image'=> '',
            ],
            [
                'id'=> 2,
                'title'=> 'Werkzeugverschleiss',
                'description'=> 'Wussten Sie schon,
                dass es möglich ist, anhand der Werkstückabweichungen eine korrigierte Werkzeugkontur zu errechnen.',
                'date'=> new \DateTime('2016-02-01'),
                'image'=> '',
            ],
        ];

        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'news',
            'news'=> $news,
        ];

        view('news', $data);
    }
}
