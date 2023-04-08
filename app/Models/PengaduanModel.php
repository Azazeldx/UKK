<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $allowedFields = ['id_pengaduan', 'tanggal', 'id_masyarakat', 'laporan', 'foto', 'status'];

    public function getPengaduan($id_pengaduan = null)
    {
        // if ($id_pengaduan == null) {

        //     return $this->findAll();
        // }

        // return $this->where(['id_pengaduan' => $id_pengaduan])->first();


        // =======================================================================================
        $session = session();
        $id_masyarakat = $session->get('id_masyarakat');
        if ($id_pengaduan === null) {
            //mengambil hanya semua data
            $db = \Config\Database::connect();
            $builder = $db->table($this->table);
            $builder->select('*');
            $builder->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id_masyarakat');
            $builder->where(['pengaduan.id_masyarakat' => $id_masyarakat]);
            $query = $builder->get();
            // var_dump($query);
            return $query->getResultArray();
        } else {
            //mengambil hanya 1 data
            $db = \Config\Database::connect();
            $builder = $db->table($this->table);
            $builder->select('*');
            $builder->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id_masyarakat');
            $builder->where(['pengaduan.id_masyarakat' => $id_masyarakat, 'pengaduan.id_pengaduan' => $id_pengaduan]);
            $query =  $builder->get();
            return $query->getRow();
        }
    }
}
