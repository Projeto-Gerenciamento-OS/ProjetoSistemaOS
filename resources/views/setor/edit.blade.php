@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="  card-header"  >
            <h2 class="mt-3">EDIÇÃO</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('setor.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('setor.view', ['setor' => $setor->id]) }}" class="btn ">
                    <span class="listar-texto">VISUALIZAR</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('setor.delete', ['setor' => $setor->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn  btn-sm me-1 "
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">APAGAR</span>
                        <i class="fa-solid fa-trash"></i>
                    
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('setor.update', ['setor' => $setor->id]) }}" method="POST" class="row  ">
                @csrf
                @method('PUT')

                <div class="col-6 col-lg-6 ">
                    <div class="mb-3">
                        <label for="id_emp2" >EMPRESA 2</label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder="id_emp2 completo"
                        value="{{ old('id_emp2', $setor->id_emp2) }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">USUÁRIO</label>
                        <input type="text" name="id_users" id="id_users" 
                        placeholder="coloque o id_users" value="{{ old('id_users', $setor->id_users) }}">
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao" 
                        placeholder="coloque o descricao" value="{{ old('descricao', $setor->descricao) }}">
                    </div>
                </div>
                
                <a  class=" btnCadastrar">
                    <button type="submit">
                        <h5>SALVAR</h5>
                    </button>  
                </a>

            </form>
        </div>
    </div>
</div>

@endsection

