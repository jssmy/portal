@extends('layouts.main')
    @section('title','Crear Carta')
    @section('links')
        <link rel="stylesheet" href="/dist/css/letter.css" type="text/css" />
    @endsection
    
    @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu-carta')
    @endsection
    
    @section('container')
       
         @include('layouts.partial.reclamos.create')
       
    @endsection
    
    
    
    
    