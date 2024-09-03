@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 data-container " >
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Edição</h2>
            
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('custos.index') }}" class="btn  ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('custos.view', ['custos' => $custos->id]) }}" class=" btn  ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('custos.delete', ['custos' => $custos->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn  btn-sm me-1 "
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">Visualizar</span>
                        <i class="fa-solid fa-trash"></i>
                    
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('custos.update', ['custos' => $custos->id]) }}" method="POST" class="row  ">
                @csrf
                @method('PUT')

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="descricao" class="form-label" >descricao: </label>
                        <input type="text" name="descricao" id="descricao"  placeholder="descricao"
                            value="{{ old('descricao', $custos->descricao) }}">
                    </div>

                    <div class="mb-3">
                        <label for="percentual" class="form-label">percentual</label>
                        <input type="number" name="percentual" id="percentual" 
                            placeholder="Digite aqui o numero..." value="{{ old('percentual', $custos->percentual) }}">
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">id_emp2</label>
                        <input type="text" name="id_emp2" id="id_emp2" 
                            placeholder="Digite aqui..." value="{{ old('id_emp2', $custos->id_emp2) }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_users"  class="form-label">id_users</label>
                        <input type="text" name="id_users" id="id_users"  placeholder=" Digite o usuario aqui"
                            value="{{ old('id_users', $custos->id_users) }}">
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