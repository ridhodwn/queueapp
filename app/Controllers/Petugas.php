<?php

namespace App\Controllers;

use \App\Models\PetugasModel;
use \App\Models\AntrianModel;

class Petugas extends BaseController
{
    protected $petugasModel;
    protected $antrianModel;

    public function __construct()
    {
        
        $this->petugasModel = new PetugasModel();
        $this->antrianModel = new AntrianModel();
    }

    public function index(): string
    {
        return view('petugas/index');
    }

    public function login()
    {
        if($this->request->getVar('teller')) {
            $role = $this->request->getVar('teller');
            $petugas_id = 1;
        } else if ($this->request->getVar('cs')) {
            $role = $this->request->getVar('cs');
            $petugas_id = 2;
        }
        $password = $this->request->getVar('password');
        $petugas = $this->petugasModel->where(['role' => $role, 'password' => $password])->first();
        $antrian = $this->antrianModel->where(['petugas_id' => $petugas_id, 'called' => 0])->first();

        $data = [
            'no_antrian' => $antrian['id'],
            'role' => $role
        ];
        
        if($petugas) {
            session()->set('petugas_id', $petugas_id);
            session()->set('role', $role);
            return view('petugas/panggil-antrian', $data);
        } else {
            return redirect()->to('/petugas');
        }
    }

    public function nextAntrian()
    {
        $id = $this->request->getVar('next-antrian');
        $this->antrianModel->update($id, [
            'called' => true
        ]);

        $petugas_id = session()->get('petugas_id');
        $role = session()->get('role');

        $antrian = $this->antrianModel->where(['petugas_id' => $petugas_id, 'called' => 0])->first();

        $data = [
            'no_antrian' => $antrian['id'],
            'role' => $role
        ];

        return view('petugas/panggil-antrian', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/petugas');
    }
}