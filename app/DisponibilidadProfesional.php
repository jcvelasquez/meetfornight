<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisponibilidadProfesional extends Model
{
    //
    public $table = "disponibilidad_profesional";
 
    protected $fillable = ['idusuario','desde', 'hasta','dia'];

    public $timestamps = false;

}
