<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas(),
        ];
        return view('list_kelas', $data);
    }

    public $kelasModel;

    public function __construct()
    {
        $this->kelasModel = new KelasModel();
    }

    public function create()
    {
        $data = [
            'title' => 'Create Kelas',
        ];
        return view('create_kelas', $data);
    }

    public function show($id)
    {
        $kelas = $this->kelasModel->getKelas($id);
        $data = [
            'title' => 'Detail Kelas',
            'kelas' => $kelas,
        ];
        return view('kelas', $data);
    }


    public function store()
    {
        if (!$this->validate([
            'nama_kelas' => 'required',
            'jumlah_kapasitas' => 'required',
        ])) {
            return redirect()->to(base_url('kelas/create'))->withInput()->with('validation', service('validation'));
        }

        $this->kelasModel->saveKelas([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'jumlah_kapasitas' => $this->request->getVar('jumlah_kapasitas'),
        ]);
        return redirect()->to(base_url('/kelas'));
    }

    public function edit($id)
    {
        $kelas = $this->kelasModel->getKelas($id);
        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
            'validation' => \Config\Services::validation(),
        ];
        return view('edit_kelas', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_kelas' => 'required',
            'jumlah_kapasitas' => 'required',
        ])) {
            return redirect()->to(base_url('/kelas/' . $id . '/edit'))->withInput()->with('validation', service('validation'));
        }

        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'jumlah_kapasitas' => $this->request->getVar('jumlah_kapasitas'),
        ];

        $result = $this->kelasModel->updateKelas($data, $id);

        if (!$result) {
            return redirect()->to(base_url('/kelas/' . $id . '/edit'))->withInput()->with('error', 'Gagal Edit Data');
        }

        return redirect()->to(base_url('/kelas'));
    }

    public function destroy($id)
    {
        $result = $this->kelasModel->deleteKelas($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Tidak Berhasil');
        }
        return redirect()->to(base_url('/kelas'))->with('success', 'Data Berhasil Dihapus');
    }
}
