@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
   
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Editar Empresa</h2>

            <span class="ms-auto d-flex  flex-row gap-2 gap-lg-4">
                <a href="{{ route('emp2.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
                
                <a href="{{ route('emp2.view', ['emp2' => $emp2->id]) }}" class=" btn ">
                    <span class="listar-texto">VISUALIZAR</span>
                    <i class="fa-regular fa-eye"></i>
                </a>
                
                <form method="POST" action="{{ route('emp2.delete', ['emp2' => $emp2->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn  btn-sm me-1"
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">APAGAR</span>
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />
            <form action="{{ route('emp2.update', ['emp2' => $emp2->id]) }}" method="POST" class="row  "  id="marginEditar-empresa" >
                @csrf
                @method('PUT')

                <div class="col-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="id_emp1" >EMPRESA 1</label>
                        <input type="text" name="id_emp1" id="id_emp1"  placeholder="Digeite o(a) EMPRESA 1..."
                            value="{{ old('id_emp1', $emp2->id_emp1) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" for="fone1" >TELEFONE 1</label>
                        <input type="text" name="fone1" id="fone1"  placeholder="Digeite o(a) TELEFONE 1..."
                            value="{{ old('fone1', $emp2->fone1) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="fone2" >TELEFONE 2</label>
                        <input type="text" name="fone2" id="fone2"  placeholder="Digeite o(a) TELEFONE 2..."
                            value="{{ old('fone2', $emp2->fone2) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="qtdeadm" >QUANT DE ADM:</label>
                        <input type="text" name="qtdeadm" id="qtdeadm"  placeholder="Digeite o(a) QUANT DE ADM..."
                            value="{{ old('qtdeadm', $emp2->qtdeadm) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="qtdeoper" >QUANT DE OPER</label>
                        <input type="text" name="qtdeoper" id="qtdeoper"  placeholder="Digeite o(a) QUANT DE OPER..."
                            value="{{ old('qtdeoper', $emp2->qtdeoper) }}">
                    </div>
                </div>
                
                <div class="col-6 col-lg-6">   

                    <div class="mb-3">
                        <label class="form-label" for="cidade" >CIDADE</label>
                        <input type="text" name="cidade" id="cidade"  placeholder="Digeite o(a) CIDADE..."
                            value="{{ old('cidade', $emp2->cidade) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="bairro" >BAIRRO</label>
                        <input type="text" name="bairro" id="bairro"  placeholder="Digeite o(a) BAIRRO..."
                            value="{{ old('bairro', $emp2->bairro) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="endereco" >ENDEREÇO</label>
                        <input type="text" name="endereco" id="endereco"  placeholder="Digeite o(a) ENDEREÇO..."
                            value="{{ old('endereco', $emp2->endereco) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="numero" >NÚMERO</label>
                        <input type="text" name="numero" id="numero"  placeholder="Digeite o(a) NÚMERO..."
                            value="{{ old('numero', $emp2->numero) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="uf" >UF</label>
                        <input type="text" name="uf" id="uf"  placeholder="Digeite o(a) UF..."
                            value="{{ old('uf', $emp2->uf) }}">
                    </div>

                </div>
                
                <div class="col-6 col-lg-6">   
                    
                    <div class="mb-3">
                        <label class="form-label" for="cep" >CEP</label>
                        <input type="text" name="cep" id="cep"  placeholder="Digeite o(a) CEP..."
                            value="{{ old('cep', $emp2->cep) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" for="plano" >PLANO</label>
                        <input type="text" name="plano" id="plano"  placeholder="Digeite o(a) PLANO..."
                            value="{{ old('plano', $emp2->plano) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" for="razao" >RAZÃO</label>
                        <input type="text" name="razao" id="razao"  placeholder="Digeite o(a) RAZÃO..."
                            value="{{ old('razao', $emp2->razao) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" for="cnpj" >CNPJ</label>
                        <input type="text" name="cnpj" id="cnpj"  placeholder="Digeite o(a) CNPJ..."
                            value="{{ old('cnpj', $emp2->cnpj) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" for="fantasia" >FANTASIA</label>
                        <input type="text" name="fantasia" id="fantasia"  placeholder="Digeite o(a) FANTASIA..."
                            value="{{ old('fantasia', $emp2->fantasia) }}">
                    </div>
        
                </div>   
                    
                <a  class="btnCadastrar">
                    <button type="submit">
                        <h5>SALVAR</h5>
                    </button>  
                </a>
            </form>
        </div>
    </div>
</div>

@endsection