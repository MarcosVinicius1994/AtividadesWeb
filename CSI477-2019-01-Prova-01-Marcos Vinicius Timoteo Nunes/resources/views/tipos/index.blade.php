<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo','Sistema Acadêmico')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  {{--
  Pagina contendo relatorio de tipos --}}
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Aplicação Transações</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/home') }}">Home</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Registrar</a></li>
      </ul>
    </div>
  </nav>


</head>
<body>

  @if(Session::has('mensagem'))
    <p><strong>{{ Session::get('mensagem') }}</strong></p>
  @endif

  <div class="ml-10">
    <ul class="nav nav-tabs">

      <li class="nav-item">
        <a href="/RelatoTipos"class="btn btn-primary" role="button">Relatorio de tipos</button></a>
      </li>
      <li class="nav-item">
        <a href="/RelatoClientes" class="btn btn-primary" role="button">Relatorio de clientes</button></a>
      </li>
      <li class="nav-item">
        <a href="/VoltarCliente" class="btn btn-primary" role="button">Voltar:</button></a>
      </li>
    </div>

    <div class="container">
      <div class="table-responsive">


        {{--
        Nesta tabela eu recupero todas as transações e exibo o ID e o tipo das mesmas --}}
        <table class="table">
          <thead>
            <tr>
              <th>Id da transação</th>
              <th>Tipo de transação</th>
            </tr>

          </thead>
          <tbody>
            @foreach ($tipos as $t)
              <tr>
                <td>{{ $t->id }}</td>
                <td>{{  $t->nome}}</td>
                {{-- <td><a href="{{ route('procedures.show', $e->id) }}">{{ $e->name }}</a></td> --}}

              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>






  </body>
  </html>
