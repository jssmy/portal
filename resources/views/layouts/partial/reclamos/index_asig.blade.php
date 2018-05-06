<div class"row">
    <div class="col-sm-2">
        <div class="form-group">
                
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker1">
                </div>
                
                <!-- /.input group -->
              </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
                
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker2">
                </div>
                
                <!-- /.input group -->
              </div>
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                <span class="input-group-addon" id="btnGroupAddon2">Motivo</span>
                <select class="form-control">
                    <option> Selccione</option>
                </select>        
        </div>
      
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                <span class="input-group-addon" id="btnGroupAddon2">Sub-motivo</span>
                <select class="form-control">
                    <option> Selccione</option>
                </select>        
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Todos los reclamos</h3>
              
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
                                <a href="{{ route('reclamo.details',$reclamo->reclamo_numero) }}"><span class="fa fa-eye"></span> </a> 
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
</div>


@section('scripts')
    <script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
  $(function () {
   

    

    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    });
       $('#datepicker2').datepicker({
      autoclose: true
    });
   
  })
</script>
@endsection