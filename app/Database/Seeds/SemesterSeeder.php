<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SemesterSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'db_namasemester'   => 'GENAP',
            ],
            [
                'db_namasemester'   => 'GANJIL',
            ]
            ];
            $this->db->table('tb_semester')->insertBatch($data);
    }
}
