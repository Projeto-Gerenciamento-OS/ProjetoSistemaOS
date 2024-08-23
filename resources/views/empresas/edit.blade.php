@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container" >
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Editar Empresas</h2>
            
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('empresas.index') }}" class="btn btnIcons btn-primary ">
                <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('empresas.view', ['empresas' => $empresas->id]) }}" class="btnIcons btn btn-light">
                <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('empresas.delete', ['empresas' => $empresas->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btnIcons btn-sm me-1"
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">Apagar</span>
                        <i class="fa-solid fa-trash"></i>
                    
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('empresas.update', ['empresas'=>$empresas->id]) }}" method="POST" class="row g-3">
                            
                @csrf
                @method('PUT')

                <div class="col-12">
                    <label for="id" class="form-label">ID Empresa 1:</label>
                    <input type="text" name="id" id="id" 
                    class="form-control" placeholder="id" readonly value="{{old('id', $empresas->id) }} ">      
                    
                    <label for="descricao" class="form-label">Descrição:</label>
                    <input type="text" name="descricao" id="descricao" 
                    class="form-control" placeholder="descricao" value="{{ old('descricao',$empresas->descricao) }}">    
                </div> 
                
                <a  class=" btnIcons btnCadastrar">
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