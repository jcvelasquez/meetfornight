<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use App\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PerfilUsuario extends Authenticatable
{
    public $table = "perfil_usuario";

    use Notifiable;

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

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function authorizeRoles($roles)
    {
        abort_unless($this->hasAnyRole($roles), 401);
        return true;
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

    public function hasRole($role)
    {
        if ($this->roles()->where('nombre_rol', $role)->first()) {
            return true;
        }
        return false;
    }

}
