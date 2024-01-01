<?php

namespace App\Controllers;

class TeamAdm extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('templates/teamadm');        
        echo view('layout/footer');
        
    }
}
