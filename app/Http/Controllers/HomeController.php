<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Trazabilidad;
use Illuminate\Support\Facades\Auth;
use App\Bandeja;
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
        return view('board')
        ->with('bandejas',$bandejas);
        
    }
    
    
    public function asig(){
        $assigmnets=    Trazabilidad::paginate(15);
        return view('asig')->with('assignments',$assigmnets);
    }
}
