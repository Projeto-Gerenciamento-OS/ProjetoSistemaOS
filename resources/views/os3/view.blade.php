@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
        <div class="card mb-4 cardCorLista"  >
            <div class="  card-header">
                <h1 class="mt-3">VISUALIZAR</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('os.index') }}" class="btn ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os3.edit', ['os3' => $os3->id]) }}" class="btn btn-sm me-1">
                        <span class="listar-texto">EDIÇÃO</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('os3.delete', ['os3' => $os3->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn  btn-sm me-1"
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">APAGAR</span>
                            <i class="fa-solid fa-trash"></i>
                        
                        </button>
                    </form>
                </span>
            </div>
            <div class="card-body">

                <x-alert />

                <dl class="row">

                    <dt class="col-6 col-lg-4">ID: </dt>
                    <dd class="col-6">{{ $os3->id }}</dd>

                    <dt class="col-6 col-lg-4">QUANTIDADE:</dt>
                    <dd class="col-6">{{ $os3->qtde}}</dd>

                    <dt class="col-6 col-lg-4">VALOR UNITARIO:</dt>
                    <dd class="col-6">{{ $os3->vunit}}</dd>

                    <dt class="col-6 col-lg-4">vtotal: </dt>
                    <dd class="col-6">{{ $os3->vtotal}}</dd>

                    <dt class="col-6 col-lg-4">CUSTO UNITARIO:</dt>
                    <dd class="col-6">{{ $os3->cunit}}</dd>

                    <dt class="col-6 col-lg-4">CUSTO</dt>
                    <dd class="col-6">{{ $os3->ctotal}}</dd>

                    <dt class="col-6 col-lg-4">EMPRESA 2: </dt>
                    <dd class="col-6">{{ $os3->id_emp2}}</dd>

                    <dt class="col-6 col-lg-4">id_os1: </dt>
                    <dd class="col-6">{{ $os3->id_os1}}</dd>

                    <dt class="col-6 col-lg-4">ID MATERIAIS:</dt>
                    <dd class="col-6">{{ $os3->id_materiais}}</dd>


                    <dt class="col-6 col-lg-4">CADASTRADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os3->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">EDITADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os3->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>




@endsection