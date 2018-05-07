@extends('theme.main')
    @section('title','Modelos de cartas')
    @section('links')
        <link rel="stylesheet" href="/dist/css/letter.css" type="text/css" />
    @endsection
  @section('sidebar-menu')
        @include('theme.partial.sidebar-menu')
   @endsection

   @section('breadcrumb')
        @include('theme.partial.breadcrumb',[
            'route'=>'/modelos',
            'root'=>'Modelos de carta',
            'icon'=>'file',
            'sub'=>''
        ])
    @endsection
    
    @section('container')
       
         @include('modelos.partial.index')
         @include('cartas.modal-carta')
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
                            //alert(modelo.inicio);
                            $("#p-saludo").text(modelo.inicio);
                            $("#p-parrafo1").text(modelo.parrafo1);
                            $("#p-parrafo2").text(modelo.parrafo2);
                            $("#p-parrafo3").text(modelo.parrafo3);
                            $("#p-resultado").text(modelo.fin);
                        }
                    });    
            }
        </script>
    @endsection

    
    

    
    
    