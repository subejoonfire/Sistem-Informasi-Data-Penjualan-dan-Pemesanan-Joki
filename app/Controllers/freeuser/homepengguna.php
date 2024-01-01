<?php

namespace App\Controllers;

class Homepengguna extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('freeuser/dashboard');
        echo view('layout/footer');
    }
}
