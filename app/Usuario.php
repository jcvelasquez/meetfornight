<?php

namespace App;

use App\Rol;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Usuario as Authenticatable;

class Usuario extends Authenticatable
{
    //
    use Notifiable;
    
    public $table = "usuarios";

    protected $fillable =[
        'idrol','nombre','email','password','fecha_nacimiento','sexo','nacionalidad','idioma','celular','estado'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }

    public function extras(){
        return $this->hasOne('App\UsuarioExtras');
    }

    

}
