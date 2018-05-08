<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf as PDF;
class Html2PdfController
{
    //
    public $resolucion;
    public $fecha_respuesta;
    public $reclamante;
    public $direccion;
    public $locacion;
    public $num_servicio;
    public $num_reclamo;
    public $inicio;
    public $parrafo1;
    public $parrafo2;
    public $parrafo3;
    public $fin;
    public $file_name;
    public $file_dir;

    public function __construct(){
        $this->resolucion='N° Resolucion';
        $this->fecha_respuesta='Fecha respuesta';
        $this->reclamante='Reclamante';
        $this->direccion='Dirección';
        $this->locacion= 'Distrito, Departamento';
        $this->num_servicio='N° Servicio';
        $this->num_reclamo='N° Reclamo';
        $this->inicio='In ancient Greece, the laurel (Laurus nobilis) was sacred to Apollo and as such sprigs of it were fashioned into a crown or wreath of honor for poets and heroes. This symbolism has been widespread ever since. "Laureate letters" in old times meant the dispatches announcing a victory; and the epithet was given, even officially (e.g. to John Skelton) by universities, to distinguished poets.[1]';
        $this->parrafo1='In ancient Greece, the laurel (Laurus nobilis) was sacred to Apollo and as such sprigs of it were fashioned into a crown or wreath of honor for poets and heroes. This symbolism has been widespread ever since. "Laureate letters" in old times meant the dispatches announcing a victory; and the epithet was given, even officially (e.g. to John Skelton) by universities, to distinguished poets.[1]';
        $this->parrafo2='In ancient Greece, the laurel (Laurus nobilis) was sacred to Apollo and as such sprigs of it were fashioned into a crown or wreath of honor for poets and heroes. This symbolism has been widespread ever since. "Laureate letters" in old times meant the dispatches announcing a victory; and the epithet was given, even officially (e.g. to John Skelton) by universities, to distinguished poets.[1]';
        $this->parrafo3='In ancient Greece, the laurel (Laurus nobilis) was sacred to Apollo and as such sprigs of it were fashioned into a crown or wreath of honor for poets and heroes. This symbolism has been widespread ever since. "Laureate letters" in old times meant the dispatches announcing a victory; and the epithet was given, even officially (e.g. to John Skelton) by universities, to distinguished poets.[1]';
        $this->fin='In ancient Greece, the laurel (Laurus nobilis) was sacred to Apollo and as such sprigs of it were fashioned into a crown or wreath of honor for poets and heroes. This symbolism has been widespread ever since. "Laureate letters" in old times meant the dispatches announcing a victory; and the epithet was given, even officially (e.g. to John Skelton) by universities, to distinguished poets.[1]';
        $this->file_name='document.pdf';


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
            $pdf->Cell(50,5,utf8_decode($this->resolucion),0,1,'L');
            $pdf->ln(4);
            $y = $pdf->GetY();
            
            $pdf->SetXY(20,$y+2);
            $pdf->SetFont('Arial',null,10);
            $pdf->Cell(50,5,utf8_decode($this->fecha_respuesta),0,0,'L');

            $pdf->ln(5);
            $pdf->SetX(20);
            $pdf->Cell(50,5,utf8_decode('Señor (a):'),0,1,'L');
            
            $pdf->SetFont('Arial','B',10);
            $pdf->SetX(20);
            $pdf->Cell(50,5,utf8_decode($this->reclamante),0,1,'L');


            $pdf->SetX(20);
            $pdf->Cell(50,5,utf8_decode($this->direccion),0,1,'L');

            $pdf->SetX(20);
            $pdf->Cell(50,5,utf8_decode($this->locacion),0,1,'L');
            $pdf->ln(5);

            $pdf->SetFont('Arial',null,10);
            $pdf->SetX(20);
            $pdf->Cell(50,5,utf8_decode('Servicio: '.$this->num_servicio),0,1,'L');

            $pdf->SetX(20);
            $pdf->Cell(50,5,utf8_decode('Servicio: '.$this->num_reclamo),0,1,'L');

            $pdf->ln(5);
            $pdf->SetX(20);
            $pdf->Cell(50,5,utf8_decode('Hola, '.$this->reclamante),0,1,'L');            
            
            $pdf->ln(5);
            $pdf->SetX(20);
            $pdf->MultiCell(170,6,utf8_decode($this->parrafo1),0,'J',0);

            $pdf->ln(5);
            $pdf->SetX(20);
            $pdf->MultiCell(170,6,utf8_decode($this->parrafo2),0,'J',0);

            $pdf->ln(5);
            $pdf->SetX(20);
            $pdf->MultiCell(170,6,utf8_decode($this->parrafo3),0,'J',0);

            $pdf->ln(5);
            $pdf->SetX(20);
            $pdf->MultiCell(170,6,utf8_decode($this->fin),0,'J',0);

            
            $pdf->Image(__DIR__.'/firma.png',80,230,30);

            $pdf->SetXY(75,245);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(50,5,utf8_decode('Michael Campbell Parodi'),0,1,'L');

            $pdf->SetX(81);
            $pdf->Cell(50,5,utf8_decode('Soluciones Fija'),0,1,'L');

            $pdf->Output($this->file_dir.$this->file_name,'F');

            
            
            // MultiCell(float w, float h, string txt [, mixed border [, string align [, boolean fill]]]) 
            



            
            

            

    }
    
    
}

