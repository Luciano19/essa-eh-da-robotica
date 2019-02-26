<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Essa é da Robótica</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Essa eh da Robotica</h3>
            <strong>EEDR</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="#">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-home"></i>
                   <h4>Funcionarios</h4>
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#"><h5>Cadastrar</h5></a>
                    </li>
                    <li>
                        <a href="#"><h5>Listar</h5></a>
                    </li>
                </ul>
            </li>
            <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy"></i>
                    <h4>Departamentos</h4>
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#"><h5>Cadastrar</h5></a>
                    </li>
                    <li>
                        <a href="#"><h5>Listar</h5></a>
                    </li>
                </ul>

                <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy"></i>
                    <h4>Salas</h4>
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu2">
                    <li>
                        <a href="#"><h5>Cadastrar</h5></a>
                    </li>
                    <li>
                        <a href="#"><h5>Listar</h5></a>
                    </li>
                    <li>
                        <a href="#"><h5>Alocar</h5></a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
        </nav>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/javascript.js')}}"></script>
</body>
</html>