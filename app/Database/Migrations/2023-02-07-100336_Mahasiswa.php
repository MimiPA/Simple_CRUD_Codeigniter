<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'stambuk' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => "'pria','wanita'",
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('stambuk');
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
