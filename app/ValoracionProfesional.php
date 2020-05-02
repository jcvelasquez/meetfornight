<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValoracionProfesional extends Model
{
    //
    public $table = "valoracion_profesional";

    protected $fillable = ['idprofesional','idcriterio', 'idreserva','puntuacion'];
    

}
