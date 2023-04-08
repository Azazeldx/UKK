<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\PetugasModel;
use App\Models\PenggunaModel;

class Petugas extends BaseController
{
    protected $PetugasModel;
    protected $PenggunaModel;

    public function __construct()
    {
        $this->PetugasModel = new PetugasModel();
        $this->PenggunaModel = new PenggunaModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Petugas',
            'dataPetugas' => $this->PetugasModel->getPetugas()
        ];
        return view('admin\petugas\index', $data);
    }

    public function tambah()
    {
        $addedData = $this->request->getVar();
        $this->PenggunaModel->db->transBegin();

        try {
            $this->PenggunaModel->insert([
                'username' => $addedData['username'],
                'password' => md5($addedData['password']),
                'role' =>  $addedData['level'],
            ]);

            $pengguna = $this->PenggunaModel->findByUsername($addedData['username']);
            $this->PetugasModel->insert([
                'id_pengguna' => $pengguna->id_pengguna,
                'nama_petugas' => $addedData['nama_petugas'],
                'telp' => $addedData['telp'],

            ]);
        } catch (\Exception $error) {
            $this->PenggunaModel->db->transRollback();
            throw $error;
        }

        $this->PenggunaModel->db->transCommit();

        return redirect()->to(base_url('Admin/Petugas'));
    }
    public function update()
    {
        $updatedData = $this->request->getVar();

        $this->PetugasModel->replace([
            'id_petugas' => $updatedData['id_petugas'],
            'nama_petugas' => $updatedData['nama_petugas'],
            'username' => $updatedData['username'],
            'password' => $updatedData['password'],
            'telp' => $updatedData['telp'],
            'level' => $updatedData['level']
        ]);

        return redirect()->to(base_url('Admin/Petugas'));
    }

    public function hapus()
    {
        $id = $this->request->getPost('id_petugas');
        $getOnePetugas = $this->PetugasModel->getPetugas($id);

        if (isset($getOnePetugas)) {
            $this->PetugasModel->delete($id);
        }

        return redirect()->to(base_url('Admin/Petugas'));
    }
}
