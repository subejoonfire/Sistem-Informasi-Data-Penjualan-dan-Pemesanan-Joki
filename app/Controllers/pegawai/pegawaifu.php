<?php

namespace App\Controllers\Pegawai;

use App\Controllers\BaseController;
use App\Models\MenuModel; // Perbaiki penulisan nama model

class PegawaiFu extends BaseController
{
    public function index()
    {

        $menuModel = new MenuModel(); // Perbaiki nama instansiasi model
        $data['menu'] = $menuModel->findAll(); // Mengambil semua data makanan dari database

        echo view('layoutpegawai/header');
        echo view('layoutpegawai/navbar');
        echo view('pegawai/dashboard');
        echo view('layoutpegawai/footer');
    }
    

    public function menu()
    {
        echo view('layoutpegawai/header');
        echo view('layoutpegawai/navbar');
        echo view('pegawai/menufu');
        echo view('layoutpegawai/footer');
    }
    
    public function penjualanpg()
    {
        echo view('layoutpegawai/header');
        echo view('layoutpegawai/navbar');
        echo view('pegawai/penjualanpg');
        echo view('layoutpegawai/footer');
    }
}