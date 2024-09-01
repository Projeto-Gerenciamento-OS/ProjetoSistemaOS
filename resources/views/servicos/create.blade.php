@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="cardHeaderAsociados card-header">
            <h1>Serviços Gerais</h1>
            <a href="{{ route('servico.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span></a>
        </div> 
        
        <div class="card-body"> 
            <form action="{{ route('servico.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')
             
                
                <div class="col-6 col-lg-6">                
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome </label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                        value="{{ old('nome') }}">
                    </div>

                    <div class="mb-3">
                        <label for="intervalo" class="form-label">Intervalo </label>
                        <input type="text" name="intervalo" id="intervalo"   required >
                    </div>
                </div>

                <div class="col-6 col-lg-6">                
                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor </label>
                        <input type="text"  name="valor" id="valor"   required>
                    </div>
                    <div class="mb-3">
                        <label for="custo_recorente" class="form-label">Custo Recorente </label>
                        <input type="text" name="custo_recorente" id="custo_recorente" 
                            placeholder="Digite " value="{{ old('custo_recorente') }}">
                    </div>
                </div>
       

                <div class="col-12">
                    <label for="descricao" class="form-label">Descricao </label>
                    <input type="text" name="descricao" id="descricao"  placeholder="descricao completa"
                    value="{{ old('descricao') }}">
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
