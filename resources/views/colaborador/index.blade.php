@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1 class="mt-3">Colaborador</h1>

            <form action="{{ route('colaborador.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="nome" id="nome" class="form-control btn-pesquisar" value="{{ $nome }}" placeholder="Nome da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

            <a href="{{ route('colaborador.create') }}" class="btnCadastrar">
                <button>
                    <h5>CADASTRAR</h5>
                    <i class="fa-solid fa-angle-right"></i>
                </button>  
            </a>
            
        </div>

        <div class="card-body"> 
            <x-alert />
            <table>
                <thead>
                    <tr class="titulos">    
                        <th>ID</th>
                        <th>nome</th>
                        <th>fone</th>
                        <th>id_emp2</th>
                        <th>id_users</th>
                        <th>id_turno</th>
                        <th>id_setor</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    
                    @forelse ($colaborador as $colab)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $colab->id }}</th>   
                            <th>{{ $colab->nome}}</th>           
                            <th>{{ $colab->fone}}</th>  
                            <th>{{ $colab->id_emp2}}</th>  
                            <th>{{ $colab->id_users}}</th>  
                            <th>{{ $colab->id_turno}}</th>  
                            <th>{{ $colab->id_setor}}</th>  
                            
                            <td class="acoes d-md-flex flex-row gap-2 justify-content-center pt-8">

                                <a href="{{ route('colaborador.view', ['colaborador' => $colab->id]) }}" class='btnIcons'>
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <a href="{{ route('colaborador.edit', ['colaborador' => $colab->id]) }}" class='btnIcons'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ route('colaborador.delete', ['colaborador' => $colab->id])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-apagar btnIcons"
                                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @empty
                        <div class="alert alert-danger" role="alert">
                            Nenhum Colaborador encontrado!
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $colaborador->onEachSide(0)->links() }} 
    </div>
</div>



@endsection