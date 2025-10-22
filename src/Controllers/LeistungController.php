<?php

namespace App\Controllers;

class LeistungController
{
    public function index()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'leistungen',
        ];

        view('leistung', $data);
    }

    public function konstruktion()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'leistungen',
            'subpage' => 'konstruktion',
        ];

        view('konstruktion', $data);
    }

    public function fraesbearbeitung()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'leistungen',
            'subpage' => 'fraesbearbeitung',
        ];

        view('fraesbearbeitung', $data);
    }

    public function rapid_prototyping()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'leistungen',
            'subpage' => 'rapid_prototyping',
        ];

        view('rapid_prototyping', $data);
    }

    public function mobile_messtechnik()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'leistungen',
            'subpage' => 'mobile_messtechnik',
        ];

        view('mobile_messtechnik', $data);
    }

    public function reverse_engineering()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'leistungen',
            'subpage' => 'reverse_engineering',
        ];

        view('reverse_engineering', $data);
    }
}
