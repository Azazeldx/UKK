<?php

namespace App\Controllers\Petugas;

use App\Controllers\BaseController;
use App\Models\PengaduanModel;
use App\Models\TanggapanModel;

class Pengaduan extends BaseController
{
    protected $PengaduanModel;
    protected $TanggapanModel;

    public function __construct()
    {
        $this->PengaduanModel = new PengaduanModel();
        $this->TanggapanModel = new TanggapanModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Pengaduan',
            'dataPengaduan' => $this->PengaduanModel->getPengaduan('petugas')
        ];
        // var_dump($data);
        return view('petugas\pengaduan\index', $data);
    }
    public function form_add($id = null)
    {

        $data = [
            'judul' => 'Tanggapi Pengaduan',
            'dataPengaduan' => $this->PengaduanModel->getPengaduan('petugas', $id),
            'dataTanggapan' => $this->TanggapanModel->getTanggapanByPengaduanWithPetugas($id)
        ];
        // var_dump($data['dataPengaduan']->status);

        return view('/petugas/pengaduan/add', $data);
    }

    public function proses_tambah_tanggapan()
    {
        $data = $this->request->getVar();

        $addedTanggapanData = [
            'id_pengaduan' => $data['id_pengaduan'],
            'tanggapan' => $data['tanggapan'],
            'id_petugas' => session()->get('id_petugas'),
            'status' => $data['status'],
            'tanggal' => date("Y-m-d"),
        ];

        if ($data['tanggapan']) {
            $this->TanggapanModel->insert($addedTanggapanData);
        }

        $this->PengaduanModel->update(
            ['id_pengaduan' => $data['id_pengaduan']],
            [
                'status' => $data['status']
            ]
        );

        return redirect()->to(base_url('/petugas/pengaduan'));
    }

    public function proses_edit_tanggapan()
    {
        $data = $this->request->getVar();

        $this->TanggapanModel->update(['id_tanggapan' => $data['id_tanggapan']], ['tanggapan' => $data['tanggapan']]);

        return redirect()->to(base_url('/petugas/pengaduan'));
    }

    public function proses_hapus_tanggapan()
    {
        $data = $this->request->getVar();
        $this->TanggapanModel->delete($data['id_tanggapan']);
        return redirect()->to(base_url('/petugas/pengaduan'));
    }
}
