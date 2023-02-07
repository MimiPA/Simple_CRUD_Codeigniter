<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswa;

    function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa->findAll();
        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        return view('mahasiswa/create');
    }

    public function store()
    {
        if (!$this->validate([
            'nama_mahasiswa' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} Harus Diisi']
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} Harus Dipilih']
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} Harus Diisi']
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus Diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} Harus Diisi']
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->mahasiswa->insert([
            'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        session()->setFlashdata('message', 'Tambah Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa');
    }
}
