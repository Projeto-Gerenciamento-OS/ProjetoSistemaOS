@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>Status</h1>
            
            <form action="{{ route('status.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="nome" id="nome" class="form-control btn-pesquisar" value="{{ $nome }}" placeholder="Nome da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

            <a href="{{ route('status.create') }}" class="btnCadastrar">
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
                        <th>id_emp2</th>
                        <th>id_users</th>
                        <th>cor</th>
                        <th>descricao</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($status as $statu)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $statu->id }}</th>
                            <th>{{ $statu->id_emp2 }}</th>
                            <th>{{ $statu->id_users }}</th>
                            <th>{{ $statu->cor }}</th>
                            <th>{{ $statu->descricao }}</th>

                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">

                                <a href="{{ route('status.view', ['status' => $statu->id]) }}" class='btnIcons'>
                                    <i class="fa-regular fa-eye "></i>
                                </a>

                                <a href="{{ route('status.edit', ['status' => $statu->id]) }}" class='btnIcons'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('status.delete', ['status' => $statu->id]) }}">
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
        {{ $status->onEachSide(0)->links() }} 
    </div>
</div>



@endsection

