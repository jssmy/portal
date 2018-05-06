@extends('layouts.main')
    @section('title','Reclamos')
    @section('header-message')
        <h2 style="margin-top:0;">Reclamos asignados</h2> 
    @endsection
    
   @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu')
    @endsection
    
    @section('container')
       
         @include('layouts.partial.reclamos.index')
       
    @endsection
    
    
    
    