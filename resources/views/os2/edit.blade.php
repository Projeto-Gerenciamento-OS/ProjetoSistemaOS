@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="  card-header">
                <h2 class="mt-3">Editar</h2>
                <span class="ms-auto d-flex flex-row gap-2">
                    <a href="{{ route('os.index') }}" class="btn ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os1.os2.edit', ['os2' => $os2->id]) }}" class="btn ">
                        <span class="listar-texto">VISUALIZAR</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('os1.os2.delete', ['os2' => $os2->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn  "
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">APAGAR</span>
                            <i class="fa-solid fa-trash"></i>
                    </button>
                    </form>

                </span>
            </div>
            <div class="card-body">

                <x-alert />

                <form  action="{{ route('os1.os2.update', ['os2' => $os2->id]) }}" method="POST" class="row  ">
                    @csrf
                    @method('PUT')
                
                    <div class="col-6 col-lg-6">
                        <div class="mb-3">
                            <label for="qtde">QUANTIDADE</label>
                            <input type="text" name="qtde" id="qtde"  placeholder="Digite aqui "
                                value="{{ old('qtde', $os2->qtde) }}">
                        </div>

                        <div class="mb-3">
                            <label for="vunit" >VALOR UNI.</label>
                            <input type="text" name="vunit" id="vunit" 
                                placeholder=" Digite aqui" value="{{ old('vunit', $os2->vunit) }}">
                        </div>

                        <div class="mb-3">
                            <label for="vtotal" >VALOR</label>
                            <input type="text" name="vtotal" id="vtotal"  placeholder=" vtotal"
                                value="{{ old('vtotal', $os2->vtotal) }}">
                        </div>

                        <div class="mb-3">
                            <label for="cunit" >CUSTO UNI.</label>
                            <input type="text" name="cunit" id="cunit" 
                                placeholder=" Digite aqui" value="{{ old('cunit', $os2->cunit) }}">
                        </div>

                        <div class="mb-3">
                            <label for="ctotal" >CUSTO</label>
                            <input type="text" name="ctotal" id="ctotal"  placeholder=" ctotal"
                                value="{{ old('ctotal', $os2->ctotal) }}">
                        </div>

                        <div class="mb-3">
                            <label for="id_emp2" >EMPRESA 2 </label>
                            <input type="text" name="id_emp2" id="id_emp2"  placeholder=" id_emp2"
                                value="{{ old('id_emp2', $os2->id_emp2) }}">
                        </div>
                    </div>

                    <div class="col-6 col-lg-6">
                        <div class="mb-3">
                            <label for="id_os1" >ID OS1</label>
                            <input type="text" name="id_os1" id="id_os1"  placeholder=" id_os1"
                                value="{{ old('id_os1', $os2->id_os1) }}">
                        </div>
                    
                        <div class="mb-3">
                            <label for="id_servico" >ID SERVIÇO</label>
                            <input type="text" name="id_servico" id="id_servico" 
                                placeholder=" Digite aqui" value="{{ old('id_servico', $os2->id_servico) }}">
                        </div>

                        <div class="mb-3">
                            <label for="id_colaborador" >COLABORADOR</label>
                            <input type="text" name="id_colaborador" id="id_colaborador"  placeholder=" id_colaborador"
                                value="{{ old('id_colaborador', $os2->id_colaborador) }}">
                        </div>
                    </div>
                    
                    <a  class="btnCadastrar">
                        <button type="submit">
                            <h5>SALVAR</h5>
                        </button>  
                    </a>
                </form>
            </div>
        </div>
    </div>

@endsection