@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="  card-header">
            <h1>Setor</h1>
            <a href="{{ route('setor.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span></a>
        </div> 
        
        <div class="card-body"> 
            <form action="{{ route('setor.store') }}" method="POST">
                @csrf
                @method('POST')
            
                <div class="BodyLayout">
                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder="id_emp2 "
                        value="{{ old('id_emp2') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">USUÁRIO</label>
                        <input type="text" name="id_users" id="id_users"   required >
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao"   required >
                    </div>
                </div>

                    
                <a  class="btnCadastrar ">
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
