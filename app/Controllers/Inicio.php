<?php

namespace App\Controllers;
use App\Models\ModeloMascota;

class Inicio extends BaseController
{
    public function index()
    {
        return view('inicio');
    }

    public function sala()
    {
        echo view('navbar').view('Administracion/dashboard');
    }

    public function iniciodesesion()
    {
        echo view('navbar').view('inicio_de_sesion');
    }

    public function registro()
    {
        echo view('navbar').view('registro');
    }

    public function registrobd()
    {
        $MascotaM = new ModeloMascota();

        $data = [
            'nombre'  => $this->request->getPost('pet_nombre'),
            'especie'  => $this->request->getPost('pet_especie'),
            'raza'  => $this->request->getPost('pet_raza'),
            'fecha_nacimiento'  => $this->request->getPost('pet_date'),
            'sexo'  => $this->request->getPost('pet_sexo'),
            'color'  => $this->request->getPost('pet_color'),
            'peso'  => $this->request->getPost('pet_peso'),

            'nombre_dueno'  => $this->request->getPost('nombre'),
            'telefono_dueno'  => $this->request->getPost('telefono'),
            'email_dueno'  => $this->request->getPost('correo')
        ];

         if(isset($data))
        {
            $MascotaM->insert($data);
            $a="dashboard";
            
            echo '<script>
            alert("Regsitro realizado correctamente, continúe a la sala de inicio");
            window.location.href = "' . $a . '";
            </script>';
        }else{
            echo "alert(No se pudo realizar el registro);,window.location.href='registro'";
        }
        
    }
}
