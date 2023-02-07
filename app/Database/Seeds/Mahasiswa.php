<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_mahasiswa' => 'Paramita Aditung',
                'jenis_kelamin' => 'wanita',
                'no_telp' => '085256993110',
                'email' => 'paramitaaditung@yahoo.com',
                'alamat' => 'Jalan Somewhere No. 1',
                'created_at' => Time::now(),
            ],
            [
                'nama_mahasiswa' => 'Arnold Nasir',
                'jenis_kelamin' => 'pria',
                'no_telp' => '081152290000',
                'email' => 'arnold@gmail.com',
                'alamat' => 'Jalan Anywhere No. 2',
                'created_at' => Time::now(),
            ],
            [
                'nama_mahasiswa' => 'Anthony Dicky Rustan',
                'jenis_kelamin' => 'pria',
                'no_telp' => '081112223334',
                'email' => 'anthony@gmail.com',
                'alamat' => 'Jalan Nowhere No. 3',
                'created_at' => Time::now(),
            ]
        ];

        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
