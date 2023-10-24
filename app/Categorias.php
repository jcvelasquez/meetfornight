<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //
    public $table = "categorias";

    protected $fillable = ['nombre_categoria','icono_categoria','estado_categoria'];

    public $timestamps = false;


    public function categoriasprofesional()
    {
        //return $this->hasMany('App\CategoriasProfesional','categorias_profesional','id','idcategoria');
        return $this->hasMany('App\CategoriasProfesional','categorias_profesional','id','idcategoria');
    }


}
