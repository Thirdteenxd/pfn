<?php

namespace App\Controllers;
use App\Models\ModeloMascota;


class Mascotas extends BaseController
{
    public function index()
    {
        echo view('navbar').view('mascotas/index');
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
        $MascotaM = new ModeloMascota();
        $Q = $MascotaM->findAll();

        $data = ['query'=>$Q];
        echo view('navbar').view('mascotas/ver', $data);
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
            $a="/pfn/public/mascotas/";
            
            echo '<script>
            alert("Regsitro realizado correctamente");
            window.location.href = "' . $a . '";
            </script>';
        }else{
            echo "alert(No se pudo realizar el registro);,window.location.href='registro'";
        }
        
    }

    public function ediciondb()
    {
       # print_r($_POST);

        $what = $_POST['que'];
        $id = $_POST['id_mascota'];

        $data = [
            'id_mascota'  => $this->request->getPost('id_mascota'),
            $what  => $this->request->getPost('new')
        ];

        $MascotaM = new ModeloMascota();

        if(isset($_POST)){
            $MascotaM->update($id, $data);
            echo '<script>
            alert("Edición realizada correctamente");
            window.location.href = "/pfn/public/mascotas/editar";
            </script>';
        }else{
            echo "alert(No se pudo realizar la edición);,window.location.href=''";
        }



    }
}