@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="  card-header"  >
            <h1 class="mt-3">VISUALIZAR</h1>
            
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('servico.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
    
                <a href="{{ route('servico.edit', ['servico' => $servico->id]) }}" class="btn  btn-sm me-1">
                    <span class="listar-texto">EDIÇÃO</span>
                    <i class="fa-solid fa-pen"></i>
                </a>
    
                <form method="POST" action="{{ route('servico.delete', ['servico' => $servico->id]) }}">
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
                    <p class="col-6">{{ $servico->id }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">NOME: </span>
                    <p class="col-6">{{ $servico->nome}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">tempo: </span>
                    <p class="col-6">{{ $servico->tempo }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">VALOR:</span>
                    <p class="col-6">{{ $servico->valor }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">CUSTO:</span>
                    <p class="col-6">{{ $servico->custo }}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">OBS:</span>
                    <p class="col-6">{{ $servico->obs}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">recorrente: </span>
                    <p class="col-6">{{ $servico->recorrente}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">intervalo: </span>
                    <p class="col-6">{{ $servico->intervalo}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">EMPRESA 2: </span>
                    <p class="col-6">{{ $servico->id_emp2}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">ID OS 1:</span>
                    <p class="col-6">{{ $servico->id_os1}}</p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">USUARIOS:</span>
                    <p class="col-6">{{ $servico->id_users}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">CADASTRADO: </span>
                    <p class="col-6">
                        {{ \Carbon\Carbon::parse($servico->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-6 col-lg-4">EDITADO: </span>
                    <p class="col-6">
                        {{ \Carbon\Carbon::parse($servico->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
