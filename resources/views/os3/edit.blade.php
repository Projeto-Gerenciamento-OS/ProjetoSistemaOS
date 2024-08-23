@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="cardHeaderAsociados card-header">
                <h2 class="mt-3">Edição</h2>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('os3.index') }}" class="btn btn-outline-primary ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os3.view', ['os3' => $os3->id]) }}" class="btn btn-light ">
                        <span class="listar-texto">Visualizar</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('os3.delete', ['os3' => $os3->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger "
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">Apagar</span>
                            <i class="fa-solid fa-trash"></i>
                     </button>
                    </form>

                </span>
            </div>
            <div class="card-body">

                <x-alert />

                <form action="{{ route('os3.update', ['os3' => $os3->id]) }}" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')

                   <div class="col-6 col-lg-6 ">
                        <div class="mb-3">
                            <label for="id_emp1_os3" >ID EMP1 </label>
                            <input type="number" name="id_emp1_os3" id="id_emp1_os3" 
                                placeholder=" Data" value="{{ old('id_emp1_os3', $os3->id_emp1_os3) }}">
                        </div>
                        <div class="mb-3">
                            <label for="id_os1_os3" class="form-label">ID OS1 </label>
                            <input type="number" name="id_os1_os3" id="id_os1_os3"  placeholder=" Digite o id_os1_os3"
                                value="{{ old('id_os1_os3', $os3->id_os1_os3 ) }}">
                        </div>
                       
                        
                        <div class="mb-3">
                            <label for="id_emp2_os3" class="form-label">ID EMP2 </label>
                            <input type="number" name="id_emp2_os3" id="id_emp2_os3" 
                                placeholder=" Digite a id_emp2_os3" value="{{ old('id_emp2_os3', $os3->id_emp2_os3) }}">
                        </div>

                        <div class="mb-3">
                            <label for="id_material" class="form-label">ID Material </label>
                            <input type="number"  name="id_material" id="id_material"   required 
                            value="{{ old('id_material', $os3->id_material) }}">
                        </div>

                    </div>

                    <div class="col-6 col-lg-6 mt-2">
                        <div class="mb-3">
                            <label for="valorUnitario_os3" class="form-label">Valor Unitário</label>
                            <input type="text"  name="valorUnitario_os3" id="valorUnitario_os3"   required
                            value="{{ old('valorUnitario_os3', $os3->valorUnitario_os3) }}">
                        </div> 

                        <div class="mb-3">
                            <label for="valorTotal_os3" class="form-label">Valor Total</label>
                            <input type="text"  name="valorTotal_os3" id="valorTotal_os3"   required
                            value="{{ old('valorTotal_os3', $os3->valorTotal_os3) }}">
                        </div> 

                        <div class="mb-3">
                            <label for="custoTotal_os3" class="form-label">Custo Total</label>
                            <input type="text"  name="custoTotal_os3" id="custoTotal_os3"   required
                            value="{{ old('custoTotal_os3', $os3->custoTotal_os3) }}">
                        </div>  
                       

                    </div>         

                    <a  class="btnCadastrar">
                        <button type="submit">
                            <h5>Salvar</h5>
                            <i class="fa-solid fa-bookmark"></i>
                        </button>  
                    </a>

                </form>

            </div>
        </div>
    </div>

@endsection