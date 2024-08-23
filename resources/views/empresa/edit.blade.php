@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
   
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Editar Empresa</h2>

            <span class="ms-auto d-flex  flex-row gap-2 gap-lg-4">
                <a href="{{ route('empresa.index') }}" class="btn btnIcons btn-primary">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
                
                <a href="{{ route('empresa.view', ['empresa' => $empresa->id]) }}" class="btnIcons btn btn-light">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>
                
                <form method="POST" action="{{ route('empresa.delete', ['empresa' => $empresa->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btnIcons btn-sm me-1"
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">Apagar</span>
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('empresa.update', ['empresa' => $empresa->id]) }}" method="POST" class="row g-3" id="marginEditar-empresa">
                @csrf
                @method('PUT')

                <div class="col-6" >
                    <div class="">
                        <label for="empresa_id" class="form-label">Empresa 1:</label>
                        <input type="number" name="empresa_id" id="empresa_id" class="form-control" placeholder="empresa1_id" value="{{old('empresa1_id', $empresa->empresa1_id) }}">            
                    </div> 

                    <div class="">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ"
                            value="{{ old('razao',$empresa->cnpj) }}">              
                    </div> 
                    
                    <div class="">
                        <label for="razao" class="form-label">Razão:</label>
                        <input type="text" name="razao" id="razao" class="form-control" placeholder="Razão Social"
                            value="{{ old('razao',$empresa->razao) }}">              
                    </div>
                    
                    <div class="">
                        <label for="fantasia" class="form-label">Fantasia:</label>
                        <input type="text" name="fantasia" id="fantasia" class="form-control" placeholder="Fantasia"
                            value="{{ old('fantasia',$empresa->fantasia) }}">              
                    </div>
        
                    <div class="">
                        <label for="cep" class="form-label">Cep:</label>
                        <input type="text" name="cep" id="cep" class="form-control" placeholder="Cep"
                            value="{{ old('cep',$empresa->cep) }}">              
                    </div>
                    
                    <div class="">
                        <label for="logradouro" class="form-label">Logradouro:</label>
                        <input type="text" name="logradouro" id="logradouro" class="form-control" placeholder="Endereço"
                            value="{{ old('logradouro',$empresa->logradouro) }}">              
                    </div>
        
                    <div class="">
                        <label for="numero" class="form-label">Número:</label>
                        <input type="text" name="numero" id="numero" class="form-control" placeholder="Numero"
                            value="{{ old('numero',$empresa->numero) }}">       
                    </div>
                </div>
                
                <div class="col-6 form-crud" >
                    <div class="">
                        <label for="bairro" class="form-label">Bairro:</label>
                        <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro"
                            value="{{ old('bairro',$empresa->bairro) }}"> 
                    </div>
        
                    <div class="">
                        <label for="cidade" class="form-label">Cidade:</label>
                        <input type="text" name="cidade" id="cidade" class="form-control" placeholder="cidade"
                            value="{{ old('cidade',$empresa->cidade) }}"> 
                    </div>
        
                    <div class="">
                        <label for="uf" class="form-label">UF:</label>
                        <input type="text" name="uf" id="uf" class="form-control" placeholder="uf"
                            value="{{ old('uf',$empresa->uf) }}"> 
                    </div>
               
                    <div class="">
                        <label for="fone1" class="form-label">Telefone 1:</label>
                        <input type="text" name="fone1" id="fone1" class="form-control" placeholder="Telefone 1"
                            value="{{ old('fone1',$empresa->fone1) }}"> 
                    </div>
        
                    <div class="">
                        <label for="fone2" class="form-label">Telefone 2:</label>
                        <input type="text" name="fone2" id="fone2" class="form-control" placeholder="Telefone 2"
                            value="{{ old('fone2',$empresa->fone2) }}"> 
                    </div>
        
                    <div class="">
                        <label for="plano" class="form-label">Plano:</label>
                        <input type="text" name="plano" id="plano" class="form-control" placeholder="Plano"
                            value="{{ old('plano',$empresa->plano) }}"> 
                    </div>
        
                    <div class="">
                        <label for="qtdadm" class="form-label">QuantAdm:</label>
                        <input type="number" name="qtdadm" id="qtdadm" class="form-control" placeholder="Quantidade Adm"
                            value="{{ old('qtdadm',$empresa->qtdadm) }}"> 
                    </div>
        
                    <div class="">
                        <label for="qtdoper" class="form-label">Quant Oper:</label>
                        <input type="number" name="qtdoper" id="qtdoper" class="form-control" placeholder="Quantidade Oper"
                            value="{{ old('qtdoper',$empresa->qtdoper) }}"> 
                    </div>
                </div>   
                   
                
                    
                <a  class="btnIcons btnCadastrar">
                    <button type="submit">
                        <h5>Salvar</h5>
                        <i class="fa-solid fa-bookmark"></i>
                    </button>  
                </a>
            </form>
        </div>
    </div>
</div>

@endsection