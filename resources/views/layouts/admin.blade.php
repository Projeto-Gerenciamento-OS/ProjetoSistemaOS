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

<title>Sistema OS</title>
</head>
<body>
    
    <nav id="sidebar" class=''>
        <div id="sidebar_content">
            
            <div id="user">
                <img src="{{ asset('img/logo.png') }}" id="user_avatar"  alt="Logo da empresa" />
    
                <p id="user_infos">
                    <span class="item-description">
                        Fulano de Tal
                    </span>
                    <span class="item-description">
                        Lorem Ipsum
                    </span>
                </p>
            </div>
    
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
                    @can('empresas','empresa')
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsEmp" aria-expanded="false" aria-controls="collapseLayoutsEmp">
                        <i class="fa-solid fa-chalkboard-user "></i>
                        
                        <span class="nav-text item-description">
                            Empresas
                        </span>

                        <div class="sb-sidenav-collapse-arrow mx-1">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>

                    <div class="collapse" id="collapseLayoutsEmp" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav fundo-nav-cadastros-gerais">                         
                            <a class="nav-link" href="{{ route('emp1.index') }}">Empresa 1</a>
                            <a class="nav-link" href="{{ route('emp2.index') }}">Empresa 2</a>
                        </nav>
                    </div>
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
                        <i class="fa-solid fa-chalkboard-user "></i>
                        
                        <span class="nav-text item-description">
                            Colaborador
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <i class="fas fa-columns "></i>

                        <span class="nav-text item-description">
                            Cadastro Gerais
                        </span>

                        <div class="sb-sidenav-collapse-arrow mx-1">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav fundo-nav-cadastros-gerais d-flex flex-col">
                                <a class="nav-link" href="{{route('servico.index') }}">Serviços Gerais</a>
                                <a class="nav-link" href="{{route('materiais.index') }}">Materiais</a>
                                <a class="nav-link" href="{{route('custos.index') }}">Custo Geral</a>
                                <a class="nav-link" href="{{route('status.index') }}">Status</a>
                                <a class="nav-link" href="{{route('turno.index') }}">Turno</a>
                                <a class="nav-link" href="{{route('setor.index') }}">Setor</a>
                            </nav>
                        </div>
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
                    <a class="nav-link" href="">
                            <i class="fa-solid fa-calendar-days "></i>

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

        <div id="logout ">
            <button id="logout_btn" class="side-item">
                <a @class(['nav-link']) href="{{route('login.delete') }}">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="item-description">
                        Sair
                    </span>
                </a>
            </button>
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