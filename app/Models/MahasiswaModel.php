<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "stambuk";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['stambuk', 'nama_mahasiswa', 'jenis_kelamin', 'no_telp', 'email', 'alamat'];
}
