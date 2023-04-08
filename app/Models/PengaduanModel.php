<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $allowedFields = ['id_pengaduan','tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];

    public function getPengaduan($id_pengaduan = null)
    {
        // if ($id_pengaduan == null) {

        //     return $this->findAll();
        // }

        // return $this->where(['id_pengaduan' => $id_pengaduan])->first();


        // =======================================================================================

        if ($id_pengaduan === null) {
            //mengambil hanya semua data
            $db = \Config\Database::connect();
            $builder = $db->table($this->table);
            $builder->select('*');
            $builder->join('masyarakat','pengaduan.nik = masyarakat.nik');
            $query = $builder->get();
            // var_dump($query);
            return $query->getResultArray();
        } else {
            //mengambil hanya 1 data
            $db = \Config\Database::connect();
            $builder = $db->table($this->table);
            $builder->select('*');
            $builder->join('masyarakat','pengaduan.nik = masyarakat.nik');
            $builder->where(['pengaduan.nik' => $id_pengaduan]);
            $query =  $builder->get();
            return $query->getRow();
        }
    }
}
