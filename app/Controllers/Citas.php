<?php

namespace App\Controllers;
use App\Models\ModeloMascota;

class Citas extends BaseController
{
    public function index()
    {
        echo view('navbar').view('citas/index');
    }

    public function lista()
    {
        echo view('navbar').view('citas/lista');
    }

    public function programar()
    {
        echo view('navbar').view('citas/programar');
    }

    public function editar()
    {
        echo view('navbar').view('citas/editar');
    }
}