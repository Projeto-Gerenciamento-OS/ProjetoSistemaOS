@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 data-container " >
    <div class="card mb-4 cardCorLista ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Edição</h2>
            
            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('custos.index') }}" class="btn btnIcons btn-primary ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('custos.view', ['custos' => $custos->id]) }}" class="btnIcons btn btn-light ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('custos.delete', ['custos' => $custos->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btnIcons btn-sm me-1 "
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">Visualizar</span>
                        <i class="fa-solid fa-trash"></i>
                    
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('custos.update', ['custos' => $custos->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <label for="id_emp1" >ID EMP1</label>
                        <input type="number" name="id_emp1" id="id_emp1"  placeholder=" Digite aqui"
                            value="{{ old('id_emp1', $custos->id_emp1) }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" >ID_EMP2 </label>
                        <input type="number" name="id_emp2" id="id_emp2" 
                            placeholder=" Melhor e-mail do usuário" value="{{ old('id_emp2', $custos->id_emp2) }}">
                    </div>
                </div>

                <div class="col-12 col-lg-6 ">
                    <div class="mb-2">
                        <label for="percentual" >Percentual </label>
                        <input type="number" name="percentual" id="percentual"  placeholder=" Digite o percentual aqui"
                            value="{{ old('percentual') }}">
                    </div>

                    <div class="">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text"  name="descricao" id="descricao"  value="{{ old('descricao', $custos->descricao) }}" >
                    </div> 
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