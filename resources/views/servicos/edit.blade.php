@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Edição</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('servicos.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('servicos.view', ['servicos' => $servicos->id]) }}" class="btn ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('servicos.delete', ['servicos' => $servicos->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn  btn-sm me-1 "
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">Apagar</span>
                        <i class="fa-solid fa-trash"></i>
                    
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('servicos.update', ['servicos' => $servicos->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="nome" >Nome: </label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                        value="{{ old('nome', $servicos->nome) }}">
                    </div>

                    <div class="mb-3">
                        <label for="custo_recorente" class="form-label">Custo Recorente </label>
                        <input type="text" name="custo_recorente" id="custo_recorente" 
                        placeholder="Melhor e-mail do usuário" value="{{ old('email', $servicos->custo_recorente) }}">
                    </div>

                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor </label>
                        <input type="text" min="1" max="30" name="valor" id="valor" value="{{ old('email', $servicos->valor) }}" >
                    </div>
                </div>

                <div class="col-6 col-lg-6 mt-2">
                    <div class="mb-3">
                        <label for="intervalo" class="form-label">Intervalo </label>
                        <input type="text" min="1" max="30" name="intervalo" id="intervalo"  value="{{ old('email', $servicos->intervalo) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descricao </label>
                        <input type="text" name="descricao" id="descricao"  placeholder="descricao completa"
                            value="{{ old('nome', $servicos->descricao) }}">
                    </div>
                </div>
                
                <a  class=" btnCadastrar">
                    <button type="submit">
                        <h5>Salvar</h5>
                        <i class="fa-solid fa-bookmark"></i>
                    </button>  
                </a>

            </form>
        </div>
    </div>
</div>

@endsection

