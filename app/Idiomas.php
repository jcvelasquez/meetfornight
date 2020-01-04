<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    //

    public $table = "idiomas";

    protected $fillable = ['nombre_idioma','estado_idioma'];

    public $timestamps = false;


}
