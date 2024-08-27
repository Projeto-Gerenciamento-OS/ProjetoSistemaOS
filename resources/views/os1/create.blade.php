@extends ('layouts.admin')

@section('content')

   
<div class="container-fluid px-4 data-container" >
    <div class="card mb-4 cardCorLista" >
        <div  class="cardHeaderAsociados card-header">
            <h1>Cadastro da Ordem de Serviço 1</h1>
            <a href="{{ route('os1.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span>
            </a>
        </div> 

        <div class="card-body"> 
        <form action="{{ route('os1.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')

    
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="id_status" class="form-label">ID Status</label>
                        <input type="number" name="id_status" id="id_status"  placeholder=" Digite o id_status"
                            value="{{ old('id_status') }}">
                    </div>

                    <div class="mb-3">
                        <label for="dhi" class="form-label">DHI </label>
                        <input type="text" name="dhi" id="dhi" 
                            placeholder=" Digite a dhi" value="{{ old('dhi') }}">
                    </div>

                    <div class="mb-3">
                        <label for="custoTotal" class="form-label">Custo Total: </label>
                        <input type="text"  name="custoTotal" id="custoTotal"  value="{{ old('custoTotal') }}" >
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="dataCadastrada" class="form-label"> Data Cadastrada</label>
                        <input type="date" name="dataCadastrada" id="dataCadastrada" 
                            placeholder=" Digite a data cadastrada" value="{{ old('dataCadastrada') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="dhf" class="form-label">DHF </label>
                        <input type="text"  name="dhf" id="dhf"   required >
                    </div>

                    <div class="mb-3">
                        <label for="valorTotal" class="form-label">Valor Total: </label>
                        <input type="text"  name="valorTotal" id="valorTotal"  value="{{ old('valorTotal') }}" >
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