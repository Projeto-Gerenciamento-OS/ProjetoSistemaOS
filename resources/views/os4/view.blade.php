@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
        <div class="card mb-4 cardCorLista "  >
            <div class="cardHeaderAsociados card-header">
                <h1 class="mt-3">Visualização</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('os4.index') }}" class="btn ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os4.edit', ['os4' => $os4->id]) }}" class="btn  btn-sm me-1">
                        <span class="listar-texto">Editar</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>


                    <form method="POST" action="{{ route('os4.delete', ['os4' => $os4->id]) }}">
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
                    <dd class="col-6">{{ $os4->id }}</dd>

                    <dt class="col-6 col-lg-4">ID EMP1: </dt>
                    <dd class="col-6">{{ $os4->id_emp1_os4}}</dd>

                    <dt class="col-6 col-lg-4">Percentual: </dt>
                    <dd class="col-6">{{ $os4->percentual_os4 }}</dd>

                    <dt class="col-6 col-lg-4">Valor: </dt>
                    <dd class="col-6">{{ $os4->valor_os4 }}</dd>

                    <dt class="col-6 col-lg-4">Ativo: </dt>
                    <dd class="col-6">{{ $os4->ativo_os4 }}</dd>

                    <dt class="col-6 col-lg-4">Descrição: </dt>
                    <dd class="col-6">{{ $os4->descricao_os4 }}</dd>


                    <dt class="col-6 col-lg-4">Cadastrado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os4->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">Editado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os4->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>




@endsection