<?php

namespace App\Controllers;

use App\Models\KecamatanModel;
use App\Models\DesaModel;
use App\Models\RadiusModel;

class Home extends BaseController
{
    protected $kecamatanModel;
    protected $desaModel;
    protected $radiusModel;

    public function __construct()
    {
        $this->kecamatanModel = new KecamatanModel();
        $this->desaModel = new desaModel();
        $this->radiusModel = new RadiusModel();
    }
    public function index()
    {

        $kecamatan = $this->kecamatanModel->findAll();

        $data = [
            'title' => 'Dashboard',
            'kecamatan' => $kecamatan
        ];



        echo view('partial/header', $data);
        echo view('welcome_message');
        echo view('partial/footer');
    }
    public function gugatan()
    {

        $kecamatan = $this->kecamatanModel->findAll();

        $data = [
            'title' => 'Dashboard | Gugatan',
            'kecamatan' => $kecamatan
        ];



        echo view('partial/header', $data);
        echo view('v-gugatan');
        echo view('partial/footer');
    }
    public function action()
    {
        $pilihan1  = $this->request->getVar('pilihan1');
        // $pilihan2  = $this->request->getVar('pilihan2');

        $result = $this->radiusModel->where('radius', $pilihan1)->findAll();

        echo json_encode($result);
    }
}
