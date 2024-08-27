@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista" id='visualizacaoCustos'>
        
        <div class="cardHeaderAsociados card-header"  >
                <h2 class="mt-3">Visualização</h2>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('custos.index') }}" class="btn ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('custos.edit', ['custos' => $custos->id]) }}" class="btn btn-sm me-1">
                        <span class="listar-texto">Editar</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('custos.delete', ['custos' => $custos->id]) }}">
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

                <dl class="row">

                    <dt class="col-6 col-lg-4">ID: </dt>
                    <dd class="col-6">{{ $custos->id }}</dd>

                    <dt class="col-6 col-lg-4">ID EMP1: </dt>
                    <dd class="col-6">{{ $custos->id_emp1}}</dd>

                    <dt class="col-6 col-lg-4">ID EMP2: </dt>
                    <dd class="col-6">{{ $custos->id_emp2 }}</dd>

                    <dt class="col-6 col-lg-4">Percentual: </dt>
                    <dd class="col-6">{{ $custos->percentual }}</dd>

                    <dt class="col-6 col-lg-4">Descrição: </dt>
                    <dd class="col-6">{{ $custos->descricao }}</dd>

                    <dt class="col-6 col-lg-4">Cadastrado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($custos->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">Editado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($custos->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>

@endsection