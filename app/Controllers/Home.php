<?php

namespace App\Controllers;

use App\Models\IdentitasDesaModel;
use App\Models\PemerintahDesaModel;
use App\Models\BeritaDesaModel;

class Home extends BaseController
{
    protected $identitasDesaModel;
    protected $pemerintahanDesaModel;
    protected $beritaDesaModel;

    public function __construct()
    {
        $this->identitasDesaModel = new IdentitasDesaModel();
        $this->pemerintahanDesaModel = new PemerintahDesaModel();
        $this->beritaDesaModel = new BeritaDesaModel();
    }

    public function index()
    {
        $identitasDesa = $this->identitasDesaModel->first();
        $beritaDesaModel = $this->beritaDesaModel->findAll();

        $data = [
            'identitasDesa' => $identitasDesa,
            'beritaDesa' => $beritaDesaModel
        ];

        return view('home/index', $data);
    }

    public function pemerintah()
    {
        $identitasDesa = $this->identitasDesaModel->first();
        $pemerintahDesa = $this->pemerintahanDesaModel->first();

        $data = [
            'identitasDesa' => $identitasDesa,
            'pemerintahDesa' => $pemerintahDesa
        ];
        return view('home/pemerintah', $data);
    }

    public function infografis()
    {
        $identitasDesa = $this->identitasDesaModel->first();

        $data = [
            'identitasDesa' => $identitasDesa
        ];
        return view('home/infografis', $data);
    }

    public function idm()
    {
        $identitasDesa = $this->identitasDesaModel->first();

        $data = [
            'identitasDesa' => $identitasDesa
        ];
        return view('home/idm', $data);
    }

    public function belanja()
    {
        $identitasDesa = $this->identitasDesaModel->first();

        $data = [
            'identitasDesa' => $identitasDesa
        ];
        return view('home/belanja', $data);
    }

    public function berita()
    {
        $identitasDesa = $this->identitasDesaModel->first();

        $data = [
            'identitasDesa' => $identitasDesa
        ];
        return view('home/berita', $data);
    }

    public function ppid()
    {
        $identitasDesa = $this->identitasDesaModel->first();

        $data = [
            'identitasDesa' => $identitasDesa
        ];
        return view('home/ppid', $data);
    }
}
