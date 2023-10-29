<?php

namespace App\Controllers;

// use App\Models\StudentsModel;
 use App\Models\TbStudentsModel;
 use App\Models\JurusanModel;
 use App\Models\ClassModel;
// memanggil model data studentsmodel

class Students extends BaseController
{
    protected $TbstudentsModel;
    protected $JurusanModel;
    protected $ClassModel;
    protected $validation;
    // membuat var studentsmodel

    public function __construct()
    {
        $this->TbstudentsModel = new TbstudentsModel();
        $this->JurusanModel = new JurusanModel();
        $this->ClassModel = new ClassModel();
        $this->validation = \Config\Services::validation();
        // menjadikan var studentsmodel sama dengan model StudentsModel.php
    }



    public function index()
    {
        // $student = $this->studentsModel->findAll();

        $data =
        [
            'title' => 'Student List | SMKN 3 BJM',
            // 'student' => $this->studentsModel->getStudents()
            'student' => $this->TbstudentsModel->getDataStudents(),
            'jurusan' => $this->JurusanModel->findAll(),
            'class'   => $this->ClassModel->getDataClassSortByKelas(),
            // 'student' => $this->studentsModel->where('kelas',$kelas)->findAll()
            // student become variable array bacuse - $student, it can be call on view index
        ];

        
        if(isset($_GET['kelas'])&&($_GET['jurusan']))
        {
            $kelas=($_GET['kelas']);
            // $kelas=$this->request->getVar('kelas');
            $jurusan=($_GET['jurusan']);
            // $jurusan=$this->request->getVar('jurusan');

            if($kelas=='all' && $jurusan=='all')
            {
                $data['student'] = $this->TbstudentsModel->getDataStudentsSortByKelas();
            }
            else if($kelas=='all' && $jurusan==$jurusan)
            {
                $data['student'] = $this->TbstudentsModel->getDataStudentsOnlyShowByJurusan();
            }
            else if($kelas==$kelas && $jurusan=='all')
            {
                // $data['student'] = $this->studentsModel->getStudentsClassonly();
                $data['student'] = $this->TbstudentsModel->getDataStudentsOnlyShowByClass();
            }
            else if($kelas==$kelas && $jurusan==$jurusan)
            {
                $data['student'] = $this->TbstudentsModel->getDataStudentsByClassByJurusan();
            }
            else
            {
                // $data['student'] = $this->studentsModel->where('students.kelas',$_GET['kelas'])->findAll();
                $data['student'] = $this->TbstudentsModel->getDataStudentsSortByKelas();
            }
        }

        return view('students/index',$data);
        
    }


    
    public function detail($slug)
    {
        
        $data = 
        [
            'title' => 'Detail Student | SMKN 3 BJM',
            'student' => $this->TbstudentsModel->getStudents($slug)
            // student merupakan array bukan diambil dari nama file controller ataupun method
        ];

        
        if (empty($data['student']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama siswa '. $slug . ' tidak ditemukan');
            // return view('students/detail',$data);
        }
            
        return view('students/detail',$data);
        // students merupakan nama controller
        
    }



    public function create()
    {
        // session();
        $data=
        [
            'title'         => 'Tambah Siswa Baru | SMKN 3 BJM',
            'validation'    => $this->validation,
            'class'         => $this->ClassModel->getDataClassSortByKelas(),
            'jurusan'       => $this->JurusanModel->getDataJurusan(),

        ];

        return view('students/create', $data);
    }



    public function save()
    {
        $rules = $this->validate([
            'studentname' => 'required|is_unique[tb_students.studentname]',
            // 'sampul' => [
            //     'uploaded[sampul]'
            //     ]
        ]);

        if(!$rules)
        {   
            session()->setFlashdata('pesan', 'Data Gagal ditambahkan.');
            return redirect()->to('/students/create')->withInput()->with('validation',$this->validation);   
            // ->with('validation',$this->validation);
        }

        //======================================================================================

        // if(!$this->validate([
            

        //     'studentname' => [
        //         'rules' => 'required|is_unique[students.studentname]',
        //         'errors'=> [
        //             'required' => '{field} Nama harus diisi.',
        //             'is_unique' => 'Nama sudah dipakai'
        //         ]
        //         ],
        //         'sampul' => [
        //             'uploaded[sampul]'
        //         ]

            
        //     // 'sampul' => [
        //     //     'uploaded[sampul]'
                        
        //         // ]
              
                
            
        // ])){
        //     // popup notifikasi validasi
        //     // dd($validation);
            
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/students/create')->withInput()->with('validation', $validation);
            
             
        //     // mengembalikan nilai form yang sudah yang sudah di input diambil dari method create()
        // }

        // validasi gambar
        // $file = $this->request->getFile('sampul');

        // if (! $path = $file->store())
        // {
        //     return view('/students/create',['Error' => 'Upload Failed']);
        // }
        // $data = ['/public/img' => $path];
        
        // return view('upload success', $data);



        $slug = url_title($this->request->getVar('studentname'), '-', true);
        //======================================================================================
        $imgrules = $this->validate([
            'sampul' => 'uploaded[sampul]'
            // 'sampul' => [
            //     'uploaded[sampul]'
            //     ]
        ]
        );
    
        if(!$imgrules)
        {   

            session()->setFlashdata('pesan', 'Data Gagal ditambahkan.');
            return redirect()->to('/students/create')->withInput()->with('validation',$this->validation);   
            // ->with('validation',$this->validation);
        }
        // //======================================================================================


        // ambil file gambar
        $gambar = $this->request->getFile('sampul');
        // give random name gambar 
        $namagambar = $gambar->getRandomName();
        // move file gambar to server side
        $gambar->move(WRITEPATH. '../public/photos/', $namagambar);

        

        $this->TbstudentsModel->save
        (
            [
                'studentname' =>  $this->request->getVar('studentname'),
                'slug'  =>  $slug,
                'db_kelasid' =>  $this->request->getVar('kelas'),
                'db_jurusanid'   => $this->request->getVar('jurusan'),
                'sampul'    => $namagambar
                // 'sampul'    => ''
            ]
            
        );

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/students');
    }



    public function delete($id)
    {
        $this->TbstudentsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/students');
    }



    public function edit($slug)
    {
        $data=
        [
            'title' => 'Edit Data Siswa | SMKN 3 BJM',
            'validation'    => $this->validation,
            'db_student'    => $this->TbstudentsModel->getStudents($slug),
            'class'         => $this->ClassModel->getDataClassSortByKelas(),
            'jurusan'       => $this->JurusanModel->getDataJurusan(),
        ];

        return view('students/edit', $data);
    }



    public function update($id)
    {
        // cek data terdahulu
        $olddata = $this->TbstudentsModel->getStudents($this->request->getVar('slug'));
        if($olddata['studentname'] == $this->request->getVar('studentname'))
        {
            $rule_studentname = 'required';
        }
        else
        {
            $rule_studentname = 'required|is_unique[students.studentname]';
        }

        if(!$this->validate([
            'studentname' => [
                'rules' => $rule_studentname,
                'errors'=> [
                    'required' => '{field} Nama harus diisi.',
                    'is_unique' => 'Nama sudah dipakai'
                ]
            ]
        ])){
            // popup notifikasi validasi
            // dd($validation);     
            return redirect()->to('/students/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $this->validation);
            // mengembalikan nilai form yang sudah yang sudah di input diambil dari method create()
        }

        $slug = url_title($this->request->getVar('studentname'), '-', true);

        $imgrules = $this->validate([
            'sampul' => 'uploaded[sampul]',
            // 'sampul' => [
            //     'uploaded[sampul]'
            //     ]
        ]);
    
        if(!$imgrules)
        {   

            session()->setFlashdata('pesan', 'Data Gagal ditambahkan.');
            return redirect()->to('/students/create')->withInput()->with('validation',$this->validation);   
            // ->with('validation',$this->validation);
        }

            // ambil file gambar
            $gambar = $this->request->getFile('sampul');
            // give random name gambar 
            $namagambar = $gambar->getRandomName();
            // move file gambar to server side
            $gambar->move(WRITEPATH. '../public/photos/', $namagambar);


        $this->TbstudentsModel->save
        (
            [
                'id'            => $id,
                'studentname'   => $this->request->getVar('studentname'),
                'slug'          => $slug,
                'db_kelasid'    => $this->request->getVar('kelas'),
                'db_jurusanid'  => $this->request->getVar('jurusan'),
                'sampul'        => $namagambar,
            ]
            
        );
      
        session()->setFlashdata('pesan', 'Data Berhasil Diperbaharui.');
        return redirect()->to('/students');
    }


}
