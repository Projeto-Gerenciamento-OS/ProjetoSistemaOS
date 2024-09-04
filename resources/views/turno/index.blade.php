@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>TURNO</h1>

            <form action="{{ route('turno.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="nome" id="nome" class=" btn-pesquisar" value="{{ $nome }}" placeholder="Nome da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

            <a href="{{ route('turno.create') }}" class="btnCadastrar">
                <button>
                    <h5>CADASTRAR</h5>
                    <i class="fa-solid fa-angle-right"></i>
                </button>  
            </a>
        </div> 

        <div class="card-body"> 
            <table >
                <thead>
                    <tr class="titulos">
                        <th>ID</th>
                        <th>NOME</th>
                        <th>INICIO</th>
                        <th>PAUSA</th>
                        <th>RETORNO</th>
                        <th>TERMINO</th>
                        <th>EMPRESA 2 </th>
                        <th>USUÁRIO</th>
                        <th class="text-center">AÇÕES:</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($turno as $turn)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $turn->id }}</th>
                            <th>{{ $turn->nome }}</th>
                            <th>{{ $turn->inicio }}</th>
                            <th>{{ $turn->pausa }}</th>
                            <th>{{ $turn->retorno }}</th>
                            <th>{{ $turn->termino }}</th>
                            <th>{{ $turn->id_emp2 }}</th>
                            <th>{{ $turn->id_users }}</th>

                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">

                                <a href="{{ route('turno.view', ['turno' => $turn->id]) }}" class='btnIcons'>
                                    <i class="fa-regular fa-eye "></i>
                                </a>

                                <a href="{{ route('turno.edit', ['turno' => $turn->id]) }}" class='btnIcons'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('turno.delete', ['turno' => $turn->id]) }}">
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
        </div>
        {{ $turno->onEachSide(0)->links() }} 
    </div>
</div>



@endsection

