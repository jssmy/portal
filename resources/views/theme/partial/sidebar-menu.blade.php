<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
              @include('theme.partial.li',
              ['route'=>'board',
              'name'=>'Dashboard',
              'icon'=>'tachometer'])
        @if(Auth::user()->type=='admin')

              @include('theme.partial.li',
              ['route'=>'reclamos.asig',
              'name'=>'Asignar reclamos',
              'icon'=>'share'])
        @endif

        @if(Auth::user()->type=='uindividual')
              @include('theme.partial.li',[
                'route'=>'reclamos.index',
                'name'=>'Mis asignaciones',
                'icon'=>'folder'
              ])
              <li class="treeview">
                <a href="#">
                  <i class="fa  fa-bullseye"></i>
                  <span>Resultados</span>
                  <span class="pull-right-container">
                    @if(isset($show_s))
                    <span id="asignado" class="label label-danger pull-right">No asignado</span>
                    @endif
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
              </li>
                
                @if(isset($show_obs))
                  @include('reclamos.partial.observation')
                @endif

                @if(isset($show_obs))
                  <li>
                      <div class="col-sm-12">
                        <button  onclick="generar_carta()" type="button" class="btn btn-success">Generar carta</button>
                      </div>
                  </li>
                @endif
              
        @endif

        @if(Auth::user()->type=='umasivo')
          <li class="treeview">
                  <a style="cursor: pointer;">
                    <i class="fa fa-inbox"></i>
                    <span>Bandejas</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    @foreach($bandejas as $bandeja)
                      @include('theme.partial.li',[
                        'route'=>'ver-bandeja/'.$bandeja->id,
                        'name'=>$bandeja->nombre,
                        'icon'=>'circle-o text-red'
                      ])
                    @endforeach
                      @include('theme.partial.li',[
                        'route'=>'bandeja.index',
                        'name'=>'Crear nuevo',
                        'icon'=>'plus'
                      ])
                    
                  </ul>
              </li>
        @endif
        
      </ul>