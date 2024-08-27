@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista">
        
        <div class="cardHeaderAsociados card-header">
            <h1 class="mt-3">Novo Colaborador</h1>

            <a href="{{ route('colaborador.index') }}" class="btn  btn-custom-sm"><i class="fa-solid fa-list"></i>
            <span class="listar-texto">Listar</span></a>
           
        </div>

        <div class="card-body"> 
            <x-alert />

            <form action="{{ route('colaborador.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')



                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="number" name="id" id="id" class="form-control" placeholder="id" value="{{ old('id') }}">              
                    </div>
            
                    <div class="mb-3">
                        <label for="nome" class="form-label"> Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}">              
                    </div>
                    
                    <div class="mb-3">
                        <label for="telefone" class="form-label"> Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telfone" value="{{ old('telefone') }}">              
                    </div>
                    
                    <div class="mb-3">
                        <label for="login_id" class="form-label">ID Login</label>
                        <input type="number" name="login_id" id="login_id" class="form-control" placeholder="Login_id" value="{{ old('login_id') }}">              
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    
                    <div class="mb-3">
                        <label for="empresa1_id" class="form-label">ID Empresa1</label>
                        <input type="number" name="empresa1_id" id="empresa1_id" class="form-control" placeholder="Empresa1" value="{{ old('empresa1_id') }}">              
                    </div>

                    <div class="mb-3">
                        <label for="empresa2_id" class="form-label">ID Empresa2</label>
                        <input type="number" name="empresa2_id" id="empresa2_id" class="form-control" placeholder="Empresa2" value="{{ old('empresa2_id') }}">              
                    </div>

                    <div class="mb-3">
                        <label for="setor_id" class="form-label">ID Setor</label>
                        <input type="number" name="setor_id" id="setor_id" class="form-control" placeholder="setor" value="{{ old('setor_id') }}">              
                    </div>

                    <div class="mb-3">
                        <label for="turno_id" class="form-label">ID Turno</label>
                        <input type="number" name="turno_id" id="turno_id" class="form-control" placeholder="Turno" value="{{ old('turno_id') }}">              
                    </div>
                </div>

                <a  class="btnCadastrar ">
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