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
                        <label for="fone" class="form-label"> Telefone</label>
                        <input type="text" name="fone" id="fone" class="form-control" placeholder="Telfone" value="{{ old('fone') }}">              
                    </div>
                    
                </div>
                <div class="col-6 col-lg-6">
                    
                    <div class="mb-3">
                        <label for="id_emp1" class="form-label">ID Empresa1</label>
                        <input type="number" name="id_emp1" id="id_emp1" class="form-control" placeholder="Empresa1" value="{{ old('id_emp1') }}">              
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">ID Empresa2</label>
                        <input type="number" name="id_emp2" id="id_emp2" class="form-control" placeholder="Empresa2" value="{{ old('id_emp2') }}">              
                    </div>

                    <div class="mb-3">
                        <label for="id_setor" class="form-label">ID Setor</label>
                        <input type="number" name="id_setor" id="id_setor" class="form-control" placeholder="setor" value="{{ old('id_setor') }}">              
                    </div>

                    <div class="mb-3">
                        <label for="id_turno" class="form-label">ID Turno</label>
                        <input type="number" name="id_turno" id="id_turno" class="form-control" placeholder="Turno" value="{{ old('id_turno') }}">              
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