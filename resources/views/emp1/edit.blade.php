@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container" >
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Editar Empresa 1</h2>
            
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('emp1.index') }}" class="btn  ">
                <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('emp1.view', ['emp1' => $emp1->id]) }}" class=" btn ">
                <span class="listar-texto">VISUALIZAR</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('emp1.delete', ['emp1' => $emp1->id]) }}">
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

            <form action="{{ route('emp1.update', ['emp1'=>$emp1->id]) }}" method="POST" class="row  ">
                            
                @csrf
                @method('PUT')

                <div class="col-6 col-lg-6 ">
                    <div class="mb-3">
                        <label for="id" class="form-label">ID EMPRESA 1:</label>
                        <input type="text" name="id" id="id" 
                        class="form-control" placeholder="id" readonly value="{{old('id', $emp1->id) }} ">      
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao" 
                        class="form-control" placeholder="descricao" value="{{ old('descricao',$emp1->descricao) }}">    
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