<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jurusan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'db_idjurusan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'db_namajurusan' => [
                'type'       => 'VARCHAR',
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
            $this->forge->addKey('db_idjurusan', true);
            $this->forge->createTable('tb_jurusan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_jurusan');
    }
}
