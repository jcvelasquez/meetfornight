<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;

class Rol extends Model
{
    protected $table = 'roles';
    protected $fillable = ['nombre_rol','descripcion_rol'];
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsToMany('App\Usuario')->withTimestamps();
    }

}
