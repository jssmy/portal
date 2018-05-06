<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ModeloCarta;
use App\Resultado;
use App\ReclamoSimple;
use Validator;
use App\Bandeja;
use Illuminate\Support\Facades\Auth;
class ModeloCartaController extends Controller
{
    //
    /**
        retorna una lista de cartas cradas
    **/
    
    protected function validator_store(array $data)
    {
        return Validator::make($data, [
            'resultado' => 'required|min:1',
            'nombre' => 'required|max:255',
            'txt-inicio' => 'required',
            'txt-respuesta'=>'required',
            'cant_parrafo'=>'required'
        ]);
    }
    
    public function index(){
        
         $modelos = ModeloCarta::paginate(15);
          foreach($modelos as $modelo){
              $modelo->propietario;
          }
          
          $bandejas = Bandeja::where('user_id',Auth::user()->id)->paginate(15);
          
          //dd($modelos);
         //dd(Auth::user());
         return view('modelo-carta.index')
         ->with('modelos',$modelos)
         ->with('bandejas',$bandejas);   
        
    }
    
    public function create(){
        $resultados = Resultado::all();
        return view('modelo-carta.create')
        ->with('resultados',$resultados);
    }
    
    public function edit($numero){
        
        $modelo= ModeloCarta::find($numero);
        $bandejas = Bandeja::where('user_id',Auth::user()->id)->get();
        $modelo->resultado_;
        return view('modelo-carta.edit')
        ->with('modelo',$modelo)
        ->with('bandejas',$bandejas);
    }
    
    public function show($numero){
        $modelo= ModeloCarta::find($numero);
        return json_encode($modelo);
        
    }
    
    public function add_carta($id){
        
        
    }
    
    public function update(Request $request){}
    
    public function store(Request $request){
        $data = $request->all();
        //dd($data);
        $this->validator_store($data);
        $modelo= ModeloCarta::create([
            'nombre'=>$data['nombre'],
            'saludo'=>$data['txt-inicio'],
            'parrafo1'=>$data['txt-parrafo1'],
            'parrafo2'=>$data['txt-parrafo2'],
            'parrafo3'=>$data['txt-parrafo3'],
            'resultado'=>$data['txt-respuesta'],
            'cant_parrafo'=>$data['cant_parrafo'],
            'user_id'=>Auth::user()->id,
            'resultado_id'=>$data['resultado']
            ]);
        return redirect()->route('modelo.index');
        
    }
    
    
    public function api_modelos_resultado($resultado)
    {
        
        
    }
    
    public function api_modelo($id)
    {
        
    }
    
    
    public function api_modelo_reclamo($id_modelo,$cod_reclamo){
        $modelo = ModeloCarta::find($id_modelo);
        $reclamo= ReclamoSimple::where('reclamo_numero',$cod_reclamo)->first();
        $search=['|_fecha_reclamo_|','|_n_servicio_|','|_cod_reclamo_|','|_reclamante_|'];
        $replace=[$reclamo->fecha_reclamo,$reclamo->reclamo_numero,$reclamo->reclamo_numero,$reclamo->reclamante];
        $modelo->saludo=str_replace($search,$replace,$modelo->saludo);
        $modelo->parrafo1=str_replace($search,$replace,$modelo->parrafo1);
        $modelo->parrafo2=str_replace($search,$replace,$modelo->parrafo2);        
        $modelo->parrafo3=str_replace($search,$replace,$modelo->parrafo3);        
        $modelo->resultado=str_replace($search,$replace,$modelo->resultado);        
        return json_encode($modelo);
    }
    
    public function api_modelo_resultado($id_resultado){
        $modelos = ModeloCarta::where('resultado_id',$id_resultado)->where('user_id',Auth::user()->id)->get();
        return json_encode($modelos);
    }
    /*
    set_message('calendar-date',' |_fecha_reclamo_| ');
                set_message('service','|_n_servicio_|');
                set_message('cod-reclamo',' |_cod_reclamo_| ');
                set_message('reclamante',' |_reclamante_| ');
    
    **/
    
}

