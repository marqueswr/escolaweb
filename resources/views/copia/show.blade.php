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
            <h5 class="m-0"><b>Gráfica - Cópias - Detalhes</b></h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{ route('login.logout') }}" class="btn btn-outline-primary"><i class="fas fa-unlock"></i></a> 
                <a href="{{ route('copia.index') }}" class="btn btn-outline-dark" >Listagem</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content container">

      <div class="container-fluid">

    <div class="row">
		<div class="col-md-12">
			<div class="row">
			<div class="card-header">
 				
                    		<x-alert />
			</div>

		<div>     		  
<input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}"/>
      <div class="row">
        <div class="col-md-12">
              <span class="input-group-text">DESCRIÇÃO:</span>
              <input class="form-control" type="text"  id="descricao" name="descricao"  value="{{ old('descricao', $copia->descricao) }}" disabled/>            
              </div>
      </div>
<br>
<div class="row">
  <div class="col-md-6">
    <select  id="disciplina_id" name="disciplina_id" class="form-control" disabled>
      <option value="">-- Selecione a disciplina --</option>
      @foreach ($disciplinas as $disciplina)
      <option value="{{ $disciplina->id }}"
        {{ old('disciplina_id', $copia->disciplina_id) == $disciplina->id ? 'selected' : '' }}>
        {{ $disciplina->nome }}</option>
      @endforeach
  </select>
  </div>

  <div class="col-md-6">
    <select  id="serie_id" name="serie_id" class="form-control" disabled>
      <option value="">-- Selecione a série --</option>
      @foreach ($series as $serie)
      <option value="{{ $serie->id }}"
        {{ old('serie_id', $copia->serie_id) == $serie->id ? 'selected' : '' }}>
        {{ $serie->nome }}</option>
      @endforeach
  </select>
  </div>

</div>
<br>

<div class="row">
  <div class="col-md-6">
    <select  name="mes" id="mes" class="form-control" disabled>
      <option value="{{ $copia->mes }}">{{ $copia->mes }}</option> 
      <option value="">-- Selecione o mês --</option>   
      <option value="julho">
          Julho
      </option>
      <option value="agosto">
        Agosto
      </option>
      <option value="setembro">
        Setembro
    </option>
    <option value="outubro">
      Outubro
  </option>
  <option value="novembro">
    Novembro
</option>
<option value="dezembro">
  Dezembro
</option>
  </select>
  </div>
 
  <div class="col-md-6">
    <select  id="solicitante_id" name="solicitante_id" class="form-control" disabled>
      <option value="">-- Selecione o responsável --</option>
      @foreach ($solicitantes as $solicitante)
      <option value="{{ $solicitante->id }}"
        {{ old('solicitante_id', $copia->solicitante_id) == $solicitante->id ? 'selected' : '' }}>
        {{ $solicitante->nome }}</option>
      @endforeach
  </select>
  </div>
</div>
<br>

<div class="row">
  <div class="col-md-6">
    <select  id="setores_id" name="setores_id" class="form-control" disabled>
      <option value="">-- Selecione o setor --</option>
      @foreach ($setores as $setor)
      <option value="{{ $setor->id }}"
        {{ old('setores_id', $copia->setores_id) == $setor->id ? 'selected' : '' }}>
        {{ $setor->nome }}</option>
      @endforeach
  </select>
  </div>

  <div class="col-md-6">
    <select  name="tipo" id="tipo" class="form-control" disabled>
      <option value="{{ $copia->tipo }}">{{ $copia->tipo }}</option> 
      <option value="">-- Selecione o tipo --</option>   
      <option value="colorida">
          colorida
      </option>
      <option value="preto e branco">
        preto e branco
      </option>
  </select>
  </div>
</br>
</br>
</br>
<div class="row">
  <div class="col-md-6">
    <div class="input-group-prepend">
      <span class="input-group-text">QUANTIDADE:</span>
      <input style="width: 850px" type="number" class="form-control" id="quantidade" value="{{ old('quantidade', $copia->quantidade) }}"  name="quantidade" placeholder="informe a quantidade" disabled>       
    </div>
  </div>
 
  <div class="col-md-6">
    <div class="input-group-prepend">
      <span class="input-group-text">DATA:</span>
      <input style="width: 850px" type="date" class="form-control" id="dtasolicitacao"  value="{{ old('dtasolicitacao', $copia->dtasolicitacao) }}" name="dtasolicitacao" disabled>       
    </div>
  </div>
</div>

</br>



  <p></br>


</div>
		</div>
  
	</div>
 


      </div>
    </div></div></div></div></div>
    @include('layouts.footer')
    </div> 
 
  </div>
 
  <aside class="control-sidebar control-sidebar-dark">
  </aside>

@include('layouts.scripts')

</body>
</html>