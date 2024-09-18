@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="  card-header"  >
            <h1 class="mt-1">Visualizar</h1>
                
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('emp1.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
    
                <a href="{{ route('emp1.edit', ['emp1' => $emp1->id]) }}" class="btn ">
                    <span class="listar-texto">EDIÇÃO</span>
                    <i class="fa-solid fa-pen"></i>
                </a>
    
                <form method="POST" action="{{ route('emp1.delete', ['emp1' => $emp1->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn  "
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
                    <span class="col-4">ID: </span>
                    <p class="col-5">{{ $emp1->id}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">DESCRIÇÃO:</span>
                    <p class="col-5">{{ $emp1->descricao}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">CADASTRADO: </span>
                    <p class="col-5">
                        {{ \Carbon\Carbon::parse($emp1->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>
                
                <div class='visualizacaoDados row'>
                    <span class="col-4">EDITADO: </span>
                    <p class="col-5">
                        {{ \Carbon\Carbon::parse($emp1->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection