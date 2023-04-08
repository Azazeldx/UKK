<?php

namespace App\Controllers\Admin;
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
        return view('admin\pengaduan\index', $data);
    }
}
