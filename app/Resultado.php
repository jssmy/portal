<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    //
    public $timestamps= false;
    protected $table='resultados';
    protected $guarded=['id'];
    
    public function modelos(){
        return $this->hasMany(ModeloCarta::class,'resultado_id','id');
    }
    
    
}
