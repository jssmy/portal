<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       
        @if(Auth::user()->type=='liqui')
             <li>
                <a href="{{  route('board') }}">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <li>
                <a id="generar-carta" style="cursor:pointer;">
                  <i class="fa  fa-folder"></i> <span>Mis asignaciones</span>
                </a>
              </li>
              
                <!---->
               
        @endif
        
        
        <li class="header">DATOS DEL MODELO</li>
        
        
      </ul>
      
     

    