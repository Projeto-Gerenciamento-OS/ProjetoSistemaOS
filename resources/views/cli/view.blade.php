@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
        <div class="card mb-4 cardCorLista "  >
            <div class="cardHeaderAsociados card-header">
                <h1 class="mt-3">Visualização</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('cli.index') }}" class="btn ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('cli.edit', ['cli' => $cli->id]) }}" class="btn  btn-sm me-1">
                        <span class="listar-texto">Editar</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('cli.delete', ['cli' => $cli->id]) }}">
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
                    <dd class="col-6">{{ $cli->id }}</dd>

                    <dt class="col-6 col-lg-4">tipo: </dt>
                    <dd class="col-6">{{ $cli->tipo}}</dd>

                    <dt class="col-6 col-lg-4">cpf_cnpj: </dt>
                    <dd class="col-6">{{ $cli->cpf_cnpj }}</dd>

                    <dt class="col-6 col-lg-4">razao: </dt>
                    <dd class="col-6">{{ $cli->razao }}</dd>

                    <dt class="col-6 col-lg-4">fantasia: </dt>
                    <dd class="col-6">{{ $cli->fantasia }}</dd>

                    <dt class="col-6 col-lg-4">endereco: </dt>
                    <dd class="col-6">{{ $cli->endereco }}</dd>

                    <dt class="col-6 col-lg-4">numero: </dt>
                    <dd class="col-6">{{ $cli->numero }}</dd>

                    <dt class="col-6 col-lg-4">complemento: </dt>
                    <dd class="col-6">{{ $cli->complemento }}</dd>

                    <dt class="col-6 col-lg-4">bairro: </dt>
                    <dd class="col-6">{{ $cli->bairro }}</dd>

                    <dt class="col-6 col-lg-4">cidade: </dt>
                    <dd class="col-6">{{ $cli->cidade }}</dd>

                    <dt class="col-6 col-lg-4">uf: </dt>
                    <dd class="col-6">{{ $cli->uf }}</dd>

                    <dt class="col-6 col-lg-4">email: </dt>
                    <dd class="col-6">{{ $cli->email }}</dd>

                    <dt class="col-6 col-lg-4">cep: </dt>
                    <dd class="col-6">{{ $cli->cep }}</dd>

                    <dt class="col-6 col-lg-4">fone1: </dt>
                    <dd class="col-6">{{ $cli->fone1 }}</dd>

                    <dt class="col-6 col-lg-4">fone2: </dt>
                    <dd class="col-6">{{ $cli->fone2 }}</dd>

                    <dt class="col-6 col-lg-4">obs: </dt>
                    <dd class="col-6">{{ $cli->obs }}</dd>

                    <dt class="col-6 col-lg-4">Cadastrado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($cli->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">Editado: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($cli->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>




@endsection