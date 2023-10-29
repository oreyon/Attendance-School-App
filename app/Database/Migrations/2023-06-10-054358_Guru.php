<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guru extends Migration
{
    public function up()
    {
        //
         // php spark make:migration db_Guru = membuat file migration
        // php spark migrate -> menjalankan file migrate ke database
        //
        $this->forge->addField([
            'db_idguru' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'db_nisn' =>[
                'type' => 'INT',
                'constraint' => 10,
            ],
            'db_namaguru' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'db_namauser' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'db_password' => [
                'type'  => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_created' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'date_updated' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'date_deleted' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('db_idguru', true);
        // $this->forge->addForeignKey('db_kelasid','db_Kelas','db_idkelas');
        $this->forge->createTable('tb_guru');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_guru');
    }
}
