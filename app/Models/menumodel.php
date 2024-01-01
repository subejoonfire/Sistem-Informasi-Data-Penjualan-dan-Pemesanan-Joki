<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id_menu';
    protected $allowedFields = ['id_menu', 'nama', 'kategori', 'harga', 'stok', 'gambar']; // Sesuaikan dengan nama kolom yang sesuai di tabel

    public function getMenuById($id_menu)
    {
        return $this->find($id_menu);
    }
}
