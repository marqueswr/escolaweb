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
 
  @vite(['resources/sass/app.scss','resources/js/app.js'])
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
   
        
      </li>
    </ul>
  </nav>

@include('layouts.menu-sidebar')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0"><b>Gráfica - Setor - Criar</b></h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{ route('login.logout') }}" class="btn btn-outline-primary"><i class="fas fa-unlock"></i></a> 
                <a href="{{ route('setor.index') }}" class="btn btn-outline-dark" >Listagem</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h5>Inserir</h5>    
                      </div>
                      <p>Atenção, evite erro, antes de prosseguir com o cadastro verifique se já não existeo setor no banco de dados, faça uma pesquisa na listagem, se não encontrar ai sim efetue o cadastramento do novo solicitante</p>
                  </div>
                 
                  </form>
                </div>
              </div>

              <div class="col-12">
                <div class="card">
                  <div class="card-header">

                  <!-- /.card-header -->
                  <form action="{{ route('setor.store') }}" method="POST">
                    @csrf
                    <x-alert />
                  <div class="card-body table-responsive p-0">
                    <div class="input-group mb-3">
                      
                      <div class="input-group-prepend">
                        <span class="input-group-text">NOME:</span>
                   
                      <input style="width: 850px" type="text" class="form-control" id="nome" value="{{ old('nome') }}"  name="nome" placeholder="informe o nome do setor aqui" >       
        </div>
                      <button type="submit" class="btn btn-success md ml-2">GRAVAR</button>
                    </div>   
                  </div>
                </form>
                           
  
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
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