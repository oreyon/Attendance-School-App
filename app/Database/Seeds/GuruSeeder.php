<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GuruSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'db_nisn' => '3062046001',
                'db_namaguru' => 'Admin',
                'db_namauser' => 'admin',
                'db_password' => password_hash('admin',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046002',
                'db_namaguru' => 'Akhmad Syarwani',
                'db_namauser' => 'akhmadsyarwani',
                'db_password' => password_hash('akhmadsyarwani',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046003',
                'db_namaguru' => 'Kenti Yuliana',
                'db_namauser' => 'kentiyuliana',
                'db_password' => password_hash('kentiyuliana',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046004',
                'db_namaguru' => 'M. Hidayat',
                'db_namauser' => 'mhidayat',
                'db_password' => password_hash('mhidayat',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046005',
                'db_namaguru' => 'Root',
                'db_namauser' => 'root',
                'db_password' => password_hash('root',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046006',
                'db_namaguru' => 'Andi',
                'db_namauser' => 'andi',
                'db_password' => password_hash('andi',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046007',
                'db_namaguru' => 'Budi',
                'db_namauser' => 'budi',
                'db_password' => password_hash('budi',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046008',
                'db_namaguru' => 'Ani',
                'db_namauser' => 'ani',
                'db_password' => password_hash('ani',PASSWORD_BCRYPT),
            ],
            [
                'db_nisn' => '3062046009',
                'db_namaguru' => 'Anang',
                'db_namauser' => 'anang',
                'db_password' => password_hash('anang',PASSWORD_BCRYPT),
            ],
            ];
            $this->db->table('tb_guru')->insertBatch($data);
    }
}
