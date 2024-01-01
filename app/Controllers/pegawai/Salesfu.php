<?php

namespace App\Controllers\Pegawai;

use App\Models\SalesModel;
use App\Models\PembelianModel;
use CodeIgniter\Controller;

class SalesFu extends Controller
{
    public function index()
    {
        // Ambil data penjualan dari model
        $salesModel = new SalesModel();
        $pembelianModel = new PembelianModel();

        
        $data['pembelian'] = $pembelianModel->findAll();
        $data['sales'] = $salesModel->findAll();

        // Muat tampilan dengan data penjualan
        echo view('layoutpegawai/header'); // Memuat bagian header
        echo view('layoutpegawai/navbar'); // Memuat bagian navbar
        echo view('sales/index', $data); // Memuat bagian konten dengan data yang diteruskan
        echo view('layoutpegawai/footer'); // Memuat bagian footer
        

    }
}
