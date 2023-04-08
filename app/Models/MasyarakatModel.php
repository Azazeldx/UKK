<?php

namespace App\Models;

use CodeIgniter\Model;

class MasyarakatModel extends Model
{
    protected $table = 'masyarakat';
    protected $primaryKey = 'id_masyarakat';
    protected $allowedFields = ['id_masyarakat', 'id_pengguna', 'nik', 'nama', 'telp'];

    public function getMasyarakat($id_masyarakat = null)
    {
        if ($id_masyarakat == null) {
            return $this->join('pengguna', 'pengguna.id_pengguna = masyarakat.id_pengguna')
                ->findAll();
        }

        return $this->join('pengguna', 'pengguna.id_pengguna = masyarakat.id_pengguna')
            ->where(['id_masyarakat' => $id_masyarakat])
            ->first();
    }

    // public function login($username, $password)
    // {
    //     $db = \Config\Database::connect();
    //     $builder = $db->table($this->table);
    //     $builder->select('*');
    //     $builder->where(['username' => $username, 'password' => $password]);
    //     $query = $builder->get();
    //     return $query->getRow();
    // }
}
