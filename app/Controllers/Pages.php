<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data =
        [
            'title' => 'Home | SMKN 3 BJM',
            'tes' => ['satu','dua','tiga'],
            'config' => config('Auth'),
        ];

        
        
        return view('pages/home',$data);
        
    }

    public function about()
    {
        $data=
        [
            'title' => 'About | SMKN 3 BJM',
            'alamat' =>
            [
                [

                    'tipe'          => 'Kantor',
                    'alamat'        => 'Jl. Veteran Gg. V Sejati',
                    'kota'          => 'Banjarmasin',
                    'provinsi'      => 'Kalimantan Selatan'
                    
                ],
                
                [
                    'tipe'          => 'Rumah',
                    'alamat'        => 'Jl. Kuripan Gg. V Sejati',
                    'kota'          => 'Kotabaru',
                    'provinsi'      => 'Kalimantan Selatan'
                    
                ]
                ],
            'config' => config('Auth'),
        ];
        return view('pages/about',$data);
    }

    public function presensi()
    {
        $data=
        [
            'title' => 'Presensi | SMKN 3 BJM',
            'config' => config('Auth'),
        ];
        return view('pages/presensi',$data);
    }

    public function guru()
    {
        $data=
        [
            'title' => 'Guru | SMKN 3 BJM',
            'config' => config('Auth'),
        ];
        return view('pages/guru',$data);
    }

    public function kelas()
    {
        $data=
        [
            'title' => 'Kelas | SMKN 3 BJM',
            'config' => config('Auth'),
        ];
        return view('pages/kelas',$data);
    }

    public function siswa()
    {
        $data=
        [
            'title' => 'Siswa | SMKN 3 BJM',
            'config' => config('Auth'),
        ];
        return view('pages/siswa',$data);
    }

    

}
