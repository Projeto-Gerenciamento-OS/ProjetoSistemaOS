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

                    <a href="{{ route('os4.edit', ['os4' => $os4->id]) }}" class="btn  btn-sm me-1">
                        <span class="listar-texto">EDIÇÃO</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>


                    <form method="POST" action="{{ route('os4.delete', ['os4' => $os4->id]) }}">
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
                    <dd class="col-6">{{ $os4->id }}</dd>

                    <dt class="col-6 col-lg-4">DESCRIÇÃO:</dt>
                    <dd class="col-6">{{ $os4->descricao}}</dd>

                    <dt class="col-6 col-lg-4"> PERCENTUAL:</dt>
                    <dd class="col-6">{{ $os4->percentual }}</dd>

                    <dt class="col-6 col-lg-4">VALOR:</dt>
                    <dd class="col-6">{{ $os4->valor }}</dd>

                    <dt class="col-6 col-lg-4">ativo: </dt>
                    <dd class="col-6">{{ $os4->ativo }}</dd>

                    <dt class="col-6 col-lg-4">EMPRESA 2: </dt>
                    <dd class="col-6">{{ $os4->id_emp2 }}</dd>


                    <dt class="col-6 col-lg-4">CADASTRADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os4->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">EDITADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os4->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>

@endsection