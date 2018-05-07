<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Codedge\Fpdf\Fpdf\Fpdf as PDF;
//use App\Http\Controller\PDF;

class Html2PdfController extends Controller 
{
    //
  
    
    public function __construct(){
        //$this->html=;
    }
    
    public function index(){
            $pdf= new PDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial',null,25);
            $pdf->Image(__DIR__.'/movistar.png',140,20,50);
            $pdf->SetXY(20,23.5);
            $pdf->Cell(20,10,'FIJA',0,0,'L');
            $y = $pdf->GetY();
            $pdf->SetXY(20,$y+20);
            
            $pdf->SetFont('Arial','BI',10);
            $pdf->Cell(50,5,utf8_decode('N° Resolucion'),0,0,'L');
            
            $pdf->SetFont('Arial',null,10);
            $pdf->Cell(50,5,utf8_decode('N° Resolucion'),0,0,'L');

            $pdf->Output('doc.pdf','I');

            //$route = url('/image/config/movistar.png');
            

            

    }
    
    
}

