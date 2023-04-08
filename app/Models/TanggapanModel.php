<?php

namespace App\Models;

use CodeIgniter\Model;

class TanggapanModel extends Model
{
    protected $table = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';
    protected $allowedFields = ['id_tanggapan', 'id_pengaduan', 'tanggal', 'tanggapan', 'id_petugas'];

    public function getTanggapan($id_tanggapan = null)
    {
        if ($id_tanggapan == null) {
            return $this->findAll();
        }

        return $this->where(['$id_tanggapan' => $id_tanggapan])->first();
    }
}
