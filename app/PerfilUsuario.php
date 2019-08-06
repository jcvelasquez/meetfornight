<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    public $table = "perfil_usuario";

    protected $fillable = [
        'nombre',
        'apodo',
        'email',
        'clave',
        'fecha_nacimiento',
        'sexo',
        'nacionalidad',
        'idioma',
        'estado'
    ];

}
