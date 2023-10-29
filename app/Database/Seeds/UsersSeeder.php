<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'db_nisn' => '3062046001',
                'db_namauser' => 'admin',
                'db_password' => password_hash('admin',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046002',
                'db_namauser' => 'akhmadsyarwani',
                'db_password' => password_hash('akhmadsyarwani',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046003',
                'db_namauser' => 'kentiyuliana',
                'db_password' => password_hash('kentiyuliana',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046004',
                'db_namauser' => 'mhidayat',
                'db_password' => password_hash('mhidayat',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046005',
                'db_namauser' => 'root',
                'db_password' => password_hash('root',PASSWORD_BCRYPT),
            ],
            ];
            $this->db->table('tb_users')->insertBatch($data);
    }
}
