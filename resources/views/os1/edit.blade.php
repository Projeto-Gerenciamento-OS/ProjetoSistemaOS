@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="cardHeaderAsociados card-header">
                <h1 class="">Edição</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('os1.index') }}" class="btn btn-outline-primary">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os1.view', ['os1' => $os1->id]) }}" class="btn btn-light">
                        <span class="listar-texto">Visualizar</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('os1.delete', ['os1' => $os1->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-custom-sm"
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">Apagar</span>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>

                </span>
            </div>
            <div class="card-body ">
                <x-alert />
                <form action="{{ route('os1.update', ['os1' => $os1->id]) }}" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')
              
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="id_status" >ID STATUS: </label>
                            <input type="number" name="id_status" id="id_status"  placeholder="Digite aqui "
                                value="{{ old('id_status', $os1->id_status) }}">
                        </div>

                        <div class="mb-3">
                            <label for="dataCadastrada" >Data cadastrada </label>
                            <input type="number" name="dataCadastrada" id="dataCadastrada" 
                                placeholder=" Data" value="{{ old('dataCadastrada', $os1->dataCadastrada) }}">
                        </div>

                        <div class="mb-3">
                            <label for="valorTotal" class="form-label">Valor Total: </label>
                            <input type="number"  name="valorTotal" id="valorTotal"  value="{{ old('valorTotal', $os1->valorTotal) }}" >
                        </div>

                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="dhi" >DHI: </label>
                            <input type="number" name="dhi" id="dhi"  placeholder=" dhi"
                                value="{{ old('dhi', $os1->dhi) }}">
                        </div>

                        <div class="mb-3">
                            <label for="dhf" >DHF: </label>
                            <input type="number" name="dhf" id="dhf"  placeholder=" dhf"
                                value="{{ old('dhf', $os1->dhf) }}">
                        </div>

                        <div class="mb-3">
                            <label for="custoTotal" class="form-label">Custo Total: </label>
                            <input type="number"  name="custoTotal" id="custoTotal"  value="{{ old('custoTotal', $os1->custoTotal) }}" >
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