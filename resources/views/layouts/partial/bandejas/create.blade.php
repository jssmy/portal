<div class="row">
  <div class="col-md-1"></div>
<div class="col-md-8">
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Nueva bandeja</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('bandeja.store')}}" method="POST"  class="form-horizontal">
              {{ csrf_field() }}
              <div id="body-create-modelo" class="box-body">
                
                <div class="form-group">
                    <label for="resultado" class="col-sm-2 control-label">Resultado</label>
                    <div class="col-sm-10">
                        <select class="form-control"   onchange="get_modelos(value)"  id="resultado"  name="resultado">
                            <option>Seleccione...</option>
                            @foreach($resultados as $resultado)
                            <option  value="{{ $resultado->id }}">{{ $resultado->nombre }}</option>
                            @endforeach
                          </select>        
                    </div>
                </div>
                <div class="form-group">
                    <label for="resultado" class="col-sm-2 control-label">Modelo</label>
                    <div class="col-sm-9">
                        <select  id="select-modelo" class="form-control" id="select-modelo"  name="modelo">
                            <option>Seleccione...</option>
                          </select>        
                    </div>
                    <div class="col-sm-1">
                        <button   type="button" class="btn btn-info"><i class="fa fa-eye"></i></button>
                    </div>
                </div>
                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <input name="nombre" id="nombre" type="text" class="form-control" placeholder="escribe el nombre del modelo de la bandeja">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label">Descripión</label>
                  <div class="col-sm-10">
                    <input name="descripcion" id="descripcion" type="text" class="form-control" placeholder="escribe una breve descripción de la bandeja">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-success pull-right">Guardar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</div>

</div>

@section('scripts')
    <script>
        function get_modelo(id_modelo){}
        function get_modelos(id_resultado){
            $.ajax({
                        
                        url: 'api/modelo/resultado/'+id_resultado,
                        type: 'GET', //this is your method
                        data: null,
                        success: function(response){
                            var modelos = JSON.parse(response);
                            var options = '<option >Seleccione...</option>';
                            for (var key in modelos) {
                                options+='<option value="'+modelos[key].id+'">';
                                options+=modelos[key].nombre;
                                options+='</option>';
                            }
                            $("#select-modelo").html('');
                            $("#select-modelo").html(options);
                            
                        }        
                        
                    });
        }
        
        
        
    </script>
@endsection

