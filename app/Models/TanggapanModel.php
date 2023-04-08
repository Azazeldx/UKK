<?php

namespace App\Models;

use CodeIgniter\Model;

class TanggapanModel extends Model
{
    protected $table = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';
    protected $allowedFields = ['id_tanggapan', 'id_pengaduan', 'tgl_pengaduan', 'tanggapan', 'id_petugas', 'status'];

    public function getTanggapan($id_tanggapan = null)
    {
        if ($id_petugas == null) {
            return $this->findAll();
        }

        return $this->where(['id_petugas' => $id_petugas])->first();
    }

    public function login($username, $password)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*');
        $builder->where(['username' => $username, 'password' => $password]);
        $query = $builder->get();
        return $query->getRow();
    }
}
