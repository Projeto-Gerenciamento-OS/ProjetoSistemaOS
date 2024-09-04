@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Editar</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('colaborador.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
                <a href="{{ route('colaborador.view', ['colaborador' => $colaborador->id]) }}" class=" btn ">
                    <span class="listar-texto">VISUALIZAR</span>
                    <i class="fa-regular fa-eye"></i>
                </a>
                <form method="POST" action="{{ route('colaborador.delete', ['colaborador' => $colaborador->id]) }}">
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

        <div class="card-body">
            <x-alert />

            <form action="{{ route('colaborador.update', ['colaborador'=>$colaborador->id]) }}" method="POST" class="row  ">
                @csrf
                @method('PUT')



                <div class="col-6 col-lg-6">
    
                    <div class="mb-3">
<<<<<<< HEAD
                        <label class="form-label"  for="nome" class="form-label">NOME:</label>
=======
                        <label class="form-label"  for="nome" class="form-label">NOME</label>
>>>>>>> 2357e32af0673e37979a2053f6b6656ca4d66f24
                        <input type="text" name="nome" id="nome" placeholder="nome" value="{{ old('nome',$colaborador->nome) }}">              
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label"  for="fone" class="form-label">TELEFONE:</label>
                        <input type="text" name="fone" id="fone" placeholder="fone" value="{{ old('fone',$colaborador->fone) }}">              
                    </div>
        
        
                    <div class="mb-3">
<<<<<<< HEAD
                        <label class="form-label"  for="id_emp2" class="form-label">EMPRESA 2:</label>
=======
                        <label class="form-label"  for="id_emp2" class="form-label">EMPRESA 2</label>
>>>>>>> 2357e32af0673e37979a2053f6b6656ca4d66f24
                        <input type="text" name="id_emp2" id="id_emp2" placeholder="id_emp2" value="{{ old('id_emp2',$colaborador->id_emp2) }}">              
                    </div>
    
                </div>

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
<<<<<<< HEAD
                        <label class="form-label"  for="id_users" class="form-label">ID USUÁRIO:</label>
=======
                        <label class="form-label"  for="id_users" class="form-label">USUÁRIO</label>
>>>>>>> 2357e32af0673e37979a2053f6b6656ca4d66f24
                        <input type="number" name="id_users" id="id_users" placeholder="id_users" value="{{ old('id_users',$colaborador->id_users) }}">              
                    </div>
        
        
                    <div class="mb-3">
                        <label class="form-label"  for="id_turno" class="form-label">ID TURNO:</label>
                        <input type="number" name="id_turno" id="id_turno" placeholder="id_turno" value="{{ old('id_turno',$colaborador->id_turno) }}">              
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label"  for="id_setor" class="form-label">ID SETOR:</label>
                        <input type="number" name="id_setor" id="id_setor" placeholder="id_setor" value="{{ old('id_setor',$colaborador->id_setor) }}">              
                    </div>

                </div>
                
                <a  class="btnCadastrar">
                    <button type="submit">
                        <h5>SALVAR</h5>
                    </button>  
                </a>
            </form>
        </div>
    </div>
</div>
@endsection