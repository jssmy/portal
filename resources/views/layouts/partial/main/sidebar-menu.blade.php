<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
          @if(Auth::user()->type=='admin')
              <li>
                <a href="{{  route('board') }}">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{  route('reclamos.asig') }}">
                  <i class="fa fa-share-alt"></i> <span>Asignar reclamos</span>
                </a>
              </li>
              
        @endif
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
                    <i class="fa fa-inbox"></i>
                    <span>Bandejas</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    @foreach($bandejas as $bandeja)
                      <li><a href="{{route('bandeja.details',$bandeja->id)}}"><i class="fa fa-circle-o text-red"></i> <span>{{ $bandeja->nombre  }}</span></a></li>
                    @endforeach
                    <li><a href="{{ route('bandeja.index') }}"><i class="fa fa-plus"></i><span class="label label-danger">Crear nueva bandeja</span></a></li>
                  </ul>
                </li>
              
        @endif
        
        
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>