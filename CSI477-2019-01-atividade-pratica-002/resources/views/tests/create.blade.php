<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo','Sistema Acadêmico')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <nav class="navbar navbar-inverse ">
    <div class="container-fluid">

      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/home') }}">Home</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

    <div class="btn-group btn-group-justified">
      <a class="btn btn-primary">Formulario para adicionar teste</a>
    </div>
</head>

<body>



  <form  method="post" action="{{ route('tests.store') }}"> @csrf
    {{-- <form>
      <div class="form">

      <div class="form-group">
        <label for="inputNome">Nome:</label>
        <input type="text" class="form-control" id="inputName" placeholder="Nome do procedimento">
      </div>
      <div class="form-group">
        <label for="inputPrecço">Preço</label>
        <input type="text" class="form-control" id="inpuPreço" placeholder="Preço do procedimento">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputDataCria">Data de criação</label>
          <input type="text" class="form-control" id="inputData Cria">
        </div>
        <div class="form-group col-md-4">
          <label for="inputDadaAtua">Data de atualização</label>
            <input type="text" class="form-control" id="inputDadaAtua ">

            <option>...</option>
          </select>
        </div>
    </form> --}}

<div class="form">

  {{-- <div class="form-group">
    <label for="inputNomeADM">Administrador: {{auth::user()->name}} responsavel pela operação!!!</label>
  </div> --}}
  <div class="form-group">
    <label for="inputIDProc">ID do test:</label>
    <input type="number" name="id"class="form-control" id="inpuIDProc" placeholder="ID do teste">
  </div>
  <div class="form-group">
    <label for="inputUser">ID do usuario:</label>
    <input type="number" name="user_id"class="form-control" id="inpuUser" placeholder="ID do usuario">
  </div>
  <div class="form-group">
    <label for="inputProcedure">ID do procedimento:</label>
    <input type="number" name="procedure_id"class="form-control" id="inputProcedure" placeholder="ID do procedimento">
  </div>

  <div class="form-group">
    <label for="inputData">Data do teste:</label>
    <input type="date" name="date" class="form-control" id="inputData" placeholder="data do teste">
  </div>


    <div class="col-md-4">
      <a  class="btn btn-secondary" href="{{ route('tests.index') }}">Voltar</a>
      <input type="submit" name="btnSalvar" value="Incluir">
    </div>

  </div>
  </form>


  @yield('conteudo')





  </body>
  </html>
