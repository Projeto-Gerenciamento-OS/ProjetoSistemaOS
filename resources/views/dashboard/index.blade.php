@extends('layouts.admin')

@section('content')

<div class="dashboard">
    <div class="BodyLayout">
        
        <a class='dashCard' href="{{route('colaborador.index') }}">
            <div>
                <i class="fa-solid fa-people-group"></i>

                <span class="dashTexto">
                    COLABORADOR
                </span>
            </div>    
            

            <div class='dashInfo'>
                Ver Detalhes 
            
                <span class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </span>
            </div>
        </a>

        <a class='dashCard' href="{{route('os.index') }}">
            <div>
                <i class="fa-solid fa-box-open"></i>

                <span class="dashTexto">
                    ORDEM DE SERVIÇO
                </span>
            </div>
            <div class='dashInfo'>
                Ver Detalhes 
            
                <span class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </span>
            </div>
        </a>

        <a class='dashCard' href="{{route('fullcalender.index') }}">
            <div>
                <i class="fa-solid fa-calendar"></i>
                
                <span class="dashTexto">
                    AGENDA
                </span>

            </div>
            
            <div class='dashInfo'>
                Ver Detalhes 
            
                <span class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </span>
            </div>
        </a>
        
        <a class='dashExcluir' href="{{route('login.delete') }}">
            <i class="fa-solid fa-arrow-right-from-bracket "></i>

            <span class="dashTexto">
                SAIR
            </span>
        </a>

    </div>
</div>

@endsection