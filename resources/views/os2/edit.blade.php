@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="cardHeaderAsociados card-header">
                <h2 class="mt-3">Edição</h2>
                <span class="ms-auto d-flex flex-row gap-2">
                    <a href="{{ route('os2.index') }}" class="btn ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os2.view', ['os2' => $os2->id]) }}" class="btn ">
                        <span class="listar-texto">Visualizar</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('os2.delete', ['os2' => $os2->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn  "
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">Apagar</span>
                            <i class="fa-solid fa-trash"></i>
                     </button>
                    </form>

                </span>
            </div>
            <div class="card-body">

                <x-alert />

                <form  action="{{ route('os2.update', ['os2' => $os2->id]) }}" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')

                  
                        <div class="col-6 col-lg-6">
                            <div class="mb-3">
                                <label for="id_servico" >ID SERVIÇO </label>
                                <input type="number" name="id_servico" id="id_servico"  placeholder="Digite aqui "
                                    value="{{ old('id_servico', $os2->id_servico) }}">
                            </div>

                            <div class="mb-3">
                                <label for="id_emp1_os2" >ID EMP1 </label>
                                <input type="number" name="id_emp1_os2" id="id_emp1_os2" 
                                    placeholder=" Digite aqui" value="{{ old('id_emp1_os2', $os2->id_emp1_os2) }}">
                            </div>

                            <div class="mb-3">
                                <label for="quantidade_os2" >Quantidade</label>
                                <input type="text" name="quantidade_os2" id="quantidade_os2"  placeholder=" quantidade_os2"
                                    value="{{ old('quantidade_os2', $os2->quantidade_os2) }}">
                            </div>
                           
                        </div>

                        <div class="col-6 col-lg-6">
                            <div class="mb-3">
                                <label for="id_emp2_os2" >ID EMP2 </label>
                                <input type="number" name="id_emp2_os2" id="id_emp2_os2" 
                                    placeholder=" Digite aqui" value="{{ old('id_emp2_os2', $os2->id_emp2_os2) }}">
                            </div>

                            <div class="mb-3">
                                <label for="id_colaborador" >ID Colaborador </label>
                                <input type="number" name="id_colaborador" id="id_colaborador"  placeholder=" id_colaborador"
                                    value="{{ old('id_colaborador', $os2->id_colaborador) }}">
                            </div>
                           
                            <div class="mb-3">
                                <label for="valorUnitario_os2" >Valor Unitário</label>
                                <input type="text" name="valorUnitario_os2" id="valorUnitario_os2"  placeholder=" valorUnitario_os2"
                                    value="{{ old('valorUnitario_os2', $os2->valorUnitario_os2) }}">
                            </div>
                        </div>
                     
                
                       

                        <div class="col-lg-6">
                                <label for="valorTotal_os2" class="form-label">Valor Total </label>
                                <input type="text"  name="valorTotal_os2" id="valorTotal_os2"  value="{{ old('valorTotal_os2', $os2->valorTotal_os2) }}" >
                        </div>

                        <div class="col-lg-6">
                                <label for="custoTotal_os2" class="form-label">Custo Total </label>
                                <input type="text"  name="custoTotal_os2" id="custoTotal_os2"  value="{{ old('custoTotal_os2', $os2->custoTotal_os2) }}" >
            
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