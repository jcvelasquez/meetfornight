<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;
use App\UsuarioExtras;

class SeguridadUsuario extends Model
{
    //

    public $table = "seguridad_usuario";

    protected $fillable = ['url_foto'];

    public function extras()
    {
        return $this->join('usuarios_extras', 'usuarios_extras.idusuario','=', 'idusuario');
    }



}
