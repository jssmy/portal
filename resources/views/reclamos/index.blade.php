@extends('theme.main')
   @section('title','Reclamos')
   @section('sidebar-menu')
        @include('theme.partial.sidebar-menu')
   @endsection

   @section('breadcrumb')
    	@include('theme.partial.breadcrumb',[
    		'route'=>'/reclamos',
    		'root'=>'Mis signaciones',
    		'icon'=>'folder',
    		'sub'=>''
    	])
    @endsection


   @section('container')
         @include('reclamos.partial.index')
    @endsection
    
    
    
    