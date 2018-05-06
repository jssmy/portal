@extends('layouts.main')
    @section('title','Bandejas')
    @section('header-message')
        <h2 style="margin-top:0;">Bandejas registradas</h2> 
    @endsection
    
   @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu')
    @endsection
    
    @section('container')
       
         @include('layouts.partial.bandejas.index')
       
    @endsection
    
    
    
    