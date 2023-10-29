<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TbStudentsModel;
use App\Models\JurusanModel;
use App\Models\ClassModel;
use App\Models\MapelsModel;
use App\Models\PresentsModel;

class Presents extends BaseController
{
    protected $TbstudentsModel;
    protected $JurusanModel;
    protected $ClassModel;
    protected $MapelsModel;
    protected $PresentsModel;
    
    public function __construct()
    {
        $this->TbstudentsModel = new TbStudentsModel();
        $this->JurusanModel = new JurusanModel();
        $this->ClassModel = new ClassModel();
        $this->MapelsModel = new MapelsModel();
        $this->PresentsModel = new PresentsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Presensi | SMKN 3 BJM',
            'mapels'=> $this->MapelsModel->getMapels(),
            'config' => config('Auth'),
            
        ];
        //
        return view('presents/index', $data);
    }

    public function detail($idmapel)
    {
        $idmatapelajaran = $idmapel;

        $data = [
            'title' => 'Detail Presensi Kelas | SMKN 3 BJM',
            'mapels'=> $this->MapelsModel->getMapels($idmapel),
            'class' => $this->ClassModel->getClass(),
            'presents' => $this->PresentsModel->getPresentsByMapels($idmatapelajaran),
            'config' => config('Auth'),
        ];

        
        if(empty($data['mapels']))
        {
            throw new \Codeigniter\Exceptions\PageNotFoundException('Mata Pelajaran '. $idmapel .' tidak ditemukan');
        }

        

        return view('presents/detail',$data);
    }

    public function detailstudentpresents($idmapel, $idstudent)
    {
        $idmatapelajaran = $idmapel;
        $idsiswa = $idstudent;

        $data = [
            'title' => 'Detail Presensi Siswa | SMKN 3 BJM',
            'mapels' => $this->MapelsModel->getMapels($idmapel),
            'class' => $this->ClassModel->getClass(),
            'student' => $this->TbstudentsModel->getStudentById($idstudent),
            'studentpresents' => $this->PresentsModel->getPresentsStudentById($idmatapelajaran, $idsiswa),
            'config' => config('Auth'),
        ];

        if(empty($data['student']))
        {
            throw new \Codeigniter\Exceptions\PageNotFoundException('Mata Pelajaran '. $idstudent .' tidak ditemukan');
        }
        if(empty($data['mapels']))
        {
            throw new \Codeigniter\Exceptions\PageNotFoundException('Mata Pelajaran '. $idmapel .' tidak ditemukan');
        }

        return view('presents/detailstudent', $data);
    }

    public function createpresents($idmapel)
    {
        $idmatapelajaran = $idmapel;


        $data = [
            'title' => 'Tambah Presensi Kehadiran | SMKN 3 BJM',
            'mapels'=> $this->MapelsModel->getMapels($idmapel),
            'class' => $this->ClassModel->getClass(),
            'presents'  => $this->PresentsModel->getPresentsByMapels($idmatapelajaran),
            'config' => config('Auth'),
        ];

        if(empty($data['mapels']))
        {
            throw new \Codeigniter\Exceptions\PageNotFoundException('Mata Pelajaran'. $idmapel .'tidak ditemukan');
        }

        

        return view('presents/create',$data);
    }

    public function savepresents()
    {
        $kelas  = $this->request->getVar('kelas');
        $namamapel = $this->request->getVar('matapelajaran');
        $tanggal = $this->request->getVar('tanggal');
        $bulan  = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');
        $semester = $this->request->getVar('semester');
        $namastudent = $this->request->getVar('namastudent');
        $keterangan = $this->request->getVar('keterangan');
        // print_r($kelas);
        // print_r("<br>");
        // print_r("<br>");
        // print_r("<br>");
        // print_r($namamapel);
        // print_r("<br>");
        // print_r("<br>");
        // print_r("<br>");
        // print_r($tanggal);
        // print_r("<br>");
        // print_r("<br>");
        // print_r("<br>");
        // print_r($bulan);
        // print_r("<br>");
        // print_r("<br>");
        // print_r("<br>");
        // print_r($tahun);
        // print_r("<br>");
        // print_r("<br>");
        // print_r("<br>");
        // print_r($semester);
        // print_r("<br>");
        // print_r("<br>");
        // print_r("<br>");
        // print_r($namastudent);
        // print_r("<br>");
        // print_r("<br>");
        // print_r("<br>");
        // print_r($keterangan);

        
        $data = [];
        for($i=0; $i<count($kelas); $i++)
        {
            $keteranganValue = isset($keterangan[$i]) ? $keterangan[$i] : '';
            // $data=array(
            //     'db_kelasid'    => $kelas[$i],
            //     'db_mapelid'    => $namamapel[$i],
            //     'db_date'       => $tanggal[$i],
            //     'db_bulanid'    => $bulan[$i],
            //     'db_tahunid'    => $tahun[$i],
            //     'db_semesterid' => $semester[$i],
            //     'db_studentid'  => $namastudent[$i],
            //     'db_keterangan' => $keterangan[$i],
            // );
            $data[]=[
                
                // 'db_kelasid'    => $this->request->getVar('kelas'),
                // 'db_mapelid'    => $this->request->getVar('matapelajaran'),
                // 'db_date'       => $this->request->getVar('tanggal'),
                // 'db_bulanid'    => $this->request->getVar('bulan'),
                // 'db_tahunid'    => $this->request->getVar('tahun'),
                // 'db_semesterid' => $this->request->getVar('semester'),
                // 'db_studentid'  => $this->request->getVar('namastudent'),
                // 'db_keterangan' => $this->request->getVar('keterangan'),
                
                    'db_kelasid'    => $kelas[$i],
                    'db_mapelid'    => $namamapel[$i],
                    'db_date'       => $tanggal[$i],
                    'db_bulanid'    => $bulan[$i],
                    'db_tahunid'    => $tahun[$i],
                    'db_semesterid' => $semester[$i],
                    'db_studentid'  => $namastudent[$i],
                    'db_keterangan' => $keteranganValue,
                    // 'db_keterangan' => isset($keterangan[$i]) ? $keterangan[$i] : '',
                
            ];
        }
        $db = \Config\Database::connect();
        $insert = $db->table('tb_presents')->insertBatch($data);
        if($insert){
            session()->setFlashdata('pesan', 'Presensi Kehadiran Berhasil Ditambahkan');
            return redirect()->to('/presents');
        }
        else
        {
            echo "Data Gagal Ditambahkan";
            return redirect()->to('/presents');
        }

        // dd($data);
        // $jumlahdata = count($kelas);

        // for($i=0; $i<$jumlahdata; $i++)
        // {
        //    $this->PresentsModel->insertBatch([
        //     'db_kelasid'    => $this->request->getVar('kelas'),
        //     'db_mapelid'    => $this->request->getVar('matapelajaran'),
        //     'db_date'       => $this->request->getVar('tanggal'),
        //     'db_bulanid'    => $this->request->getVar('bulan'),
        //     'db_tahunid'    => $this->request->getVar('tahun'),
        //     'db_semesterid' => $this->request->getVar('semester'),
        //     'db_studentid'  => $this->request->getVar('namastudent'),
        //     'db_keterangan' => $this->request->getVar('keterangan'),
        //    ]);
        // }


        // if ($jumlahdata) {
        //     session()->setFlashdata('pesan', 'Presensi Kehadiran Berhasil Ditambahkan');
        //     return redirect()->to('/presents');
        // } else {
        //     echo "Data Gagal Ditambahkan";
        //     return redirect()->to('/presents');
        // }


        // $this->PresentsModel->save(
        //     [
        //         'db_kelasid'    => $this->request->getVar('kelas'),
        //         'db_mapelid'    => $this->request->getVar('matapelajaran'),
        //         'db_date'       => $this->request->getVar('tanggal'),
        //         'db_bulanid'    => $this->request->getVar('bulan'),
        //         'db_tahunid'    => $this->request->getVar('tahun'),
        //         'db_semesterid' => $this->request->getVar('semester'),
        //         'db_studentid'  => $this->request->getVar('namastudent'),
        //         'db_keterangan' => $this->request->getVar('keterangan'),
        //     ]
        //     );
        

            // session()->setFlashdata('pesan', 'Presensi Kehadiran Berhasil Ditambahkan');
            // return redirect()->to('/presents');
    }

    public function printpresent($idmapel)
    {
        $idmatapelajaran = $idmapel;


        $data = [
            'title' => 'Cetak Presensi Kehadiran | SMKN 3 BJM',
            'mapels'=> $this->MapelsModel->getMapels($idmapel),
            'class' => $this->ClassModel->getClass(),
            'presents'  => $this->PresentsModel->getPresentsByMapels($idmatapelajaran),
            'config' => config('Auth'),
        ];

        if(empty($data['mapels']))
        {
            throw new \Codeigniter\Exceptions\PageNotFoundException('Mata Pelajaran'. $idmapel .'tidak ditemukan');
        }

        

        return view('presents/printpresent',$data);
    }

    public function printpresentstudent($idmapel, $idstudent)
    {
        $idmatapelajaran = $idmapel;
        $idsiswa = $idstudent;

        $data = [
            'title' => 'Detail Presensi Siswa | SMKN 3 BJM',
            'mapels' => $this->MapelsModel->getMapels($idmapel),
            'class' => $this->ClassModel->getClass(),
            'student' => $this->TbstudentsModel->getStudentById($idstudent),
            'studentpresents' => $this->PresentsModel->getPresentsStudentById($idmatapelajaran, $idsiswa),
            'config' => config('Auth'),
        ];

        if(empty($data['student']))
        {
            throw new \Codeigniter\Exceptions\PageNotFoundException('Mata Pelajaran '. $idstudent .' tidak ditemukan');
        }
        if(empty($data['mapels']))
        {
            throw new \Codeigniter\Exceptions\PageNotFoundException('Mata Pelajaran '. $idmapel .' tidak ditemukan');
        }

        return view('presents/printpresentstudent', $data);
    }
}
