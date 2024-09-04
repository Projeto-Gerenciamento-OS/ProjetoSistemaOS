@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
        <div class="card mb-4 cardCorLista "  >
            <div class="cardHeaderAsociados card-header">
                <h1 class="mt-3">Visualização</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('os.index') }}" class="btn ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os2.edit', ['os2' => $os2->id]) }}" class="btn  btn-sm me-1">
                        <span class="listar-texto">Editar</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('os2.delete', ['os2' => $os2->id]) }}">
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
                    <dd class="col-6">{{ $os2->id }}</dd>

                    <dt class="col-6 col-lg-4">qtde: </dt>
                    <dd class="col-6">{{ $os2->qtde}}</dd>

                    <dt class="col-6 col-lg-4">vunit: </dt>
                    <dd class="col-6">{{ $os2->vunit }}</dd>

                    <dt class="col-6 col-lg-4">vtotal: </dt>
                    <dd class="col-6">{{ $os2->vtotal }}</dd>

                    <dt class="col-6 col-lg-4">cunit: </dt>
                    <dd class="col-6">{{ $os2->cunit }}</dd>

                    <dt class="col-6 col-lg-4">ctotal: </dt>
                    <dd class="col-6">{{ $os2->ctotal }}</dd>

                    <dt class="col-6 col-lg-4">id_emp2: </dt>
                    <dd class="col-6">{{ $os2->id_emp2 }}</dd>

                    <dt class="col-6 col-lg-4">id_os1: </dt>
                    <dd class="col-6">{{ $os2->id_os1 }}</dd>

                    <dt class="col-6 col-lg-4">id_servico: </dt>
                    <dd class="col-6">{{ $os2->id_servico }}</dd>

                    <dt class="col-6 col-lg-4">id_colaborador: </dt>
                    <dd class="col-6">{{ $os2->id_colaborador }}</dd>

                    <dt class="col-6 col-lg-4">Cadastrado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os2->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">Editado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os2->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>




@endsection