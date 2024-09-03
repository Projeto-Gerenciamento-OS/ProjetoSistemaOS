@extends ('layouts.admin')

@section('content')

   
<div class="container-fluid px-4 data-container" >
    <div class="card mb-4  cardCorLista " >
        <div  class="cardHeaderAsociados card-header">
            <h1>Cadastro da Ordem de Serviço 2</h1>
            <a href="{{ route('os.index') }}" class="btn ">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span></a>
        </div> 

        <div class="card-body"> 
        <form action="{{ route('os2.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="id_emp1" class="form-label">id_emp1 </label>
                        <input type="number" name="id_emp1" id="id_emp1"  placeholder=" Digite o id_emp1"
                            value="{{ old('id_emp1') }}">
                    </div>
                    <div class="mb-3">
                        <label for="id_emp1" class="form-label">ID EMP1</label>
                        <input type="number" name="id_emp1" id="id_emp1" 
                            placeholder=" Digite a data cadastrada" value="{{ old('id_emp1') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">ID EMP2 </label>
                        <input type="number" name="id_emp2" id="id_emp2" 
                            placeholder=" Digite a id_emp2" value="{{ old('id_emp2') }}">
                    </div>

                    <div class="mb-3">
                        <label for="vunit" class="form-label">Valor Unitário</label>
                        <input type="text"  name="vunit" id="vunit"   required>
                    </div> 
                    
                </div>
                <div class="col-6 col-lg-6">

                    <div class="mb-3">
                        <label for="vtotal" class="form-label">Valor Total</label>
                        <input type="text"  name="vtotal" id="vtotal"   required>
                    </div> 
                    <div class="mb-3">
                        <label for="cunit" class="form-label">Custo unitário</label>
                        <input type="text"  name="cunit" id="cunit"   required>
                    </div> 
                    
                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">id_emp2 </label>
                        <input type="number"  name="id_emp2" id="id_emp2"   required >
                    </div>

                    <div class="mb-3">
                        <label for="qtde" class="form-label">Quantidade</label>
                        <input type="text"  name="qtde" id="qtde"   required>
                    </div> 

                    <div class="mb-3">
                        <label for="ctotal" class="form-label">Custo Total</label>
                        <input type="text"  name="ctotal" id="ctotal"   required>
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