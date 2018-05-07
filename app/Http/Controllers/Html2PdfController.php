<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf as PDF;
class Html2PdfController 
{
    //
    public $resolucion;
    
    public function __construct(){
        $this->resolucion='N° Resolucion';
    }
    
    public function create(){
            $pdf= new PDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial',null,25);
            $pdf->Image(__DIR__.'/movistar.png',140,20,50);
            $pdf->SetXY(20,23.5);
            $pdf->Cell(20,10,'FIJA',0,0,'L');
            $y = $pdf->GetY();

            $pdf->SetXY(20,$y+20);
            $pdf->SetFont('Arial','BI',10);
            $pdf->Cell(50,5,utf8_decode($this->resolucion),0,0,'L');
            $pdf->ln(4);
            $y = $pdf->GetY();
            $pdf->SetXY(20,$y+2);
            $pdf->SetFont('Arial',null,10);
            $pdf->Cell(50,5,utf8_decode('Fecha respuesta'),0,0,'L');
            $pdf->Output('doc.pdf','D');

            //$route = url('/image/config/movistar.png');
            

            

    }
    
    
}

