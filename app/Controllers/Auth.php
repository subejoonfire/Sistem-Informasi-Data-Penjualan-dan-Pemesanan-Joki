<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function loginAuth()
    {
        // Proses form submission
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $password = md5($password);
        $user = $this->userModel->where([
            'username' => $username,
            'password' => $password
        ])->get()->getRow();
        if (!empty($user)) {
            // Login sukses
            if ($user->level == 'admin') {
                return redirect('/');
            } elseif ($user->level == 'pegawai') {
                return redirect('pegawaifu');
            }
        } else {
            // Login gagal
            return redirect()->to('/login')->with('error', 'Invalid username or password');
        }

        // Tampilkan halaman login
    }
    public function login()
    {
        return view('templates\login');
    }
}
