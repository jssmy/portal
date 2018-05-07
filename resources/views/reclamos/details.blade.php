@extends('theme.main')
    @section('title','Detalle'.$reclamo->reclamo_numero)
    @section('sidebar-menu')
        @include('theme.partial.sidebar-menu')
    @endsection

      @section('breadcrumb')
    	@include('theme.partial.breadcrumb',[
    		'route'=>'/reclamos',
    		'root'=>'Mis asignaciones',
    		'icon'=>'folder',
    		'sub'=>'Detalles'
    	])
    @endsection

    
    @section('container')
       @include('reclamos.partial.details')
    @endsection
    
    
    
    