  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="storage/{{ auth()->user()->photo }}" class="img-circle elevation-2" style="width:80px;height=80" alt="User Image">
        </div>
        <div style="margin-left: 5px;font-size:14px;text-color:white">
          <br><br>
          <span style="color:white"> &nbsp;&nbsp;Logado como</span>
          <a href="#" class="d-block">&nbsp;&nbsp;{{ auth()->user()->name }}</a>
          {{-- <a href="#" class="d-block">{{ auth()->user()->email }}</a> --}}
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
            
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Cadastros
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-danger right">cópias</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('setor.index') }}" class="nav-link">
                 {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Setores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('solicitante.index') }}" class="nav-link">
                  {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Responsáveis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('serie.index') }}" class="nav-link">
                  {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Séries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('disciplina.index') }}" class="nav-link">
                  {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disciplinas</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Reprografia
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-primary "></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('copia.index') }}" class="nav-link">
                  {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cópias</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Consultas
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-primary "></span>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('copia.index') }}" class="nav-link">
                  {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mês</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('copia.index') }}" class="nav-link">
                  {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Setor</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('copia.index') }}" class="nav-link">
                  {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mês e Setor</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('copia.index') }}" class="nav-link">
                  {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Datas</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('copia.index') }}" class="nav-link">
                  {{-- <i class="fa fa-file nav-icon"></i>  --}}
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
        
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>