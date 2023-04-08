<?php

namespace App\Controllers\Petugas;
use App\Controllers\BaseController;
use App\Models\PengaduanModel;
use App\Models\TanggapanModel;

class Pengaduan extends BaseController
{

    public function __construct()
    {
        $this->PengaduanModel = new PengaduanModel();
        $this->TanggapanModel = new TanggapanModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Pengaduan',
            'dataPengaduan' => $this->PengaduanModel->getPengaduan()
        ];
        // var_dump($data);
        return view('petugas\pengaduan\index',$data);
    }
    public function form_add($id = null){
        
        $data = [
            'judul' => 'Tanggapi Pengaduan',
            'dataPengaduan' => $this->PengaduanModel->getPengaduan($id)

        ];
        // var_dump($data);

        return view('/petugas/pengaduan/add',$data);
    }

    public function proses_tambah_tanggapan()
    {
        $data = $this->request->getVar();

        $addedData = [
            'id_pengaduan' => $data['id_pengaduan'],
            'tanggapan' => $data['tanggapan'],
            'id_petugas' => session()->get('id_petugas'),
            'status' => $data['status'],
            // 'tgl_tanggapan' => date('Y-m-d'),
        ];

        $this->TanggapanModel->insert($addedData);

        return redirect()->to(base_url('/petugas/pengaduan'));

        // var_dump($addedData);
    }
}