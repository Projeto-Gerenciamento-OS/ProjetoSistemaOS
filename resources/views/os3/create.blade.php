@extends ('layouts.admin')

@section('content')

   
<div class="container-fluid px-4  data-container" >
    <div class="card mb-4 cardCorLista " >
        <div  class="cardHeaderAsociados card-header">
            <h1>Cadastro da OS 3</h1>
            <a href="{{ route('os3.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span></a>
        </div> 

        <div class="card-body"> 
        <form action="{{ route('os3.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')

                <div class="col-6 col-lg-6">

                    <div class="mb-3">
                        <label for="qtde" class="form-label">qtde </label>
                        <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                            value="{{ old('qtde') }}">
                    </div>

                    <div class="mb-3">
                        <label for="qtde" class="form-label">qtde </label>
                        <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                            value="{{ old('qtde') }}">
                    </div>

                    <div class="mb-3">
                        <label for="qtde" class="form-label">qtde </label>
                        <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                            value="{{ old('qtde') }}">
                    </div>

                    <div class="mb-3">
                        <label for="qtde" class="form-label">qtde </label>
                        <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                            value="{{ old('qtde') }}">
                    </div>

                </div>

                <div class="col-6 col-lg-6">

                    <div class="mb-3">
                        <label for="qtde" class="form-label">qtde </label>
                        <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                            value="{{ old('qtde') }}">
                    </div>

                    <div class="mb-3">
                        <label for="qtde" class="form-label">qtde </label>
                        <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                            value="{{ old('qtde') }}">
                    </div>

                    <div class="mb-3">
                        <label for="qtde" class="form-label">qtde </label>
                        <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                            value="{{ old('qtde') }}">
                    </div>

                    <div class="mb-3">
                        <label for="qtde" class="form-label">qtde </label>
                        <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                            value="{{ old('qtde') }}">
                    </div>

                </div>      

                <a  class="btnCadastrar">
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