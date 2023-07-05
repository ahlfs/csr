<?php

namespace App\Controllers;

class Proyek extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Proyek'
        ];
        return view('log/proyek', $data);
    }
}