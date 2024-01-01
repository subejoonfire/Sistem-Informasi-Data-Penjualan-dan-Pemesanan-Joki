<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesModel extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'id_data_penjualan';
    protected $allowedFields = ['id_pembeli', 'tanggal_penjualan'];

}
