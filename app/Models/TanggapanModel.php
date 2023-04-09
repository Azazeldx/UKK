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

    public function getTanggapanByPengaduanWithPetugas($id_pengaduan)
    {
        return $this->join('petugas', 'petugas.id_petugas = tanggapan.id_petugas')->where(['id_pengaduan' => $id_pengaduan])->findAll();
    }
}
