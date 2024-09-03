@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="cardHeaderAsociados card-header">
            <h1>Turno</h1>
            <a href="{{ route('turno.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span></a>
        </div> 
        
        <div class="card-body"> 
            <form action="{{ route('turno.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')
             
                
                <div class="col-6 col-lg-6">                
                    <div class="mb-3">
                        <label for="nome" class="form-label">nome </label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                        value="{{ old('nome') }}">
                    </div>

                    <div class="mb-3">
                        <label for="inicio" class="form-label">inicio </label>
                        <input type="text" name="inicio" id="inicio"   required >
                    </div>

                    <div class="mb-3">
                        <label for="pausa" class="form-label">pausa </label>
                        <input type="text" name="pausa" id="pausa"   required >
                    </div>
                </div>

                <div class="col-6 col-lg-6">          
                      
                    <div class="mb-3">
                        <label for="retorno" class="form-label">retorno </label>
                        <input type="text"  name="retorno" id="retorno"   required>
                    </div>

                    <div class="mb-3">
                        <label for="termino" class="form-label">termino </label>
                        <input type="text" name="termino" id="termino" 
                            placeholder="Digite " value="{{ old('termino') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">id_emp2 </label>
                        <input type="text" name="id_emp2" id="id_emp2" 
                            placeholder="Digite" value="{{ old('id_emp2') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">id_users </label>
                        <input type="text" name="id_users" id="id_users" 
                            placeholder="Digite " value="{{ old('id_users') }}">
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
