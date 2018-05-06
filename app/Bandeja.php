<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bandeja extends Model
{
    //
    protected $table='bandejas';
    protected $guarded=['id'];
    public $timestamps=false;
    
}
