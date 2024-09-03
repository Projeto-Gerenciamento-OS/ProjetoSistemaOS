@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container os-container">
    <div class="card mb-4 cardCorLista ">
        <div class="card-header">
            <div class='abas'>
                <a  href="{{route('os.index')}}" class="bold os1-titulo" >OS1</a>
                <a href="{{route('os.index')}}" class="bold">OS2</a>
                <a href="{{route('os4.index')}}" class="light">OS4</a>
                <a  class="light">OS4</a>
            </div>

            <h5>OS4</h5>
        </div> 

        <div class="card-body" > 
            <table>
                
                <form action="{{ route('os4.index') }}">
                    <div class="pesquisar">
                        
                        <input type="text" name="id_emp1_os4" id="id_emp1_os4" class="form-control btn-pesquisar" value="{{ $id_emp1_os4 }}" placeholder="Nome da OS 4" />

                        <button  type="submit" class="btn-pesquisar">
                            <i class="fa-solid fa-magnifying-glass "></i>
                        </button>
                    </div>
                </form>

                <thead>
                    <tr class="titulos">
                        <th>ID</th>
                        <th>ID EMP1</th>
                        <th>Percentual</th>
                        <th>Valor</th>
                        <th>Ativo</th>
                        <th>Descrição</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                            
                    @forelse ($os4 as $os04)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $os04->id }}</th>
                            <th>{{ $os04->id_emp1_os4 }}</th>
                            <td>{{ $os04->percentual_os4 }}</td>
                            <th>{{ $os04->valor_os4 }}</th>
                            <th>{{ $os04->ativo_os4 }}</th>
                            <th>{{ $os04->descricao_os4 }}</th>
                            
                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >

                                <a href="{{ route('os4.view', ['os4' => $os04->id]) }}" class="btnIcons">
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <a href="{{ route('os4.edit', ['os4' => $os04->id]) }}" class="btnIcons">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('os4.delete', ['os4' => $os04->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('Tem certeza que deseja apagar este registro?')" class="btn-apagar btnIcons">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-danger" role="alert">Nenhuma OS encontrada!</div>
                    @endforelse
            
                    </tbody>
                </table>
            </div>
            {{ $os4->onEachSide(0)->links() }} 
        </div>
    </div>
</div>

<a href="{{ route('os4.create') }}" class="btnCadastrar">
    <button>
        <h5>Cadastrar</h5>
        <i class="fa-solid fa-angle-right"></i>
    </button>  
</a> 
        
@endsection