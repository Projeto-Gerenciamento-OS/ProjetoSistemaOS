@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="cardHeaderAsociados card-header">
                <h1 class="">Edição</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('os.index') }}" class="btn ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os1.view', ['os1' => $os1->id]) }}" class="btn ">
                        <span class="listar-texto">Visualizar</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('os1.delete', ['os1' => $os1->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn  btn-custom-sm"
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">Apagar</span>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>

                </span>
            </div>
            <div class="card-body ">
                <x-alert />
                <form action="{{ route('os1.update', ['os1' => $os1->id]) }}" method="POST" class="row g-3" id="marginEditar-os1">

                    @csrf
                    @method('PUT')
              
                    <div class="col-12 col-lg-6" >
                        <div class="mb-3">
                            <label for="id_emp1" >id_emp1: </label>
                            <input type="number" name="id_emp1" id="id_emp1"  placeholder="Digite aqui "
                                value="{{ old('id_emp1', $os1->id_emp1) }}">
                        </div>

                        <div class="mb-3">
                            <label  for="datacad" >datacad </label>
                            <input type="date" name="datacad" id="datacad" 
                                placeholder=" Data" value="{{ old('datacad', $os1->datacad) }}">
                        </div>

                        <div class="mb-3">
                            <label for="obs" class="form-label">obs: </label>
                            <input type="text"  name="obs" id="obs"  value="{{ old('obs', $os1->obs) }}" >
                        </div>

                        <div class="mb-3">
                            <label for="vtotal" class="form-label">vtotal: </label>
                            <input type="text"  name="vtotal" id="vtotal"  value="{{ old('vtotal', $os1->vtotal) }}" >
                        </div>

                        <div class="mb-3">
                            <label for="cindireto" class="form-label">cindireto: </label>
                            <input type="text"  name="cindireto" id="cindireto"  value="{{ old('cindireto', $os1->cindireto) }}" >
                        </div>

                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="dhi" >DHI: </label>
                            <input type="text" name="dhi" id="dhi"  placeholder=" dhi"
                                value="{{ old('dhi', $os1->dhi) }}">
                        </div>

                        <div class="mb-3">
                            <label for="dhf" >DHF: </label>
                            <input type="text" name="dhf" id="dhf"  placeholder=" dhf"
                                value="{{ old('dhf', $os1->dhf) }}">
                        </div>

                        <div class="mb-3">
                            <label for="custoTotal" class="form-label">Custo Total: </label>
                            <input type="text"  name="custoTotal" id="custoTotal"  value="{{ old('custoTotal', $os1->custoTotal) }}" >
                        </div>

                        <div class="mb-3">
                            <label for="vresultado" class="form-label">vresultado: </label>
                            <input type="text"  name="vresultado" id="vresultado"  value="{{ old('vresultado', $os1->vresultado) }}" >
                        </div>

                        <div class="mb-3">
                            <label for="id_emp2" class="form-label">id_emp2: </label>
                            <input type="text"  name="id_emp2" id="id_emp2"  value="{{ old('id_emp2', $os1->id_emp2) }}" >
                        </div>

                        <div class="mb-3">
                            <label for="id_status" class="form-label">id_status: </label>
                            <input type="text"  name="id_status" id="id_status"  value="{{ old('id_status', $os1->id_status) }}" >
                        </div>

                        <div class="mb-3">
                            <label for="id_users" class="form-label">id_users: </label>
                            <input type="text"  name="id_users" id="id_users"  value="{{ old('id_users', $os1->id_users) }}" >
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