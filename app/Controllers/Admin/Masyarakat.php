<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\MasyarakatModel;
use App\Models\PenggunaModel;

class Masyarakat extends BaseController
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
        $data = [
            'judul' => 'Masyarakat',
            'dataMasyarakat' => $this->MasyarakatModel->getMasyarakat()
        ];
        return view('admin\masyarakat\index', $data);
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

            $insertId = $this->PenggunaModel->getInsertID();
            $pengguna = $this->PenggunaModel->findById($insertId);

            // var_dump($test, $pengguna->id_pengguna);

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

        return redirect()->to(base_url('Admin/Masyarakat'));
    }
    public function update()
    {
        $updatedData = $this->request->getVar();

        $this->MasyarakatModel->update(
            ['id_masyarakat' => $updatedData['id_masyarakat']],
            [
                'nik' => $updatedData['nik'],
                'nama' => $updatedData['nama'],
                'telp' => $updatedData['telp']
            ]
        );

        $this->PenggunaModel->update(
            ['id_pengguna', $updatedData['id_pengguna']],
            [
                'username' => $updatedData['username'],
                'password' => $updatedData['password'],
            ]
        );

        return redirect()->to(base_url('Admin/Masyarakat'));
    }
    public function hapus()
    {
        $id = $this->request->getPost('id_masyarakat');
        $idPengguna = $this->request->getPost('id_pengguna');
        $getOneMasyarakat = $this->MasyarakatModel->getMasyarakat($id);
        $getOnePengguna = $this->PenggunaModel->getPengguna($idPengguna);

        if (isset($getOnePengguna) && isset($getOneMasyarakat)) {
            $this->PenggunaModel->delete($idPengguna);
            $this->MasyarakatModel->delete($id);
        }

        return redirect()->to(base_url('Admin/Masyarakat'));
    }
}
