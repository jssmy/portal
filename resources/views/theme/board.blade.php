@extends('theme.main')
    @section('title','Board')
    @section('breadcrumb')
    	@include('theme.partial.breadcrumb',[
    		'route'=>'/board',
    		'root'=>'Dasboard',
    		'icon'=>'tachometer',
    		'sub'=>''
    	])
    @endsection
    @section('links')
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    @endsection
    
    @section('sidebar-menu')
        @include('theme.partial.sidebar-menu')
    @endsection
   @section('container')
       
   @endsection
  
  