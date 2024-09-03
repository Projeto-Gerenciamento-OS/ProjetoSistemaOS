div@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Edição</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('servico.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('servico.view', ['servico' => $servico->id]) }}" class="btn ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('servico.delete', ['servico' => $servico->id]) }}">
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

            <form action="{{ route('servico.update', ['servico' => $servico->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="nome" >nome: </label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                        value="{{ old('nome', $servico->nome) }}">
                    </div>

                    <div class="mb-3">
                        <label for="tempo" class="form-label">tempo </label>
                        <input type="text" name="tempo" id="tempo" 
                        placeholder="coloque o tempo" value="{{ old('tempo', $servico->tempo) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="valor" class="form-label">valor </label>
                        <input type="number" min="1" name="valor" id="valor" value="{{ old('valor', $servico->valor) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="custo" class="form-label">custo </label>
                        <input type="text" name="custo" id="custo" 
                        placeholder="coloque o custo" value="{{ old('custo', $servico->custo) }}">
                    </div>

                    <div class="mb-3">
                        <label for="obs" class="form-label">obs </label>
                        <input type="text" name="obs" id="obs" 
                        placeholder="coloque o obs" value="{{ old('obs', $servico->obs) }}">
                    </div>

                </div>


                <div class="col-6 col-lg-6 mt-2">
                    <div class="mb-3">
                        <label for="recorrente" class="form-label">recorrente </label>
                        <input type="text" name="recorrente" id="recorrente"  value="{{ old('recorrente', $servico->recorrente) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="intervalo" class="form-label">intervalo </label>
                        <input type="text" name="intervalo" id="intervalo"  value="{{ old('intervalo', $servico->intervalo) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">id_emp2 </label>
                        <input type="text" name="id_emp2" id="id_emp2"  value="{{ old('id_emp2', $servico->id_emp2) }}" >
                    </div>
                    
                    <div class="mb-3">
                        <label for="id_os1" class="form-label">id_os1 </label>
                        <input type="text" name="id_os1" id="id_os1"  value="{{ old('id_os1', $servico->id_os1) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">id_users </label>
                        <input type="text" name="id_users" id="id_users"  placeholder="id_users "
                            value="{{ old('id_users', $servico->id_users) }}">
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

