<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CallAllSeeder extends Seeder
{
    public function run()
    {
        //
        $this->call('UsersSeeder');
        $this->call('GuruSeeder');
        $this->call('JurusanSeeder');
        $this->call('SemesterSeeder');
        $this->call('BulanSeeder');
        $this->call('TahunSeeder');
        $this->call('KelasSeeder');
        $this->call('StudentsSeeder');
        $this->call('MapelsSeeder');
        $this->call('PresentsSeeder');
    }
}
