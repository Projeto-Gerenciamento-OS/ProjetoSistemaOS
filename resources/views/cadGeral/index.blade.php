@extends('layouts.admin')

@section('content')


                            
                            
                            
                            
                            
<div class="menuExtendidoContainer">
    <div class="menuExtendido">
        <i class="fa-solid fa-bell-concierge"></i>
        <a class="nav-link" href="{{route('servico.index') }}">Serviços Gerais</a>
    </div>

    <div class="menuExtendido">
        <i class="fa-solid fa-recycle"></i>
        <a class="nav-link" href="{{route('materiais.index') }}">Materiais</a>
    </div>

    <div class="menuExtendido">
        <i class="fa-solid fa-money-bill"></i>
        <a class="nav-link" href="{{route('custos.index') }}">Custo Geral</a>
    </div>

    <div class="menuExtendido">
        <i class="fa-regular fa-face-smile-beam"></i>
        <a class="nav-link" href="{{route('status.index') }}">Status</a>
    </div>

    <div class="menuExtendido">
        <i class="fa-regular fa-clock"></i>
        <a class="nav-link" href="{{route('turno.index') }}">Turno</a>
    </div>

    <div class="menuExtendido">
    <i class="fa-solid fa-users-rectangle"></i>
        <a class="nav-link" href="{{route('setor.index') }}">Setor</a>
    </div>  
</div>

@endsection