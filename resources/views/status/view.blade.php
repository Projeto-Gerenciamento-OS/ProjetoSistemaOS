@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
    <div class="cardHeaderAsociados card-header"  >
            <h1 class="mt-3">Visualização</h1>
            
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('status.index') }}" class="btn btn-primary">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
    
                <a href="{{ route('status.edit', ['status' => $status->id]) }}" class="btn btn-warning btn-sm me-1">
                    <span class="listar-texto">Editar</span>
                    <i class="fa-solid fa-pen"></i>
                </a>
    
                <form method="POST" action="{{ route('status.delete', ['status' => $status->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm me-1"
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">Apagar</span>
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
                    <p class="col-6">{{ $status->id }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">Nome: </span>
                    <p class="col-6">{{ $status->nome}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">Empresa 1: </span>
                    <p class="col-6">{{ $status->emp1 }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">Empresa 2: </span>
                    <p class="col-6">{{ $status->emp2 }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">Cor: </span>
                    <p class="col-6">{{ $status->cor }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">Nome: </span>
                    <p class="col-6">{{ $status->descricao}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">Cadastrado: </span>
                    <p class="col-6">
                        {{ \Carbon\Carbon::parse($status->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">Editado: </span>
                    <p class="col-sm-5">
                    {{ \Carbon\Carbon::parse($status->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
