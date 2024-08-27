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
                <div class="">
                    <div class="card mb-4 cardCorLista ">
                        {{--
                        <div class="card-header">
                            <div class='abas'>
                                <a  class="bold os1-titulo" >OS1</a>
                                <a href="{{route('os2.index')}}" class="bold">OS2</a>
                                <a href="{{route('os3.index')}}" class="light">OS3</a>
                                <a href="{{route('os4.index')}}" class="light">OS4</a>
                            </div>

                            <h5>OS1</h5>
                        </div> 
                        --}}

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
            </div>
        </div>


        <div class="accordion-item" style='border: 1px solid red; pointer-events: none;' >
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
    </div>  
    
    {{-- <div class="card mb-4 cardCorLista ">
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
    </div> --}} 
</div>

<a href="{{ route('os1.create') }}" class="btnCadastrar">
    <button>
        <h5>Cadastrar</h5>
        <i class="fa-solid fa-angle-right"></i>
    </button>  
</a>    
        
@endsection