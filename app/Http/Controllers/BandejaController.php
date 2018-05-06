<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bandeja;
use App\ModeloCarta;
use App\Resultado;
use App\ReclamoSimple;
use Illuminate\Support\Facades\Auth;
class BandejaController extends Controller
{
    //
    public function index(){
        $bandejas= Bandeja::where('user_id',Auth::user()->id)->paginate(15);
        return view('bandejas.index')
        ->with('bandejas',$bandejas);
        
    }
    
    public function add_modelo($id_bandeja, $id_modelo){
        
        
    }
    
    public function add_reclamo($id_bandeja,$id_reclamo)
    {
//        $bandeja = Bandeja::find($id_bandeja);
        $reclamo = ReclamoSimple::find($id_reclamo);
        $reclamo->bandeja_id= $id_bandeja;      
        $reclamo->save();
        return redirect()->route('reclamos.index');
    }
    
    public function create(){
        $resultados = Resultado::all();
        $bandejas = Bandeja::where('user_id',Auth::user()->id)->get();
        //$modelos = ModeloCarta::all();
        return view('bandejas.create')
        ->with('resultados',$resultados)
        ->with('bandejas',$bandejas);
    }
    
    public function store(Request $request){
        $data = $request->all();
        Bandeja::create([
            'nombre'=>$data['nombre'],
            'user_id'=>Auth::user()->id,
            'descripcion'=>$data['descripcion'],
            'modelo_carta_id'=>$data['modelo'],
            ]);
        
        return redirect()->route('bandeja.index');
    }
    
    public function details($id_bandeja){
        $reclamos = ReclamoSimple::where('bandeja_id',$id_bandeja)
        ->where('user_id',Auth::user()->id)->paginate(15);
        $bandeja = Bandeja::find($id_bandeja);
        $bandejas = Bandeja::all();
        return view('bandejas.details')
        ->with('bandeja',$bandeja)
        ->with('bandejas',$bandejas)
        ->with('reclamos',$reclamos);
        
    }
    
    
    
    
}
