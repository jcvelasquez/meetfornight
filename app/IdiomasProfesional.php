<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdiomasProfesional extends Model
{
    //

    public $table = "idiomas_profesional";

    protected $fillable = ['idprofesional','ididioma'];

    public $timestamps = false;

}
