<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\PDF;
class Html2PdfController extends Controller 
{
    //
  
    
    public function __construct(){
        //$this->html=;
    }
    
    public function index(){
            $pdf= new PDF();
            $pdf->AddPage();
            $pdf->Output('doc.pdf','D');

            //$route = url('/image/config/movistar.png');
            

            

    }
    
    
}

