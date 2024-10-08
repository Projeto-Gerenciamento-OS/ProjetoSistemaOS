@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>Materiais</h1>
            
            <form action="{{ route('materiais.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="nome" id="nome" class="form-control btn-pesquisar" value="{{ $nome }}" placeholder="Nome da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

            <a href="{{ route('materiais.create') }}" class="btnCadastrar">
                <button>
                    <h5>CADASTRAR</h5>
                    <i class="fa-solid fa-plus"></i>
                </button>  
            </a> 
        </div> 

        <div class="card-body"> 
            <table>
                <thead>
                    <tr class="titulos">
                        <th> ID MATERIAIS</th>
                        <th>DESCRIÇÃO</th>
                        <th>UNIDADE</th>
                        <th>CUSTO</th>
                        <th>VALOR</th>
                        <th>EMPRESA 2</th>
                        <th>USUÁRIO</th>
                        <th class="text-center">AÇÕES:</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($materiais as $material)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $material->id }}</th>
                            <th>{{ $material->descricao }}</th>
                            <th>{{ $material->unidade }}</th>
                            <th>{{ $material->custo }}</th>
                            <th>{{ $material->valor }}</th>
                            <th>{{ $material->id_emp2 }}</th>
                            <th>{{ $material->id_users }}</th>
                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" id="acoes">

                                <a href="{{ route('materiais.view', ['materiais' => $material->id]) }}" class="btnIcons">
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <a href="{{ route('materiais.edit', ['materiais' => $material->id]) }}" class="btnIcons">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('materiais.delete', ['materiais' => $material->id]) }}">
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
                        <div class="alert alert-danger" role="alert">Nenhum usuário encontrado!</div>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $materiais->onEachSide(0)->links() }} 
    </div>
</div>


        


@endsection