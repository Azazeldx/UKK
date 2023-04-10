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

        if(!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }
        
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

            $insertId = $this->PenggunaModel->getInsertID();
            $pengguna = $this->PenggunaModel->findById($insertId);
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

        $this->PetugasModel->update(
            ['id_petugas' => $updatedData['id_petugas']],
            [
                'nama_petugas' => $updatedData['nama_petugas'],
                'telp' => $updatedData['telp']
            ]
        );

        $this->PenggunaModel->update(
            ['id_pengguna', $updatedData['id_pengguna']],
            [
                'username' => $updatedData['username'],
                'password' => $updatedData['password'],
                'role' => $updatedData['level']
            ]
        );

        return redirect()->to(base_url('Admin/Petugas'));
    }

    public function hapus()
    {
        $id = $this->request->getPost('id_petugas');
        $idPengguna = $this->request->getPost('id_pengguna');
        $getOnePetugas = $this->PetugasModel->getPetugas($id);
        $getOnePengguna = $this->PenggunaModel->getPengguna($idPengguna);

        if (isset($getOnePengguna) && isset($getOnePetugas)) {
            $this->PenggunaModel->delete($idPengguna);
            $this->PetugasModel->delete($id);
        }

        return redirect()->to(base_url('Admin/Petugas'));
    }
}