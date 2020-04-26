<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioExtras extends Model
{
    //

    protected $table = 'usuarios_extras';

    protected $primaryKey = 'idusuario';

    //protected $fillable = ['nombre_rol','descripcion_rol'];

    public $timestamps = false;

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }


}
