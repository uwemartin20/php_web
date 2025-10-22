<?php

namespace App\Controllers;

class KunststoffController
{
    public function index()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'kunststoff',
        ];

        view('kunststoff', $data);
    }
}
