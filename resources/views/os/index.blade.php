@extends ('layouts.admin')

@section('content') 
<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista">
        <div class="card-header">
            <h1 class="mt-3">OS 1</h1>
        </div>
        <div class="card mb-4 cardCorLista ">
            <div class="card-body" > 
                <x-alert />
                
                <table>
                    <form action="{{ route('os.index') }}">
                        <div class="pesquisar">
                            
                            <input type="text" name="id_status" id="id_status" class="form-control  input-pesquisar" value="{{ $id_status }}" placeholder="Nome da conta" />

                            <button  type="submit" class="btn-pesquisar">
                                <i class="fa-solid fa-magnifying-glass "></i>
                            </button>
                        </div>
                    </form>

                    <a href="{{ route('os1.create') }}" class="btnCadastrar">
                        <button>
                            <h5>CADASTRAR</h5>
                            <i class="fa-solid fa-plus"></i>
                        </button>  
                    </a> 
                    

                    <thead>
                        <tr class="titulos"> 
                            <th>ID</th>
                            <th>EMPRESA 2 </th>
                            <th>STATUS</th>
                            <th>USUÁRIO</th>
                            <th>DATA</th>
                            <th>INICIO</th>
                            <th>FINAL</th>
                            <th>OBS</th>
                            <th>VALOR</th>
                            <th>CUSTO</th>
                            <th>CUSTO INDIRETO</th>
                            <th>RESULTADO</th>
                            <th class="text-center">AÇÕES:</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($os1 as $item)
                            <tr class='linhaComCoresDiferentes' id='linhaCores_{{ $item->id }}'>
                                <th>{{ $item->id }}</th>
                                <th>{{ $item->id_emp2 }}</th>
                                <th>{{ $item->id_status }}</th>
                                <th>{{ $item->id_users }}</th>
                                <th>{{ $item->datacad }}</th>
                                <th>{{ $item->dhi }}</th>
                                <th>{{ $item->dhf }}</th>
                                <th>{{ $item->obs }}</th>
                                <th>{{ $item->vtotal }}</th>
                                <th>{{ $item->ctotal }}</th>
                                <th>{{ $item->cindireto }}</th>
                                <th>{{ $item->vresultado }}</th>
                                
                                <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">

                                    <a href="{{ route('os1.view', ['os1' => $item->id]) }}" class="btnIcons">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>

                                    <a href="{{ route('os1.edit', ['os1' => $item->id]) }}" class="btnIcons">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <form method="POST" action="{{ route('os1.delete', ['os1' => $item->id]) }}">
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
            </div>
            {{ $os1->onEachSide(0)->links() }} 
        </div>
    </div>
</div> 

    
@endsection
