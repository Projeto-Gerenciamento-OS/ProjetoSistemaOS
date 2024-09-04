@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>Cliente</h1>

            <form action="{{ route('cli.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="razao" id="razao" class=" btn-pesquisar" value="{{ $razao }}" placeholder="Pesquisar" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

            <a href="{{ route('cli.create') }}" class="btnCadastrar">
                <button>
                    <h5>CADASTRAR</h5>
                    <i class="fa-solid fa-angle-right"></i>
                </button>  
            </a>
        </div> 

        <div class="card-body"> 
            <table >
                <thead>
                    <tr class="titulos">
                        <th>ID</th>
<<<<<<< HEAD
                        <th>TIPO</th>
                        <th>CPF/CNPJ</th>
                        <th>RAZÃO</th>
                        <th>FANTASIA</th>
                        <th>ENDEREÇO</th>
                        <th>NÚMERO</th>
                        <th>COMPLEMENTO</th>
                        <th>BAIRRO</th>
                        <th>CIDADE</th>
                        <th>UF</th>
                        <th>EMAIL</th>
                        <th>CEP</th>
                        <th>TELEFONE 1</th>
                        <th>TELEFONE 2</th>
                        <th>OBS</th>
                        <th>EMPRESA 2</th>
                        <th>ID USUÁRIO</th>
                        <th class="text-center">AÇÕES</th>
=======
                        <th> TIPO</th>
                        <th> cpf_cnpj </th>
                        <th> RAZÃO</th>
                        <th> FANTASIA</th>
                        <th> endereco </th>
                        <th> numero </th>
                        <th> complemento </th>
                        <th> bairro </th>
                        <th> cidade </th>
                        <th> uf </th>
                        <th> email </th>
                        <th> cep </th>
                        <th> fone1 </th>
                        <th> fone2 </th>
                        <th> obs </th>
                        <th> id_emp2 </th>
                        <th> id_users </th>
                        <th class="text-center">AÇÕES:</th>
>>>>>>> 2357e32af0673e37979a2053f6b6656ca4d66f24
                    </tr>
                </thead>

                <tbody>
                    @forelse ($cli as $cliente)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $cliente->id }}</th>
                            <th>{{ $cliente->tipo }}</th>
                            <th>{{ $cliente->cpf_cnpj }}</th>
                            <th>{{ $cliente->razao }}</th>
                            <th>{{ $cliente->fantasia }}</th>
                            <th>{{ $cliente->endereco }}</th>
                            <th>{{ $cliente->numero }}</th>
                            <th>{{ $cliente->complemento }}</th>
                            <th>{{ $cliente->bairro }}</th>
                            <th>{{ $cliente->cidade }}</th>
                            <th>{{ $cliente->uf }}</th>
                            <th>{{ $cliente->email }}</th>
                            <th>{{ $cliente->cep }}</th>
                            <th>{{ $cliente->fone1 }}</th>
                            <th>{{ $cliente->fone2 }}</th>
                            <th>{{ $cliente->obs }}</th>
                            <th>{{ $cliente->id_emp2 }}</th>
                            <th>{{ $cliente->id_users }}</th>

                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">

                                <a href="{{ route('cli.view', ['cli' => $cliente->id]) }}" class='btnIcons'>
                                    <i class="fa-regular fa-eye "></i>
                                </a>

                                <a href="{{ route('cli.edit', ['cli' => $cliente->id]) }}" class='btnIcons'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('cli.delete', ['cli' => $cliente->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-apagar btnIcons"
                                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        @empty
                        <div class="alert alert-danger" role="alert">Nenhum usuário encontrado!</div>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $cli->onEachSide(0)->links() }} 
    </div>
</div>



@endsection

