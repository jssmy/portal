<div class="row">
  <div class="col-md-1"></div>
<div class="col-md-8">
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Crear nuevo modelo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('modelo.store')}}" method="POST"  class="form-horizontal">
              {{ csrf_field() }}
              <div id="body-create-modelo" class="box-body">
                
                <div class="form-group">
                    <label for="resultado" class="col-sm-2 control-label">Resultado</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="resultado"  name="resultado">
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
                    <input name="nombre" id="nombre" type="text" class="form-control" placeholder="escribe el nombre del modelo de carta">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-inicio">Inicio</label>
                  <div class="col-sm-10">
                      <textarea id="txt-inicio" name="txt-inicio" class="dato-carta form-control" rows="4" placeholder="EJEMPLO: TU+0065ngo el gusto de saludarte, así como dar respuesta a tu reclamo presentado el  10/04/2018."></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="txt-respuesta">Párrafo</label>
                  <div class="col-sm-10">
                        <div class="col-sm-6">
                          <div class="form-group">
                          <select id="cant_parrafo" name="cant_parrafo" class="form-control">
                            <option>Seleccione...</option>
                            <option value="1" id="rd1">1 párrafo</option>
                            <option value="2" id="rd2">2 párrafos</option>
                            <option value="3" id="rd3">3 párrafos</option>
                          </select>
                        </div>
                        </div>
                        <div style="margin-top:2%; cursor:pointer;" class="pull-right">
                          <span class="btn-add-parrafo label label-success">crear párrafos ahora</span>
                        </div>
                  </div>
                </div>
                <div  id="div-parrafo1"  hidden  class="parrafo parrafo1 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo1">Párrafo 1</label>
                  <div class="col-sm-10">
                        <textarea id="txt-parrafo1" name="txt-parrafo1" class="dato-carta form-control" rows="4" placeholder="Puedes dejar los parrafos en blanco, sin embargo si quieres personalizar la carta deberías de escribir los párrafos que tendrán por defecto los modelos de carta. Se ha establecido que cada carta debería de tener como máximo 3 párrafos, por lo que deberías selccionar únicamente la cantidad que necesitarás."></textarea>
                  </div>
                </div>
                <div id="div-parrafo2" hidden class="parrafo parrafo2 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo2">Párrafo 2</label>
                  <div class="col-sm-10">
                    <textarea id="txt-parrafo2" name="txt-parrafo2" class="dato-carta form-control" rows="4" placeholder="EPuedes dejar los parrafos en blanco, sin embargo si quieres personalizar la carta deberías de escribir los párrafos que tendrán por defecto los modelos de carta. Se ha establecido que cada carta debería de tener como máximo 3 párrafos, por lo que deberías selccionar únicamente la cantidad que necesitarás."></textarea>                        
                  </div>
                </div>
                <div id="div-parrafo3" hidden  class="parrafo parrafo3 form-group">
                  <label class="col-sm-2 control-label"  for="txt-parrafo3">Párrafo 3</label>
                  <div class="col-sm-10">
                    <textarea id="txt-parrafo3" name="txt-parrafo3" class="dato-carta form-control" rows="4" placeholder="Puedes dejar los parrafos en blanco, sin embargo si quieres personalizar la carta deberías de escribir los párrafos que tendrán por defecto los modelos de carta. Se ha establecido que cada carta debería de tener como máximo 3 párrafos, por lo que deberías selccionar únicamente la cantidad que necesitarás."></textarea>                        
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"  for="txt-respuesta">Fin</label>
                  <div class="col-sm-10">
                      
                      <textarea id="txt-respuesta" name="txt-respuesta" class="dato-carta form-control" rows="5" placeholder="EJEMPLO: Al respecto, hacemos de tu conocimiento que se ha determinado declarar Procedente tu reclamo y, como consecuencia de ello, estamos atendiendo tu pedido.  Para cualquier consulta adicional, agradeceremos contactarnos a nuestro servicio de telegestión comercial 104 o a nuestra oficina comercial más cercana a tu domicilio. "></textarea>
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
