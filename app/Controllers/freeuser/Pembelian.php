<?php

namespace App\Controllers\Freeuser;

use App\Controllers\BaseController;
use App\Models\PembelianModel;
use App\Models\SalesModel;

class Pembelian extends BaseController
{
    public function submitForm()
    {
        // Validasi formulir jika diperlukan
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'pelayanan' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil data dari formulir
        $dataPembelian = [
            'nama' => $this->request->getPost('nama'),
            'id_keranjang' => $this->request->getPost('id_keranjang'),
            'jenis_kelamin' => $this->request->getPost('gender'),
            'no_hp' => $this->request->getPost('phone'),
            'alamat' => $this->request->getPost('address'),
            'pelayanan' => $this->request->getPost('pelayanan'),
        ];

        // Simpan data pembelian ke dalam database menggunakan model
        $pembelianModel = new PembelianModel();
        $pembelianModel->insert($dataPembelian);

        // Dapatkan ID pembeli yang baru saja dimasukkan
        $idPembeli = $pembelianModel->insertID();

        // Data penjualan
        $dataPenjualan = [
            'id_pembeli' => $idPembeli,
            'tanggal_penjualan' => date('Y-m-d H:i:s'), // Atau gunakan tanggal penjualan sesuai kebutuhan
        ];

        // Simpan data penjualan ke dalam database menggunakan model
        $salesModel = new SalesModel();
        $salesModel->insert($dataPenjualan);

        // Redirect atau lakukan aksi lainnya
        // return redirect()->to('sales'); // Sesuaikan dengan rute atau halaman yang diinginkan
        return redirect()->to('https://wa.me/6287800590181'); // Sesuaikan dengan rute atau halaman yang diinginkan
    }
}
