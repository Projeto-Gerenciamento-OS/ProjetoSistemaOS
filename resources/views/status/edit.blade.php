@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Edição</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('status.index') }}" class="btn btnIcons btn-primary">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('status.view', ['status' => $status->id]) }}" class="btnIcons btn btn-light">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('status.delete', ['status' => $status->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btnIcons btn-sm me-1"
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">Apagar</span>
                        <i class="fa-solid fa-trash"></i>
                    
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('status.update', ['status' => $status->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-6 gap-3">
                    <div class="col-12">
                        <label for="nome" >Nome: </label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                            value="{{ old('nome', $status->nome) }}">
                    </div>

                    <div class="col-12">
                        <label for="emp1" class="form-label">Empresa 1</label>
                        <input type="number" name="emp1" id="emp1" 
                            placeholder="Digite aqui..." value="{{ old('emp1', $status->emp1) }}">
                    </div>

                    <div class="col-12">
                        <label for="emp2" class="form-label">Empresa 2 </label>
                        <input type="number" name="emp2" id="emp2" 
                            placeholder="Digite aqui..." value="{{ old('emp2', $status->emp2) }}">
                    </div>
                </div>

                <div class="col-6 mt-2 gap-3">
                    <div class="col-12">
                        <label for="cor" class="form-label">Cor</label>
                        <input type="text" name="cor" id="cor" 
                            placeholder="Digite aqui..." value="{{ old('cor', $status->cor) }}">
                    </div>

                    <div class="col-12">
                        <label for="descricao" class="form-label">Descricao </label>
                        <input type="text" name="descricao" id="descricao"  placeholder="descricao completa"
                            value="{{ old('nome', $status->descricao) }}">
                    </div>
                </div>
                
                <a  class=" btnIcons btnCadastrar">
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

