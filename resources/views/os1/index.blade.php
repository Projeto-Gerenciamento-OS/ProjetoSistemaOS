@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container os-container">

<div class="accordion" id="accordionOSs">

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOs1" aria-expanded="true" aria-controls="collapseOs1">
                OS 1
            </button>
        </h2>
        
        <div id="collapseOs1" class="accordion-collapse collapse show" data-bs-parent="#accordionOSs">
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
                                <th>ID EMP1</th>
                                <th>Data Cadastrada</th>
                                <th>DHI</th>
                                <th>DHF</th>
                                <th>Obs</th>
                                <th>Valor Total</th>
                                <th>Custo Total</th>
                                <th>Custo Indireto</th>
                                <th>Valor Resultado</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($os1 as $item)
                                <tr class='linhaComCoresDiferentes' id='linhaCores_{{ $item->id }}'>
                                    <th>{{ $item->id }}</th>
                                    <th>{{ $item->id_emp1 }}</th>
                                    <td>{{ $item->datacad}}</td>
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
                        <a href="{{ route('os1.create') }}" class="btnCadastrar-os">
                            <button>
                                <h5>Cadastrar</h5>
                                <i class="fa-solid fa-angle-right"></i>
                            </button>  
                        </a>   
                    </table>
                </div>
                {{ $os1->onEachSide(0)->links() }} 
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOs2" aria-expanded="false" aria-controls="collapseOs2">
                OS 2
            </button>
        </h2>

        <div id="collapseOs2" class="accordion-collapse collapse" data-bs-parent="#accordionOSs">

            <div class="card mb-4 cardCorLista ">
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
                                <th>ID EMP1</th>
                                <th>ID EMP2</th>
                                <th>ID Colaborador</th>
                                <th>Quantidade</th>
                                <th>Valor Unitário</th>
                                <th>Valor Total</th>
                                <th>Custo Total</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($os2 as $item)
                                <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                                    <th>{{ $item->id }}</th>
                                    <th>{{ $item->id_servico }}</th>
                                    <td >{{ $item->id_emp1_os2 }}</td>
                                    <th>{{ $item->id_emp2_os2 }}</th>
                                    <th>{{ $item->id_colaborador }}</th>
                                    <th>{{ $item->quantidade_os2 }}</th>
                                    <th>{{ $item->valorUnitario_os2 }}</th>
                                    <th>{{ $item->valorTotal_os2 }}</th>
                                    <th>{{ $item->custoTotal_os2 }}</th>
                                    <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >

                                        <a href="{{ route('os2.view', ['os2' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>

                                        <a href="{{ route('os2.edit', ['os2' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <form method="POST" action="{{ route('os2.delete', ['os2' => $item->id]) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Tem certeza que deseja apagar este registro?')" class="btn-apagar btnIcons">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            
                            @empty
                                <div class="alert alert-danger " role="alert">Nenhuma OS encontrada!</div>
                              
                            @endforelse
                
                        </tbody>
                        <a href="{{ route('os2.create') }}" class="btnCadastrar-os">
                            <button>
                                <h5>Cadastrar</h5>
                                <i class="fa-solid fa-angle-right"></i>
                            </button>  
                        </a>  
                    </table>
                    {{ $os2->onEachSide(0)->links() }}
                </div>
            </div>

        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOs3" aria-expanded="false" aria-controls="collapseOs3">
                OS 3
            </button>
        </h2>

        <div id="collapseOs3" class="accordion-collapse collapse" data-bs-parent="#accordionOSs">
            <div class="card mb-4 cardCorLista ">
                
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
                            @forelse ($os3 as $item)
                                <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                                    <th>{{ $item->id }}</th>
                                    <th>{{ $item->id_os1_os3}}</th>
                                    <td >{{ $item->id_emp1_os3 }}</td>
                                    <th>{{ $item->id_emp2_os3 }}</th>
                                    <th>{{ $item->id_material }}</th>
                                    <th>{{ $item->valorUnitario_os3 }}</th>
                                    <th>{{ $item->valorTotal_os3 }}</th>
                                    <th>{{ $item->custoTotal_os3 }}</th>
                                    
                                    <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >

                                        <a href="{{ route('os3.view', ['os3' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>

                                        <a href="{{ route('os3.edit', ['os3' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <form method="POST" action="{{ route('os3.delete', ['os3' => $item->id]) }}">
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

                        <a href="{{ route('os3.create') }}" class="btnCadastrar-os">
                            <button>
                                <h5>Cadastrar</h5>
                                <i class="fa-solid fa-angle-right"></i>
                            </button>  
                        </a> 
                    </table>
                    {{ $os3->onEachSide(0)->links() }}
                </div>
            </div>
                
            
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOs4" aria-expanded="false" aria-controls="collapseOs4">
                OS 4
            </button>
        </h2>

        <div id="collapseOs4" class="accordion-collapse collapse" data-bs-parent="#accordionOSs">
            <div class="card mb-4 cardCorLista ">
                
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
                            @forelse ($os4 as $item)
                                <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                                    <th>{{ $item->id }}</th>
                                    <th>{{ $item->id_emp1_os4 }}</th>
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

                        <a href="{{ route('os4.create') }}" class="btnCadastrar-os">
                            <button>
                                <h5>Cadastrar</h5>
                                <i class="fa-solid fa-angle-right"></i>
                            </button>  
                        </a> 
                    </table>
                    {{ $os4->onEachSide(0)->links() }} 
                </div>
            </div>
        </div>
    </div>
</div>  
</div>

    
@endsection