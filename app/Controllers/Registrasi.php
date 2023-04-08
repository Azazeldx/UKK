<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;
use App\Models\PenggunaModel;

class Registrasi extends BaseController
{
    protected $MasyarakatModel;
    protected $PenggunaModel;
    public function __construct()
    {
        $this->MasyarakatModel = new MasyarakatModel();
        $this->PenggunaModel = new PenggunaModel();
    }

    public function index()
    {
        return view('registrasi');
    }

    public function tambah()
    {
        $addedData = $this->request->getVar();
        $this->PenggunaModel->db->transBegin();

        try {
            $this->PenggunaModel->insert([
                'username' => $addedData['username'],
                'password' => md5($addedData['password']),
                'role' => 'umum'
            ]);

            $pengguna = $this->PenggunaModel->findByUsername($addedData['username']);

            $this->MasyarakatModel->insert([
                'id_pengguna' => $pengguna->id_pengguna,
                'nik' => $addedData['nik'],
                'nama' => $addedData['nama'],
                'telp' => $addedData['telp'],
            ]);
        } catch (\Exception $error) {
            $this->PenggunaModel->db->transRollback();
            throw $error;
        }

        $this->PenggunaModel->db->transCommit();


        return redirect()->to(base_url('Home'));
    }
}
