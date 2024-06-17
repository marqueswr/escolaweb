<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CSSG</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
 
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-home"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('login') }}" class="nav-link">Página inicial</a>
      </li>
     
    </ul>

   
  </nav>

@include('layouts.menu-sidebar')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tecnologia da Informação CSSG</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('login.logout') }}">Sair</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Seja bem vindo(a) a nossa página inicial dos sistemas</h3>
                 
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <div class="200">Alguns dos nossos sistemas foram desenvovidos especialmente para o setor correspondente,
                       sendo assim procure utilizar apenas o sistema relacionado ao seu setor, caso não tenha acesso a outros 
                       istemas solicite a TI que será anlisada a sua requisição</div>
                  </p>         
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
            <!-- /.card --> 
            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                                                   
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex">
                          <p class="d-flex flex-column">
                            <div class="row">

                              <div class="col-md-2">
                                <div class="card">
                                  <img src="assets/dist/img/imgBiblioteca.jpg" class="card-img-top">
                                  <div class="card-body alert alert-danger">
                                    <p class="card-text"><b><span class="alert alert-danger">Biblioteca</span></b></p>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card" >
                                  <img src="assets/dist/img/imgGrafica.jpg" class="card-img-top">
                                  <div class="card-body alert alert-danger">
                                    <p class="card-text"><b><span class="alert alert-danger">Gráfica</span></b></p>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <img src="assets/dist/img/imgOcorrencia.jpg" class="card-img-top">
                                  <div class="card-body alert alert-danger">
                                    <p class="card-text"><b><span class="alert alert-danger">Ocorrências</span></b></p>
                                  </div>
                                </div>
                              </div>

                                <div class="col-md-2">
                                <div class="card">
                                  <img src="assets/dist/img/imgLaboratorio.jpg" class="card-img-top">
                                  <div class="card-body alert alert-danger">
                                    <p class="card-text"><b><span class="alert alert-danger">Secretaria</span></b></p>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                <div class="card">
                                  <img src="assets/dist/img/imgSAude.jpg" class="card-img-top">
                                  <div class="card-body alert alert-danger">
                                    <p class="card-text"><b><span class="alert alert-danger">Saúde</span></b></p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="card">
                                  <img src="assets/dist/img/imgPonto.jpg" class="card-img-top">
                                  <div class="card-body alert alert-danger">
                                    <p class="card-text"><b><span class="alert alert-danger">Ponto</span></b></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                          </p>         
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