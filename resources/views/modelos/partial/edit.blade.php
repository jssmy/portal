<div class="row">
  <div class="col-md-1"></div>
<div class="col-md-8">
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ediar modelo modelo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('modelo.update',$modelo->id)}}" method="POST"  class="form-horizontal">
              {{ csrf_field() }}
              <div id="body-create-modelo" class="box-body">
                
                <div class="form-group">
                    <label for="resultado" class="col-sm-2 control-label">Resultado</label>
                    <div class="col-sm-10">
                        <input  readonly="" class="form-control" name="nombre" value="{{ $modelo->resultado->nombre }}">
                    </div>
                </div>
                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <input name="nombre" id="nombre" type="text" class="form-control" value="{{ $modelo->nombre }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-inicio">Inicio</label>
                  <div class="col-sm-10">
                      <textarea id="txt-inicio" name="txt-inicio" class="dato-carta form-control" rows="4">{{ $modelo->inicio }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="txt-respuesta">Párrafo</label>
                  <div class="col-sm-10">
                        <div class="col-sm-6">
                          <div class="form-group">
                          <select id="cant_parrafo"  disabled="true" name="cant_parrafo" class="form-control">
                            <option>Seleccione...</option>
                            <option 
                              @if($modelo->cant_parrafo==1)
                                selected=true
                              @endif
                             value="1" id="rd1">1 párrafo</option>
                            <option 
                              @if($modelo->cant_parrafo==2)
                                selected="true"
                               @endif

                            value="2" id="rd2">2 párrafos</option>
                            <option 
                            @if($modelo->cant_parrafo==3)
                                selected="true"
                               @endif

                            value="3" id="rd3">3 párrafos</option>
                          </select>
                        </div>
                        </div>

                        <div>
                          <button  id="btn_select" style="margin-top: 1%;" type="button" class="btn btn-success btn-xs">
                            <i class="fa fa-edit" ></i>
                          </button>
                          <span style="margin-top:1.5%; cursor: pointer;" class="btn-add-parrafo label label-success pull-right">crear párrafos ahora</span>
                        </div>
                  </div>
                </div>
                <div  id="div-parrafo1"  
                  @if($modelo->cant_parrafo<1)
                    hidden
                  @endif

                  class="parrafo parrafo1 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo1">Párrafo 1</label>
                  <div class="col-sm-10">
                        <textarea id="txt-parrafo1" name="txt-parrafo1" class="dato-carta form-control" rows="4">{{$modelo->parrafo1}}</textarea>
                  </div>
                </div>
                <div id="div-parrafo2" 
                  @if($modelo->cant_parrafo<2)
                    hidden
                  @endif
                 class="parrafo parrafo2 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo2">Párrafo 2</label>
                  <div class="col-sm-10">
                    <textarea id="txt-parrafo2" name="txt-parrafo2" class="dato-carta form-control" rows="4">{{$modelo->parrafo2}}</textarea>                        
                  </div>
                </div>
                <div id="div-parrafo3" 
                  @if($modelo->cant_parrafo<3)
                    hidden
                  @endif
                class="parrafo parrafo3 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo3">Párrafo 3</label>
                  <div class="col-sm-10">
                    <textarea id="txt-parrafo3" name="txt-parrafo3" class="dato-carta form-control" rows="4">{{ $modelo->parrafo3 }}</textarea>                        
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-respuesta">Fin</label>
                  <div class="col-sm-10">
                      
                      <textarea id="txt-respuesta" name="txt-respuesta" class="dato-carta form-control" rows="5">{{ $modelo->fin }}</textarea>
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
                              <a  class="btn-create-modelo " id="calendar-date" href="#" style="text-decoration:none; color:black;" type="button">F. reclamo <span class="fa fa-calendar"></span></a>
                          </div>
                          <div>
                              <a class="btn-create-modelo "  id="service" href="#" style="text-decoration:none; color:black;" type="button">N° servicio <span class="fa fa-tag"></span></a>
                          </div>
                          <div>
                              <a class="btn-create-modelo "  id="cod-reclamo" href="#" style="text-decoration:none; color:black;" type="button">Cod. reclamo <span class="fa fa-tag"></span></a>
                          </div>
                          <div>
                              <a class="btn-create-modelo "  id="reclamante" href="#" style="text-decoration:none; color:black;" type="button">Reclamante <span class="fa  fa-user"></span></a>
                          </div>
                      </div>
        </div>
    </div>
</div>
</div>
