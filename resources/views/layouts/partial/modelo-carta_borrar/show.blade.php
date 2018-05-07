  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del modelo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('modelo.update')}}" method="POST"  class="form-horizontal">
              {{ csrf_field() }}
              <div id="body-create-modelo" class="box-body">
                
                <div class="form-group">
                    <label for="resultado" class="col-sm-2 control-label">Resultado</label>
                    <div class="col-sm-10">
                        <select disabled class="form-control" id="resultado"  name="resultado">
                            <option>Seleccione...</option>
                            @foreach($resultados as $resultado)
                            <option value="{{ $resultado->id }}">{{ $resultado->nombre }}</option>
                            @endforeach
                          </select>        
                    </div>
                </div>
                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <input name="nombre" id="nombre" type="text" class="form-control" value="{{$modelo->nombre}}"  placeholder="escribe el nombre del modelo de carta">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-inicio">Inicio</label>
                  <div class="col-sm-10">
                      <textarea id="txt-inicio" name="txt-inicio" class="dato-carta form-control" rows="4" value="{{  $modelo->saludo }}" ></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-respuesta">Párrafo</label>
                  <div class="col-sm-10">
                        <div class="pull-left">
                          <label class="radio-inline"><input id="rd0"  class="cant_parrafo" checked="true" type="radio" value="0" name="cant_parrafo">0</label>
                          <label class="radio-inline"><input  id="rd1" class="cant_parrafo"  type="radio" value="1" name="cant_parrafo">1</label>
                        <label class="radio-inline"><input id="rd2"  class="cant_parrafo" type="radio" value="2" name="cant_parrafo">2</label>
                        <label class="radio-inline"><input id="rd3"  class="cant_parrafo"  type="radio" value="3" name="cant_parrafo">3</label>
                        </div>
                        <div style="margin-top:2%; cursor:pointer;"  class="pull-right">
                          <span  class="btn-add-parrafo label label-success">crear párrafos ahora</span>
                        </div>
                  </div>
                </div>
                <div  hidden  class="parrafo parrafo1 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo1">Párrafo 1</label>
                  <div class="col-sm-10">
                        <textarea id="txt-parrafo1" value="{{ $modelo->parrafo1 }}"  name="txt-parrafo1" class="dato-carta form-control" rows="4"></textarea>
                  </div>
                </div>
                <div hidden class="parrafo parrafo2 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo2">Párrafo 2</label>
                  <div class="col-sm-10">
                    <textarea id="txt-parrafo2"  value="{{$modelo->parrafo2}}" name="txt-parrafo2" class="dato-carta form-control" rows="4" ></textarea>                        
                  </div>
                </div>
                <div hidden  class="parrafo parrafo3 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo3">Párrafo 3</label>
                  <div class="col-sm-10">
                    <textarea  value="{{ $modelo->parrafo3 }}" id="txt-parrafo3" name="txt-parrafo3" class="dato-carta form-control" rows="4"></textarea>                        
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-respuesta">Respuesta</label>
                  <div class="col-sm-10">
                      
                      <textarea id="txt-respuesta" name="txt-respuesta" class="dato-carta form-control" rows="5"></textarea>
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


