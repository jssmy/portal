<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ReclamoSimple;
use App\Carta;
use App\Http\Controllers\Html2PdfController  as PDF;
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
            'parrafo1'=>(isset($data['txt-parrafo1'])?$data['txt-parrafo1']:null),
            'parrafo2'=>(isset($data['txt-parrafo1'])?$data['txt-parrafo2']:null),
            'parrafo3'=>(isset($data['txt-parrafo1'])?$data['txt-parrafo3']:null),
            'resultado'=>$data['resultado'],
            'masivo'=>false,
            'descargado'=>false,
            'resultado_id'=>$data['resultado']
            ]);
            
            /*PDF::setOptions(['debugCss' => true]);
            $pdf = PDF::loadView('carta.create',['carta'=>$carta]);
            $reclamo->carta_id=$carta->id;*/
            
            //$reclamo->save();
            $carta= new PDF();
            $carta->resolucion='NUevo';
            $carta->create();
            return redirect()->route('reclamos.index');
            
    }
    
    function generate_pdf_fija($carta,$name){
        $pdf = PDF::loadView('carta.create',['carta'=>$carta]);
        return $pdf->stream();
    }
    
    
    
    public function show(){
        return redirect()->route('reclamos.index');
        
    }
    
}
