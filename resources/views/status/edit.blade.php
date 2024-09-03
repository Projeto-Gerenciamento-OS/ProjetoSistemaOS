@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Edição</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('status.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('status.view', ['status' => $status->id]) }}" class="btn ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('status.delete', ['status' => $status->id]) }}">
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

        <div class="card-body">
            <x-alert />

            <form action="{{ route('status.update', ['status' => $status->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-6 gap-3">
                    <div class="col-12">
                        <label for="id_emp2" >id_emp2: </label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder="Nome completo"
                            value="{{ old('id_emp2', $status->id_emp2) }}">
                    </div>

                    <div class="col-12">
                        <label for="id_users" class="form-label">id_users</label>
                        <input type="number" name="id_users" id="id_users" 
                            placeholder="Digite aqui..." value="{{ old('id_users', $status->id_users) }}">
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
                            value="{{ old('descricao', $status->descricao) }}">
                    </div>
                </div>
                
                <a  class="  btnCadastrar">
                    <button type="submit">
                        <h5>Salvar</h5>
                         
                    </button>  
                </a>

            </form>
        </div>
    </div>
</div>

@endsection

