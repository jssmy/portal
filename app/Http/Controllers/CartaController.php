<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ReclamoSimple;
use App\Carta;
use PDF;
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

class CartaController extends Controller
{
    //
    
    public function index(){
        
        
        return view('carta.index');
    }
    
    
    public function store(Request $request,$id_reclamo){
        $data= $request->all();
        //dd($data);
        $reclamo = ReclamoSimple::find($id_reclamo);
        //dd($data);
        $carta= Carta::create([
            'fecha_respuesta'=>$data['fecha_respuesta'],
            'reclamante'=>$reclamo->reclamante,
            'direccion'=>$reclamo->direccion_postal,
            'locacion'=>$reclamo->distrito.' ,'.$reclamo->departamento,
            'telefono'=>$reclamo->telefono,
            'numero_reclamo'=>$reclamo->reclamo_numero,
            'saludo'=>$data['saludo'],
            'parrafo1'=>$data['txt-parrafo1'],
            'parrafo2'=>$data['txt-parrafo2'],
            'parrafo3'=>$data['txt-parrafo3'],
            'resultado'=>$data['resultado'],
            'masivo'=>false,
            'descargado'=>false,
            'resultado_id'=>$data['resultado']
            ]);
            
            PDF::setOptions(['debugCss' => true]);
            $pdf = PDF::loadView('carta.create',['carta'=>$carta]);
            $reclamo->carta_id=$carta->id;
            
            $reclamo->save();
            return $pdf->download( md5($id_reclamo) .'.pdf');
            
    }
    
    function generate_pdf_fija($carta,$name){
        
        //PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'debugCss' => true]);
        $pdf = PDF::loadView('carta.create',['carta'=>$carta]);
        //$pdf::setOptions(['debugCss' => true]);
        //$pdf->set_base_path(URL::to('/'));
        return $pdf->stream();
    }
    
    
    
    public function show(){
        
        return redirect()->route('reclamos.index');
        //return view('carta.show');
    }
    
}
