@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container os-container">
    <div class="card mb-4 cardCorLista ">
        <div class="card-header">
            <div class='abas'>

                <a  href="{{route('os.index')}}" class="bold" >OS1</a>
                
                <a href="{{route('os.index')}}" class="bold">OS2</a>
                
                <a  class="light">OS3</a>
                
                <a href="{{route('os4.index')}}" class="light">OS4</a>
            </div>
        
            <h5>OS3</h5>
        </div> 

        <div class="card-body" > 
            <x-alert />

            <table>

                <form action="{{ route('os3.index') }}">
                    <div class="pesquisar">
                        
                        <input type="text" name="id_os1_os3" id="id_os1_os3" class="form-control btn-pesquisar" value="{{ $id_os1_os3 }}" placeholder="Nome da OS 3" />

                        <button  type="submit" class="btn-pesquisar">
                            <i class="fa-solid fa-magnifying-glass "></i>
                        </button>
                    </div>
                </form>
                
                <thead>
                    <tr class="titulos">
                        <th>ID</th>
                        <th>ID OS1</th>
                        <th>ID EMP1</th>
                        <th>ID EMP2</th>
                        <th>ID Material</th>
                        <th>Valor Unitário</th>
                        <th>Valor Total</th>
                        <th>Custo Total</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($os3 as $os03)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $os03->id }}</th>
                            <th>{{ $os03->id_os1_os3}}</th>
                            <td >{{ $os03->id_emp1_os3 }}</td>
                            <th>{{ $os03->id_emp2_os3 }}</th>
                            <th>{{ $os03->id_material }}</th>
                            <th>{{ $os03->valorUnitario_os3 }}</th>
                            <th>{{ $os03->valorTotal_os3 }}</th>
                            <th>{{ $os03->custoTotal_os3 }}</th>
                            
                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >

                                <a href="{{ route('os3.view', ['os3' => $os03->id]) }}" class="btnIcons">
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <a href="{{ route('os3.edit', ['os3' => $os03->id]) }}" class="btnIcons">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('os3.delete', ['os3' => $os03->id]) }}">
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
            {{ $os3->onEachSide(0)->links() }}
        </div>
    </div>
</div>

<a href="{{ route('os3.create') }}" class="btnCadastrar">
    <button>
        <h5>Cadastrar</h5>
        <i class="fa-solid fa-angle-right"></i>
    </button>  
</a> 
        
@endsection