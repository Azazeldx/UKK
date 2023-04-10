<?php

namespace App\Controllers\Petugas;

use App\Controllers\BaseController;

use App\Models\MasyarakatModel;
use App\Models\PetugasModel;
use App\Models\PengaduanModel;

class Beranda extends BaseController
{
    protected $PengaduanModel;
    protected $MasyarakatModel;
    protected $PetugasModel;
    public function __construct()
    {
        // $this->jabatanModel = new JabatanModel();
        $this->MasyarakatModel = new MasyarakatModel();
        $this->PetugasModel = new PetugasModel();
        $this->PengaduanModel = new PengaduanModel();

        // $session = session(); 
        // $akses = $session->get('logged_in');


        // redirect()->to(base_url('/petugas/login'));


    }

    public function index()
    {
        // return redirect()->to(base_url('/petugas/login'));
        $data = [
            'judul' => 'Beranda',
            'Masyarakat' => $this->MasyarakatModel->getMasyarakat(),
            'Petugas' => $this->PetugasModel->getPetugas(),
            'Pengaduan' => $this->PengaduanModel->getPengaduan('petugas'),
        ];

        if(!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }
        
        return view('petugas\beranda\index', $data);
    }
}