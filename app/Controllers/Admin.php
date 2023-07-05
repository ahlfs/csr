<?php

namespace App\Controllers;

use App\Models\Daftar_Perusahaan;
use App\Models\Pengajuan_Pendanaan;

class Admin extends BaseController

{

    protected $daftar_perusahaan;
    protected $pengajuan_pendanaan;
    public function __construct()
    {
        $this->daftar_perusahaan = new Daftar_Perusahaan();
        $this->pengajuan_pendanaan = new Pengajuan_Pendanaan();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/dashboard', $data);
    }

    public function verify()
    {
        $daftar_perusahaan = $this->daftar_perusahaan->findAll();
        $data = [
            'title' => 'Verifikasi',
            'daftar_perusahaan' => $daftar_perusahaan
        ];
        return view('admin/verify', $data);
    }

    public function pendanaan()
    {
        $pengajuan_pendanaan = $this->pengajuan_pendanaan->findAll();
        $data = [
            'title' => 'Pengajuan Pendanaan',
            'pengajuan_pendanaan' => $pengajuan_pendanaan
        ];
        return view('admin/pendanaan', $data);
    }
}
