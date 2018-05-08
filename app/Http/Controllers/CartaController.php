<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ReclamoSimple;
use App\Carta;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Html2PdfController  as PDF;
class CartaController extends Controller
{
    // 
    
    public function index(){
        
        
        return view('carta.index');
    }
    
    
    public function store(Request $request,$id_reclamo){
        $data= $request->all();
        $reclamo = ReclamoSimple::find($id_reclamo);

        $file_name= $reclamo->numero_reclamo.'-'.time().'.pdf';
        $file_dir= __DIR__.'/../../../public/pdf/'.Auth::user()->username;

        if(!file_exists($file_dir)){
            mkdir($file_dir, 0777, true);
        }
        //dd(Auth::user()->id);
        $carta= Carta::create([
            'resolucion'=>'JSS-PHP'.$reclamo->numero_reclamo.'-APP',
            'fecha_respuesta'=>$data['fecha_respuesta'],
            'reclamante'=>$reclamo->reclamante,
            'direccion'=>$reclamo->direccion_postal,
            'locacion'=>$reclamo->distrito.' ,'.$reclamo->departamento,
            'telefono'=>$reclamo->telefono,
            'numero_reclamo'=>$reclamo->numero_reclamo,
            'inicio'=>$data['saludo'],
            'parrafo1'=>(isset($data['txt-parrafo1'])?$data['txt-parrafo1']:null),
            'parrafo2'=>(isset($data['txt-parrafo1'])?$data['txt-parrafo2']:null),
            'parrafo3'=>(isset($data['txt-parrafo1'])?$data['txt-parrafo3']:null),
            'fin'=>$data['resultado'],
            'descargado'=>false,
            'resultado_id'=>$data['resultado_'],
            'user_id'=>Auth::user()->id,
            'file'=>$file_name,
            ]);
           
            $pdf= new PDF();  
            $pdf->resolucion=$carta->resolucion;
            $pdf->fecha_respuesta=$carta->fecha_respuesta;
            $pdf->reclamante=$carta->reclamante;
            $pdf->direccion=$carta->direccion;
            $pdf->locacion=$carta->locacion;
            $pdf->num_servicio=$carta->mumero_reclamo;
            $pdf->num_reclamo=$carta->mumero_reclamo;
            $pdf->inicio=$carta->inicio;
            $pdf->parrafo1=$carta->parrafo1;
            $pdf->parrafo2=$carta->parrafo2;
            $pdf->parrafo3=$carta->parrafo3;
            $pdf->fin=$carta->fin;
            $pdf->file_dir=$file_dir;
            $pdf->file_name=$file_name;

            $pdf->create();
            $reclamo->pdf=true;
            return redirect()->route('reclamos.index');
            
    }
    
  
    
    
    public function show(){
        return redirect()->route('reclamos.index');
        
    }
    
}
