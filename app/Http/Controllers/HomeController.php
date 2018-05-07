<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bandeja;
use App\Resultado;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function board(){
        $bandejas = Bandeja::where('user_id',Auth::user()->id)->get();
        $resultados=Resultado::all();
        return view('theme.board')
        ->with('bandejas',$bandejas)
        ->with('resultados',$resultados);
    }
    
    
    public function asig(){
        $assigmnets=    Trazabilidad::paginate(15);
        return view('asig')->with('assignments',$assigmnets);
    }
}
