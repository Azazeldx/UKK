<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Laporan extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Laporan'
        ];
        return view('admin\laporan\index', $data);
    }
}
