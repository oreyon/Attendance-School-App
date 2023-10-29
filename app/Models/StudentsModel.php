<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    // ...
    // protected $table = 'students';
    // protected $primaryKey = 'id';
    // protected $allowedFields = ['sampul','studentname','slug','kelas','jurusan','date_created','date_updated'];
    // protected $useTimestamps = true;
    // protected $useTimestamps = ['date_created','date_updated'];

    protected $table      = 'students';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['sampul','studentname','slug'];

    // Dates
    protected $useTimestamps = true;
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
        return $this->findAll();
    }
    

    return $this->where(['slug'=>$slug])->first();
 }

 public function getStudentById($id)
 {

   return $this->where(['id'=>$id])->first();
 }

 public function getStudentsClass()
 {
    $builder = $this->db->table('students');
    $builder->where('students.kelas', $_GET['kelas']);
    $builder->where('students.jurusan', $_GET['jurusan']);
    $query = $builder->orderBy('studentname','ASC')->get();
    return $query->getResultArray();
 }

 public function getStudentsClassonly()
 {
    $builder = $this->db->table('students');
    $builder->where('students.kelas', $_GET['kelas']);
    // $builder->where('students.jurusan', $_GET['jurusan']);
    $query = $builder->orderBy('studentname','ASC')->get();
    return $query->getResultArray();
 }
}