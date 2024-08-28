@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h1 class="mt-1">Detalhes Empresa</h1>
                
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('empresas.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
    
                <a href="{{ route('empresas.edit', ['empresas' => $empresas->id]) }}" class="btn btn-sm me-1">
                    <span class="listar-texto">Editar</span>
                    <i class="fa-solid fa-pen"></i>
                </a>
    
                <form method="POST" action="{{ route('empresas.delete', ['empresas' => $empresas->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn  btn-sm me-1"
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
                    <span class="col-4">ID: </span>
                    <p class="col-5">{{ $empresas->id }}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">Descrição:</span>
                    <p class="col-5">{{ $empresas->descricao}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">Cadastrado: </span>
                    <p class="col-5">
                        {{ \Carbon\Carbon::parse($empresas->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>
                

                <div class='visualizacaoDados row'>
                    <span class="col-4">Editado: </span>
                    <p class="col-5">
                        {{ \Carbon\Carbon::parse($empresas->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection