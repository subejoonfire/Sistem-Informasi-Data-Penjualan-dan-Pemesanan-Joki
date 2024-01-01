<?php

namespace App\Models;

use CodeIgniter\Model;

class mpegawai extends Model
{
    protected $table = 'pegawai'; // Ganti dengan nama tabel Anda
    protected $primaryKey = 'id_pegawai'; // Ganti dengan kolom kunci utama tabel Anda
    protected $allowedFields = ['id_pegawai', 'NIK', 'nama_pegawai', 'jenis_kelamin', 'detail_pegawai',]; // Sesuaikan dengan kolom-kolom yang ada di tabel Anda
}
