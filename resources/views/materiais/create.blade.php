@extends('layouts.admin')

@section('content')

   
<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="cardHeaderAsociados card-header">
            <h1>Cadastro de Materiais</h1>
            <a href="{{ route('materiais.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span></a>
        </div> 
        <div class="card-body"> 
        <form action="{{ route('materiais.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')

           
                <div class="col-6 ">
                    <div class="mb-3">
                        <label for="id_emp1" class="form-label">Empresa 1 </label>
                        <input type="text" name="id_emp1" id="id_emp1"  placeholder=" Digite o id_emp1"
                            value="{{ old('id_emp1') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">Empresa 2 </label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder=" Digite o id_emp2"
                            value="{{ old('id_emp2') }}">
                    </div>

                    <div class="mb-3">
                        <label for="custo" class="form-label">Custo </label>
                        <input type="text" name="custo" id="custo" 
                            placeholder=" Digite o custo" value="{{ old('custo') }}">
                    </div>
                </div>

                <div class="col-6 ">
                    <div class="mb-3">
                        <label for="unidade" class="form-label">Unidade </label>
                        <input type="text" name="unidade" id="unidade" 
                            placeholder=" Digite a unidade" value="{{ old('Unidade') }}">
                    </div>

                    
                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor </label>
                        <input type="text"  name="valor" id="valor"   required >
                    </div>
                    
                    <div class="mb-3">
                        <label for="id_users" class="form-label">Usuario </label>
                        <input type="text"  name="id_users" id="id_users"   required >
                    </div>
                </div>
       

            <div class="col-12">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text"  name="descricao" id="descricao"   required>
            </div> 

            <a  class="btnCadastrar">
                <button type="submit">
                    <h5>Concluir</h5>
                    <i class="fa-solid fa-angle-right"></i>
                </button>  
            </a>
        </form>
        
        </div>
    </div>
</div>


@endsection