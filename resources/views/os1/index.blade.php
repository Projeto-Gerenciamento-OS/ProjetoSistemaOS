@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container os-container">
    <div class="card mb-4 cardCorLista ">
        <div class="card-header">
            <div class='abas'>
                <a  class="bold os1-titulo" >OS1</a>
                <a href="{{route('os2.index')}}" class="bold">OS2</a>
                <a href="{{route('os3.index')}}" class="light">OS3</a>
                <a href="{{route('os4.index')}}" class="light">OS4</a>
            </div>

            <h5>OS1</h5>
        </div>

        <div class="card-body" > 
            <x-alert />
            
            <table>
                
            <form action="{{ route('os1.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="id_status" id="id_status" class="form-control btn-pesquisar" value="{{ $id_status }}" placeholder="Nome da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

                <thead>
                    <tr class="titulos"> 
                        <th>ID</th>
                        <th>ID STATUS</th>
                        <th>Data Cadastrada</th>
                        <th>DHI</th>
                        <th>DHF</th>
                        <th>Valor Total</th>
                        <th>Custo Total</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($os1 as $os01)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $os01->id }}</th>
                            <th>{{ $os01->id_status }}</th>
                            <td>{{ $os01->dataCadastrada }}</td>
                            <th>{{ $os01->dhi }}</th>
                            <th>{{ $os01->dhf }}</th>
                            <th>{{ $os01->valorTotal }}</th>
                            <th>{{ $os01->custoTotal }}</th>
                            
                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">

                                <a href="{{ route('os1.view', ['os1' => $os01->id]) }}" class="btnIcons">
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <a href="{{ route('os1.edit', ['os1' => $os01->id]) }}" class="btnIcons">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('os1.delete', ['os1' => $os01->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-apagar btnIcons" onclick="return confirm('Tem certeza que deseja apagar este registro?')">
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
            {{ $os1->onEachSide(0)->links() }} 
        </div>
    </div> 
</div>

<a href="{{ route('os1.create') }}" class="btnCadastrar">
    <button>
        <h5>Cadastrar</h5>
        <i class="fa-solid fa-angle-right"></i>
    </button>  
</a>    
        
@endsection