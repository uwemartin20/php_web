<?php

namespace App\Controllers;

class PolicyController
{
    public function impressum()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'impressum',
        ];

        view('impressum', $data);
    }

    public function sitemap()
    {
        $sitemap = [
            'Startseite' => '/',
            
            'Unternehmen' => [
                'url' => '/unternehmen',
                'children' => [
                    'Ausbildung' => '/unternehmen/ausbildung/',
                ],
            ],

            'Leistungen' => [
                'url' => '/leistung',
                'children' => [
                    'Konstruktion' => '/leistung/konstruktion',
                    '5-Achs-Fraesbearbeitung' => '/leistung/fraesbearbeitung',
                    'Rapid Prototyping' => '/leistung/rapid-prototyping',
                    'Mobile Messtechnik' => '/leistung/mobile-messtechnik',
                    'Reverse Engineering' => '/leistung/reverse-engineering',
                ],
            ],

            'Kunststoffnetzwerk' => '/kunststoff',
            'Kontakt' => '/kontakt',
            'Impressum' => '/policy/impressum',
            'Sitemap' => '/policy/sitemap',
            'Datenschutz' => '/policy/datenschutz',
        ];

        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'sitemap',
            'sitemap' => $sitemap,
        ];

        view('sitemap', $data);
    }

    public function datenschutz()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'datenschutz',
        ];

        view('datenschutz', $data);
    }
}
