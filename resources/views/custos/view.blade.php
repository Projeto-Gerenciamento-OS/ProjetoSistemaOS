@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista" id='visualizacaoCustos'>
        
        <div class="  card-header"  >
                <h2 class="mt-3">VISUALIZAR</h2>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('custos.index') }}" class="btn ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('custos.edit', ['custos' => $custos->id]) }}" class="btn btn-sm me-1">
                        <span class="listar-texto">EDIÇÃO</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('custos.delete', ['custos' => $custos->id]) }}">
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

                <dl class="row">

                    <dt class="col-6 col-lg-4">ID: </dt>
                    <dd class="col-6">{{ $custos->id }}</dd>

                    <dt class="col-6 col-lg-4">DESCRIÇÃO:</dt>
                    <dd class="col-6">{{ $custos->descricao }}</dd>

                    <dt class="col-6 col-lg-4"> PERCENTUAL:</dt>
                    <dd class="col-6">{{ $custos->percentual }}</dd>

                    <dt class="col-6 col-lg-4">EMPRESA 2: </dt>
                    <dd class="col-6">{{ $custos->id_emp2 }}</dd>

                    <dt class="col-6 col-lg-4">USUARIOS:</dt>
                    <dd class="col-6">{{ $custos->id_users }}</dd>

                    <dt class="col-6 col-lg-4">CADASTRADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($custos->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">EDITADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($custos->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>

@endsection