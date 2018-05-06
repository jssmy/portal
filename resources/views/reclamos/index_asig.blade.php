@extends('layouts.main')
    @section('title','Asignar reclamos')
    
    
    @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu')
    @endsection
    
    @section('container')
       
         @include('layouts.partial.reclamos.index_asig')
       
    @endsection
    
    
    
    