@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
       
        
        <div class="cardHeaderAsociados card-header"  >
            <h1 class="mt-3">Visualizar</h1>
            
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('user.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
    
                <a href="{{ route('user.edit', ['user' => $users->id]) }}" class="btn  btn-sm me-1">
                    <span class="listar-texto">Editar</span>
                    <i class="fa-solid fa-pen"></i>
                </a>
    
                <form method="POST" action="{{ route('user.delete', ['user' => $users->id]) }}">
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
                    <p class="col-2">{{ $users->id }}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">NOME: </span>
                    <p class="col-5">{{ $users->nome}}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">EMAIL: </span>
                    <p class="col-8">{{ $users->email }}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">TIPO: </span>
                    <p class="col-5">{{ $users->tipo }}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">EMPRESA 2: </span>
                    <p class="col-5">{{ $users->id_emp2 }}</p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">NÍVEL: </span>
                  
                    <p class="col-5">
                        {{--Visualizando o tipo de permissão do usurio--}}
                        @forelse($users->getRoleNames() as $role)

                        {{ $role }}

                        @empty

                        {{ "-" }}

                        @endforelse


                    </p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">Cadastrado: </span>
                    <p class="col-8">
                        {{ \Carbon\Carbon::parse($users->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>

                <div class='visualizacaoDados row'>
                    <span class="col-4">Editado: </span>
                    <p class="col-8">
                    {{ \Carbon\Carbon::parse($users->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


