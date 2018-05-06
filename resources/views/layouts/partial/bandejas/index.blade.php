<div class="col-xs-12">
    <a href="{{route('bandeja.create')}}" class="btn btn-danger">Crear nuevo</a>
</div>
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bandejas registradas</h3>

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
                        <th>Nombre</th>
                        <th>Modelo</th>
                        <th>Opc.</th>
                    </tr>
                          @foreach($bandejas as $bandeja)
                            <tr>
                            <td>{{ $bandeja->id }}</td>
                            <td>{{ $bandeja->nombre }}</td>
                            <td>{{ $bandeja->modelo_id }}</td>
                            <td>
                                <a href="#"><span class="fa fa-eye"></span> </a> 
                                <a href="#"><span class="fa  fa-file-text"></span> </a>
                            </td>
                          </tr>
                          @endforeach
                          
                    
                 </tbody>
              </table>
            </div>
            <div class="box-footer clearfix">
              {{ $bandejas->render() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>