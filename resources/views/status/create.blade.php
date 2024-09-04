@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="cardHeaderAsociados card-header">
            <h1>Status</h1>
            <a href="{{ route('status.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span>
            </a>
        </div> 
        
        <div class="card-body"> 
            <form action="{{ route('status.store') }}" method="POST" class="row  ">
                @csrf
                @method('POST')

                <div class="col-6">
                    <div class="mb-3">
                        <label for="cor" class="form-label">cor</label>
                        <input type="text" name="cor" id="cor"  placeholder="Digite aqui..."
                        value="{{ old('cor') }}">
                        <div id="color-picker"></div>
                    </div>


                    <div class="mb-3">
                        <label for="descricao" class="form-label">descricao</label>
                        <input type="text" name="descricao" id="descricao"  placeholder="descricao completa"
                        value="{{ old('descricao') }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">id_emp2</label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder="Digite aqui..."
                        value="{{ old('id_emp2') }}">
                        <div id="color-picker"></div>
                    </div>


                    <div class="mb-3">
                        <label for="id_users" class="form-label">id_users</label>
                        <input type="text" name="id_users" id="id_users"  placeholder="id_users completa"
                        value="{{ old('id_users') }}">
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
