@extends('layouts.admin')

@section('content')

<div class="dashboard">


    <div class="BodyLayout">
        
        <a class='dashCard' href="{{route('colaborador.index') }}">
            <i class="fa-solid fa-people-group"></i>
            
            <span class="dashTexto">
                Colaborador
            </span>
        </a>

        <a class='dashCard' href="{{route('os.index') }}">
            <i class="fa-solid fa-box-open"></i>
            
            <span class="dashTexto">
                Ordem de Serviço
            </span>
        </a>

        <a class='dashCard' href="{{route('fullcalender.index') }}">
            <i class="fa-solid fa-calendar"></i>
            
            <span class="dashTexto">
                Agenda
            </span>
        </a>

        <a class='dashCard' href="{{route('login.delete') }}">
                <i class="fa-solid fa-arrow-right-from-bracket "></i>
        
            <span class="dashTexto">
                Sair
            </span>
        </a>
    </div>
</div>

@endsection