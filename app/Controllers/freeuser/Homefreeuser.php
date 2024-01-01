<?php

namespace App\Controllers\Freeuser;

use App\Controllers\BaseController;
use App\Models\Menumodel;
use PhpParser\Node\Stmt\HaltCompiler;

class Homefreeuser extends BaseController
{
    protected $menumodel, $keranjangModel;

    public function __construct()
    {
        $this->menumodel = new Menumodel();
        $this->keranjangModel = new \App\Models\KeranjangModel();
    }

    public function index()
    {
        $data['menu'] = $this->menumodel->findAll();
        return view('freeuser/index_fu', $data);
    }

    public function shopall()
    {
        $data['menu'] = $this->menumodel->findAll();
        return view('freeuser/shopall_fu', $data);
    }

    // In your controller method
    public function cart($id_menu)
    {

        $menu = $this->menumodel->getMenuById($id_menu);

        if (!empty($menu)) {

            $totalPrice = $menu['harga'];

            $data = [
                'menucart' => [$menu],
                'totalPrice' => $totalPrice
            ];

            return view('freeuser/cart_fu', $data);
        } else {

            // handle error
        }
    }


    public function checkout($id_menu)
    {

        $totalHarga = $this->request->getPost('totalHarga');
        $insertData = [
            'jumlah' => $totalHarga,
            'tanggal' => date('d'),
            'id_menu' => $id_menu,
        ];
        $this->keranjangModel->insert($insertData);
        $id_keranjang = $this->keranjangModel->insertID();

        $row = $this->menumodel->where('id_menu', $id_menu)->get()->getRow();

        $data = [
            'nama_menu' => $row->nama,
            'totalPrice' => $totalHarga,
            'id_keranjang' => $id_keranjang
        ];

        return view('freeuser/checkout_fu', $data);
    }


    private function calculateTotalPrice($menucart)
    {
        $totalPrice = 0;

        foreach ($menucart as $item) {
            if (is_array($item)) {
                $totalPrice += $item['harga'];
            }
        }

        return $totalPrice;
    }





    public function shopminuman()
    {

        $model = new \App\Models\MenuModel();

        $foodData = $model->where(['kategori' => 'minuman'])->get()->getResult();

        $data = [
            'menu' => $foodData
        ];

        return view('freeuser/shopminuman_fu', $data);
    }

    public function shopmakanan()
    {

        $model = new \App\Models\MenuModel();

        $foodData = $model->where(['kategori' => 'makanan'])->get()->getResult();

        $data = [
            'menu' => $foodData
        ];

        return view('freeuser/shopmakanan_fu', $data);
    }
}
