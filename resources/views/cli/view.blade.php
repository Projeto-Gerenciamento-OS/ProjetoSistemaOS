@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container" >
        <div class="card mb-4 cardCorLista "  >
            <div class="  card-header">
                <h1 class="mt-3">Visualizar</h1>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('cli.index') }}" class="btn ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('cli.edit', ['cli' => $cli->id]) }}" class="btn  ">
                        <span class="listar-texto">EDIÇÃO</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>

                    <form method="POST" action="{{ route('cli.delete', ['cli' => $cli->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn  "
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
                    <dd class="col-6">{{ $cli->id }}</dd>

                    <dt class="col-6 col-lg-4">TIPO: </dt>
                    <dd class="col-6">{{ $cli->tipo}}</dd>

                    <dt class="col-6 col-lg-4">CPF/CNPJ: </dt>
                    <dd class="col-6">{{ $cli->cpf_cnpj }}</dd>

                    <dt class="col-6 col-lg-4">RAZÃO: </dt>
                    <dd class="col-6">{{ $cli->razao }}</dd>

                    <dt class="col-6 col-lg-4">FATANSIA: </dt>
                    <dd class="col-6">{{ $cli->fantasia }}</dd>

                    <dt class="col-6 col-lg-4">ENDEREÇO: </dt>
                    <dd class="col-6">{{ $cli->endereco }}</dd>

                    <dt class="col-6 col-lg-4">NÚMERO: </dt>
                    <dd class="col-6">{{ $cli->numero }}</dd>

                    <dt class="col-6 col-lg-4">COMPLEMENTO: </dt>
                    <dd class="col-6">{{ $cli->complemento }}</dd>

                    <dt class="col-6 col-lg-4">BAIRRO: </dt>
                    <dd class="col-6">{{ $cli->bairro }}</dd>

                    <dt class="col-6 col-lg-4">CIDADE: </dt>
                    <dd class="col-6">{{ $cli->cidade }}</dd>

                    <dt class="col-6 col-lg-4">UF: </dt>
                    <dd class="col-6">{{ $cli->uf }}</dd>

                    <dt class="col-6 col-lg-4">EMAIL: </dt>
                    <dd class="col-6">{{ $cli->email }}</dd>

                    <dt class="col-6 col-lg-4">CEP: </dt>
                    <dd class="col-6">{{ $cli->cep }}</dd>

                    <dt class="col-6 col-lg-4">TELEFONE 1: </dt>
                    <dd class="col-6">{{ $cli->fone1 }}</dd>

                    <dt class="col-6 col-lg-4">TELEFONE 2: </dt>
                    <dd class="col-6">{{ $cli->fone2 }}</dd>

                    <dt class="col-6 col-lg-4">OBS:</dt>
                    <dd class="col-6">{{ $cli->obs }}</dd>

                    <dt class="col-6 col-lg-4">EMPRESA 2: </dt>
                    <dd class="col-6">{{ $cli->id_emp2 }}</dd>

                    <dt class="col-6 col-lg-4">USUÁRIO</dt>
                    <dd class="col-6">{{ $cli->id_users }}</dd>

                    <dt class="col-6 col-lg-4">CADASTRADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($cli->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                    <dt class="col-6 col-lg-4">EDITADO: </dt>
                    <dd class="col-6">
                        {{ \Carbon\Carbon::parse($cli->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}
                    </dd>

                </dl>
            </div>
        </div>
    </div>
@endsection