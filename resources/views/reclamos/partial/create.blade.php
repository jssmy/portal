<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div id="message" >
            
        </div>
        
        <form  id="form-generar-carta" action="{{route('carta.store',$reclamo->id)}}" method="POST">
             {{ csrf_field() }}
            <div class="row documento">
            <div class="col-sm-1"></div>
            <div class="col-md-10">
                <div class="header-cart">
                    <div class="canal">
                        <h5>FIJA</h5>
                    </div>
                    <div class="movistar">
                        <img  src="/image/config/movistar.png"></img>
                    </div>
                    <input value="" id="resultado_" type="hidden" name="resultado_"/>
                    
                </div>
                <div class="sub-header">
                    <div class="sub-header-body">
                        <h5 style="font-style:oblique;">
                            <strong>|| _N_RESOLUCION_ ||</strong>
                        </h5>
                        <input hidden type="text" id="fecha_respuesta" name="fecha_respuesta" value="{{ $reclamo->respuesta }}" />
                        <h5 style="margin-top: 3%;">Lima, {{$reclamo->respuesta}}</h5>
                        <h5 style="margin-top: 3%;">Señor (a): </h5>
                        <h5><strong>{{ $reclamo->reclamante }}</strong></h5>
                        <h5><strong>{{ $reclamo->direccion_postal }}</strong></h5>
                        <h5><strong>{{ $reclamo->distrito }}, {{ $reclamo->departamento }}</strong></h5>
                        <h5>Servicio: {{$reclamo->numero_reclamo}}</h5>
                        <h5>Reclamo: {{$reclamo->numero_reclamo}}</h5>
                        <h5 style="margin-top:4%;">Hola, {{ $reclamo->reclamante }}</h5>
                    </div>
                </div> 
                <div class="body-cart">
                    <div class="body-saludo">
                        <p id="p-saludo"></p>
                        <input value="" id="saludo" type="text" name="saludo" hidden />
                    </div>
                    <div class="parrafo-espacio body-parrafo1">
                        <textarea readonly="true" rows="4" name="txt-parrafo1" id="txt-parrafo1"></textarea>
                        <span  onclick="enable_text('txt-parrafo1')" class="tools-parrafo pull-right fa fa-edit"></span>
                    </div>
                    <div class="parrafo-espacio body-parrafo2">
                        <textarea  readonly="true"rows="4"  name="txt-parrafo2" id="txt-parrafo2"></textarea>
                        <span  onclick="enable_text('txt-parrafo2')" class="tools-parrafo pull-right fa fa-edit"></span>
                    </div>
                    <div rows="4" class="parrafo-espacio body-parrafo3">
                        <textarea readonly="true" rows="4"  name="txt-parrafo3" id="txt-parrafo3"></textarea>
                        <span onclick="enable_text('txt-parrafo3')" class="tools-parrafo pull-right fa fa-edit"></span>
                    </div>
                    <div class="body-resultado">
                        <p id="p-resultado"></p>
                        <input id="resultado" type="hidden" name="resultado"/>
                    </div>
                    
                    <div class="footer">
                        <br>
                        <p>Sin otro particular me despido</p>
                        <div class="firma">
                            <img src="/image/config/firma.png"></img>
                        </div>
                        <div class="nombre-firma"  >
                            <p><strong>Michael Campbell Parodi</strong></p>
                            <p style="margin-top:-1%;"><strong>Soluciones Fija</strong></p>
                            
                        </div>
                    </div>
                </div>
                <div class="footer-cart">
                    <p>(*) Los recursos de 2da Instancia (Apelaciones o Quejas), pueden presentar a través del call center 104 u oficinas comerciales.</p>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="col-sm-2"></div>
</div>


@section('scripts')
        <script>
            function enable_text(id_text){
                var txt = $('#'+id_text);
                var dis = !txt.is(':readonly');
                txt.attr('readonly',dis);
            }
        
            function get_modelo(id,cod_reclamo){
                $.ajax({
                        url: '/api/modelo/'+id+'/reclamo/'+cod_reclamo,
                        type: 'GET', //this is your method
                        data: null,
                        success: function(response){
                            
                            var modelo = JSON.parse(response);
                            $('#txt-parrafo1').attr('readonly',false);
                            $('#txt-parrafo2').attr('readonly',false);
                            $('#txt-parrafo3').attr('readonly',false);
                            $("#p-saludo").text(modelo.inicio);
                            $("#saludo").val(modelo.inicio);
                            $("#txt-parrafo1").val(modelo.parrafo1);
                            $("#txt-parrafo2").val(modelo.parrafo2);
                            $("#txt-parrafo3").val(modelo.parrafo3);
                            $("#p-respuesta").val(modelo.respuesta);
                            $("#p-resultado").text(modelo.fin);
                            $("#resultado").val(modelo.fin);
                            $("#resultado_").val(id);
                            if(modelo.cant_parrafo==0){
                                $('.body-parrafo1').hide();
                                $('.body-parrafo2').hide();
                                $('.body-parrafo3').hide();
                            }
                            
                            if(modelo.cant_parrafo==1){
                                $('.body-parrafo1').show();
                                $('.body-parrafo2').hide();
                                $('.body-parrafo3').hide();
                            }
                            
                            if(modelo.cant_parrafo==2){
                                $('.body-parrafo1').show();
                                $('.body-parrafo2').show();
                                $('.body-parrafo3').hide();
                            }
                            if(modelo.cant_parrafo==3){
                                $('.body-parrafo1').show();
                                $('.body-parrafo2').show();
                                $('.body-parrafo3').show();
                            }  
                        }        
                        
                    });    
            }
            // se ejecutar al seleccionar el resultado
            function get_list_modelo(id_resultado,nombre_resultado){
                
                $.ajax({
                        url: '/api/modelo/resultado/'+id_resultado,
                        type: 'GET',
                        data: null,
                        success: function(response){
                            
                            var modelos = JSON.parse(response);
                            $("#check-"+id_resultado).toggleClass('fa fa-exclamation-circle');
                            var html='';
                            for (var key in modelos) {
                                html='<li>';
                                    html+='<a style="cursor:pointer;" onclick="get_modelo(';
                                    html+=modelos[key].id;
                                    html+=',';
                                    html+="'{{$reclamo->numero_reclamo}}'";
                                    html+=')" >';
                                    html+='<span class="label label-info pull-left">';
                                    html+=modelos[key].cant_parrafo;
                                    html+='</span>'
                                    html+=modelos[key].nombre
                                    html+='</a>';
                                html+='</li>';   //chek-4
                            }
                               var btn_add='<li><a href="/modelos"><i class="fa fa-plus"></i><span class="label label-danger">Agregar nuevo modelo</span></a></li>';
                                html+=btn_add;
                                $("#asignado").text(nombre_resultado);
                                $('#sider-modelos').html('');
                                $('#sider-modelos').prepend(html);
                                
                                var message='<div class="alert alert-success alert-dismissible">';    
                                message+='<a style="cursor:pointer;" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
                                message+="<strong>MENSAJE!</strong> El reclamo {{ $reclamo->numero_reclamo }} ha sido declarado "+ nombre_resultado;
                                message+="</div>";
                                $("#message").html(message);
                           
                                
                                
                         //end   
                        }        
                    });    
            }
            
            
            function generar_carta(){
                $("#form-generar-carta").submit();
            }
            
            
        </script>
@endsection                        
      