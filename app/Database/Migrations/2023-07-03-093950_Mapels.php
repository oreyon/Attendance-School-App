<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mapels extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'db_idmapel'    => [
                'type'  => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'db_namamapel'  =>[
                'type'  => 'VARCHAR',
                'constraint'    => '100',
            ],
            'db_kelasid'    =>[
                'type'  => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'db_jurusanid'    =>[
                'type'  => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'db_guruid'    =>[
                'type'  => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'db_tahunid'    =>[
                'type'  => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'db_semesterid'    =>[
                'type'  => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
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
        $this->forge->addKey('db_idmapel', true);
        $this->forge->addForeignKey('db_kelasid', 'tb_kelas','db_idkelas');
        $this->forge->addForeignKey('db_jurusanid','tb_jurusan','db_idjurusan');
        $this->forge->addForeignKey('db_guruid','tb_guru','db_idguru');
        $this->forge->addForeignKey('db_tahunid','tb_tahun','db_idtahun');
        $this->forge->addForeignKey('db_semesterid','tb_semester','db_idsemester');
        $this->forge->createTable('tb_mapels');

    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_mapels');
    }
}
