<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Http\Requests;
use App\ReclamoSimple;
use Illuminate\Support\Facades\Auth;
use App\ModeloCarta;
use App\Resultado;
use App\Bandeja;
class ReclamoSimpleController extends Controller
{
    //
    
    public function index()
    {
        
        
        $reclamos = ReclamoSimple::where('pdf',false)->paginate(15);
        $resultados = Resultado::all();
        foreach($reclamos as $reclamo)
        {
            $hoy= date("y-m-d");
            $hoy= new DateTime($hoy);
            $fec_ven= new DateTime($reclamo->fecha_vencimiento);
            $fec_limit = date_diff($fec_ven,$hoy);
            
            $reclamo->label=($fec_limit->invert? 'default': 'danger');
            if($fec_limit->invert){
                if($fec_limit->days<=3)
                $reclamo->label='warning';
            }
            $reclamo->limite=$fec_limit->days;   
        }
        $bandejas = Bandeja::where('user_id',Auth::user()->id)->get();
        //dd($reclamos);
        return view('reclamos.index')
        ->with('reclamos',$reclamos)
        ->with('bandejas',$bandejas)
        ->with('resultados',$resultados);
    }
    
    public function make_letter($numero)
    {
        //date_default_timezone_set('America/Lima');
        setlocale(LC_ALL,'es_E');
        $reclamo = ReclamoSimple::where('numero_reclamo',$numero)->first();
        $dias = array("Domingo",
        "Lunes",
        "Martes",
        "Miercoles",
        "Jueves",
        "Viernes",
        "Sábado");
        $meses = array("Enero",
        "Febrero",
        "Marzo","Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre");
        $reclamo->respuesta= $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        $modelos=\DB::table('modelos_cartas')->where('user_id',Auth::user()->id)->get();

        //dd($modelos);
        $resultados=Resultado::all();
        foreach ($resultados as $resultado) {
            $resultado->cant_modelos=$resultado->modelos->count();
        }
        //dd($resultados);
        return view('reclamos.create')
        ->with('reclamo',$reclamo)
        ->with('modelos',$modelos)
        ->with('resultados',$resultados)
        ->with('disabled_t','oks')
        ->with('show_s','oks')
        ->with('show_obs','oks');

    }
    
    public function convert_pdf(){
        
        
    }
    
    
    
    public function details($reclamo)
    {
            $reclamo =  ReclamoSimple::where('numero_reclamo',$reclamo)
            ->first();    
            $bandejas = Bandeja::where('user_id',Auth::user()->id)
            ->get();
            $resultados = Resultado::all();
            return view('reclamos.details')
            ->with('reclamo',$reclamo)
            ->with('bandejas',$bandejas)
            ->with('resultados',$resultados);
            
    }
    
    
    public function reclamos_asig(){
        
        $reclamos = ReclamoSimple::paginate(15);
        return view('reclamos.index_asig')
        ->with('reclamos',$reclamos);
    }
    
    
    
}
