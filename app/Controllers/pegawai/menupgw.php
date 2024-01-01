<?php

namespace App\Controllers\Pegawai;

use App\Models\MenuModel; // Perbaiki penulisan nama model
use App\Controllers\BaseController;

class MenuPgw extends BaseController
{

    public function index()
    {
        $menuModel = new MenuModel(); // Perbaiki nama instansiasi model
        $data['menupgw'] = $menuModel->findAll(); // Mengambil semua data makanan dari database

        // Load view dan kirimkan data ke view
        echo view('layoutpegawai/header'); // Memuat bagian header
        echo view('layoutpegawai/navbar'); // Memuat bagian navbar
        echo view('pegawai/menupgw', $data); // Memuat bagian konten dengan data yang diteruskan
        echo view('layoutpegawai/footer'); // Memuat bagian footer
    }

    public function add_data_menu()
    {
        echo view('layoutpegawai/header');
        echo view('layoutpegawai/navbar');
        echo view('pegawai/add_data_menupgw');
        echo view('layoutpegawai/footer');
    }

    public function proses_add_menu()
    {
        // Validasi formulir di sini sesuai kebutuhan
        $menuModel = new MenuModel();
    
        // Proses unggahan gambar
        $gambar = $this->request->getFile('gambar');
    
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            // Generate nama file yang unik
            $namaFile = $this->request->getPost('nama') . '_' . $gambar->getRandomName();
    
            // Pindahkan file ke direktori tujuan
            $gambar->move('assets/images', $namaFile);
    
            // Menyimpan informasi makanan ke database
            $data = [
                'nama' => $this->request->getPost('nama'),
                'kategori' => $this->request->getPost('kategori'),
                'harga' => $this->request->getPost('harga'),
                'stok' => $this->request->getPost('stok') ?: 0,
                'gambar' => base_url('assets/images/' . $namaFile), // Tambahkan tanda '/' pada path
                // Tambahkan kolom lain sesuai kebutuhan
            ];
    
            $menuModel->insert($data);
    
            return redirect()->to(base_url('menupgw'));
        } else {
            // File gambar tidak valid, handle kesalahan di sini
            echo $gambar->getError();
        }
    }

    public function edit($id_menu)
    {
        $menumodel = new MenuModel();
        $data['m'] = $menumodel->find($id_menu);

        return view('edit_menu', $data);
    }

// ...

public function update()
{
    $menumodel = new MenuModel();

    // Ambil file gambar yang diunggah
    $gambar = $this->request->getFile('gambar');

    // Set data yang akan diupdate
    $data = [
        'nama' => $this->request->getPost('nama'),
        'kategori' => $this->request->getPost('kategori'),
        'harga' => $this->request->getPost('harga'),
        'stok' => $this->request->getPost('stok'),
    ];

    // Periksa apakah ada file gambar yang diunggah
    if ($gambar->isValid() && !$gambar->hasMoved()) {
        // Pindahkan file ke direktori tujuan tanpa mengubah nama
        $gambar->move('assets/images');

        // Set path file gambar ke dalam data
        $data['gambar'] = 'assets/images/' . $gambar->getName();
    }

    $id_menu = $this->request->getPost('id_menu');

    // Lakukan update
    $menumodel->update($id_menu, $data);

    // Redirect or show a success message
    return redirect()->to(base_url('menupgw'))->with('success', 'Data berhasil diupdate');
}

    
    
    public function delete($id_menu) {
        $menumodel = new MenuModel();
        $menumodel->where('id_menu', $id_menu)->delete();
        return redirect()->to(base_url('menupgw'));
    }
    
    
}
