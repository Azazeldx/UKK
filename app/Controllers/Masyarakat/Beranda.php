<?php

namespace App\Controllers\Masyarakat;
use App\Controllers\BaseController;

use App\Models\MasyarakatModel;
use App\Models\PetugasModel;
use App\Models\PengaduanModel;

class Beranda extends BaseController
{
    public function __construct()
    {
        // $this->jabatanModel = new JabatanModel();
        $this->MasyarakatModel = new MasyarakatModel();
        $this->PetugasModel = new PetugasModel();
        $this->PengaduanModel = new PengaduanModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Beranda',
            'Masyarakat' => $this->MasyarakatModel->getMasyarakat(),
            'Petugas' => $this->PetugasModel->getPetugas(),
            'Pengaduan' => $this->PengaduanModel->getPengaduan(),
        ];
        return view('masyarakat\beranda\index',$data);
    }
}