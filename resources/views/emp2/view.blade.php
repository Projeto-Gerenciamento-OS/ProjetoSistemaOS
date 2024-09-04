@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Detalhes Empresa 2</h2>
        
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('emp2.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
    
                <a href="{{ route('emp2.edit', ['emp2' => $emp2->id]) }}" class="btn  btn-sm me-1">
                    <span class="listar-texto">Editar</span>
                    <i class="fa-solid fa-pen"></i>
                </a>
    
                <form method="POST" action="{{ route('emp2.delete', ['emp2' => $emp2->id]) }}">
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

        <div class="card-body ">
            <x-alert />

                <div class="col-12 col-lg-4 " id="marginVisualizar-empresa">
                    <div class="visualizacaoDados row">
                        <span class="col-6">ID: </span>
                        <p class="col-6">{{ $emp2->id_emp1 }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">CNPJ: </span>
                        <p class="col-6">{{ $emp2->cnpj }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Endereço: </span>
                        <p class="col-6">{{ $emp2->endereco }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Razão Social: </span>
                        <p class="col-6">{{ $emp2->razao }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Fantasia: </span>
                        <p class="col-6">{{ $emp2->fantasia }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">CEP: </span>
                        <p class="col-6">{{ $emp2->cep }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Telefone 2: </span>
                        <p class="col-6">{{ $emp2->fone2 }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Plano: </span>
                        <p class="col-6">{{ $emp2->plano }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">Quant Admin: </span>
                        <p class="col-6">{{ $emp2->qtdeadm }}</p>
                    </div>
                    
                    <div class="visualizacaoDados row">
                        <span class="col-6">Número: </span>
                        <p class="col-6">{{ $emp2->numero }}</p>
                    </div>
                    
                    <div class="visualizacaoDados row">
                        <span class="col-6">Bairro: </span>
                        <p class="col-6">{{ $emp2->bairro }}</p>
                    </div>
                    
                    <div class="visualizacaoDados row">
                        <span class="col-6">Cidade: </span>
                        <p class="col-6">{{ $emp2->cidade }}</p>
                    </div>
                    
                    <div class="visualizacaoDados row">
                        <span class="col-6">UF: </span>
                        <p class="col-6">{{ $emp2->uf }}</p>
                    </div>
                    
                    
                    <div class="visualizacaoDados row">
                        <span class="col-6">Telefone 1: </span>
                        <p class="col-6">{{ $emp2->fone1 }}</p>
                    </div>
                    
                    <div class="visualizacaoDados row">
                        <span class="col-6">Quant Oper: </span>
                        <p class="col-6">{{ $emp2->qtdeoper }}</p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">EDITADO: </span>
                        <p class="col-6">
                            {{ \Carbon\Carbon::parse($emp2->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                        </p>
                    </div>

                    <div class="visualizacaoDados row">
                        <span class="col-6">CADASTRADO: </span>
                        <p class="col-6">
                            {{ \Carbon\Carbon::parse($emp2->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                        </p>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection

