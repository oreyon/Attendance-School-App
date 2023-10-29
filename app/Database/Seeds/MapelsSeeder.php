<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MapelsSeeder extends Seeder
{
    public function run()
    {
        //
        $data =[
            [
                'db_namamapel'  => 'MATEMATIKA',
                'db_kelasid'    => '1',
                'db_jurusanid'  => '1',
                'db_guruid'     => '1',
                'db_tahunid'    => '1',
                'db_semesterid' => '1',
            ],
            [
                'db_namamapel'  => 'KEWARGANEGARAAN',
                'db_kelasid'    => '1',
                'db_jurusanid'  => '1',
                'db_guruid'     => '1',
                'db_tahunid'    => '1',
                'db_semesterid' => '1',
            ],
        ];
        $this->db->table('tb_mapels')->insertBatch($data);
    }
}
