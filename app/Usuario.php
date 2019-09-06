<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    //
    use Notifiable;
    
    public $table = "usuarios";

    protected $fillable =[
        'idrol','nombre','email','clave','fecha_nacimiento','sexo','nacionalidad','idioma','celular','estado'
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
