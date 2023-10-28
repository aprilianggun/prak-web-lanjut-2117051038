<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddJumlahKapasitasColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('kelas', [
            'jumlah_kapasitas' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ]
            ]);
    }

    public function down()
    {
        $this->forge->dropColumn('kelas', 'jumlah_kapasitas');
    }
}
