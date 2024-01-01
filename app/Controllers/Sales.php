<?php

namespace App\Controllers;

use App\Models\PembelianModel;
use App\Models\SalesModel;
use CodeIgniter\Controller;

class Sales extends Controller
{
    public function index()
    {
        $pembelianModel = new PembelianModel();
        $salesModel = new SalesModel();
        $KeranjangModel = new \App\Models\KeranjangModel();

        $data['pembelian'] = $pembelianModel->findAll();
        $data['sales'] = $KeranjangModel->select('menu.*,keranjang.*, pembelian.id_pembeli')
            ->join('menu', 'keranjang.id_menu = menu.id_menu', 'inner')
            ->join('pembelian', 'keranjang.id_keranjang = pembelian.id_keranjang', 'inner')->findAll();

        echo view('layout/header');
        echo view('layout/navbar');
        echo view('sales/index', $data);
        echo view('layout/footer');
    }
}
