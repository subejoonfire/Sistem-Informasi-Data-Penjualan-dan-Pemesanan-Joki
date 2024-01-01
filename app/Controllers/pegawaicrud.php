<?php

namespace App\Controllers;

use App\Models\MPegawai; // Perbaiki penulisan nama model

class PegawaiCrud extends BaseController
{
    public function index()
    {
        $mpegawai = new MPegawai(); // Perbaiki nama instansiasi model
        $data['pegawai'] = $mpegawai->findAll(); // Mengambil semua data makanan dari database

        // Load view dan kirimkan data ke view
        echo view('layout/header'); // Memuat bagian header
        echo view('layout/navbar'); // Memuat bagian navbar
        echo view('templates/pegawaicrud', $data); // Memuat bagian konten dengan data yang diteruskan
        echo view('layout/footer'); // Memuat bagian footer
    }

    public function add_data_pegawai(){

        echo view('layout/header'); 
        echo view('layout/navbar');
        echo view('templates/add_data_pegawai');
        echo view('layout/footer');
    }

    public function proses_add_pegawai(){
        $mpegawai = new MPegawai(); // Perbaiki penulisan nama model
        $mpegawai->insert($this->request->getPost());
        return redirect()->to(base_url('pegawaicrud')); // Perbaiki tanda semicolon dan penulisan url
        
    }

    public function edit($id_pegawai)
    {
        $pegawaiModel = new MPegawai();
        $data['pegawaiItem'] = $pegawaiModel->find($id_pegawai);

        return view('edit_pegawai', $data);
    }

    public function update()
    {
        $pegawaiModel = new MPegawai();

        $data = [
            'NIK' => $this->request->getPost('NIK'),
            'nama_pegawai' => $this->request->getPost('nama_pegawai'), // Sesuaikan sesuai kebutuhan
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'), // Sesuaikan sesuai kebutuhan
            'detail_pegawai' => $this->request->getPost('detail_pegawai'),
        ];

        $id_pegawai = $this->request->getPost('id_pegawai');
        $pegawaiModel->update($id_pegawai, $data);

        // Redirect or show a success message
        return redirect()->to(base_url('pegawaicrud'))->with('success', 'Data berhasil diupdate');
    }

    public function delete($id_pegawai) {
        $pegawaiModel = new MPegawai();
        $pegawaiModel->where('id_pegawai', $id_pegawai)->delete();
        return redirect()->to(base_url('pegawaicrud'));
    }
    
}