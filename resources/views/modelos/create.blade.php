@extends('theme.main')
   @section('title','Crear modelo de carta')
   @section('sidebar-menu')
        @include('theme.partial.sidebar-menu')
   @endsection

   @section('breadcrumb')
        @include('theme.partial.breadcrumb',[
            'route'=>'/modelos',
            'root'=>'Modelos de carta',
            'icon'=>'folder',
            'sub'=>'Crea nuevo modelo'
        ])
    @endsection


    @section('container')
         @include('modelos.partial.create')
    @endsection

    @section('scripts')
        <script >        
        //btn-create-modelo
            
            $(document).ready(function(){
                 
                 //$("#rd0").prop('checked',true);
                    
                
                $('.dato-carta').bind('click', function(){
                  var id= $(this).attr('id');
                  setCookie('id_txt_modelo',id, 0.05);
                });
                
                function set_message(id_btn,message){
                    
                    jQuery('#'+id_btn).on('click', function() {
                        var id_text= getCookie('id_txt_modelo'); 
                        var $txt = jQuery("#"+id_text);
                        var caretPos = $txt[0].selectionStart;
                        var textAreaTxt = $txt.val();
                        var txtToAdd = message;
                        $txt.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
                });      
                };  
                set_message('calendar-date',' |_fecha_reclamo_| ');
                set_message('service',' |_n_servicio_| ');
                set_message('cod-reclamo',' |_cod_reclamo_| ');
                set_message('reclamante',' |_reclamante_| ');
                
                $('.btn-add-parrafo').on('click', function(){
                    
                        var cant_parrafo = $("#cant_parrafo option:selected" ).val();
                        //alert(cant_parrafo);
                        if(cant_parrafo==1){
                            $("#div-parrafo1").attr("hidden",false);
                            $("#div-parrafo2").attr("hidden",true);
                            $("#div-parrafo3").attr("hidden",true);
                        }
                        if(cant_parrafo==2){
                            $("#div-parrafo1").attr("hidden",false);
                            $("#div-parrafo2").attr("hidden",false);
                            $("#div-parrafo3").attr("hidden",true);
                        }
                        if(cant_parrafo==3){
                            $("#div-parrafo1").attr("hidden",false);
                            $("#div-parrafo2").attr("hidden",false);
                            $("#div-parrafo3").attr("hidden",false);
                        }
                 
                });
                
                
                
            });
        </script>
    @endsection
    
    


    
    
