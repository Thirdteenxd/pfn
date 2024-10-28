<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloCita extends Model
{
    protected $table      = 'citas';
    protected $primaryKey = 'id_cita';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //or object
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_cita',
                                'id_mascota',
                                'fecha_hora',
                                'motivo',
                                'veterinario',
                                'estado',
                                'notas'];
}