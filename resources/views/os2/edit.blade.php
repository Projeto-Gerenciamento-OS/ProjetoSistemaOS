@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="cardHeaderAsociados card-header">
                <h2 class="mt-3">Edição</h2>
                <span class="ms-auto d-flex flex-row gap-2">
                    <a href="{{ route('os.index') }}" class="btn ">
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
                                <label for="id_emp1" >id_emp1 </label>
                                <input type="number" name="id_emp1" id="id_emp1"  placeholder="Digite aqui "
                                    value="{{ old('id_emp1', $os2->id_emp1) }}">
                            </div>

                            <div class="mb-3">
                                <label for="qtde" >qtde</label>
                                <input type="number" name="qtde" id="qtde" 
                                    placeholder=" Digite aqui" value="{{ old('qtde', $os2->qtde) }}">
                            </div>

                            <div class="mb-3">
                                <label for="vunit" >vunit</label>
                                <input type="text" name="vunit" id="vunit"  placeholder=" vunit"
                                    value="{{ old('vunit', $os2->vunit) }}">
                            </div>

                            <div class="mb-3">
                                <label for="vtotal" >vtotal</label>
                                <input type="text" name="vtotal" id="vtotal"  placeholder=" vtotal"
                                    value="{{ old('vtotal', $os2->vtotal) }}">
                            </div>

                            <div class="mb-3">
                                <label for="cunit" >cunit</label>
                                <input type="text" name="cunit" id="cunit"  placeholder=" cunit"
                                    value="{{ old('cunit', $os2->cunit) }}">
                            </div>

                            <div class="mb-3">
                                <label for="ctotal" >ctotal</label>
                                <input type="text" name="ctotal" id="ctotal"  placeholder=" ctotal"
                                    value="{{ old('ctotal', $os2->ctotal) }}">
                            </div>
                        </div>

                        <div class="col-6 col-lg-6">
                            <div class="mb-3">
                                <label for="id_emp2" >id_emp2 </label>
                                <input type="number" name="id_emp2" id="id_emp2" 
                                    placeholder=" Digite aqui" value="{{ old('id_emp2', $os2->id_emp2) }}">
                            </div>

                            <div class="mb-3">
                                <label for="id_os2" >id_os2 </label>
                                <input type="number" name="id_os2" id="id_os2"  placeholder=" id_os2"
                                    value="{{ old('id_os2', $os2->id_os2) }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="id_servico" >id_servico</label>
                                <input type="text" name="id_servico" id="id_servico"  placeholder=" id_servico"
                                    value="{{ old('id_servico', $os2->id_servico) }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="id_colaborador" >id_colaborador</label>
                                <input type="text" name="id_colaborador" id="id_colaborador"  placeholder=" id_colaborador"
                                    value="{{ old('id_colaborador', $os2->id_colaborador) }}">
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