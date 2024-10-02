@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>USUÁRIO</h1>

            <form action="{{ route('user.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="nome" id="nome" class="  form-control btn-pesquisar" value"{{ $nome }}" placeholder="Pesquisar" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

            <a href="{{ route('user.create') }}" class="btnCadastrar">
                <button>
                    <h5>CADASTRAR</h5>
                    <i class="fa-solid fa-plus"></i>
                </button>  
            </a>
        </div> 

        <div class="card-body"> 
            <x-alert />
            <table >
                <thead>
                    <tr class="titulos">
                        <th>ID</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>TIPO</th>
                        <th>EMPRESA 2</th>
                        <th class="text-center">AÇÕES:</th>
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
                            <div class="alert alert-danger" role="alert">
                                Nenhum usuário encontrado!
                            </div>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $users->onEachSide(0)->links() }} 
    </div>
</div>

@endsection

