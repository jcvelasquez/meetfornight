<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //
    public $table = "categorias";

    protected $fillable = ['nombre_categoria','estado_categoria'];

    public $timestamps = false;
    

}
