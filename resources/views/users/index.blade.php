@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>Usuários</h1>

            <form action="{{ route('user.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="nome" id="nome" class=" btn-pesquisar" value="{{ $nome }}" placeholder="Nome da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

            <a href="{{ route('user.create') }}" class="btnCadastrar">
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
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Tipo</th>
                        <th>ID EMP2</th>
                        <th>Nivel</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($users as $user)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th  >{{ $user->id }}</th>
                            <th>{{ $user->nome }}</th>
                            <td >{{ $user->email }}</td>
                            <th>{{ $user->tipo }}</th>
                            <th>{{ $user->id_emp2 }}</th>
                            <th>{{ $user->nivel }}</th>

                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">

                                <a href="{{ route('user.view', ['user' => $user->id]) }}" class='btnIcons'>
                                    <i class="fa-regular fa-eye "></i>
                                </a>

                                <a href="{{ route('user.edit', ['user' => $user->id]) }}" class='btnIcons'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('user.delete', ['user' => $user->id]) }}">
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
            {{ $users->onEachSide(0)->links() }} 
        </div>
    </div>
</div>



@endsection

