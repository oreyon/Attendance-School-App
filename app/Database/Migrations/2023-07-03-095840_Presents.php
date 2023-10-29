<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Presents extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'db_idpresent'    =>[
                'type'  => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment'=> true,
            ],
            'db_kelasid'    =>[
                'type'      => 'INT',
                'constraint'=> 5,
                'unsigned'  => true,
            ],
            'db_mapelid'  =>[
                'type'      => 'INT',
                'constraint'=> 5,
                'unsigned'  => true,
            ],
            'db_date'   =>[
                'type'  => 'DATETIME',
                'null'  => true,
            ],
            'db_bulanid'    => [
                'type'      => 'INT',
                'constraint'=> 5,
                'unsigned'  => true,
            ],
            'db_tahunid'    =>[
                'type'      => 'INT',
                'constraint'=> 5,
                'unsigned'  => true,
            ],
            'db_semesterid' =>[
                'type'      => 'INT',
                'constraint'=> 5,
                'unsigned'  => true,
            ],
            'db_studentid' =>[
                'type'      => 'INT',
                'constraint'=> 11,
                'unsigned'  => true,
            ],
            'db_keterangan' => [
                'type'      => 'INT',
                'constraint'=> 2,
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
        $this->forge->addKey('db_idpresent', true);
        $this->forge->addForeignKey('db_kelasid', 'tb_kelas', 'db_idkelas');
        $this->forge->addForeignKey('db_mapelid', 'tb_mapels', 'db_idmapel');
        $this->forge->addForeignKey('db_bulanid', 'tb_bulan', 'db_idbulan');
        $this->forge->addForeignKey('db_tahunid', 'tb_tahun', 'db_idtahun');
        $this->forge->addForeignKey('db_semesterid', 'tb_semester', 'db_idsemester');
        $this->forge->addForeignKey('db_studentid', 'tb_students', 'id');
        $this->forge->createTable('tb_presents');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_presents');
    }
}
