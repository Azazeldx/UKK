<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\PetugasModel;

class Petugas extends BaseController
{

    public function __construct()
    {
        $this->PetugasModel = new PetugasModel();
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

        $this->PetugasModel->insert([
            // 'id_petugas' => $addedData['id_petugas'],
            'nama_petugas' => $addedData['nama_petugas'],
            'username' => $addedData['username'],
            'password' => $addedData['password'],
            'telp' => $addedData['telp'],
            'level' => $addedData['level'],
          
        ]);

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
