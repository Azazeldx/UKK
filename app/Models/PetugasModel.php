<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';
    protected $allowedFields = ['id_petugas', 'nama_petugas', 'username', 'password', 'telp', 'level'];

    public function getPetugas($id_petugas = null)
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
