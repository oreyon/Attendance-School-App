<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BulanSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'db_namabulan'  => 'JANUARI',
            ],
            [
                'db_namabulan'  => 'FEBRUARI',
            ],
            [
                'db_namabulan'  => 'MARET',
            ],
            [
                'db_namabulan'  => 'APRIL',
            ],
            [
                'db_namabulan'  => 'MEI',
            ],
            [
                'db_namabulan'  => 'JUNI',
            ],
            [
                'db_namabulan'  => 'JULY',
            ],
            [
                'db_namabulan'  => 'AGUSTUS',
            ],
            [
                'db_namabulan'  => 'SEPTEMBER',
            ],
            [
                'db_namabulan'  => 'OKTOBER',
            ],
            [
                'db_namabulan'  => 'NOVEMBER',
            ],
            [
                'db_namabulan'  => 'DESEMBER',
            ],
        ];
        $this->db->table('tb_bulan')->insertBatch($data);
    }
}
