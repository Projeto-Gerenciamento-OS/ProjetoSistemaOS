@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
        <div class="card mb-4 cardCorLista "  >
            <div class="  card-header">
                <h1 class="mt-3">VISUALIZAR</h1>
                <span class="ms-auto d-flex  flex-row gap-1">
                    <a href="{{ route('os.index') }}" class="btn ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os1.edit', ['os1' => $os1->id]) }}" class="btn btn-sm me-1">
                        <span class="listar-texto">EDIÇÃO</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('os1.delete', ['os1' => $os1->id]) }}">
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
                    <dd class="col-6">{{ $os1->id }}</dd>

                    <dt class="col-6 col-lg-4">EMPRESA 2 </dt>
                    <dd class="col-6">{{ $os1->id_emp2}}</dd>

                    <dt class="col-6 col-lg-4">STATUS:</dt>
                    <dd class="col-6">{{ $os1->id_status}}</dd>

                    <dt class="col-6 col-lg-4">USUÁRIO</dt>
                    <dd class="col-6">{{ $os1->id_users}}</dd>

                    <dt class="col-6 col-lg-4">DATA:</dt>
                    <dd class="col-6">{{ $os1->datacad}}</dd>

                    <dt class="col-6 col-lg-4">INICIO:</dt>
                    <dd class="col-6">{{ $os1->dhi }}</dd>

                    <dt class="col-6 col-lg-4">FINAL</dt>
                    <dd class="col-6">{{ $os1->dhf }}</dd>

                    <dt class="col-6 col-lg-4">OBS:</dt>
                    <dd class="col-6">{{ $os1->obs }}</dd>

                    <dt class="col-6 col-lg-4">VALOR</dt>
                    <dd class="col-6">{{ $os1->vtotal }}</dd>

                    <dt class="col-6 col-lg-4">CUSTO TOTAL:</dt>
                    <dd class="col-6">{{ $os1->ctotal }}</dd>

                    <dt class="col-6 col-lg-4">CUSTO INDIRETO:</dt>
                    <dd class="col-6">{{ $os1->cindireto }}</dd>

                    <dt class="col-6 col-lg-4">RESULTADO:</dt>
                    <dd class="col-6">{{ $os1->vresultado }}</dd>

                    <dt class="col-6 col-lg-4">CADASTRADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os1->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">EDITADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os1->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>


@endsection