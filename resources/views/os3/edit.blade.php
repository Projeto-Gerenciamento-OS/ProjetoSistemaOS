@extends ('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="cardHeaderAsociados card-header">
                <h2 class="mt-3">EDIÇÃO</h2>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('os.index') }}" class="btn  ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os3.view', ['os3' => $os3->id]) }}" class="btn  ">
                        <span class="listar-texto">VISUALIZAR</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('os3.delete', ['os3' => $os3->id]) }}">
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

                <form action="{{ route('os3.update', ['os3' => $os3->id]) }}" method="POST" class="row  ">
                    @csrf
                    @method('PUT')

                    <div class="col-6 col-lg-6 ">
                        <div class="mb-3">
                            <label for="qtde" class="form-label">qtde</label>
                            <input type="text" name="qtde" id="qtde" 
                                placeholder=" Data" value="{{ old('qtde', $os3->qtde) }}">
                        </div>

                        <div class="mb-3">
                            <label for="vunit" class="form-label">vunit</label>
                            <input type="text" name="vunit" id="vunit"  placeholder=" Digite o vunit"
                                value="{{ old('vunit', $os3->vunit ) }}">
                        </div>

                        <div class="mb-3">
                            <label for="vtotal" class="form-label">vtotal</label>
                            <input type="text" name="vtotal" id="vtotal"  placeholder=" Digite o vtotal"
                                value="{{ old('vtotal', $os3->vtotal ) }}">
                        </div>

                        <div class="mb-3">
                            <label for="cunit" class="form-label">cunit</label>
                            <input type="text" name="cunit" id="cunit"  placeholder=" Digite o cunit"
                                value="{{ old('cunit', $os3->cunit ) }}">
                        </div>
                    </div>

                    <div class="col-6 col-lg-6 ">
                        <div class="mb-3">
                            <label for="ctotal" class="form-label">ctotal</label>
                            <input type="text"  name="ctotal" id="ctotal"   required
                            value="{{ old('ctotal', $os3->ctotal) }}">
                        </div> 

                        <div class="mb-3">
                            <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                            <input type="text"  name="id_emp2" id="id_emp2"   required
                            value="{{ old('id_emp2', $os3->id_emp2) }}">
                        </div> 

                        <div class="mb-3">
                            <label for="id_os1" class="form-label">id_os1</label>
                            <input type="text"  name="id_os1" id="id_os1"   required
                            value="{{ old('id_os1', $os3->id_os1) }}">
                        </div>  

                        <div class="mb-3">
                            <label for="id_materiais" class="form-label">id_materiais</label>
                            <input type="text"  name="id_materiais" id="id_materiais"   required
                            value="{{ old('id_materiais', $os3->id_materiais) }}">
                        </div>  
                    </div>         

                    <a  class="btnCadastrar">
                        <button type="submit">
                            <h5>Salvar</h5>
                        </button>  
                    </a>
                </form>
            </div>
        </div>
    </div>

@endsection