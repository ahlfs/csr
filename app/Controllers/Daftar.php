<?php

namespace App\Controllers;

class Daftar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar'
        ];
        return view('log/daftar', $data);
    }
}
