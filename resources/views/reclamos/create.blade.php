@extends('theme.main')
    @section('title','Crear Carta')

    @section('links')
    	<link rel="stylesheet" type="text/css" href="/dist/css/letter.css">
    @endsection

    @section('sidebar-menu')
        @include('theme.partial.sidebar-menu')
    @endsection

      @section('breadcrumb')
        @include('theme.partial.breadcrumb',[
            'route'=>'/reclamos',
            'root'=>'Mis asignaciones',
            'icon'=>'folder',
            'sub'=>'Crear carta'
        ])
    @endsection

    
    @section('container')
       
         @include('reclamos.partial.create')
       
    @endsection
    
    
    
    
    