@extends('layouts.main')
    @section('title','Editar modelo de carta')
    @section('links')
                
    @endsection
   @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu')
    @endsection
    
    @section('container')
       
         @include('layouts.partial.modelo-carta.edit')
         
    @endsection
    @section('scripts')
        <script type="text/javascript" src="/dist/js/cookie.js"></script>
     <script type="text/javascript" src="/dist/js/model.js"></script>
    @endsection
    
    
    
    