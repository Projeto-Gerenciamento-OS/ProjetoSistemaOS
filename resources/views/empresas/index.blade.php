@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>Empresa (grupo)</h1>

            
            <form action="{{ route('empresas.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="descricao" id="descricao" class="form-control btn-pesquisar" value="{{ $descricao }}" placeholder="Nome da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="card-body"> 
            <table >
                <thead>
                    <tr class="titulos">
                        <th  >ID</th>
                        <th>Descrição</th>
                    
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                
                <tbody>
                    @forelse ($empresas as $empres)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th  >{{ $empres->id }}</th>   
                            
                            <th>{{ $empres->descricao}}</th>           
                            
                                <td class="d-md-flex flex-row gap-2 justify-content-center pt-8"> 

                                <a href="{{ route('empresas.view', ['empresas' => $empres->id]) }}"
                                    class="btnIcons">
                                    <i class="fa-regular fa-eye"></i> 
                                </a>

                                <a href="{{ route('empresas.edit', ['empresas' => $empres->id]) }}"
                                    class="btnIcons">
                                    <i class="fa-solid fa-pen"></i> 
                                </a>

                                <form action="{{ route('empresas.delete', ['empresas' => $empres->id])}}" method="POST">
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
                            Nenhuma empresa encontrada!
                        </div>
                    @endforelse

                </tbody>
            </table>
            {{ $empresas->onEachSide(0)->links() }} 
        </div>
    </div>
</div>

<a href="{{ route('empresas.create') }}" class="btnCadastrar">
    <button>
        <h5>Cadastrar</h5>
        <i class="fa-solid fa-angle-right"></i>
    </button>  
</a>


@endsection