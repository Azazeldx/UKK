<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\MasyarakatModel;
use App\Models\PetugasModel;
use App\Models\PengaduanModel;
use CodeIgniter\Exceptions\AlertError;

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
            'Pengaduan' => $this->PengaduanModel->getPengaduan('admin'),
        ];

        if(!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }
        
        return view('admin\beranda\index', $data);
    }
}