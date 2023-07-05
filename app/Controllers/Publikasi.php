<?php

namespace App\Controllers;

class Publikasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Publikasi'
        ];
        return view('log/Publikasi', $data);
    }
}