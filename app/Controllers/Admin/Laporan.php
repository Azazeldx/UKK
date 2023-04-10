<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\MasyarakatModel;
use App\Models\PengaduanModel;

class Laporan extends BaseController
{
    protected $MasyarakatModel;
    protected $PengaduanModel;
    public function __construct()
    {
        $this->MasyarakatModel = new MasyarakatModel();
        $this->PengaduanModel = new PengaduanModel();
    }
    public function index()
    {
        $data = $this->request->getVar();
        if (!array_key_exists('tanggal_awal', $data)) {
            $data['tanggal_awal'] = '';
        }
        if (!array_key_exists('tanggal_akhir', $data)) {
            $data['tanggal_akhir'] = '';
        }
        if (!array_key_exists('id_pengadu', $data)) {
            $data['id_pengadu'] = '';
        }
        if (!array_key_exists('status', $data)) {
            $data['status'] = '';
        }

        $data = [
            'judul' => 'Laporan',
            'dataMasyarakat' => $this->MasyarakatModel->getMasyarakat(),
            'dataPengaduan' => $this->PengaduanModel->getPengaduanForCetak($data['tanggal_awal'], $data['tanggal_akhir'], $data['id_pengadu'], $data['status'])
        ];

        if(!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }
        
        return view('admin\laporan\index', $data);
    }

    public function cetakLaporan()
    {
    }
}