@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="  card-header"  >
                <h1 class="mt-3">VISUALIZAR</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('materiais.index') }}" class="btn ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('materiais.edit', ['materiais' => $materiais->id]) }}" class="btn  ">
                        <span class="listar-texto">EDIÇÃO</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('materiais.delete', ['materiais' => $materiais->id]) }}">
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

                <dl class="row">

                    <dt class="col-6 col-lg-4">ID: </dt>
                    <dd class="col-6">{{ $materiais->id }}</dd>
                    
                    <dt class="col-6 col-lg-4">DESCRIÇÃO:</dt>
                    <dd class="col-6">{{ $materiais->descricao }}</dd>

                    <dt class="col-6 col-lg-4">UNIDADE:</dt>
                    <dd class="col-6">{{ $materiais->unidade }}</dd>

                    <dt class="col-6 col-lg-4">CUSTO:</dt>
                    <dd class="col-6">{{ $materiais->custo }}</dd>

                    <dt class="col-6 col-lg-4">VALOR:</dt>
                    <dd class="col-6">{{ $materiais->valor }}</dd>

                    <dt class="col-6 col-lg-4">EMPRESA 2:</dt>
                    <dd class="col-6">{{ $materiais->id_emp2}}</dd>

                    <dt class="col-6 col-lg-4">USUÁRIO</dt>
                    <dd class="col-6">{{ $materiais->id_users}}</dd>






                    <dt class="col-6 col-lg-4">CADASTRADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($materiais->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">EDITADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($materiais->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>

@endsection