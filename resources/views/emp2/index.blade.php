@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-4 cardCorLista">
        <div class="card-header">
            <h1 class="mt-3">Empresa 2</h1>
            <form action="{{ route('emp2.index') }}">
                <div class="pesquisar">
                    
                    <input type="text" name="razao" id="cnpj" class="form-control btn-pesquisar" value="{{ $razao }}" placeholder="CNPJ da conta" />

                    <button  type="submit" class="btn-pesquisar">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
            </form>

            <a href="{{ route('emp2.create') }}" class="btnCadastrar">
                <button>
                    <h5>Cadastrar</h5>
                    <i class="fa-solid fa-angle-right"></i>
                </button>  
            </a>    

        </div>
      
        <div class="card-body"> 
            <x-alert />

            <table>
                <thead class="p-8">
                    <tr class="titulos"> 
                        <th>id_emp1</th>
                        <th>Razão</th>
                        <th>Fantasia</th>
                        <th>CNPJ</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Cidade</th>                 
                        <th>uf</th>
                        <th>CEP</th>
                        <th>Telefone 1</th>
                        <th>Telefone 2</th>
                        <th>Plano</th>
                        <th>Qtd de Adm</th>
                        <th>Qtd de Oper</th>                   
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($emp2 as $empres)
                        <tr class='linhaComCoresDiferentes' id='linhaCores_$'>
                            <th>{{ $empres->id_emp1 }}</th>
                            <th>{{ $empres->razao }}</th>
                            <th>{{ $empres->fantasia }}</th>
                            <th>{{ $empres->cpnj }}</th>
                            <th>{{ $empres->endereco }}</th>
                            <th>{{ $empres->numero }}</th>
                            <th>{{ $empres->bairro }}</th>
                            <th>{{ $empres->cidade }}</th>
                            <th>{{ $empres->uf }}</th>
                            <th>{{ $empres->cep }}</th>
                            <th>{{ $empres->fone1 }}</th>
                            <th>{{ $empres->fone2 }}</th>
                            <th>{{ $empres->plano }}</th>
                            <th>{{ $empres->qtdeadm }}</th>
                            <th>{{ $empres->qtdeoper }}</th>
                            
                            <td class="d-md-flex flex-row gap-2 justify-content-center pt-8">
                                <a href="{{ route('emp2.view', ['emp2' => $empres->id]) }}" class='btnIcons'>
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <a href="{{ route('emp2.edit', ['emp2' => $empres->id]) }}" class='btnIcons'>
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form method="POST" action="{{ route('emp2.delete', ['emp2' => $empres->id]) }}">
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
        </div>
        {{ $emp2->onEachSide(0)->links() }} 
    </div>
</div>
                                                                                                                                                               


@endsection