@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
        <div class="card mb-4 cardCorLista "  >
            <div class="  card-header">
                <h1 class="mt-3">VISUALIZAR</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('os.index') }}" class="btn ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os1.os2.edit', ['os2' => $os2->id]) }}" class="btn  btn-sm me-1">
                        <span class="listar-texto">EDIÇÃO</span>
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

                    <dt class="col-6 col-lg-4">QUANTIDADE:</dt>
                    <dd class="col-6">{{ $os2->qtde}}</dd>

                    <dt class="col-6 col-lg-4">VALOR UNITARIO:</dt>
                    <dd class="col-6">{{ $os2->vunit }}</dd>

                    <dt class="col-6 col-lg-4">VALOR TOTAL:</dt>
                    <dd class="col-6">{{ $os2->vtotal }}</dd>

                    <dt class="col-6 col-lg-4">CUSTO UNITARIO:</dt>
                    <dd class="col-6">{{ $os2->cunit }}</dd>

                    <dt class="col-6 col-lg-4">CUSTO</dt>
                    <dd class="col-6">{{ $os2->ctotal }}</dd>

                    <dt class="col-6 col-lg-4">EMPRESA 2: </dt>
                    <dd class="col-6">{{ $os2->id_emp2 }}</dd>

                    <dt class="col-6 col-lg-4">ID OS 1:</dt>
                    <dd class="col-6">{{ $os2->id_os1 }}</dd>

                    <dt class="col-6 col-lg-4">ID SERVIÇO:</dt>
                    <dd class="col-6">{{ $os2->id_servico }}</dd>

                    <dt class="col-6 col-lg-4">COLABORADOR:</dt>
                    <dd class="col-6">{{ $os2->id_colaborador }}</dd>

                    <dt class="col-6 col-lg-4">CADASTRADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os2->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">EDITADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os2->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>




@endsection