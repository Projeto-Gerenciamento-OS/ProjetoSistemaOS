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

    <main class="layoutAdmin">
        <div class="layoutSidenav_nav">

            <nav id='navContainerGeral' class="sb-sidenav accordion sb-sidenav-five " id="sidenavAccordion">
                <a href="{{('dashboard')}}" class="nav-logo">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo da empresa">
                </a>
                
                <div class="sb-sidenav-menu">
                    <ul class="nav">
                        <li>
                            <a @class(['nav-link', 'active' => isset($menu) && $menu =='dashboard']) href="{{route('dashboard.index') }}" >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-tachometer-alt fa-2x"></i>
                                </div>

                                <span class="nav-text">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        

                        <li>
                            @can('index-user')
                            <a @class(['nav-link', 'active' => isset($menu) && $menu =='user']) href="{{ route('user.index')}}">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-chalkboard-user fa-2x"></i>
                                </div>
    
                                <span class="nav-text">
                                    Usuarios
                                </span>
                            </a>
                            @endcan
                        </li>
                        
                        <li>
                            @can('empresas','empresa')
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsEmp" aria-expanded="false" aria-controls="collapseLayoutsEmp">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-chalkboard-user fa-2x"></i>
                                </div>
    
                                <span class="nav-text">
                                    Empresas
                                </span>
    
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayoutsEmp" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav fundo-nav-cadastros-gerais">
                                    <a class="nav-link" href="{{route('empresas.index') }}">Empresa</a>
                                    <a class="nav-link" href="{{route('empresa.index') }}">Empresas Afiliadas</a>
    
                                </nav>
                            </div>
                            @endcan
                        </li>
                        
                        
                        <li>
                            <a @class(['nav-link', 'active' => isset($menu) && $menu =='coloaborador']) href="{{route('colaborador.index') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-chalkboard-user fa-2x"></i>
                                </div>
    
                                <span class="nav-text">
                                    Colaborador
                                </span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-columns fa-2x"></i>
                                </div>
    
                                <span class="nav-text">
                                    Cadastro Gerais
                                </span>
    
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                        
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav fundo-nav-cadastros-gerais">
                                        <a class="nav-link" href="{{route('servicos.index') }}">Serviços Gerais</a>
                                        <a class="nav-link" href="{{route('materiais.index') }}">Materiais</a>
                                        <a class="nav-link" href="{{route('custos.index') }}">Custo Geral</a>
                                        <a class="nav-link" href="{{route('status.index') }}">Status</a>
                                    </nav>
                                </div>
                        </li>

                        <li>
                            <a class="nav-link" href="{{route('os1.index')}}">
                                <div class="sb-nav-link-icon">  <i class="fa-solid fa-box-open"></i></div>
                                        
                                Ordem de Serviço
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon">  
                                    <i class="fa-solid fa-calendar-days fa-2x"></i>
                                </div>
    
                                <span class="nav-text">
                                    Agenda
                                </span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="{{route('timeline.index')}}">
                                <div class="sb-nav-link-icon">  
                                    <i class="fa-solid fa-chart-line fa-2x"></i>
                                </div>
                                
                                <span class="nav-text">
                                    Linha do tempo
                                </span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link" href="{{route('login.delete')}}">
                                <div class="sb-nav-link-icon">  
                                    <i class="fa-solid fa-arrow-right-from-bracket fa-2x"></i>
                                </div>
    
                                <span class="nav-text">
                                    Sair
                                </span>
                            </a>
                        </li>
    
                    </ul>

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
        </div>

        <div class="layoutSidenav_content">
            <div class='mainConteudo'>
                @yield('content')
            </div>
        </div>
    </main>





<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}" ></script>
<script src="{{ asset('js/script2.js') }}" ></script>
<script src="{{ asset('js/all.min.js') }}" ></script>



    
</body>
</html>