@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>Serviços Gerais</h1>
            
            <form action="{{ route('servico.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="nome" id="nome" class="form-control btn-pesquisar" value="{{ $nome }}" placeholder="Nome da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
            
            <a href="{{ route('servico.create') }}" class="btnCadastrar">
                <button>
                    <h5>Cadastrar</h5>
                    <i class="fa-solid fa-angle-right"></i>
                </button>  
            </a>
        </div> 

        <div class="card-body"> 
            <table >
                <thead>
                    <tr class="titulos">
                        <th>ID</th>
                        <th>nome</th>
                        <th>tempo</th>
                        <th>valor</th>
                        <th>custo</th>
                        <th>obs</th>
                        <th>recorrente</th>
                        <th>intervalo</th>
                        <th>id_emp2</th>
                        <th>id_os1</th>
                        <th>id_users</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($servico as $servico)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th  >{{ $servico->id }}</th>
                            <th>{{ $servico->nome }}</th>
                            <td >{{ $servico->tempo }}</td>
                            <th>{{ $servico->valor }}</th>
                            <th>{{ $servico->custo }}</th>
                            <th>{{ $servico->obs }}</th>
                            <th>{{ $servico->recorrente }}</th>
                            <th>{{ $servico->intervalo }}</th>
                            <th>{{ $servico->id_emp2 }}</th>
                            <th>{{ $servico->id_os1 }}</th>
                            <th>{{ $servico->id_users }}</th>

                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">

                                <a href="{{ route('servico.view', ['servicos' => $servico->id]) }}" class='btnIcons'>
                                    <i class="fa-regular fa-eye "></i>
                                </a>

                                <a href="{{ route('servico.edit', ['servico' => $servico->id]) }}" class='btnIcons'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('servico.delete', ['servico' => $servico->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class=" btnIcons"
                                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @empty
                        <div class="alert alert-danger" role="alert">Nenhum serviço encontrado!</div>
                    @endforelse
                </tbody>
            </table>
            {{ $servico->onEachSide(0)->links() }} 
        </div>
    </div>
</div>


@endsection

