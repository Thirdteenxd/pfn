<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloMascota extends Model
{
    protected $table      = 'mascotas';
    protected $primaryKey = 'id_mascota';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //or object
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_mascota',
                                'nombre',
                                'especie',
                                'raza',
                                'fecha_nacimiento',
                                'sexo',
                                'color',
                                'peso',
                                'nombre_dueno',
                                'telefono_dueno',
                                'email_dueno'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = 'fecha_actualiza';
    protected $deletedField  = 'fecha_elimina';
}