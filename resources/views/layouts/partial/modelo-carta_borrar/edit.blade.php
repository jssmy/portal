<div class="row">
  <div class="col-md-1"></div>
<div class="col-md-8">
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Eidar modelo {{ $modelo->nombre }} </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('modelo.update')}}" method="POST"  class="form-horizontal">
              {{ csrf_field() }}
              <div id="body-create-modelo" class="box-body">
                
                <div class="form-group">
                    <label for="resultado" class="col-sm-2 control-label">Resultado</label>
                    <div class="col-sm-10">
                    <input   readonly type="text" class="form-control" value="{{$modelo->resultado_->nombre}}">    
                    </div>
                    
                </div>
                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <input name="nombre" id="nombre" type="text" class="form-control" value="{{$modelo->nombre}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-inicio">Inicio</label>
                  <div class="col-sm-10">
                      <textarea id="txt-inicio" name="txt-inicio" class="dato-carta form-control" rows="4">{{$modelo->saludo}}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-respuesta">Párrafo</label>
                  <div class="col-sm-10">
                        <div class="col-sm-6">
                          <div class="form-group">
                          <select id="cant_parrafo"  name="cant_parrafo" class="form-control">
                            <option>Seleccione...</option>
                            <option value="1" id="rd1" 
                            @if($modelo->cant_parrafo==1)
                              selected
                            @endif
                            >1 párrafo</option>
                            <option value="2" id="rd2" 
                              @if($modelo->cant_parrafo==2)
                                selected
                              @endif
                            >2 párrafos</option>
                            <option value="3"  id="rd3" 
                            @if($modelo->cant_parrafo==3)
                              selected
                            @endif
                            
                            >3 párrafos</option>
                          </select>
                        </div>
                        </div>
                        <div style="margin-top:2%; cursor:pointer;"  class="pull-right">
                          <span  class="btn-add-parrafo label label-success">crear párrafos ahora</span>
                        </div>
                  </div>
                </div>
                <div  
                  @if(!($modelo->cant_parrafo>=1))
                    hidden
                  @endif
                class="parrafo parrafo1 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo1">Párrafo 1</label>
                  <div class="col-sm-10">
                        <textarea id="txt-parrafo1"  name="txt-parrafo1" class="dato-carta form-control" rows="4">{{ $modelo->parrafo1 }}</textarea>
                  </div>
                </div>
                <div 
                @if(!($modelo->cant_parrafo>=2))
                  hidden
                @endif
                class="parrafo parrafo2 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo2">Párrafo 2</label>
                  <div class="col-sm-10">
                    <textarea id="txt-parrafo2" name="txt-parrafo2" class="dato-carta form-control" rows="4">{{ $modelo->parrafo2 }}</textarea>                        
                  </div>
                </div>
                <div 
                @if(!($modelo->cant_parrafo==3))
                  hidden
                @endif
                class="parrafo parrafo3 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo3">Párrafo 3</label>
                  <div class="col-sm-10">
                    <textarea id="txt-parrafo3" name="txt-parrafo3" class="dato-carta form-control" rows="4">{{ $modelo->parrafo3 }}</textarea>                        
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-respuesta">Respuesta</label>
                  <div class="col-sm-10">
                      <textarea id="txt-respuesta" name="txt-respuesta" class="dato-carta form-control" rows="5">{{$modelo->resultado}}</textarea>
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
<div class="col-md-3">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Herramientas</h3>
        </div>
        <div   class="box-body">
            <div class="col-sm-12">
                          <div>
                              <a  class="btn-create-modelo " id="calendar-date" style="text-decoration:none; color:black; cursor:pointer;" type="button">F. reclamo <span class="fa fa-calendar"></span></a>
                          </div>
                          <div>
                              <a class="btn-create-modelo "  id="service"  style="text-decoration:none; color:black; cursor:pointer;" type="button">N° servicio <span class="fa fa-tag"></span></a>
                          </div>
                          <div>
                              <a class="btn-create-modelo "  id="cod-reclamo" style="text-decoration:none; color:black; cursor:pointer;" type="button">Cod. reclamo <span class="fa fa-tag"></span></a>
                          </div>
                          <div>
                              <a class="btn-create-modelo "  id="reclamante"  style="text-decoration:none; color:black; cursor:pointer;" type="button">Reclamante <span class="fa  fa-user"></span></a>
                          </div>
                      </div>
        </div>
    </div>
</div>
</div>
