<?php

namespace App\Controllers;
use App\Models\ModeloCita;

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

    public function registrodb()
    {
        $ModelC = new ModeloCita();
        $data = [
            'id_mascota' => $this->request->getPost('id_mascota'),
            'fecha_hora'=> $this->request->getPost('date'),
            'motivo'=> $this->request->getPost('motivo'),
            'veterinario'=> $this->request->getPost('veterinario'),
            'estado'=> $this->request->getPost('estado'),
            'notas'=> $this->request->getPost('notas'),
        ];

         if(isset($_SESSION)){
            $ModelC->insert($data);
            echo "si";
         }else{
            echo "no";
         }


    }
}