@extends('layouts.main')
    @section('title','Crear nueva bandeja')
    
   @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu')
    @endsection
    
    @section('container')
       
         @include('layouts.partial.bandejas.create')
       
    @endsection
    
    
    
    