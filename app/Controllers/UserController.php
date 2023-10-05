<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Config\Service;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }

    public function create()
    {
        $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'A',
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B',
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C',
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D'
            ],
        ];

        $data = [
            'kelas' => $kelas
        ];

        return view('create_user', $data);
    }


    public function store()
    {
        $userModel = new UserModel();

        $data = [
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('id_kelas'),
            'npm' => $this->request->getVar('npm'),
        ];

        // validasi input
        if (!$this->validate([
            'npm' => 'required|is_unique[user.npm]', // Perbaiki aturan validasi ini
            'nama' => 'required'
        ])) {

            //$validation = Service::validation();
            return redirect()->to('/user/create');
        }

        // Simpan data ke dalam database
        $userModel->insert($data);

        return view('profile', $data);
    }
}
