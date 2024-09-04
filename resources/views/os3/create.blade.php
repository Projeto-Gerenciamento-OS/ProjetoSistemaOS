@extends ('layouts.admin')

@section('content')

   
<div class="container-fluid px-4  data-container" >
    <div class="card mb-4 cardCorLista " >
        <div  class="cardHeaderAsociados card-header">
            <h1>Cadastro da OS 3</h1>
            <a href="{{ route('os.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span></a>
        </div> 

        <div class="card-body"> 
        <form action="{{ route('os3.store') }}" method="POST" class="row  ">
                @csrf
                @method('POST')

                <div class="col-6 col-lg-6">

                    <div class="mb-3">
                        <label for="qtde" class="form-label">qtde </label>
                        <input type="text" name="qtde" id="qtde"  placeholder=" Digite o qtde"
                            value="{{ old('qtde') }}">
                    </div>

                    <div class="mb-3">
                        <label for="vunit" class="form-label">vunit </label>
                        <input type="text" name="vunit" id="vunit"  placeholder=" Digite o vunit"
                            value="{{ old('vunit') }}">
                    </div>

                    <div class="mb-3">
                        <label for="vtotal" class="form-label">vtotal </label>
                        <input type="text" name="vtotal" id="vtotal"  placeholder=" Digite o vtotal"
                            value="{{ old('vtotal') }}">
                    </div>

                    <div class="mb-3">
                        <label for="cunit" class="form-label">cunit </label>
                        <input type="text" name="cunit" id="cunit"  placeholder=" Digite o cunit"
                            value="{{ old('cunit') }}">
                    </div>

                </div>

                <div class="col-6 col-lg-6">

                    <div class="mb-3">
                        <label for="ctotal" class="form-label">ctotal </label>
                        <input type="text" name="ctotal" id="ctotal"  placeholder=" Digite o ctotal"
                            value="{{ old('ctotal') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="text" name="id_emp2" id="id_emp2"  placeholder=" Digite o id_emp2"
                            value="{{ old('id_emp2') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_os1" class="form-label">id_os1 </label>
                        <input type="text" name="id_os1" id="id_os1"  placeholder=" Digite o id_os1"
                            value="{{ old('id_os1') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_materiais" class="form-label">id_materiais </label>
                        <input type="text" name="id_materiais" id="id_materiais"  placeholder=" Digite o id_materiais"
                            value="{{ old('id_materiais') }}">
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