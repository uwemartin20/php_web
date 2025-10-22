<?php

namespace App\Controllers;

class UnternehmenController
{
    public function index()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'unternehmen',
        ];

        view('unternehmen', $data);
    }

    public function ausbildung()
    {
        $data = [
            'title' => 'ZiMaTec GmbH - Startseite',
            'page' => 'unternehmen',
            'subpage' => 'ausbildung',
        ];

        view('ausbildung', $data);
    }
}