<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Controle de estoque</title>
</head>
<body>
  <div class="container">

  <nav class="navbar navbar-default">
    <div class="container-fluid">

    <div class="navbar-header">      
      <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
    </div>

    @if(Auth::guest())
      <ul class="nav navbar-nav navbar-right">
      </ul>
    @else
     <ul class="nav navbar-nav navbar-right">
        <li><a href="/produtos">Listagem</a></li>
        <li><a href="/produtos/novo">Cadastrar produto</a></li>
        <li><a href="/login/logout">Logout</a></li>
        </li>
      </ul>
    @endif

    </div>
  </nav>

    @yield('conteudo')

  <footer class="footer">
      <p>© Wesley Cesário.</p>
  </footer>

  </div>
</body>
</html>

@yield('jquery')