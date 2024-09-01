@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
        <div class="card mb-4 cardCorLista "  >
            <div class="cardHeaderAsociados card-header">
                <h1 class="mt-3">Visualização</h1>
                <span class="ms-auto d-flex  flex-row gap-1">
                    <a href="{{ route('os.index') }}" class="btn ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os1.edit', ['os1' => $os1->id]) }}" class="btn btn-sm me-1">
                        <span class="listar-texto">Editar</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('os1.delete', ['os1' => $os1->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn  btn-sm me-1"
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">Apagar</span>
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

                    <dt class="col-6 col-lg-4">ID EMP1 </dt>
                    <dd class="col-6">{{ $os1->id_emp1}}</dd>

                    <dt class="col-6 col-lg-4">ID EMP2 </dt>
                    <dd class="col-6">{{ $os1->id_emp2}}</dd>

                    <dt class="col-6 col-lg-4">ID STATUS </dt>
                    <dd class="col-6">{{ $os1->id_status}}</dd>

                    <dt class="col-6 col-lg-4">ID USERS </dt>
                    <dd class="col-6">{{ $os1->id_users}}</dd>

                    <dt class="col-6 col-lg-4">Data Cadastrada </dt>
                    <dd class="col-6">{{ $os1->datacad }}</dd>

                    <dt class="col-6 col-lg-4">DHI </dt>
                    <dd class="col-6">{{ $os1->dhi }}</dd>

                    <dt class="col-6 col-lg-4">DHF </dt>
                    <dd class="col-6">{{ $os1->dhf }}</dd>

                    <dt class="col-6 col-lg-4">Valor Total </dt>
                    <dd class="col-6">{{ $os1->vtotal }}</dd>

                    <dt class="col-6 col-lg-4">Custo Total </dt>
                    <dd class="col-6">{{ $os1->ctotal }}</dd>

                    <dt class="col-6 col-lg-4">Custo Indireto </dt>
                    <dd class="col-6">{{ $os1->cindireto }}</dd>

                    <dt class="col-6 col-lg-4">Valor resultado </dt>
                    <dd class="col-6">{{ $os1->vresultado }}</dd>

                    <dt class="col-6 col-lg-4">Cadastrado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os1->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">Editado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os1->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>


@endsection