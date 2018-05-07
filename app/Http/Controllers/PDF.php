<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf;
class PDF extends Fpdf 
{
    //
    
    public $dir_movistar;
    public function __construct(){
        //$this->html=;

        $this->dir_movistar=  __DIR__.'/movistar.png';
    }
    
    function Header()
    {
        //$url=URL::to('/image/config/movistar.png');
        //$this->Image($this->dir_movistar,100,5,50);
        $this->setSourceFile($this->dir_movistar);
        //$this->Image($this->dir_movistar);

    }


    function Footer(){
  

    }

    public function url(){

        return $this->dir_movistar;
    }

    
}

