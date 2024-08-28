@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container os-container">
    
    <div class="accordion" id="accordionExample">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    OS 1
                </button>
            </h2>
            
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="card mb-4 cardCorLista ">
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
                                @forelse ($os1 as $item)
                                    <tr class='linhaComCoresDiferentes' id='linhaCores_{{ $item->id }}'>
                                        <th>{{ $item->id }}</th>
                                        <th>{{ $item->id_status }}</th>
                                        <td>{{ $item->dataCadastrada }}</td>
                                        <th>{{ $item->dhi }}</th>
                                        <th>{{ $item->dhf }}</th>
                                        <th>{{ $item->valorTotal }}</th>
                                        <th>{{ $item->custoTotal }}</th>
                                        
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
                                    <tr>
                                        <td colspan="7">
                                            <div class="alert alert-danger" role="alert">Nenhuma OS encontrada!</div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $os1->onEachSide(0)->links() }} 
                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    OS 2
                </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="card mb-4 cardCorLista ">
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
                                @forelse ($os2 as $item)
                                    <tr class='linhaComCoresDiferentes' id='linhaCores_{{ $item->id }}'>
                                        <th>{{ $item->id }}</th>
                                        <th>{{ $item->id_status }}</th>
                                        <td>{{ $item->dataCadastrada }}</td>
                                        <th>{{ $item->dhi }}</th>
                                        <th>{{ $item->dhf }}</th>
                                        <th>{{ $item->valorTotal }}</th>
                                        <th>{{ $item->custoTotal }}</th>
                                        
                                        <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">
                                            <a href="{{ route('os2.view', ['os2' => $item->id]) }}" class="btnIcons">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>

                                            <a href="{{ route('os2.edit', ['os2' => $item->id]) }}" class="btnIcons">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>

                                            <form method="POST" action="{{ route('os2.delete', ['os2' => $item->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn-apagar btnIcons" onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">
                                            <div class="alert alert-danger" role="alert">Nenhuma OS encontrada!</div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $os2->onEachSide(0)->links() }} 
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    OS 4
                </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="card mb-4 cardCorLista ">
                    <div class="card-body" > 
                        <table>
                            <form action="{{ route('os1.index') }}">
                                <div class="pesquisar">
                                    
                                    <input type="text" name="id_status" id="id_status" class="form-control btn-pesquisar" value="{{ $id_status }}" placeholder="Nome da OS 4" />

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
                                @forelse ($os2 as $item)
                                    <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                                        <th>{{ $item->id }}</th>
                                        <th>{{ $item->id_status }}</th>
                                        <td>{{ $item->percentual_os4 }}</td>
                                        <th>{{ $item->valor_os4 }}</th>
                                        <th>{{ $item->ativo_os4 }}</th>
                                        <th>{{ $item->descricao_os4 }}</th>
                                        <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >
                                            <a href="{{ route('os4.view', ['os4' => $item->id]) }}" class="btnIcons">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                            <a href="{{ route('os4.edit', ['os4' => $item->id]) }}" class="btnIcons">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <form method="POST" action="{{ route('os4.delete', ['os4' => $item->id]) }}">
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
                            {{ $os1->onEachSide(0)->links() }} 
                        </div>
                    </div>
                </div>
            </div>
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