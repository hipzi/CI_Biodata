<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class MahasiswaController extends BaseController
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
			'nrp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
			'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
			'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->mahasiswa->insert([
			'nrp' => $this->request->getVar('nrp'),
            'nama' => $this->request->getVar('nama'),
			'no_telp' => $this->request->getVar('no_telp'),
			'alamat' => $this->request->getVar('alamat'),
            'jurusan' => $this->request->getVar('jurusan')
        ]);
        session()->setFlashdata('message', 'Tambah Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa');
	}

    function edit($id)
    {
        $dataMahasiswa = $this->mahasiswa->find($id);
        if (empty($dataMahasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ditemukan !');
        }
        $data['mahasiswa'] = $dataMahasiswa;
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
			'nrp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
			'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
			'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
        $this->mahasiswa->update($id, [
            'nrp' => $this->request->getVar('nrp'),
            'nama' => $this->request->getVar('nama'),
			'no_telp' => $this->request->getVar('no_telp'),
			'alamat' => $this->request->getVar('alamat'),
            'jurusan' => $this->request->getVar('jurusan')
        ]);
        session()->setFlashdata('message', 'Update Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa');
    }

    function delete($id)
    {
        $dataMahasiswa = $this->mahasiswa->find($id);
        if (empty($dataMahasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ditemukan !');
        }
        $this->mahasiswa->delete($id);
        session()->setFlashdata('message', 'Delete Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa');
    }
}
