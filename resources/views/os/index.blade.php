@extends ('layouts.admin')

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
                       
                        
                        <form action="{{ route('os.index') }}">

                            <div class="row">
                                <div class="col-md-5 col-sm-5 mt-2">
                                    <label class="form-label" for="razao"></label>
                                    <input type="text" name="razao" id="razao" class="form-control " value="{{ $id_status }}" placeholder="Pesquisar" />
                                 
                                </div>
                                <div class="col-md-6 col-sm-6 mt-2 pt-4 mb-5">
                                    <button type="submit" class="btn btn-info btn-sm">Pesquisar</button>       
                                </div>
            
                            </div>
                        
                        </form>
                        
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
                                    <th>{{ $item->start }}</th>
                                    <th>{{ $item->end }}</th>
                                    <th>{{ $item->title }}</th>
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
                                <h5>CADASTRAR</h5>
                                <i class="fa-solid fa-plus"></i>
                            </button>  
                        </a>   
                    </table>
                </div>
                {{ $os1->onEachSide(0)->links() }} 
            </div>
        </div>
    </div>

    {{-- <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOs2" aria-expanded="false" aria-controls="collapseOs2">
                OS 2
            </button>
        </h2>

        <div id="collapseOs2" class="accordion-collapse collapse " data-bs-parent="#accordionOSs">

            <div class="card mb-4 cardCorLista ">
                <div class="card-body" > 
                    <x-alert />

                    <table>
                        <form action="{{ route('os.index') }}">
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
                                <th>EMPRESA 2 </th>
                                <th>ID OS1</th>
                                <th>ID SERVIÇO</th>
                                <th>COLABORADOR</th>
                                <th>QUANTIDADE</th>
                                <th>VALOR UNI.</th>
                                <th>VALOR</th>
                                <th>CUSTO UNI.</th>
                                <th>CUSTO</th>
                                <th class="text-center">AÇÕES:</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($os2 as $item)
                                <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                                    <th>{{ $item->id }}</th>
                                    <th>{{ $item->id_emp2 }}</th>
                                    <th>{{ $item->id_os1 }}</th>
                                    <th>{{ $item->id_servico }}</th>
                                    <th>{{ $item->id_colaborador }}</th>
                                    <th>{{ $item->qtde }}</th>
                                    <th>{{ $item->vunit }}</th>
                                    <th>{{ $item->vtotal }}</th>
                                    <th>{{ $item->cunit }}</th>
                                    <th>{{ $item->ctotal }}</th>
                                    
                                    <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >

                                        <a href="{{ route('os1.os2.edit', ['os2' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>

                                        <a href="{{ route('os1.os2.edit', ['os2' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <form method="POST" action="{{ route('os1.os2.delete', ['os2' => $item->id]) }}">
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
                    </table>
                </div>
                {{ $os2->onEachSide(0)->links() }} 
            </div>

        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOs3" aria-expanded="false" aria-controls="collapseOs3">
                OS 3
            </button>
        </h2>

        <div id="collapseOs3" class="accordion-collapse collapse " data-bs-parent="#accordionOSs">
            <div class="card mb-4 cardCorLista ">
                
                <div class="card-body" > 
                    <x-alert />

                    <table>

                        <form action="{{ route('os.index') }}">
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
                                <th>QUANTIDADE</th>
                                <th>VALOR UNI.</th>
                                <th>VALOR</th>
                                <th>CUSTO UNI.</th>
                                <th>CUSTO</th>
                                <th>EMPRESA 2 </th>
                                <th>ID OS1</th>
                                <th>ID MATERIAIS</th>
                                <th class="text-center">AÇÕES:</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($os3 as $item)
                                <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                                    <th>{{ $item->id }}</th>
                                    <th>{{ $item->qtde }}</th>
                                    <th>{{ $item->vunit }}</th>
                                    <th>{{ $item->vtotal }}</th>
                                    <th>{{ $item->cunit }}</th>
                                    <th>{{ $item->ctotal }}</th>
                                    <th>{{ $item->id_emp2 }}</th>
                                    <th>{{ $item->id_os1 }}</th>
                                    <th>{{ $item->id_materiais }}</th>
                                    
                                    <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >

                                        <a href="{{ route('os1.os3.view', ['os3' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>

                                        <a href="{{ route('os1.os3.edit', ['os3' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <form method="POST" action="{{ route('os1.os3.delete', ['os3' => $item->id]) }}">
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
                {{ $os3->onEachSide(0)->links() }}
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOs4" aria-expanded="false" aria-controls="collapseOs4">
                OS 4
            </button>
        </h2>

        <div id="collapseOs4" class="accordion-collapse collapse " data-bs-parent="#accordionOSs">
            <div class="card mb-4 cardCorLista ">
                
                <div class="card-body" > 
                    <table>
                        
                        <form action="{{ route('os.index') }}">
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
                                <th>DESCRIÇÃO</th>
                                <th> PERCENTUAL</th>
                                <th>VALOR</th>
                                <th>ATIVO</th>
                                <th>EMPRESA 2 </th>
                                <th class="text-center">AÇÕES:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($os4 as $item)
                                <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                                    <th>{{ $item->id }}</th>
                                    <th>{{ $item->descricao }}</th>
                                    <td>{{ $item->percentual }}</td>
                                    <th>{{ $item->valor }}</th>
                                    <th>{{ $item->ativo }}</th>
                                    <th>{{ $item->id_emp2 }}</th>
                                    
                                    <td class="d-md-flex flex-row gap-2 justify-content-center pt-8" >

                                        <a href="{{ route('os1.os4.view', ['os4' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>

                                        <a href="{{ route('os1.os4.edit', ['os4' => $item->id]) }}" class="btnIcons">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <form method="POST" action="{{ route('os1.os4.delete', ['os4' => $item->id]) }}">
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
    </div> --}}
</div>   
</div> 

    
@endsection
