@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="  card-header"  >
            <h2 class="mt-3">EDIÇÃO</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('status.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('status.view', ['status' => $status->id]) }}" class="btn ">
                    <span class="listar-texto">VISUALIZAR</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('status.delete', ['status' => $status->id]) }}">
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

        <div class="card-body">
            <x-alert />

            <form action="{{ route('status.update', ['status' => $status->id]) }}" method="POST" class="row  ">
                @csrf
                @method('PUT')

                <div class="BodyLayout">

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2</label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder="Nome completo"
                            value="{{ old('id_emp2', $status->id_emp2) }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">USUÁRIO</label>
                        <input type="number" name="id_users" id="id_users" 
                            placeholder="Digite aqui..." value="{{ old('id_users', $status->id_users) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="cor" class="form-label"> COR</label>
                        <input type="text" name="cor" id="cor" 
                            placeholder="Digite aqui..." value="{{ old('cor', $status->cor) }}">
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao"  placeholder="descricao completa"
                            value="{{ old('descricao', $status->descricao) }}">
                    </div>
                </div>
                
                <a  class="  btnCadastrar">
                    <button type="submit">
                        <h5>SALVAR</h5>
                    </button>  
                </a>

            </form>
        </div>
    </div>
</div>

@endsection

