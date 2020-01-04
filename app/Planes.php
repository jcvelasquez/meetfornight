<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    //

    protected $table = 'planes';

    protected $fillable = ['nombre_plan','precio_plan','periodo_plan','tipo_usuario','estado_plan'];

    protected $appends = ['nombre','cifra', 'decimales','small'];

    public $timestamps = false;

    public function getCifraAttribute()
    {

        $cifras = explode('.',$this->attributes['precio_plan']);

        return $cifras[0];
    }
    
    public function getDecimalesAttribute()
    {

        $cifras = explode('.',$this->attributes['precio_plan']);
        
        if( count($cifras) > 1 )  
        
            return $cifras[1];

        else

            return "00";

    }

    public function getSmallAttribute()
    {

        $small = explode(' ',$this->attributes['nombre_plan']);

        if( count($small) > 1 )  
        
            return $small[1];

        else

            return "";
            
    }


    public function getNombreAttribute()
    {

        $small = explode(' ',$this->attributes['nombre_plan']);

        if( count($small) > 1 )  
        
            return $small[0];

        else

        return $small[0];
            
    }


}
