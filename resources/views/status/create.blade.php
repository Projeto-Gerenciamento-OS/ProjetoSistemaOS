@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="cardHeaderAsociados card-header">
            <h1>Status</h1>
            <a href="{{ route('status.index') }}" class="btn btn-primary btnIcons">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span>
            </a>
        </div> 
        
        <div class="card-body"> 
            <form action="{{ route('status.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')

                <div class="col-6">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome </label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                        value="{{ old('nome') }}">
                    </div>
            
                    <div class="mb-3">
                        <label for="emp1" class="form-label">Empresa 1 </label>
                        <input type="number" name="emp1" id="emp1"  placeholder="Digite aqui..."
                        value="{{ old('emp1') }}">
                    </div>
            
                    <div class="mb-3">
                        <label for="emp2" class="form-label">Empresa 2 </label>
                        <input type="number" name="emp2" id="emp2"  placeholder="Digite aqui..."
                        value="{{ old('emp2') }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="cor" class="form-label">Cor</label>
                        <input type="text" name="cor" id="cor"  placeholder="Digite aqui..."
                        value="{{ old('cor') }}">
                        <div id="color-picker"></div>
                    </div>


                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descricao</label>
                        <input type="text" name="descricao" id="descricao"  placeholder="descricao completa"
                        value="{{ old('descricao') }}">
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
