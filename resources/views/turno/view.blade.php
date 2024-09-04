@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h1 class="mt-3">Visualização</h1>
            
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('turno.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
    
                <a href="{{ route('turno.edit', ['turno' => $turno->id]) }}" class="btn  btn-sm me-1">
                    <span class="listar-texto">Editar</span>
                    <i class="fa-solid fa-pen"></i>
                </a>
    
                <form method="POST" action="{{ route('turno.delete', ['turno' => $turno->id]) }}">
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

        <div class="card-body" >

            <x-alert />

            <div class="row">

                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">ID: </span>
                    <p class="col-6">{{ $turno->id }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">NOME: </span>
                    <p class="col-6">{{ $turno->nome}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">INICIO: </span>
                    <p class="col-6">{{ $turno->inicio }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">PAUSA: </span>
                    <p class="col-6">{{ $turno->pausa }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">RETORNO: </span>
                    <p class="col-6">{{ $turno->retorno }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">TERMINO: </span>
                    <p class="col-6">{{ $turno->termino}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">EMPRESA 2: </span>
                    <p class="col-6">{{ $turno->id_emp2}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">USUARIOS:</span>
                    <p class="col-6">{{ $turno->id_users}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">CADASTRADO: </span>
                    <p class="col-6">
                        {{ \Carbon\Carbon::parse($turno->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">EDITADO: </span>
                    <p class="col-6">
                        {{ \Carbon\Carbon::parse($turno->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
