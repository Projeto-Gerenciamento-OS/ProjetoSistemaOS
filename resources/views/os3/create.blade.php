@extends ('layouts.admin')

@section('content')

   
<div class="container-fluid px-4  data-container" >
    <div class="card mb-4 cardCorLista " >
        <div  class="cardHeaderAsociados card-header">
            <h1>Cadastro da OS 3</h1>
            <a href="{{ route('os3.index') }}" class="btn btn-primary">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span></a>
        </div> 

        <div class="card-body"> 
        <form action="{{ route('os3.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="id_os1_os3" class="form-label">ID OS1 </label>
                        <input type="number" name="id_os1_os3" id="id_os1_os3"  placeholder=" Digite o id_os1_os3"
                            value="{{ old('id_os1_os3') }}">
                    </div>
                    <div class="mb-3">
                        <label for="id_emp1_os3" class="form-label"> ID EMP1</label>
                        <input type="number" name="id_emp1_os3" id="id_emp1_os3" 
                            placeholder=" Digite a data cadastrada" value="{{ old('id_emp1_os3') }}">
                    </div>
                     
                    <div class="mb-3">
                        <label for="id_emp2_os3" class="form-label">ID EMP2 </label>
                        <input type="number" name="id_emp2_os3" id="id_emp2_os3" 
                            placeholder=" Digite a id_emp2_os3" value="{{ old('id_emp2_os3') }}">
                    </div>

                    <div class="mb-3">
                        <label for="id_material" class="form-label">ID Material </label>
                        <input type="number"  name="id_material" id="id_material"   required
                        value="{{ old('id_emp2_os3') }}" >
                    </div>

                </div>
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="valorUnitario_os3" class="form-label">Valor Unitário</label>
                        <input type="number"  name="valorUnitario_os3" id="valorUnitario_os3"   required>
                    </div> 

                    <div class="mb-3">
                        <label for="valorTotal_os3" class="form-label">Valor Total</label>
                        <input type="number"  name="valorTotal_os3" id="valorTotal_os3"   required>
                    </div> 

                    <div class="mb-3">
                        <label for="custoTotal_os3" class="form-label">Custo Total</label>
                        <input type="number"  name="custoTotal_os3" id="custoTotal_os3"   required>
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