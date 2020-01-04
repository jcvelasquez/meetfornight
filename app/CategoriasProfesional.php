<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CategoriasProfesional extends Model
{
    //
    public $table = "categorias_profesional";

    public static $withoutAppends = false;

    protected $fillable = ['idprofesional','idcategoria'];

    protected $appends = ['es_marcado', 'es_booster','uid','timestamp'];

    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idprofesional', 'id');
    }

    
    protected function getArrayableAppends()
    {
        if(self::$withoutAppends){
            return [];
        }
        return parent::getArrayableAppends();
    }


    public function getEsMarcadoAttribute()
    {
        return $this->attributes['es_marcado'];
    }

    public function setEsMarcadoAttribute($value)
    {
        $this->attributes['es_marcado'] = $value;
    }

    public function getEsBoosterAttribute()
    {
        return 0;
    }

    public function getTimestampAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->getTimestamp();  
    }

    public function setEsBoosterAttribute($value)
    {
        $this->attributes['es_marcado'] = 0;
    }

    public function getUidAttribute()
    {
        return uniqid().Carbon::parse($this->attributes['created_at'])->getTimestamp();  
    }
    
    

}
