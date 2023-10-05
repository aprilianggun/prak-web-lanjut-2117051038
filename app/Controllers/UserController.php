<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;
use Config\Service;

class UserController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getUser()->findAll(); // Mengambil data user dari model

        $data = [
            'title' => 'List User',
            'users' => $users, // Menyimpan data user ke dalam variabel $users
        ];

        return view('list_user', $data);
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
        $kelasModel = new KelasModel();

        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
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

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('id_kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);

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

        return redirect()->to('/user');
    }

    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
}
