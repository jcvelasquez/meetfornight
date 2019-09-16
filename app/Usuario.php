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
        'idrol','apodo', 'nombre','email','password','fecha_nacimiento','sexo','nacionalidad','idioma','celular','estado'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


   
    public function extras(){
        return $this->hasOne('App\UsuarioExtras');
    }

    public function tarifas(){
        return $this->hasMany('App\TarifaProfesional');
    }


    //DEL USER ORIGINAL

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no está autorizada.');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }

/*
    public function rol()
    {
        return $this->belongsToMany('App\Rol')->withTimestamps();
    }*/

    public function hasRole($rol)
    {
        if ($this->rol()->where('nombre_rol', $rol)->first()) {
            return true;
        }
        return false;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }


    

}
