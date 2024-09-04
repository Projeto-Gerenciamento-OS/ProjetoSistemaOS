@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="cardHeaderAsociados card-header">
            <h1>TURNO</h1>
            <a href="{{ route('turno.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span>
            </a>
        </div> 
        
        <div class="card-body"> 
            <form action="{{ route('turno.store') }}" method="POST" class="row g-lg-5 g-4">
                @csrf
                @method('POST')
                
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="nome" class="form-label">NOME</label>
                        <input type="text" name="nome" id="nome"  placeholder="Digite o(a) NOME..."
                        value="{{ old('nome') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder="Digite o(a) EMPRESA 2..."
                        value="{{ old('id_emp2') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">USUARIO </label>
                        <input type="text" name="id_users" id="id_users"  placeholder="Digite o(a) USUARIO..."
                        value="{{ old('id_users') }}">
                    </div>
                </div>
                
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="inicio" class="form-label">INICIO</label>
                        <input type="time" name="inicio" id="inicio"  placeholder="Digite o(a) INICIO..."
                        value="{{ old('inicio') }}">
                    </div>

                    <div class="mb-3">
                        <label for="termino" class="form-label">TERMINO</label>
                        <input type="time" name="termino" id="termino"  placeholder="Digite o(a) TERMINO..."
                        value="{{ old('termino') }}">
                    </div>

                    <div class="mb-3">
                        <label for="pausa" class="form-label">PAUSA</label>
                        <input type="time" name="pausa" id="pausa"  placeholder="Digite o(a) PAUSA..."
                        value="{{ old('inicio') }}">
                    </div>

                    <div class="mb-3">
                        <label for="retorno" class="form-label">RETORNO</label>
                        <input type="time" name="retorno" id="retorno"  placeholder="Digite o(a) RETORNO..."
                        value="{{ old('retorno') }}">
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
