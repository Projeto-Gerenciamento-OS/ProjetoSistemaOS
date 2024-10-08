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
                    <h5>CADASTRAR</h5>
                    <i class="fa-solid fa-plus"></i>
                </button>  
            </a>
        </div> 

        <div class="card-body"> 
            <table >
                <thead>
                    <tr class="titulos">
                        <th>ID</th>
                        <th>NOME</th>
                        <th>TEMPO</th>
                        <th>VALOR</th>
                        <th>CUSTO</th>
                        <th>OBS</th>
                        <th>RECORRENTE</th>
                        <th>INTERVALO</th>
                        <th>EMPRESA 2 </th>
                        <th>ID OS1</th>
                        <th>USUÁRIO</th>
                        <th class="text-center">AÇÕES:</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($servico as $serv)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $serv->id }}</th>
                            <th>{{ $serv->nome }}</th>
                            <td >{{ $serv->tempo }}</td>
                            <th>{{ $serv->valor }}</th>
                            <th>{{ $serv->custo }}</th>
                            <th>{{ $serv->obs }}</th>
                            <th>{{ $serv->recorrente }}</th>
                            <th>{{ $serv->intervalo }}</th>
                            <th>{{ $serv->id_emp2 }}</th>
                            <th>{{ $serv->id_os1 }}</th>
                            <th>{{ $serv->id_users }}</th>

                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">

                                <a href="{{ route('servico.view', ['servico' => $serv->id]) }}" class='btnIcons'>
                                    <i class="fa-regular fa-eye "></i>
                                </a>

                                <a href="{{ route('servico.edit', ['servico' => $serv->id]) }}" class='btnIcons'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('servico.delete', ['servico' => $serv->id]) }}">
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
        </div>
        {{ $servico->onEachSide(0)->links() }} 
    </div>
</div>


@endsection

