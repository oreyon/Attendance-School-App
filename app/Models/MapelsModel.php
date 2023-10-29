<?php

namespace App\Models;

use CodeIgniter\Model;

class MapelsModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'tb_mapels';
    protected $primaryKey       = 'db_idmapel';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['db_namamapel','db_kelasid','db_jurusanid','db_guruid','db_tahunid','db_semesterid'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_created';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';

    // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public function getMapels($idmapel = false)
    {
        if ($idmapel == false)
        {
            $builder = $this->db->table('tb_mapels');
            $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_mapels.db_kelasid');
            $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_mapels.db_jurusanid');
            $builder->join('tb_guru','tb_guru.db_idguru = tb_mapels.db_guruid');
            $builder->join('tb_tahun','tb_tahun.db_idtahun = tb_mapels.db_tahunid');
            $builder->join('tb_semester','tb_semester.db_idsemester = tb_mapels.db_semesterid');
            $query = $builder->orderBy('db_namamapel','ASC')->orderBy('db_namakelas','ASC')->get();
            return $query->getResultArray();
        }

        return $this->where(['db_idmapel' => $idmapel])
        ->join('tb_kelas','tb_kelas.db_idkelas = tb_mapels.db_kelasid')
        ->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_mapels.db_jurusanid')
        ->join('tb_guru','tb_guru.db_idguru = tb_mapels.db_guruid')
        ->join('tb_tahun','tb_tahun.db_idtahun = tb_mapels.db_tahunid')
        ->join('tb_semester','tb_semester.db_idsemester = tb_mapels.db_semesterid')
        ->first();
    }
}
