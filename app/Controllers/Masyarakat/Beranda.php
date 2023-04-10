<?php

namespace App\Controllers\Masyarakat;

use App\Controllers\BaseController;

use App\Models\MasyarakatModel;
use App\Models\PetugasModel;
use App\Models\PengaduanModel;

class Beranda extends BaseController
{
    protected $MasyarakatModel;
    protected $PetugasModel;
    protected $PengaduanModel;
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
            'Pengaduan' => $this->PengaduanModel->getPengaduan('masyarakat'),
        ];

        // var_dump(session());

        if(!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }

        return view('masyarakat\beranda\index', $data);
    }
}