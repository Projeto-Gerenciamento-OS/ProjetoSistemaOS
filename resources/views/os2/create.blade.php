@extends ('layouts.admin')

@section('content')

   
<div class="container-fluid px-4 data-container" >
    <div class="card mb-4  cardCorLista " >
        <div  class="cardHeaderAsociados card-header">
            <h1>Cadastro da Ordem de Serviço 2</h1>
            <a href="{{ route('os2.index') }}" class="btn btn-primary">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span></a>
        </div> 

        <div class="card-body"> 
        <form action="{{ route('os2.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="id_servico" class="form-label">ID SERVIÇO </label>
                        <input type="number" name="id_servico" id="id_servico"  placeholder=" Digite o id_servico"
                            value="{{ old('id_servico') }}">
                    </div>
                    <div class="mb-3">
                        <label for="id_emp1_os2" class="form-label">ID EMP1</label>
                        <input type="number" name="id_emp1_os2" id="id_emp1_os2" 
                            placeholder=" Digite a data cadastrada" value="{{ old('id_emp1_os2') }}">
                    </div>
                     
                    <div class="mb-3">
                        <label for="id_emp2_os2" class="form-label">ID EMP2 </label>
                        <input type="number" name="id_emp2_os2" id="id_emp2_os2" 
                            placeholder=" Digite a id_emp2_os2" value="{{ old('id_emp2_os2') }}">
                    </div>

                    <div class="mb-3">
                        <label for="valorUnitario_os2" class="form-label">Valor Unitário</label>
                        <input type="text"  name="valorUnitario_os2" id="valorUnitario_os2"   required>
                    </div> 

                </div>
                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label for="valorTotal_os2" class="form-label">Valor Total</label>
                        <input type="text"  name="valorTotal_os2" id="valorTotal_os2"   required>
                    </div> 

                    <div class="mb-3">
                        <label for="id_colaborador" class="form-label">ID Colaborador </label>
                        <input type="number"  name="id_colaborador" id="id_colaborador"   required >
                    </div>

                    <div class="mb-3">
                        <label for="quantidade_os2" class="form-label">Quantidade</label>
                        <input type="text"  name="quantidade_os2" id="quantidade_os2"   required>
                    </div> 

                    <div class="mb-3">
                        <label for="custoTotal_os2" class="form-label">Custo Total</label>
                        <input type="text"  name="custoTotal_os2" id="custoTotal_os2"   required>
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