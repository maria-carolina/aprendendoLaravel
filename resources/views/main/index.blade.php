<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
            <a class="navbar-brand" href="#">Departamento de roupas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{request()->routeIs('inicio')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/')}}">Início </a>
                    </li>
                    <li class="nav-item dropdown {{request()->is('roupas/*')? 'active' : ''}}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Roupas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('listaRoupas')}}">Listar</a>
                            <a class="dropdown-item" href="{{route('cadastraRoupas')}}">Cadastrar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{request()->is('fornecedor/*')? 'active' : ''}}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fornecedor
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('listaFornecedor')}}">Listar</a>
                            <a class="dropdown-item" href="{{route('cadastraFornecedor')}}">Cadastrar</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        @yield('conteudo')
    </div>
    <script src="{{asset('js/app.js')}}"> </script>
</body>
</html>