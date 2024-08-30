@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
   
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Editar Colaborador</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('colaborador.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
                <a href="{{ route('colaborador.view', ['colaborador' => $colaborador->id]) }}" class=" btn ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>
                <form method="POST" action="{{ route('colaborador.delete', ['colaborador' => $colaborador->id]) }}">
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

            <form action="{{ route('colaborador.update', ['colaborador'=>$colaborador->id]) }}" method="POST" class="row g-3">
                              
                @csrf
                @method('PUT')



                <div class="col-6 col-lg-6">
                
                    <div class="mb-3">
                        <label for="id" class="form-label">ID:</label>
                        <input type="number" name="id" id="id" class="form-control" placeholder="id" value="{{ old('id',$colaborador->id) }}">              
                    </div>
            
                    <div class="mb-3">
                        <label for="id_emp1" class="form-label">Empresa1:</label>
                        <input type="number" name="id_emp1" id="id_emp1" class="form-control" placeholder="Empresa1" value="{{ old('id',$colaborador->id_emp1) }}">              
                    </div>
        
                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">Empresa2:</label>
                        <input type="number" name="id_emp2" id="id_emp2" class="form-control" placeholder="Empresa2" value="{{ old('id',$colaborador->id_emp2) }}">              
                    </div>
        
        
                    <div class="mb-3">
                        <label for="id_setor" class="form-label">Setor:</label>
                        <input type="text" name="id_setor" id="id_setor" class="form-control" placeholder="setor" value="{{ old('id',$colaborador->id_setor) }}">              
                    </div>
    
                </div>

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="id_turno" class="form-label">Turno:</label>
                        <input type="text" name="id_turno" id="id_turno" class="form-control" placeholder="Turno" value="{{ old('id',$colaborador->id_turno) }}">              
                    </div>
        
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" value="{{ old('id',$colaborador->nome) }}">              
                    </div>
        
                    <div class="mb-3">
                        <label for="fone" class="form-label">Telefone:</label>
                        <input type="number" name="fone" id="fone" class="form-control" placeholder="Telfone" value="{{ old('id',$colaborador->fone) }}">              
                    </div>

                </div>
                
                <a  class="  btnCadastrar">
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