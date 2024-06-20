<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSSG</title>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Página inicial</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
   
        <div class="navbar-search-block">
          <form class="form-inline" action="{{ route('copia.pormes') }}">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" id="parametro" name="parametro" value="{{ $parametro }}" >
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>

@include('layouts.menu-sidebar')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0"><b>Consulta cópias feitas por mês</b></h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
      
            </ol>
          </div>
        </div>
      </div>
    </div>
<x-alert />


    <div >
      <div >
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
            
                  <form>
                    <div class="row">
                      <div class="col-md-12">
                          <form action="{{ route('copia.pormes') }}">
                              <div class="input-group">
                                  <input type="search" name="parametro" id="parametro" value="{{ $parametro }}"class="form-control" placeholder="pesquisar cópia por mês">
                                  <div class="input-group-append">
                                      <button type="submit" class="btn btn-md btn-default">
                                          <i class="fa fa-search"></i>
                                      </button>
                                  </div>
                              </div>
                          </form>
                         
                      </div>
                  </div>
                  </form>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover ">
                      <thead class="thead-dark">
                        <tr>
                          
                          <th>Data</th>
                          <th>Setor</th>
                          <th>Série</th>
                          <th>Tipo</th>
                          <th>Quantidade</th>
                          <th>Disciplina</th>
                          <th>Descricao</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($copias as $copia)
                        <tr>
                         
                          <td> {{ \Carbon\Carbon::parse($copia->dtasolicitacao)->format('d/m/Y') }}</td>
                          <td> {{ $copia->setor->nome }}</td>
                          <td> {{ $copia->serie->nome }}</td>
                          <td> {{ $copia->tipo }}</td>
                          <td> {{ $copia->quantidade }}</td>
                          <td> {{ $copia->disciplina->nome }}</td>
                          <td> {{ $copia->descricao }}</td>
                        
                        </tr>
                        
                        @empty
                        <span style="color: #f00;">Nenhuma cópia encontrada</span>
                    @endforelse
                      </tbody>
                    </table>
                    <br>
                    <p>No mês informado foram feitas {{ $quantidadeTotal }} cópias</p>
                    <br>
                    {{ $copias->onEachSide(0)->links() }}
                  </div>
                </div>
              </div>

      
            </div>
            
       </div>
    </div>
</div>
              </div>
            </div>
          </div>
              </div>
            </div>
          </div>
        </div>       
      </div>
    </div> 
  </div>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>

  @include('layouts.footer')

@include('layouts.scripts')
</body>
</html>