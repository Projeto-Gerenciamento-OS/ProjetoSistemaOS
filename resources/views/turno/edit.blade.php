@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Edição</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('turno.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('turno.view', ['turno' => $turno->id]) }}" class="btn ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('turno.delete', ['turno' => $turno->id]) }}">
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

            <form action="{{ route('turno.update', ['turno' => $turno->id]) }}" method="POST" class="row  ">
                @csrf
                @method('PUT')

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="nome" >nome: </label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                        value="{{ old('nome', $turno->nome) }}">
                    </div>

                    <div class="mb-3">
                        <label for="inicio" class="form-label">inicio </label>
                        <input type="text" name="inicio" id="inicio" 
                        placeholder="coloque o inicio" value="{{ old('inicio', $turno->inicio) }}">
                    </div>

                    <div class="mb-3">
                        <label for="pausa" class="form-label">pausa </label>
                        <input type="text" name="pausa" id="pausa" 
                        placeholder="coloque o pausa" value="{{ old('pausa', $turno->pausa) }}">
                    </div>

                    <div class="mb-3">
                        <label for="retorno" class="form-label">retorno </label>
                        <input type="text" name="retorno" id="retorno" 
                        placeholder="coloque o retorno" value="{{ old('retorno', $turno->retorno) }}">
                    </div>
                </div>


                <div class="col-6 col-lg-6 mt-2">
                    <div class="mb-3">
                        <label for="termino" class="form-label">termino </label>
                        <input type="text" name="termino" id="termino"  value="{{ old('termino', $turno->termino) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">id_emp2 </label>
                        <input type="text" name="id_emp2" id="id_emp2"  value="{{ old('id_emp2', $turno->id_emp2) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">id_users </label>
                        <input type="text" name="id_users" id="id_users"  value="{{ old('id_users', $turno->id_users) }}" >
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

