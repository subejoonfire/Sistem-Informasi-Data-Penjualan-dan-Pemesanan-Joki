<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templatefu/header');
        echo view('templatefu/nav');
        echo view('freeuser/index_fu');
        echo view('templatefu/footer');
    }
    public function shopall()
    {
        echo view('templatefu/header');
        echo view('templatefu/nav');
        echo view('freeuser/shopall_fu');
        echo view('templatefu/footer');
    }
    public function checkout()
    {
        echo view('templatefu/header');
        echo view('templatefu/nav');
        echo view('freeuser/checkout_fu');
        echo view('templatefu/footer');
    }
    public function cart()
    {
        echo view('templatefu/header');
        echo view('templatefu/nav');
        echo view('freeuser/cart_fu');
        echo view('templatefu/footer');
    }
    public function shopmakanan()
    {
        echo view('templatefu/header');
        echo view('templatefu/nav');
        echo view('freeuser/shopmakanan_fu');
        echo view('templatefu/footer');
    }
    public function shopminuman()
    {
        echo view('templatefu/header');
        echo view('templatefu/nav');
        echo view('freeuser/shopminuman_fu');
        echo view('templatefu/footer');
    }
}
