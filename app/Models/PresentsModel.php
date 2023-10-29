<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class PresentsModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'tb_presents';
    protected $primaryKey       = 'db_idpresent';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['db_kelasid','db_mapelid','db_date','db_bulanid','db_tahunid','db_semesterid','db_studentid','db_keterangan'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_created';
    protected $updatedField  = 'date_updated';
    protected $deletedField  = 'date_deleted';

//     // Validation
//     protected $validationRules      = [];
//     protected $validationMessages   = [];
//     protected $skipValidation       = false;
//     protected $cleanValidationRules = true;

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

    public function getPresentsByMapels($idmatapelajaran)
    {
        
            $builder = $this->db->table('tb_presents');
            $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_presents.db_kelasid');
            $builder->join('tb_mapels','tb_mapels.db_idmapel = tb_presents.db_mapelid');
            $builder->join('tb_bulan','tb_bulan.db_idbulan = tb_presents.db_bulanid');
            $builder->join('tb_tahun','tb_tahun.db_idtahun = tb_presents.db_tahunid');
            $builder->join('tb_semester','tb_semester.db_idsemester = tb_presents.db_semesterid');
            $builder->join('tb_students','tb_students.id = tb_presents.db_studentid');
            
            $builder->select('db_studentid');
            $builder->select('db_mapelid');
            $builder->select('tb_students.studentname');
            $builder->select("SUM(CASE WHEN db_keterangan = '1' THEN 1 ELSE NULL END) AS Hadir");
            $builder->select("SUM(CASE WHEN db_keterangan = '2' THEN 1 ELSE NULL END) AS Izin");
            $builder->select("SUM(CASE WHEN db_keterangan = '3' THEN 1 ELSE NULL END) AS Sakit");
            $builder->select("SUM(CASE WHEN db_keterangan = '4' THEN 1 ELSE NULL END) AS 'Tanpa Keterangan'");
            
            $builder->where('tb_mapels.db_idmapel', $idmatapelajaran);
            // $builder->where('tb_semester.db_idsemester', 1);
            // $builder->where('tb_tahun.db_idtahun', 1);
            // $builder->where('tb_kelas.db_idkelas', 1);
        //     $builder->groupBy(['tb_students.studentname', 'db_keterangan']);
            $builder->groupBy(['db_studentid']);
            
            $query = $builder->orderBy('db_studentid')->get();
    
            return $query->getResultArray();

    }

    public function getPresentsStudentById($idmapel, $idstudent)
    {
        $builder = $this->db->table('tb_presents');
        $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_presents.db_kelasid');
        $builder->join('tb_mapels','tb_mapels.db_idmapel = tb_presents.db_mapelid');
        $builder->join('tb_bulan','tb_bulan.db_idbulan = tb_presents.db_bulanid');
        $builder->join('tb_tahun','tb_tahun.db_idtahun = tb_presents.db_tahunid');
        $builder->join('tb_semester','tb_semester.db_idsemester = tb_presents.db_semesterid');
        $builder->join('tb_students','tb_students.id = tb_presents.db_studentid');

        $builder->select('db_studentid');
        $builder->select('db_mapelid');
        $builder->select('db_date');
        $builder->select('tb_students.studentname');
        $builder->select("(CASE WHEN db_keterangan = '1' THEN 1 ELSE NULL END) AS Hadir");
        $builder->select("(CASE WHEN db_keterangan = '2' THEN 1 ELSE NULL END) AS Izin");
        $builder->select("(CASE WHEN db_keterangan = '3' THEN 1 ELSE NULL END) AS Sakit");
        $builder->select("(CASE WHEN db_keterangan = '4' THEN 1 ELSE NULL END) AS 'Tanpa Keterangan'");
        
        $builder->where('tb_mapels.db_idmapel', $idmapel);
        $builder->where('tb_students.id', $idstudent);
        $query = $builder->orderBy('db_studentid')->get();
        return $query->getResultArray();
    }


    public function getPresents()
    {
        
            $builder = $this->db->table('tb_presents');
            $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_presents.db_kelasid');
            $builder->join('tb_mapels','tb_mapels.db_idmapel = tb_presents.db_mapelid');
            $builder->join('tb_bulan','tb_bulan.db_idbulan = tb_presents.db_bulanid');
            $builder->join('tb_tahun','tb_tahun.db_idtahun = tb_presents.db_tahunid');
            $builder->join('tb_semester','tb_semester.db_idsemester = tb_presents.db_semesterid');
            $builder->join('tb_students','tb_students.id = tb_presents.db_studentid');
            
            $builder->select('db_studentid');
            $builder->select('tb_students.studentname');
            $builder->select("SUM(CASE WHEN db_keterangan = '1' THEN 1 ELSE 0 END) AS Hadir");
            $builder->select("SUM(CASE WHEN db_keterangan = '2' THEN 1 ELSE 0 END) AS Izin");
            $builder->select("SUM(CASE WHEN db_keterangan = '3' THEN 1 ELSE 0 END) AS Sakit");
            $builder->select("SUM(CASE WHEN db_keterangan = '4' THEN 1 ELSE 0 END) AS 'Tanpa Keterangan'");
            
            
            $builder->where('tb_mapels.db_idmapel', 1);
            // $builder->where('tb_semester.db_idsemester', 1);
            // $builder->where('tb_tahun.db_idtahun', 1);
            // $builder->where('tb_kelas.db_idkelas', 1);
            $builder->groupBy(['tb_students.studentname', 'db_keterangan']);
            
            $query = $builder->orderBy('db_studentid')->get();
    
            return $query->getResultArray();

    }
    // public function getPresentsByMapels($idmapel )
    // {
    //     if($idmapel == false)
    //     {
    //         $builder = $this->db->table('tb_presents');
    //         $builder->join('tb_kelas','tb_kelas.db_idkelas = tb_presents.db_kelasid');
    //         $builder->join('tb_mapels','tb_mapels.db_idmapel = tb_presents.db_mapelid');
    //         $builder->join('tb_bulan','tb_bulan.db_idbulan = tb_presents.db_bulanid');
    //         $builder->join('tb_tahun','tb_tahun.db_idtahun = tb_presents.db_tahunid');
    //         $builder->join('tb_semester','tb_semester.db_idsemester = tb_presents.db_semesterid');
    //         $builder->join('tb_students','tb_students.id = tb_presents.db_studentid');
            
    //         $builder->select('tb_students.studentname');
    //         $builder->select("SUM(CASE WHEN db_keterangan = '1' THEN 1 ELSE 0 END) AS Hadir");
    //         $builder->select("SUM(CASE WHEN db_keterangan = '2' THEN 1 ELSE 0 END) AS Izin");
    //         $builder->select("SUM(CASE WHEN db_keterangan = '3' THEN 1 ELSE 0 END) AS Sakit");
    //         $builder->select("SUM(CASE WHEN db_keterangan = '4' THEN 1 ELSE 0 END) AS 'Tanpa Keterangan'");
            
            
    //         $builder->where('tb_mapels.db_idmapel', $idmapel);
    //         $builder->where('tb_semester.db_idsemester', 1);
    //         $builder->where('tb_tahun.db_idtahun', 1);
    //         $builder->where('tb_kelas.db_idkelas', 1);
    //         $builder->groupBy(['tb_students.studentname', 'db_keterangan']);
            
    //         $query = $builder->orderBy('db_studentid')->get();
    
    //         return $query->getResultArray();

    //     }
    //     return $this->where(['db_mapelid'=>$idmapel])
    //     ->join('tb_kelas','tb_kelas.db_idkelas = tb_presents.db_kelasid')
    //     ->join('tb_mapels','tb_mapels.db_idmapel = tb_presents.db_mapelid')
    //     ->join('tb_bulan','tb_bulan.db_idbulan = tb_presents.db_bulanid')
    //     ->join('tb_tahun','tb_tahun.db_idtahun = tb_presents.db_tahunid')
    //     ->join('tb_semester','tb_semester.db_idsemester = tb_presents.db_semesterid')
    //     ->join('tb_students','tb_students.id = tb_presents.db_studentid')
    //     ->select('tb_students.studentname')
    //     ->select("SUM(CASE WHEN db_keterangan = '1' THEN 1 ELSE 0 END) AS Hadir")
    //     ->select("SUM(CASE WHEN db_keterangan = '2' THEN 1 ELSE 0 END) AS Izin")
    //     ->select("SUM(CASE WHEN db_keterangan = '3' THEN 1 ELSE 0 END) AS Sakit")
    //     ->select("SUM(CASE WHEN db_keterangan = '4' THEN 1 ELSE 0 END) AS 'Tanpa Keterangan'")
    //     ->where('tb_mapels.db_idmapel', 1)
    //     ->where('tb_semester.db_idsemester', 1)
    //     ->where('tb_tahun.db_idtahun', 1)
    //     ->where('tb_kelas.db_idkelas', 1)
    //     ->groupBy(['tb_students.studentname', 'db_keterangan'])->orderBy('db_studentid')
    //     ->first();
    // }
}
