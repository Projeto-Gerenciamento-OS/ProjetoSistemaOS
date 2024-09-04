@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h1 class="mt-3">Visualizar</h1>
            
            <span class="ms-auto d-flex flex-row gap-2">
                <a href="{{ route('colaborador.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
    
                <a href="{{ route('colaborador.edit', ['colaborador' => $colaborador->id]) }}" class="btn  btn-sm me-1">
                    <span class="listar-texto">EDIÇÃO</span>
                    <i class="fa-solid fa-pen"></i>
                </a>
    
                <form method="POST" action="{{ route('colaborador.delete', ['colaborador' => $colaborador->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn  btn-sm me-1"
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">APAGAR</span>
                        <i class="fa-solid fa-trash"></i>
                    
                    </button>
                </form>
            </span>
        </div> 

        <div class="card-body">
            <x-alert />

            <div class="row">

                <div class='visualizacaoDados row'>
                    <span class='col-6 col-lg-4'> ID: </span>
                    <p class="col-6">{{ $colaborador->id }}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class='col-6 col-lg-4'> NOME:</span>
                    <p class="col-6">{{ $colaborador->nome}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class='col-6 col-lg-4'> TELEFONE:</span>
                    <p class="col-6">{{ $colaborador->fone}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class='col-6 col-lg-4'> EMPRESA 2:</span>
                    <p class="col-6">{{ $colaborador->id_emp2}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class='col-6 col-lg-4'> ID USUÁRIO:</span>
                    <p class="col-6">{{ $colaborador->id_users}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class='col-6 col-lg-4'> ID TURNO:</span>
                    <p class="col-6">{{ $colaborador->id_turno}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class='col-6 col-lg-4'> ID SETOR:</span>
                    <p class="col-6">{{ $colaborador->id_setor}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class='col-6 col-lg-4'>CADASTRADO:: </span>
                    <p class="col-6">
                        {{ \Carbon\Carbon::parse($colaborador->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class='col-6 col-lg-4'> EDITADO: </span>
                    <p class="col-6">
                        {{ \Carbon\Carbon::parse($colaborador->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection