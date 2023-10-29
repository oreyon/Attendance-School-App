<?php 
namespace App\Controllers;

use App\Models\StudentsModel;
use App\Models\TeachersModel;


class Teachers extends BaseController
{
    protected $teachersModel;
    protected $studentsModel;

    public function __construct()
    {
        $this->teachersModel = new TeachersModel();
        $this->studentsModel = new StudentsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Guru List',
            'teacher' => $this->teachersModel->findAll()
        ];
        return view('teachers/index', $data);
    }

    public function detail($idguru)
    {
        $data = 
        [
            'title'     => 'Detail Guru | SMKN 3 BJM',
            'teacher'   => $this->teachersModel->getTeachers($idguru)
        ];

        if (empty($data['teacher']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama guru'. $idguru . ' tidak ditemukan');
        }

        return view('teachers/detail',$data);
    }
}


?>