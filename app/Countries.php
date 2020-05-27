<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    //

    public $table = "countries";

    protected $fillable = ['sortname','name_country','phonecode'];

}
