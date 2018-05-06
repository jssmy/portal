@extends('layouts.main')
    @section('title','Board')
    @section('links')
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    @endsection
    
    @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu')
    @endsection
   @section('container')
       @include('layouts.partial.dashboard.stats')
   @endsection
  
  