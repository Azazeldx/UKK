<?php

namespace App\Controllers\Masyarakat;

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
            'dataPengaduan' => $this->PengaduanModel->getPengaduan('masyarakat')
        ];

        if(!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }
        
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

        $data = [
            // 'id_pengaduan' => $addedData['id_pengaduan'],
            'tanggal' => date("Y-m-d"),
            'id_masyarakat' => $session->get('id_masyarakat'),
            'laporan' => $addedData['isi_laporan'],
            'foto' => $image->getName(),
            'status' => "antri",
        ];

        if ($addedData['isi_laporan'] && strlen($image)) {
            $this->PengaduanModel->insert($data);
            $image->move('images');
            return redirect()->to(base_url('Masyarakat/Pengaduan'));
        } else {
            return redirect()->to(base_url('Masyarakat/Pengaduan/form_add'));
        }
    }
    public function hapus()
    {
        $id = $this->request->getPost('id_pengaduan');
        $getOnePengaduan = $this->PengaduanModel->getPengaduan('masyarakat', $id);

        if (isset($getOnePengaduan)) {
            $this->PengaduanModel->delete($id);
        }

        return redirect()->to(base_url('Masyarakat/Pengaduan'));
    }

    public function detail($id = null)
    {

        $data = [
            'judul' => 'Tanggapi Pengaduan',
            'dataPengaduan' => $this->PengaduanModel->getPengaduan('petugas', $id),
            'dataTanggapan' => $this->TanggapanModel->getTanggapanByPengaduanWithPetugas($id)
        ];

        return view('/masyarakat/pengaduan/detail', $data);
    }
}