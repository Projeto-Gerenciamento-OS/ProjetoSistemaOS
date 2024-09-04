@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">EDIÇÃO</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('turno.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('turno.view', ['turno' => $turno->id]) }}" class="btn ">
                    <span class="listar-texto">VISUALIZAR</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('turno.delete', ['turno' => $turno->id]) }}">
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

            <form action="{{ route('turno.update', ['turno' => $turno->id]) }}" method="POST" class="row  ">
                @csrf
                @method('PUT')
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="nome" class="form-label" >NOME</label>
                        <input type="text" name="nome" id="nome"  placeholder="Digeite o(a) NOME..."
                            value="{{ old('nome', $turno->nome) }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2</label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder="Digeite o(a) EMPRESA 2..."
                            value="{{ old('id_emp2', $turno->id_emp2) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">USUÁRIO</label>
                        <input type="text" name="id_users" id="id_users"    placeholder="Digeite o(a) USUARIOS..."
                            value="{{ old('id_users', $turno->id_users) }}" >
                    </div>
                </div>


                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="termino" class="form-label">TERMINO</label>
                        <input type="time" name="termino" id="termino"    placeholder="Digeite o(a) TERMINO..."
                            value="{{ old('termino', $turno->termino) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="inicio" class="form-label">INICIO</label>
                        <input type="time" name="inicio" id="inicio"  placeholder="Digeite o(a) INICIO..."
                        value="{{ old('inicio', $turno->inicio) }}">
                    </div>

                    <div class="mb-3">
                        <label for="pausa" class="form-label">PAUSA</label>
                        <input type="time" name="pausa" id="pausa"  placeholder="Digeite o(a) PAUSA..."
                            value="{{ old('pausa', $turno->pausa) }}">
                    </div>

                    <div class="mb-3">
                        <label for="retorno" class="form-label">RETORNO</label>
                        <input type="time" name="retorno" id="retorno"  placeholder="Digeite o(a) RETORNO..."
                            value="{{ old('retorno', $turno->retorno) }}">
                    </div>
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

