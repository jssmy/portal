@extends('layouts.main')
    @section('title','Detalle de bandeja')
    
    
    @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu')
    @endsection
    
    @section('container')
       
         @include('layouts.partial.bandejas.details')
       
    @endsection
    
    
    
    