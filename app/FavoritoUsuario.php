<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoritoUsuario extends Model
{
    //

    public $table = "favorito_usuario";

    protected $fillable = ['idusuario','idprofesional'];

}
