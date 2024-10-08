@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="  card-header">
            <h1>Serviços Gerais</h1>
            <a href="{{ route('servico.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span></a>
        </div> 
        
        <div class="card-body"> 
            <form action="{{ route('servico.store') }}" method="POST">
                @csrf
                @method('POST')
                
                <div class="BodyLayout">              
                    <div class="mb-3">
                        <label for="nome" class="form-label">NOME</label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                        value="{{ old('nome') }}">
                    </div>

                    <div class="mb-3">
                        <label for="tempo" class="form-label">TEMPO</label>
                        <input type="text" name="tempo" id="tempo"   required >
                    </div>

                    <div class="mb-3">
                        <label for="valor" class="form-label">VALOR</label>
                        <input type="number" name="valor" id="valor"   required >
                    </div>

                    <div class="mb-3">
                        <label for="custo" class="form-label">CUSTO</label>
                        <input type="text" name="custo" id="custo"   required >
                    </div>

                    <div class="mb-3">
                        <label for="obs" class="form-label">OBS</label>
                        <input type="text" name="obs" id="obs"   required >
                    </div>
                    
                    <div class="mb-3">
                        <label for="recorrente" class="form-label">RECORRENTE</label>
                        <input type="text"  name="recorrente" id="recorrente"   required>
                    </div>

                    <div class="mb-3">
                        <label for="intervalo" class="form-label">INTERVALO</label>
                        <input type="text" name="intervalo" id="intervalo" 
                            placeholder="Digite " value="{{ old('intervalo') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="text" name="id_emp2" id="id_emp2" 
                            placeholder="Digite" value="{{ old('id_emp2') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_os1" class="form-label">ID OS1</label>
                        <input type="text" name="id_os1" id="id_os1" 
                            placeholder="Digite " value="{{ old('id_os1') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">USUÁRIO</label>
                        <input type="text" name="id_users" id="id_users" 
                            placeholder="Digite " value="{{ old('id_users') }}">
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
