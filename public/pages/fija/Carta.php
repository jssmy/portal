<?php

namespace Pages\Fija;

class Carta{
    
    public $id;
    public $tipo;
    public $resolucion;
    public $fecha_respuesta;
    public $reclamante;
    public $direccion;
    public $locacion;
    public $telefono;
    
    public $inicio;
    public $parrafa1;
    public $parrafo2;
    public $parrafa3;
    public $resultado;
    public $pie_pagina;
    
    public function html(){
        $text='<page style="font-size: 16px;" >';
        //table heade
       
        //  end table head
        $text.='</page>';
        return $text;
    }
}



?>
