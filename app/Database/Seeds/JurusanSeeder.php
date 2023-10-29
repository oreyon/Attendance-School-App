<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'db_namajurusan' => 'MANAJEMEN PERKANTORAN',
            ],
            [
                'db_namajurusan' => 'PEMASARAN',
            ],
            [
                'db_namajurusan' => 'USAHA PERJALANAN WISATA',
            ],
            [
                'db_namajurusan' => 'AKUTANSI DAN KEUANGAN LEMBAGA',
            ],
            [
                'db_namajurusan' => 'PERHOTELAN',
            ],
            [
                'db_namajurusan' => 'DESAIN KOMUNIKASI VISUAL',
            ],
            [
                'db_namajurusan' => 'TEKNIK KOMPUTER JARINGAN DAN TELEKOMUNIKASI',
            ],
            [
                'db_namajurusan' => 'BROADCASTING DAN PERFILMAN',
            ],
            [
                'db_namajurusan' => 'KULINER',
            ],
        ];
        $this->db->table('tb_jurusan')->insertBatch($data);
    }
}
