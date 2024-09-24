<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

    <title>Sistema OS</title>
</head>
<body>
    
    <nav id="sidebar" class='open-sidebar'>
        <div id="sidebar_content">
            
            <a href="{{('dashboard')}}" class="nav-logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo da empresa">
            </a>
    
            <ul id="side_items">
                <li class="side-item">
                    <a @class(['nav-link', 'active' => isset($menu) && $menu =='dashboard']) href="{{route('dashboard.index') }}" >
                        <i class="fas fa-tachometer-alt "></i>
                        
                        <span class="nav-text item-description">
                            Dashboard
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    @can('index-user')
                        <a @class(['nav-link', 'active' => isset($menu) && $menu =='user']) href="{{ route('user.index')}}">
                            <i class="fa-solid fa-user"></i>
                            
                            <span class="nav-text item-description">
                                Usuarios
                            </span>
                        </a>
                    @endcan
                </li>
    
                <li class="side-item">
                    @can('index-user')
                        <a @class(['nav-link', 'active' => isset($menu) && $menu =='user']) href="{{ route('empresas.index')}}">
                            <i class="fa-regular fa-building"></i>
                            
                            <span class="nav-text item-description">
                                Empresas
                            </span>
                        </a>
                    @endcan
                </li>
    
                <li class="side-item">
                    <a @class(['nav-link', 'active' => isset($menu) && $menu =='cli']) href="{{route('cli.index') }}">
                        <i class="fa-solid fa-users"></i>
                        
                        <span class="nav-text item-description">
                            Cliente
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a @class(['nav-link', 'active' => isset($menu) && $menu =='coloaborador']) href="{{route('colaborador.index') }}">
                        <i class="fa-solid fa-people-group"></i>
                        
                        <span class="nav-text item-description">
                            Colaborador
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a @class(['nav-link', 'active' => isset($menu) && $menu =='coloaborador']) href="{{route('cadGeral.index') }}">
                        <i class="fas fa-columns "></i>
                        
                        <span class="nav-text item-description">
                            Cadastro Gerais
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a @class(['nav-link', 'active' => isset($menu) && $menu =='os']) href="{{route('os.index') }}">
                        <i class="fa-solid fa-box-open"></i>
                        
                        <span class="nav-text item-description">
                            Ordem de Serviço
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a @class(['nav-link', 'active' => isset($menu) && $menu =='os']) href="{{route('fullcalender.index') }}">
                        <i class="fa-solid fa-calendar"></i>
                        
                        <span class="nav-text item-description">
                            Agenda
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a @class(['nav-link', 'active' => isset($menu) && $menu =='timeline']) href="{{route('timeline.index') }}">
                            <i class="fa-solid fa-chart-line "></i>
                        
                        <span class="nav-text item-description">
                            Linha do tempo
                        </span>
                    </a>
                </li>

                <li class="side-item">
                    <a @class(['nav-link']) href="{{route('login.delete') }}">
                            <i class="fa-solid fa-arrow-right-from-bracket "></i>

                        <span class="nav-text item-description">
                            Sair
                        </span>
                    </a>
                </li>
            </ul>
    
            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div class="sb-sidenav-footer">
            <span class="small">User:</span>
            <span>

                @if (auth()->check())
                {{ auth()->user()->nome}}
                @endif
            </span>
        </div>
    </nav>

    <div class="layoutSidenav_content">
        <div class='mainConteudo'>
            @yield('content')
        </div>
    </div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}" ></script>
<script src="{{ asset('js/script2.js') }}" ></script>
<script src="{{ asset('js/all.min.js') }}" ></script>






</body>
</html>