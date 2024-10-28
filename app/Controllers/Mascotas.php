<?php

namespace App\Controllers;
use App\Models\ModeloMascota;

class Mascotas extends BaseController
{
    public function index()
    {
        echo view('navbar').view('mascotas/index');
    }

    public function lista()
    {
        echo view('navbar').view('mascotas/lista');
    }

    public function crear()
    {
        echo view('navbar').view('mascotas/crear');
    }

    public function editar()
    {
        echo view('navbar').view('mascotas/editar');
    }

    public function ver()
    {
        echo view('navbar').view('mascotas/ver');
    }
}