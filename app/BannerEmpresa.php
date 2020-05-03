<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerEmpresa extends Model
{
    //

    protected $table = 'banner_empresa';

    protected $fillable = ['idempresa','url_foto'];

    public $timestamps = true;

    

    
}
