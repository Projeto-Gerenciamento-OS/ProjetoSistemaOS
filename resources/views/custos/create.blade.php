@extends('layouts.admin')

@section('content')


   
<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista ">

        <div class="cardHeaderAsociados card-header">
            <h1>Cadastro de Custos</h1>
            <a href="{{ route('custos.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span></a>
        </div> 
        <div class="card-body"> 
        <form action="{{ route('custos.store') }}" method="POST" class=" row g-3">
                @csrf
                @method('POST')
        
                
            <div class="col-12 col-lg-6">
                    
                <div class="mb-3">
                    <label for="id_emp2" class="form-label">id_emp2</label>
                    <input type="number" name="id_emp2" id="id_emp2" 
                        placeholder=" Digite " value="{{ old('id_emp2') }}">
                </div>

                <div class="mb-3">
                    <label for="id_users" class="form-label">id_users </label>
                    <input type="number" name="id_users" id="id_users" 
                        placeholder=" Digite " value="{{ old('id_users') }}">
                </div>
            </div>
          
                <div class="col-12 col-lg-6">
                 
                    <div class="mb-3">
                        <label for="percentual" class="form-label">percentual</label>
                        <input type="text"  name="percentual" id="percentual"   required>
                    </div> 

                    <div class="mb-3">
                        <label for="descricao" class="form-label">descricao</label>
                        <input type="text" name="descricao" id="descricao" 
                            placeholder=" Digite o descricao" value="{{ old('descricao') }}">
                    </div>
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

