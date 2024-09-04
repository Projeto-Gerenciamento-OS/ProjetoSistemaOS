@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista " >

        <div class="cardHeaderAsociados card-header">
            <h1 class="mt-3">Nova Empresa 1</h1>

            <a href="{{ route('emp1.index') }}" class="btn "><i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span>
            </a>
        </div>


        <div class="card-body">
            <x-alert />

            <form action="{{ route('emp1.store') }}" method="POST" class="row  ">
                @csrf
                @method('POST')
        
                <div class="col-12">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <input class="col-12 " type="text" name="descricao" id="descricao" class="form-control" 
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