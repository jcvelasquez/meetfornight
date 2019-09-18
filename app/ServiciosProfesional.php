<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiciosProfesional extends Model
{
    //

    protected $table = 'servicios_profesional';
    protected $fillable = ['nombre_servicio','categoria_servicio','estado_servicio'];
    public $timestamps = false;

}
