@extends('layouts.admin')

@section('content')


<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>Custos Gerais</h1>
            
            <form action="{{ route('custos.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="id_emp2" id="id_emp2" class="form-control btn-pesquisar" value="{{ $id_emp2 }}" placeholder="Nome da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>
            
        </div> 
        
        <div class="card-body"> 
            <table>
                <thead>
                    <tr class="titulos">
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Percentual</th>
                        <th>ID EMP2</th>
                        <th>ID Users</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                        
                @forelse ($custos as $custo)
                    <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                        <th>{{ $custo->id_custo_geral }}</th>
                        <th>{{ $custo->descricao }}</th>
                        <th>{{ $custo->percentual }}</th>
                        <td >{{ $custo->id_emp2 }}</td>
                        <td >{{ $custo->id_users }}</td>
                        <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >

                            <a href="{{ route('custos.view', ['custos' => $custo->id_custo_geral]) }}" class="btnIcons">
                                <i class="fa-regular fa-eye"></i>
                            </a>

                            <a href="{{ route('custos.edit', ['custos' => $custo->id_custo_geral]) }}" class="btnIcons">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <form method="POST" action="{{ route('custos.delete', ['custos' => $custo->id_custo_geral]) }}">
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
            {{ $custos->onEachSide(0)->links() }} 
        </div>
    </div>
</div>
<a href="{{ route('custos.create') }}" class="btnCadastrar">
    <button>
        <h5>Cadastrar</h5>
        <i class="fa-solid fa-angle-right"></i>
    </button>  
</a> 
        

@endsection
