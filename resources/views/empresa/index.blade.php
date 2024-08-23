@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista">
        <div class="card-header">
            <h1 class="mt-3">Empresa Afiliada</h1>
            <form action="{{ route('empresa.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="razao" id="cnpj" class="form-control btn-pesquisar" value="{{ $razao }}" placeholder="CNPJ da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

        </div>
      
        <div class="card-body"> 
            <x-alert />

            <table>
                <thead class="p-8">
                    <tr class="titulos"> 
                        <th>Empresa_1</th>
                        <th>CNPJ</th>
                        <th>Razão</th>
                        <th>Fantasia</th>
                        <th>CEP</th>
                        <th>Logradouro</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>uf</th>                 
                        <th>Telefone1</th>
                        <th>Telefone2</th>
                        <th>Plano</th>
                        <th>Qtd de Adms</th>
                        <th>Qtd de Operadores</th>                  
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($empresa as $empres)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $empres->empresa1_id }}</th>
                            <th>{{ $empres->cnpj }}</th>
                            <th>{{ $empres->razao }}</th>
                            <th>{{ $empres->fantasia }}</th>
                            <th>{{ $empres->cep }}</th>
                            <th>{{ $empres->logradouro }}</th>
                            <th>{{ $empres->numero }}</th>
                            <th>{{ $empres->bairro }}</th>
                            <th>{{ $empres->cidade }}</th>
                            <th>{{ $empres->uf }}</th>
                            <th>{{ $empres->fone1 }}</th>
                            <th>{{ $empres->fone2 }}</th>
                            <th>{{ $empres->plano }}</th>
                            <th>{{ $empres->qtdadm }}</th>
                            <th>{{ $empres->qtdoper }}</th>
                            
                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">
                                <a href="{{ route('empresa.view', ['empresa' => $empres->id]) }}" class='btnIcons'>
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <a href="{{ route('empresa.edit', ['empresa' => $empres->id]) }}" class='btnIcons'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('empresa.delete', ['empresa' => $empres->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-apagar btnIcons" onclick="return confirm('Tem certeza que deseja apagar este registro?')">
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
            {{ $empresa->onEachSide(0)->links() }} 
        </div>
    </div>
</div>

<a href="{{ route('empresa.create') }}" class="btnCadastrar">
    <button>
        <h5>Cadastrar</h5>
        <i class="fa-solid fa-angle-right"></i>
    </button>  
</a>                                                                                                                                                               


@endsection