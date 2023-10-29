<?php

namespace App\Models;

use CodeIgniter\Model;

class TbStudentsModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'tb_students';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['sampul','studentname','slug','db_kelasid','db_jurusanid'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_created';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

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

    public function getStudents($slug = false)
    {
        if ($slug == false)
        {
            $builder = $this->db->table('tb_students');
            $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_students.db_kelasid');
            $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_students.db_jurusanid');
            $query = $builder->orderBy('db_tingkatkelas','ASC')->orderBy('db_namakelas','ASC')->get();
            return $query->getResultArray();
        }
        // $query->getResultArray();

        return $this->where(['slug'=>$slug])->
        join('tb_kelas','tb_kelas.db_idkelas = tb_students.db_kelasid')->
        join('tb_jurusan','tb_jurusan.db_idjurusan = tb_students.db_jurusanid')->
        first();
    }

    public function getStudentById($id)
    {
      return $this->where(['id'=>$id])->
      join('tb_kelas','tb_kelas.db_idkelas = tb_students.db_kelasid')->
      join('tb_jurusan','tb_jurusan.db_idjurusan = tb_students.db_jurusanid')->
      first();
    }

    public function getDataStudents()
    {
        $builder = $this->db->table('tb_students');
        $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_students.db_kelasid');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_students.db_jurusanid');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getDataStudentsSortByKelas()
    {
        $builder = $this->db->table('tb_students');
        $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_students.db_kelasid');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_students.db_jurusanid');
        $query = $builder->orderBy('db_tingkatkelas','ASC')->orderBy('db_namakelas','ASC')->get();
        return $query->getResultArray();
    }

    public function getDataStudentsOnlyShowByJurusan()
    {
        $builder = $this->db->table('tb_students');
        $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_students.db_kelasid');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_students.db_jurusanid');
        $builder->where('tb_jurusan.db_idjurusan', $_GET['jurusan']);
        $query = $builder->orderBy('db_tingkatkelas','ASC')->orderBy('db_namakelas','ASC')->get();
        return $query->getResultArray();
    }

    public function getDataStudentsOnlyShowByClass()
    {
        $builder = $this->db->table('tb_students');
        $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_students.db_kelasid');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_students.db_jurusanid');
        $builder->where('tb_kelas.db_idkelas', $_GET['kelas']);
        $query = $builder->orderBy('db_tingkatkelas','ASC')->orderBy('db_namakelas','ASC')->get();
        return $query->getResultArray();
    }
    
    public function getDataStudentsByClassByJurusan()
    {
        $builder = $this->db->table('tb_students');
        $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_students.db_kelasid');
        $builder->join('tb_jurusan','tb_jurusan.db_idjurusan = tb_students.db_jurusanid');
        $builder->where('tb_kelas.db_idkelas', $_GET['kelas']);
        $builder->where('tb_jurusan.db_idjurusan', $_GET['jurusan']);
        $query = $builder->orderBy('db_tingkatkelas','ASC')->orderBy('db_namakelas','ASC')->get();
        return $query->getResultArray();
    }
}
