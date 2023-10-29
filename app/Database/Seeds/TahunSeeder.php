<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TahunSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'db_tahunajar'  => '2020/2021',
            ],
            [
                'db_tahunajar'  => '2021/2022',
            ],
            [
                'db_tahunajar'  => '2022/2023',
            ],
            [
                'db_tahunajar'  => '2023/2024',
            ],
        ];
        $this->db->table('tb_tahun')->insertBatch($data);
    }
}
