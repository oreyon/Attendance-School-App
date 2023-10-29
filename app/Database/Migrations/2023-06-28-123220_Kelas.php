<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'db_idkelas' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'db_tingkatkelas' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'db_namakelas' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'db_tahunangkatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'db_jurusanid' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'db_guruid' =>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
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
        $this->forge->addKey('db_idkelas', true);
        $this->forge->addForeignKey('db_guruid','tb_guru','db_idguru');
        $this->forge->addForeignKey('db_jurusanid','tb_jurusan','db_idjurusan');
        $this->forge->createTable('tb_kelas');
    }

    public function down()
    {
        //
        $this->forge->dropForeignKey('tb_kelas','tb_kelas_db_jurusanid_foreign');
        $this->forge->dropForeignKey('tb_kelas','tb_kelas_db_guruid_foreign');
        $this->forge->dropTable('tb_Kelas');
    }
}
