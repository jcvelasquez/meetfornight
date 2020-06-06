<?php

namespace App;

use App\Notifications\ReenviarVerificacion;
use App\CategoriasProfesional;
use App\Rol;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Usuario as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Authenticatable implements MustVerifyEmail
{
    //
    use Notifiable;
    
    public $table = "usuarios";

    protected $fillable =[
        'idusuario','idrol','apodo', 'nombre','email','password','fecha_nacimiento','sexo','nacionalidad','idioma','estado'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //protected $appends = ['es_booster','uid','timestamp','fecha','hora'];
    protected $appends = ['es_booster'];

    public function sendEmailVerificationNotification()
    {
        $this->notify(new ReenviarVerificacion);
    }

    public function extras(){
        return $this->hasOne('App\UsuarioExtras', 'idusuario', 'id');
    }

    public function states(){
        return $this->hasMany('App\States', 'country_id', 'idcountry');
    }

    public function cities(){
        return $this->hasMany('App\Cities', 'state_id', 'idstate');
    }

    public function tarifas(){
        return $this->hasMany('App\TarifaProfesional', 'idusuario', 'id');
    }

    public function reservas(){
        return $this->hasMany('App\ReservasProfesional', 'idprofesional', 'id');
    }

    public function categorias(){
        return $this->hasMany('App\CategoriasProfesional', 'idprofesional', 'id')->join('categorias', 'categorias_profesional.idcategoria','=', 'categorias.id');
        //return $this->hasMany('App\CategoriasProfesional', 'idprofesional', 'id');
    }

    public function categoriashome(){

        CategoriasProfesional::$withoutAppends = true;
        
        return $this->hasMany('App\CategoriasProfesional', 'idprofesional', 'id')->join('categorias', 'categorias_profesional.idcategoria','=', 'categorias.id');
    }

    public function seguridad(){
        return $this->hasMany('App\SeguridadUsuario', 'idusuario', 'id');
    }

    public function disponibilidades()
    {
        return $this->hasMany('App\DisponibilidadProfesional', 'idusuario', 'id');
    }

    public function fotos()
    {
        return $this->hasMany('App\FotoProfesional', 'idusuario', 'id');
    }

    public function rol()
    {
        return $this->belongsTo('App\Rol', 'idrol', 'id');
    }

    public function getTimestampAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->getTimestamp();  
    }

    public function getEsBoosterAttribute()
    {
        return 0;
    }

    public function getFechaAttribute()
    {
        return (new Carbon($this->attributes['created_at']))->format('d/m/Y');
    }

    public function getHoraAttribute()
    {
        return (new Carbon($this->attributes['created_at']))->format('H:i');
    }


    public function getFechaNacimiento(){

    }

    public function getUidAttribute()
    {
        return uniqid().Carbon::parse($this->attributes['created_at'])->getTimestamp();  
    }

    public function getFechaNacimientoAttribute( $value ) {
        return (new Carbon($value))->format('d/m/Y');
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
