@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container os-container">
    <div class="card mb-4 cardCorLista ">
        <div class="card-header">
            <div class='abas'>
                <a href="{{route('os1.index')}}" class="bold os1-titulo" >OS1</a>
                <a href="{{route('os2.index')}}" class="bold">OS2</a>
                <a href="{{route('os3.index')}}" class="light">OS3</a>
                <a href="{{route('os4.index')}}" class="light">OS4</a>
            </div>
        
            <h5>OS2</h5>
        </div> 

        <div class="card-body" > 
            <x-alert />

            <table>
                
                
                <form action="{{ route('os2.index') }}">
                    <div class="pesquisar">
                        
                        <input type="text" name="id_servico" id="id_servico" class="form-control btn-pesquisar" value="{{ $id_servico }}" placeholder="Nome da conta" />

                        <button  type="submit" class="btn-pesquisar">
                            <i class="fa-solid fa-magnifying-glass "></i>
                        </button>
                    </div>
                </form>

                <thead>
                    <tr class="titulos">
                        <th>ID</th>
                        <th>ID Serviço</th>
                        <th>ID OS2</th>
                        <th>ID Colaborador</th>
                        <th>ID EMP1</th>
                        <th>ID EMP2</th>
                        <th>Quantidade</th>
                        <th>Valor Unitário</th>
                        <th>Valor Total</th>
                        <th>Custo Total</th>
                        <th>Custo Unitário</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                     @forelse ($os2 as $os02)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $os02->id }}</th>
                            <th>{{ $os02->id_servico }}</th>
                            <th>{{ $os02->id_os2 }}</th>
                            <th>{{ $os02->id_colaborador }}</th>
                            <td >{{ $os02->id_emp1 }}</td>
                            <th>{{ $os02->id_emp2 }}</th>
                            <th>{{ $os02->qtde }}</th>
                            <th>{{ $os02->vunit }}</th>
                            <th>{{ $os02->vtotal }}</th>
                            <th>{{ $os02->ctotal }}</th>
                            <th>{{ $os02->cunit}}</th>
                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >

                                <a href="{{ route('os2.view', ['os2' => $os02->id]) }}" class="btnIcons">
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <a href="{{ route('os2.edit', ['os2' => $os02->id]) }}" class="btnIcons">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('os2.delete', ['os2' => $os02->id]) }}">
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
            {{ $os2->onEachSide(0)->links() }}
        </div>
    </div>
</div>

<a href="{{ route('os2.create') }}" class="btnCadastrar">
    <button>
        <h5>Cadastrar</h5>
        <i class="fa-solid fa-angle-right"></i>
    </button>  
</a> 
        
@endsection