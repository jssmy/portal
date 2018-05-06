@extends('layouts.main')
    @section('title','Modelos de cartas')
    @section('links')
        <link rel="stylesheet" href="/dist/css/letter.css" type="text/css" />
    @endsection
   @section('sidebar-menu')
        @include('layouts.partial.main.sidebar-menu')
    @endsection
    
    @section('container')
       
         @include('layouts.partial.modelo-carta.index')
         @include('layouts.partial.modelo-carta.modal-letter')
    @endsection
    @section('scripts')
        <script>
            function ver_modelo(id){
                $.ajax({
                        url: 'ver-modelo/'+ id, //this is your uri
                        type: 'GET', //this is your method
                        data: null,
                        success: function(response){
                            var modelo = JSON.parse(response);
                            $("#p-saludo").text(modelo.saludo);
                            $("#p-parrafo1").text(modelo.parrafo1);
                            $("#p-parrafo2").text(modelo.parrafo2);
                            $("#p-parrafo3").text(modelo.parrafo3);
                            $("#p-resultado").text(modelo.resultado);
                        }
                    });    
            }
        </script>
    @endsection
    
    
    
    