<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloCarta extends Model
{
    //
    protected $table='modelos_carta';
    protected $guarded=['id'];
    
    public function propietario(){
        return $this->belongsTo(User::class,'user_id');
    }
    
    public function resultado_(){
        return $this->belongsTo(Resultado::class,'resultado_id');
    }
    
    
}
