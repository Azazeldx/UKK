<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\MasyarakatModel;

class Masyarakat extends BaseController
{

    public function __construct()
    {
        $this->MasyarakatModel = new MasyarakatModel();
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

        $this->MasyarakatModel->insert([
            'nik' => $addedData['nik'],
            'nama' => $addedData['nama'],
            'username' => $addedData['username'],
            'password' => $addedData['password'],
            'telp' => $addedData['telp'],
          
        ]);

        return redirect()->to(base_url('Admin/Masyarakat'));
    }
    public function update()
    {
        $updatedData = $this->request->getVar();

        $this->MasyarakatModel->replace([
            'id_masyarakat' => $updatedData['id_masyarakat'],
            'nik' => $updatedData['nik'],
            'nama' => $updatedData['nama'],
            'username' => $updatedData['username'],
            'password' => $updatedData['password'],
            'telp' => $updatedData['telp'],
        ]);

        return redirect()->to(base_url('Admin/Masyarakat'));
    }
    public function hapus()
    {
        $id = $this->request->getPost('id_masyarakat');
        $getOneMasyarakat = $this->MasyarakatModel->getMasyarakat($id);

        if (isset($getOneMasyarakat)) {
            $this->MasyarakatModel->delete($id);
        }

        return redirect()->to(base_url('Admin/Masyarakat'));
    }
    
}
