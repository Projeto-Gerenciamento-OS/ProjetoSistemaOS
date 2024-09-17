@extends('layouts.admin')

@section('content')

   
<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="  card-header">
            <h1>Cadastro de Materiais</h1>
            <a href="{{ route('materiais.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span></a>
        </div> 
        <div class="card-body"> 
            <form action="{{ route('materiais.store') }}" method="POST">
                    @csrf
                    @method('POST')

            
                    <div class="BodyLayout">
                        <div class="mb-3">
                            <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                            <input type="text"  name="id_emp2" id="id_emp2"   required>
                        </div> 

                        <div class="mb-3">
                            <label for="id_users" class="form-label">USUÁRIO</label>
                            <input type="text" name="id_users" id="id_users" 
                                placeholder=" Digite a id_users">
                        </div>

                        <div class="mb-3">
                            <label for="descricao" class="form-label">DESCRIÇÃO</label>
                            <input type="text" name="descricao" id="descricao" 
                                placeholder=" Digite o descricao">
                        </div>
                        
                        <div class="mb-3">
                            <label for="unidade" class="form-label">UNIDADE</label>
                            <input type="text"  name="unidade" id="unidade"   required >
                        </div>

                        <div class="mb-3">
                            <label for="custo" class="form-label">CUSTO</label>
                            <input type="text"  name="custo" id="custo"   required >
                        </div>

                        <div class="mb-3">
                            <label for="valor" class="form-label">VALOR</label>
                            <input type="text"  name="valor" id="valor"   required >
                        </div>
                    </div>
                
                <a  class="btnCadastrar">
                    <button type="submit">
                        <h5>CONCLUIR</h5>
                        <i class="fa-solid fa-angle-right"></i>
                    </button>  
                </a>
            </form>
        
        </div>
    </div>
</div>


@endsection