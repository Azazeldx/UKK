<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['id_pengguna', 'username', 'password', 'role'];

    public function getPengguna($id_pengguna = null)
    {
        if ($id_pengguna == null) {
            return $this->findAll();
        }

        return $this->where(['id_pengguna' => $id_pengguna])->first();
    }

    public function login($username, $password, $from)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*');
        if ($from === 'kasta_renda') {
            $builder->join('masyarakat', 'pengguna.id_pengguna = masyarakat.id_pengguna');
        } else if ($from === 'kasta_tinggi') {
            $builder->join('petugas', 'pengguna.id_pengguna = petugas.id_pengguna');
        }
        $builder->where(['username' => $username, 'password' => $password]);
        $query = $builder->get();
        return $query->getRow();
    }

    public function findById($id)
    {
        return $this->db
            ->query('CALL findById(?)', $id)
            ->getRow();
    }
}