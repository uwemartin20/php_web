<?php

namespace App\Controllers;

class KontaktController
{
    public function index()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'kontakt',
        ];

        view('kontakt', $data);
    }
}
