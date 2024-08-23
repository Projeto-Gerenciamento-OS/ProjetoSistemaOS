@extends ('layouts.admin')

@section('content')

   
<div class="container-fluid px-4 data-container" >
    <div class="card mb-4 cardCorLista " >
        <div  class="cardHeaderAsociados card-header">
            <h1>Cadastro da Ordem de Serviço 4</h1>
            <a href="{{ route('os4.index') }}" class="btn btn-primary">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span></a>
        </div> 
        <div class="card-body"> 
        <form action="{{ route('os4.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="id_emp1_os4" class="form-label">ID EMP1 </label>
                        <input type="number" name="id_emp1_os4" id="id_emp1_os4"  placeholder=" Digite o id_emp1_os4"
                            value="{{ old('id_emp1_os4') }}">
                    </div>
                    <div class="mb-3">
                        <label for="percentual_os4" class="form-label"> Percentual</label>
                        <input type="text" name="percentual_os4" id="percentual_os4" 
                            placeholder=" Digite o percentual" value="{{ old('percentual_os4') }}">
                    </div>
                    <div class="mb-3">
                        <label for="valor_os4" class="form-label">Valor </label>
                        <input type="text" name="valor_os4" id="valor_os4" 
                            placeholder=" Digite a valor_os4" value="{{ old('valor_os4') }}">
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="ativo_os4" class="form-label">Ativo </label>
                        <input type="text"  name="ativo_os4" id="ativo_os4"   required >
                    </div>
                    <div class="mb-3">
                        <label for="descricao_os4" class="form-label">Descrição</label>
                        <input type="text"  name="descricao_os4" id="descricao_os4"   required>
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