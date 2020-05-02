<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CriterioValoracion extends Model
{
    //

    public $table = "criterios_valoracion";

    protected $fillable = ['nombre_criterio','estado_criterio'];

    public $timestamps = false;

}
