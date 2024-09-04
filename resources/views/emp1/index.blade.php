@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista" >
        <div class="card-header">
            <h1>Empresa 1</h1>    

            <form action="{{ route('emp1.index') }}">
                <div class="pesquisar">
                    <input type="text" name="descricao" id="descricao" class="form-control btn-pesquisar" value="{{ $descricao }}" placeholder="Nome da conta" />
                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

            <a href="{{ route('emp1.create') }}" class="btnCadastrar">
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
                        <th>DESCRIÇÃO</th>
                    
                        <th class="text-center">AÇÕES:</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($emp1 as $empres)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th  >{{ $empres->id}}</th>   
                            <th>{{ $empres->descricao}}</th>     
                            
                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8"> 
                                <a href="{{ route('emp1.view', ['emp1' => $empres->id]) }}" class="btnIcons">
                                    {{-- {{ dd($emp1)}} --}}
                                    <i class="fa-regular fa-eye"></i> 
                                </a>

                                <a href="{{ route('emp1.edit', ['emp1' => $empres->id]) }}"
                                    class="btnIcons">
                                    <i class="fa-solid fa-pen"></i> 
                                </a>

                                <form action="{{ route('emp1.delete', ['emp1' => $empres->id])}}" method="POST">
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
        </div>
        {{ $emp1->onEachSide(0)->links() }} 
    </div>
</div>




@endsection