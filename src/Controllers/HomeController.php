<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'startseite',
            'banners' => [
                'files/startseite/banner-konstruktion.jpg',
                'files/startseite/banner-mobile-messtechnik.jpg',
                'files/startseite/banner-rapid-prototyping.jpg',
                'files/startseite/banner-reverse-engineering.jpg',
            ],
        ];

        view('home', $data);
    }
}
