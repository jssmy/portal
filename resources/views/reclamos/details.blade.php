@extends('layouts.main')
    @section('title','Detalle'.$reclamo->reclamo_numero)
    @section('header-message')
        <h2 style="margin-top:0;">Detalles del reclamo {{ $reclamo->reclamo_numero }}</h2> 
    @endsection
    
   @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu')
    @endsection
    
    @section('container')
       @include('layouts.partial.reclamos.details')
    @endsection
    
    
    
    