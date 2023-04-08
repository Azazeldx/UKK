<?php

namespace App\Controllers\Masyarakat;
use App\Controllers\BaseController;
use App\Models\PengaduanModel;

class Pengaduan extends BaseController
{
    public function __construct()
    {
        $this->PengaduanModel = new PengaduanModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Pengaduan',
            'dataPengaduan' => $this->PengaduanModel->getPengaduan()
        ];
        return view('masyarakat\pengaduan\index', $data);
    } 
    
    public function form_add()
    {
        $data = [
            'judul' => 'Tambah Pengaduan',
            // 'dataPengaduan' => $this->PengaduanModel->getPengaduan()
        ];
        return view('masyarakat\pengaduan\add', $data);
    }

    public function proses_tambah()
    {
        $addedData = $this->request->getVar();
        $image = $this->request->getFile('foto');
        $session = session();

        // var_dump($addedData);
        // var_dump($image);

        $this->PengaduanModel->insert([
            // 'id_pengaduan' => $addedData['id_pengaduan'],
            'tgl_pengaduan' => date("Y-m-d"),
            'nik' => $session->get('nik'),
            'isi_laporan' => $addedData['isi_laporan'],
            'foto' => $image->getName(),
            'status' =>"0",
        ]);

        $image->move('images');


        return redirect()->to(base_url('Masyarakat/Pengaduan'));
    }
    public function hapus()
    {
        $id = $this->request->getPost('id_pengaduan');
        $getOnePengaduan = $this->PengaduanModel->getPengaduan($id);

        if (isset($getOnePengaduan)) {
            $this->PengaduanModel->delete($id);
        }

        return redirect()->to(base_url('Masyarakat/Pengaduan'));
    }
}