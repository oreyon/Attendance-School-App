<?php

namespace App\Models;

use CodeIgniter\Model;

class ClassModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'tb_kelas';
    protected $primaryKey       = 'db_idkelas';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['db_tingkatkelas','db_namakelas','db_tahunangkatan','db_jurusanid','db_guruid'];

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

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
    
    public function getClass($idkelas = false)
    {
        if ($idkelas == false)
        {
            $builder = $this->db->table('tb_kelas');
            $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_kelas.db_jurusanid');
            $builder->join('tb_guru','tb_guru.db_idguru = tb_kelas.db_guruid');
            $query = $builder->get();
            return $query->getResultArray();
        }

        return $this->where(['db_idkelas' => $idkelas])
        ->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_kelas.db_jurusanid')
        ->join('tb_guru','tb_guru.db_idguru = tb_kelas.db_guruid')
        ->first();
    }

    public function getDataClass()
    {
        $builder = $this->db->table('tb_kelas');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_kelas.db_jurusanid');
        $builder->join('tb_guru','tb_guru.db_idguru = tb_kelas.db_guruid');
        $query = $builder->get();
        return $query->getResultArray();
        // return $query->getResult();
    }


    public function getDataClassSortByKelas()
    {
        $builder = $this->db->table('tb_kelas');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_kelas.db_jurusanid');
        $builder->join('tb_guru','tb_guru.db_idguru = tb_kelas.db_guruid');
        $query = $builder->orderBy('db_namakelas','ASC')->get();
        return $query->getResultArray();
    }

    public function getDataClassOnlyShowByKelas()
    {
        $builder = $this->db->table('tb_kelas');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_kelas.db_jurusanid');
        $builder->join('tb_guru','tb_guru.db_idguru = tb_kelas.db_guruid');
        $builder->where('tb_kelas.db_idkelas', $_GET['kelas']);
        $query = $builder->orderBy('db_namakelas','ASC')->get();
        return $query->getResultArray();
    }

    public function getDataClassOnlyShowByKelasXI()
    {
        $builder = $this->db->table('tb_kelas');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_kelas.db_jurusanid');
        $builder->join('tb_guru','tb_guru.db_idguru = tb_kelas.db_guruid');
        $builder->where('tb_kelas.db_namakelas', 'XI');
        $query = $builder->orderBy('db_namakelas','ASC')->get();
        return $query->getResultArray();
    }

    public function getDataClassOnlyShowByKelasXII()
    {
        $builder = $this->db->table('tb_kelas');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_kelas.db_jurusanid');
        $builder->join('tb_guru','tb_guru.db_idguru = tb_kelas.db_guruid');
        $builder->where('tb_kelas.db_namakelas', 'XII');
        $query = $builder->orderBy('db_namakelas','ASC')->get();
        return $query->getResultArray();
    }
}
