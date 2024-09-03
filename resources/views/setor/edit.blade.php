@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Edição</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('setor.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('setor.view', ['setor' => $setor->id]) }}" class="btn ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('setor.delete', ['setor' => $setor->id]) }}">
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

            <form action="{{ route('setor.update', ['setor' => $setor->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="id_emp2" >id_emp2: </label>
                    <input type="text" name="id_emp2" id="id_emp2"  placeholder="id_emp2 completo"
                    value="{{ old('id_emp2', $setor->id_emp2) }}">
                </div>

                <div class="mb-3">
                    <label for="id_users" class="form-label">id_users </label>
                    <input type="text" name="id_users" id="id_users" 
                    placeholder="coloque o id_users" value="{{ old('id_users', $setor->id_users) }}">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">descricao </label>
                    <input type="text" name="descricao" id="descricao" 
                    placeholder="coloque o descricao" value="{{ old('descricao', $setor->descricao) }}">
                </div>
                
                <a  class=" btnCadastrar">
                    <button type="submit">
                        <h5>Salvar</h5>
                    </button>  
                </a>

            </form>
        </div>
    </div>
</div>

@endsection

