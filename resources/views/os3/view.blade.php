@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
        <div class="card mb-4 cardCorLista"  >
            <div class="cardHeaderAsociados card-header">
                <h1 class="mt-3">Visualização</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('os3.index') }}" class="btn ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os3.edit', ['os3' => $os3->id]) }}" class="btn btn-sm me-1">
                        <span class="listar-texto">Editar</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('os3.delete', ['os3' => $os3->id]) }}">
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
                    <dd class="col-6">{{ $os3->id }}</dd>

                    <dt class="col-6 col-lg-4">ID SERVIÇO: </dt>
                    <dd class="col-6">{{ $os3->id_os1_os3}}</dd>

                    <dt class="col-6 col-lg-4">ID EMP1: </dt>
                    <dd class="col-6">{{ $os3->id_emp1_os3 }}</dd>

                    <dt class="col-6 col-lg-4">ID EMP2: </dt>
                    <dd class="col-6">{{ $os3->id_emp2_os3 }}</dd>

                    <dt class="col-6 col-lg-4">ID Material: </dt>
                    <dd class="col-6">{{ $os3->id_material }}</dd>

                    <dt class="col-6 col-lg-4">Valor Unitário: </dt>
                    <dd class="col-6">{{ $os3->valorUnitario_os3 }}</dd>

                    <dt class="col-6 col-lg-4">Valor Total: </dt>
                    <dd class="col-6">{{ $os3->valorTotal_os3 }}</dd>

                    <dt class="col-6 col-lg-4">Custo Total: </dt>
                    <dd class="col-6">{{ $os3->custoTotal_os3 }}</dd>

                    <dt class="col-6 col-lg-4">Cadastrado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os3->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">Editado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($os3->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>




@endsection