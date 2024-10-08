@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 data-container " >
    <div class="card mb-4 cardCorLista ">
        
        <div class="  card-header"  >
            <h2 class="mt-3">Editar</h2>
            
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('custos.index') }}" class="btn  ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('custos.view', ['custos' => $custos->id]) }}" class=" btn  ">
                    <span class="listar-texto">VISUALIZAR</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('custos.delete', ['custos' => $custos->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn   "
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">APAGAR</span>
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

                <div class="BodyLayout">
                    <div class="mb-3">
                        <label for="descricao" class="form-label" >DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao"  placeholder="descricao"
                            value="{{ old('descricao', $custos->descricao) }}">
                    </div>

                    <div class="mb-3">
                        <label for="percentual" class="form-label"> PERCENTUAL</label>
                        <input type="number" name="percentual" id="percentual" 
                            placeholder="Digite aqui o numero..." value="{{ old('percentual', $custos->percentual) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="text" name="id_emp2" id="id_emp2" 
                            placeholder="Digite aqui..." value="{{ old('id_emp2', $custos->id_emp2) }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_users"  class="form-label">USUÁRIO</label>
                        <input type="text" name="id_users" id="id_users"  placeholder=" Digite o usuario aqui"
                            value="{{ old('id_users', $custos->id_users) }}">
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