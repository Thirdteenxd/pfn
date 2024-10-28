<?php

namespace App\Controllers;
use App\Models\ModeloMascota;

class HistorialesMedicos extends BaseController
{
    public function index()
    {
        echo view('navbar').view('Historiales_Medicos/index');
    }

    public function lista()
    {
        echo view('navbar').view('lista');
    }

    public function crear()
    {
        echo view('navbar').view('crear');
    }

    public function ver()
    {
        echo view('navbar').view('ver');
    }
}