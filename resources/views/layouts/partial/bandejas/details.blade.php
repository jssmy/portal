
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reclamos de la bandeja <strong>{{ $bandeja->nombre }}</strong></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar por código">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Cod.</th>
                        <th>Tipo</th>
                        <th>Motivo</th>
                        <th>Reclamante</th>
                        <th>Teléfono</th>
                        <th>Fecha reclamo</th>
                        <th>Límite</th>
                        <th>Opc.</th>
                    </tr>
                          @foreach($reclamos as $reclamo)
                            <tr>
                            <td>{{ $reclamo->reclamo_numero }}</td>
                            <td>{{ $reclamo->tipo_reclamo  }}</td>
                            <td>{{ $reclamo->motivo_reclamo  }}</td>
                            <td>{{ $reclamo->reclamante  }}</td>
                            <td>{{ $reclamo->telefono  }}</td>
                            <td>{{ $reclamo->fecha_reclamo  }}</td>
                            <td><span class="label label-{{$reclamo->label}}">{{ $reclamo->limite }}</span></td>
                            <td>
                                <a href="{{route('make.letter',$reclamo->reclamo_numero)}}"><span class="fa  fa-file-text"></span> </a>
                            </td>
                          </tr>
                          @endforeach
                          
                    
                 </tbody>
              </table>
            </div>
            <div class="box-footer clearfix">
              {{ $reclamos->render() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>