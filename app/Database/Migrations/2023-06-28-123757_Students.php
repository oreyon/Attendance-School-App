<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sampul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'      => true,
            ],
            'studentname' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'db_kelasid' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'db_jurusanid' =>[
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
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('db_kelasid','tb_kelas','db_idkelas');
        $this->forge->addForeignKey('db_jurusanid','tb_jurusan','db_idjurusan');
        $this->forge->createTable('tb_students');

    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_students');
    }
}
