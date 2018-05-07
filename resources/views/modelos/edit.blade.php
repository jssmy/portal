@extends('theme.main')
    @section('title','Editar modelo de carta')
    @section('links')
                
    @endsection
   @section('sidebar-menu')
        @include('theme.partial.sidebar-menu')
    @endsection
    
    @section('container')
       
         @include('modelos.partial.edit')
         
    @endsection
    @section('scripts')
        <script type="text/javascript" src="/dist/js/cookie.js"></script>
        <script >        
        //btn-create-modelo
            
            $(document).ready(function(){
                
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
                    
                    if(!($('#cant_parrafo').is(':disabled'))){
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

                    }
                });


                $("#btn_select").bind('click', function(){
                    var value = !$('#cant_parrafo').is(':disabled');
                    $('#cant_parrafo').attr('disabled',value);
                    
                });


            });



        </script>
    @endsection
    
    
    
    