<div class="col-md-12">
  <a href="{{ route('modelo.create') }}" class="btn btn-danger"  >Crear nuevo</a>
</div>
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Modelos registrados</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar por nombre">

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
                        <th>Nombre</th>
                        <th>Resultado</th>
                        <th>Propietario</th>
                        <th>Párrafos</th>
                        <th>Opc.</th>
                        
                    </tr>
                          @foreach($modelos as $modelo)
                            <tr>
                            <td>{{ $modelo->id  }}</td>
                            <td>{{ $modelo->nombre  }}</td>
                            <td>{{ $modelo->resultado_->nombre  }}</td>
                            <td>{{ $modelo->cant_parrafo }}</td>
                            <td><span class="label label-warning">{{ $modelo->propietario->name  }}</span></td>
                            
                            <td>
                              
                              <button type="button"  onclick="ver_modelo({{ $modelo->id }})" data-toggle="modal"   data-target="#preview-model"   class="btn btn-info btn-xs"><span class="fa fa-eye"></span></button>
                              <a  class="btn btn-success btn-xs" href="{{route('modelo.edit',$modelo->id)}}"><span class="fa fa-pencil"></span></a>
                              <a href="#" class="btn btn-danger btn-xs"><span class="fa  fa-plus"></span> </a>
                            </td>
                          </tr>
                          @endforeach
                 </tbody>
              </table>
            </div>
            <div class="box-footer clearfix">
              {{ $modelos->render() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        