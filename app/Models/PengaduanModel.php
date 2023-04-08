<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $allowedFields = ['id_pengaduan', 'tanggal', 'id_masyarakat', 'laporan', 'foto', 'status'];

    public function getPengaduan($from, $id_pengaduan = null)
    {
        // if ($id_pengaduan == null) {

        //     return $this->findAll();
        // }

        // return $this->where(['id_pengaduan' => $id_pengaduan])->first();


        // =======================================================================================
        $query = [];
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('*');
        $builder->join('masyarakat', 'pengaduan.id_masyarakat = masyarakat.id_masyarakat');
        if ($from === 'masyarakat') {
            $session = session();
            $id_masyarakat = $session->get('id_masyarakat');
            $builder->where([
                'pengaduan.id_masyarakat' => $id_masyarakat
            ]);
        }


        if ($id_pengaduan === null) {
            return $builder->get()->getResultArray();
        } else {
            return $builder->where(['pengaduan.id_pengaduan' => $id_pengaduan])->get()->getRow();
        }
    }
}
