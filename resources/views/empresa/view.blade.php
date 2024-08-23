@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Detalhes Empresa</h2>
        
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('empresa.index') }}" class="btn btn-primary">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
    
                <a href="{{ route('empresa.edit', ['empresa' => $empresa->id]) }}" class="btn btn-warning btn-sm me-1">
                    <span class="listar-texto">Editar</span>
                    <i class="fa-solid fa-pen"></i>
                </a>
    
                <form method="POST" action="{{ route('empresa.delete', ['empresa' => $empresa->id]) }}">
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

        <div class="card-body ">
            <x-alert />

                <div class="col-12 col-lg-4 " id="marginVisualizar-empresa">
                    <div class="visualizacaoDados row">
                        <span class="col-6">ID: </span>
                        <p class="col-6">{{ $empresa->id }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">CNPJ: </span>
                        <p class="col-6">{{ $empresa->cnpj }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Razão Social: </span>
                        <p class="col-6">{{ $empresa->razao }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Fantasia: </span>
                        <p class="col-6">{{ $empresa->fantasia }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">CEP: </span>
                        <p class="col-6">{{ $empresa->cep }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Logradouro: </span>
                        <p class="col-6">{{ $empresa->logradouro }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Telefone 2: </span>
                        <p class="col-6">{{ $empresa->fone2 }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Plano: </span>
                        <p class="col-6">{{ $empresa->plano }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Quant Admin: </span>
                        <p class="col-6">{{ $empresa->qtdadm }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                    <span class="col-6">Editado: </span>
                    <p class="col-6">
                        {{ \Carbon\Carbon::parse($empresa->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Número: </span>
                        <p class="col-6">{{ $empresa->numero }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Bairro: </span>
                        <p class="col-6">{{ $empresa->bairro }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Cidade: </span>
                        <p class="col-6">{{ $empresa->cidade }}</p>
                    </div>
        
                    <div class="visualizacaoDados row">
                        <span class="col-6">UF: </span>
                        <p class="col-6">{{ $empresa->uf }}</p>
                    </div>


                    <div class="visualizacaoDados row">
                        <span class="col-6">Telefone 1: </span>
                        <p class="col-6">{{ $empresa->fone1 }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Quant Oper: </span>
                        <p class="col-6">{{ $empresa->qtdoper }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Cadastrado: </span>
                        <p class="col-6">
                            {{ \Carbon\Carbon::parse($empresa->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                        </p>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection

