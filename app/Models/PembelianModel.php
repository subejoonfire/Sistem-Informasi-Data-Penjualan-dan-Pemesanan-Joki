<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianModel extends Model
{
    protected $table = 'pembelian';
    protected $primaryKey = 'id_pembeli';
    protected $allowedFields = ['id_keranjang', 'id_pegawai', 'nama', 'jenis_kelamin', 'no_hp', 'alamat', 'pelayanan'];

}
