<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;
use App\Models\TeachersModel;
use App\Models\ClassModel;

class Classes extends BaseController
{
    protected $teachersModel;
    protected $studentsModel;
    protected $classModel;
    protected $db;

    public function __construct()
    {
        $this->teachersModel = new TeachersModel();
        $this->studentsModel = new StudentsModel();
        $this->classModel = new ClassModel();
        $this->db = \Config\Database::connect();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Kelas List',
            'config' => config('Auth'),
            'class' => $this->classModel->getDataClassSortByKelas()
        ];
        
        $namakelas = $this->classModel->where('tb_kelas.db_namakelas',$data['class']);
        
    
        if(isset($_GET['kelas']))
        {
            //  $db = \Config\Database::connect();
            // $builder = $db->table('tb_kelas');
            // $query = $builder->get();
            
            // foreach ($query->getResult() as $row) {
            //     echo $row->title;
            // }

            $kelas=trim($_GET['kelas']);
            if($kelas=='all')
            {
                $data['class'] = $this->classModel->getDataClassSortByKelas();
            }
            
            else if($kelas==$kelas)
            {
                // $query = $this->db->query('SELECT db_idkelas FROM tb_kelas')
                $data['class'] = $this->classModel->getDataClassOnlyShowByKelas();
            }
            else
            {
                $data['class'] = $this->classModel->getDataClassSortByKelas();
            }
        }
        else
        {
            $data['class'] = $this->classModel->getDataClassSortByKelas();
        }  
        return view('classes/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Kelas',
            'namaguru' => $this->teachersModel->findAll(),
            'config' => config('Auth'),
            'namasiswa' => $this->studentsModel->findAll()
        ];

        return view('classes/create', $data);
    }

    public function save()
    {

        // $data = [
        //     'db_namakelas' => $this->request->getVar('namakelas'),
        //     'db_siswaid' => $this->request->getVar('namasiswa'),
        //     'db_guruid' => $this->request->getVar('namaguru')
        // ];

        $this->classModel->save(
            [
            'db_namakelas' => $this->request->getVar('namakelas'),
            'db_siswaid' => $this->request->getVar('namasiswa'),
            'db_guruid' => $this->request->getVar('namaguru')
            ]
        );

        return redirect()->to('/classes')->with('pesan', 'Data Berhasil Ditambahakan');
    }
}
