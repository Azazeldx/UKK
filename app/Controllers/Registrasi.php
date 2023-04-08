<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;

class Registrasi extends BaseController
{
    public function __construct()
    {
        $this->MasyarakatModel = new MasyarakatModel();
    }

    public function index()
    {
        return view('registrasi');
    }

    public function tambah()
    {
        $addedData = $this->request->getVar();

        $this->MasyarakatModel->insert([
            'nik' => $addedData['nik'],
            'nama' => $addedData['nama'],
            'username' => $addedData['username'],
            'password' => password_hash($addedData['password'], PASSWORD_BCRYPT),
            'telp' => $addedData['telp'],

        ]);

        return redirect()->to(base_url('Home'));
    }
}
