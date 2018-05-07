<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       
        @if(Auth::user()->type=='liqui')
             <li>
                <a href="{{  route('board') }}">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{  route('reclamos.index') }}">
                  <i class="fa  fa-folder"></i> <span>Mis asignaciones</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa  fa-bullseye"></i>
                  <span>Resultados</span>
                  <span class="pull-right-container">
                    
                    <span id="asignado" class="label label-danger pull-right">No asignado</span>
                    
                  </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  @foreach($resultados as $resultado)
                    <li id="resultado{{$resultado->id}}">
                      <a style="cursor:pointer;"  onclick="get_list_modelo('{{ $resultado->id }}','{{ $resultado->nombre  }}')"  >
                          <i id="chek-{{$resultado->id}}"  class="fa fa-circle-o"></i>
                          {{ $resultado->nombre  }}
                        </a>
                    </li>
                  @endforeach
                  
                </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                    <i class="fa  fa-file"></i>
                    <span>Modelos de carta</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul id="sider-modelos" class="treeview-menu">
                    
                    <li><a href="{{ route('modelo.index') }}"><i class="fa fa-plus"></i><span class="label label-danger">Agregar nuevo modelo</span></a></li>
                  </ul>
                  <li>
                    <div class="col-md-12">
                      <div class="box box-solid">
                      <div class="box-header with-border">
                        <i class="fa fa-exclamation-circle"></i>
          
                        <h3 class="box-title">Observación</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <textarea class="form-control" rows="13" disabled="">{{ $reclamo->observacion_reclamo  }}</textarea>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    </div>
                  </li>
              </li>
                <!---->
               
        @endif
        
        
        <li class="header">OPCIONES</li>
        <li>
          <div class="col-sm-12">
            <div class="pull-left"></div>
            <a  onclick="generar_carta()" style="font-color:white;" class="btn btn-success">Generar carta <i class="fa fa-envelope-o"></i></a>
            
          </div>
        </li>
        
      </ul>
      
      