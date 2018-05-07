<div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="/image/config/user_profile.png" alt="User Image">
                <span class="username"><a href="#">{{$reclamo->reclamante}}</a></span>
                <span class="description"><a href="#">{{$reclamo->email}}</a></span>
                <span class="description">Teléfono: {{$reclamo->telefono}}</span>
                <span class="description">Tipo de cliente:{{$reclamo->tipo_cliente}}</span>
                <span class="description">Fecha de reclamo: {{$reclamo->fecha_reclamo}}</span>
                
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                 
                <span class="label label-danger">Fecha vencimieto: {{ $reclamo->fecha_vencimiento}}</span>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
                  <div class="row">
                      <div class="col-sm-12">
                          <p><strong>Motivo de reclamo: </strong>{{$reclamo->tipo_reclamo}}</p>
                          <p><strong>Sub-motivo de reclamo: </strong>{{$reclamo->motivo_reclamo}}</p>
                          <p><strong>Dirección: </strong>{{$reclamo->direccion_postal}}</p>
                          <p><strong>Estado de servicio: </strong>{{$reclamo->estado_servicio}}</p>
                          <p><strong>Segmento: </strong>{{ $reclamo->segmento }}</p>
                      </div>
                  </div>
                <div class="callout callout-info">
                        <h4>Observación del reclamo</h4>
                
                        <p>{{ $reclamo->observacion_reclamo }}</p>
                      </div>
              <!-- Attachment -->
              
              <!-- /.attachment-block -->

              <!-- Social sharing buttons -->
              
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <div class="box-comment">
                
              </div>
              <!-- /.box-comment -->
              <div class="box-comment">
                
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <form action="#" method="post">
                <img class="img-responsive img-circle img-sm" src="/image/config/user_profile.png" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <div class="col-sm-6">
                      <div class="pull-left">
                          <div class="input-group input-group-sm">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Bandejas
                                <span class="fa fa-caret-down"></span></button>
                              <ul class="dropdown-menu">
                                @foreach($bandejas as $bandeja)
                                  <li><a href="{{ route('bandeja.add.reclamo',[$bandeja->id,$reclamo->id]) }}">{{ $bandeja->nombre  }}</a></li>
                                @endforeach
                                
                                
                              </ul>
                            </div>
                            <!-- /btn-group -->
                            <input  readonly type="text"  value="Enviar a bandeja de masiva" class="form-control">
                          </div>
                          
                      </div>
                  </div>
                  <div class="col-sm-6" >
                      <div class="input-group input-group-sm">
                        <input readonly value="Generar carta" type="text" class="form-control">
                            <span class="input-group-btn">
                              <a href="{{ route('make.letter',$reclamo->reclamo_numero) }}" class="btn btn-info btn-flat">ir</a>
                            </span>
                      </div>
                      
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>