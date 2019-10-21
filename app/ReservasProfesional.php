<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservasProfesional extends Model
{
    //

    public $table = "reservas_profesional";

    protected $fillable = [
        'idprofesional',
        'idusuario',
        'desde',
        'hasta',
        'servicios',
        'direccion',
        'extras',
        'total',
        'es_aceptada'
    ];

    protected $casts = [
        'servicios' => 'array'
    ];

}
