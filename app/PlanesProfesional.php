<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanesProfesional extends Model
{
    //

    protected $table = 'planes_profesional';

    protected $fillable = ['idprofesional','idplan','meses_suscripcion','inicio_suscripcion','estado_suscripcion'];

    public $timestamps = true;

}
