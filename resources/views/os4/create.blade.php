@extends ('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container" >
    <div class="card mb-4 cardCorLista " >
        <div  class="cardHeaderAsociados card-header">
            <h1>Cadastro da Ordem de Serviço 4</h1>
            <a href="{{ route('os.index') }}" class="btn btn-primary
                <span class="listar-texto">LISTAR</span></a>
        </div> 
        <div class="card-body"> 
        <form action="{{ route('os4.store') }}" method="POST" class="row  ">
                @csrf
                @method('POST')

                <div class="col-6 col-lg-6">

                    <div class="mb-3">
                        <label for="descricao" class="form-label">DESCRIÇÃO</label>
                        <input type="text" name="descricao" id="descricao"  placeholder=" Digite o descricao"
                            value="{{ old('descricao') }}">
                    </div>

                    <div class="mb-3">
                        <label for="percentual" class="form-label">percentual </label>
                        <input type="text" name="percentual" id="percentual"  placeholder=" Digite o percentual"
                            value="{{ old('percentual') }}">
                    </div>

                    <div class="mb-3">
                        <label for="valor" class="form-label">valor </label>
                        <input type="text" name="valor" id="valor"  placeholder=" Digite o valor"
                            value="{{ old('valor') }}">
                    </div>
                </div>

                <div class="col-6 col-lg-6">

                    <div class="mb-3">
                        <label for="ativo" class="form-label">ativo </label>
                        <input type="text" name="ativo" id="ativo"  placeholder=" Digite o ativo"
                            value="{{ old('ativo') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder=" Digite o id_emp2"
                            value="{{ old('id_emp2') }}">
                    </div>
                </div>
        
                <a  class="btnCadastrar">
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