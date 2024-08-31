@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
    <div class="card mb-4 cardCorLista" >
        <div  class="cardHeaderAsociados card-header">
            <h1>Cadastro da Ordem de Serviço 1</h1>
            <a href="{{ route('os.index') }}" class="btn ">
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
                        <label for="id_emp1" class="form-label">id_emp1</label>
                        <input type="number" name="id_emp1" id="id_emp1"  placeholder=" Digite o id_emp1"
                            value="{{ old('id_emp1') }}">
                    </div>

                    <div class="mb-3">
                        <label for="datacad" class="form-label">datacad </label>
                        <input type="text" name="datacad" id="datacad" 
                            placeholder=" Digite a datacad" value="{{ old('datacad') }}">
                    </div>

                    <div class="mb-3">
                        <label for="obs" class="form-label">obs </label>
                        <input type="text" name="obs" id="obs" 
                            placeholder=" Digite a obs" value="{{ old('obs') }}">
                    </div>

                    <div class="mb-3">
                        <label for="ctotal" class="form-label">Custo Total: </label>
                        <input type="text"  name="ctotal" id="ctotal"  value="{{ old('ctotal') }}" >
                    </div>

                    <div class="mb-3">
                        <label for="vtotal" class="form-label">vtotal: </label>
                        <input type="text"  name="vtotal" id="vtotal"  value="{{ old('vtotal') }}" >
                    </div>

                    <div class="mb-3">
                        <label for="cindireto" class="form-label">cindiretol: </label>
                        <input type="text"  name="cindireto" id="cindireto"  value="{{ old('cindireto') }}" >
                    </div>
                </div>

                <div class="col-6 col-lg-6">

                    <div class="mb-3">
                        <label for="dhi" class="form-label"> dhi</label>
                        <input type="date" name="dhi" id="dhi" 
                            placeholder=" Digite a data cadastrada" value="{{ old('dhi') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="dhf" class="form-label">DHF </label>
                        <input type="text"  name="dhf" id="dhf"   required >
                    </div>
                    
                    <div class="mb-3">
                        <label for="vresultado" class="form-label">vresultado </label>
                        <input type="text"  name="vresultado" id="vresultado"   required >
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">id_emp2: </label>
                        <input type="text"  name="id_emp2" id="id_emp2"  value="{{ old('id_emp2') }}" >
                    </div>

                    <div class="mb-3">
                        <label for="id_status" class="form-label">id_status: </label>
                        <input type="text"  name="id_status" id="id_status"  value="{{ old('id_status') }}" >
                    </div>

                    <div class="mb-3">
                        <label for="id_users" class="form-label">id_users: </label>
                        <input type="text"  name="id_users" id="id_users"  value="{{ old('id_users') }}" >
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