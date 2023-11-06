<?php

namespace App\Controllers;

use \App\Models\NasabahModel;
use \App\Models\AntrianModel;

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class Nasabah extends BaseController
{
    protected $nasabahModel;
    protected $antrianModel;
    protected $nasabah_id;

    public function __construct()
    {
        
        $this->nasabahModel = new NasabahModel();
        $this->antrianModel = new AntrianModel();
    }
    
    public function index(): string
    {
        return view('nasabah/index');
    }

    public function add()
    {
        $this->nasabahModel->save([
            'nama' => $this->request->getVar('custName'),
            'no_telepon'  => $this->request->getVar('phoneNo'),
        ]);
        $this->nasabah_id = $this->nasabahModel->getInsertID();
        session()->setFlashdata('id', $this->nasabah_id);
        return view('nasabah/pilih-antrian');
    }

    public function antrian()
    {
        $this->nasabah_id = session()->getFlashdata('id');
        if($this->request->getVar('teller')) {
            $petugas_id = 1;
        } else {
            $petugas_id = 2;
        }
        $this->antrianModel->save([
            'nasabah_id' => $this->nasabah_id,
            'petugas_id'  => $petugas_id,
        ]);

        $antrian_id = $this->antrianModel->getInsertID();

        $dompdf = new Dompdf();

        $html = '
        <div style="display:flex; justify-content:center; align-items:center;">
            <div>
                <h1>Nomor Antrian<h1>
                <h2>' . $antrian_id . '<h2>
            </div>
        </div>
        ';

        $dompdf->loadHtml($html);

        // $customPaper = array(0,0,500,500);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        ob_end_clean();
        $dompdf->stream('document', array('Attachment' => 0));

        return redirect()->to('/nasabah');
    }
}