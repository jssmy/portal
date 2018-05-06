<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trazabilidad;
class ApiController extends ApiBaseController
{
    //
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Trazabilidad::all();
        return $this->sendResponse($posts->toArray(), 'Posts retrieved successfully.');
    }
    
    
     
    /**
     * insertAsignacionIndividual created resource in store
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertAsignacionIndividual(Request $request){
        
        dd($request);
        
        foreach($data  as $key => $value)
        {
            
            
        }
        
        
        return $this->sendResponse($data->toArray(), 'Posts retrieved successfully.');
        //return $this->sendMessage('successfully agregated');
    }
    
    
    

    
    
}
