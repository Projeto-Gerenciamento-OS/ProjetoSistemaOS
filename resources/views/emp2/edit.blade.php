@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista ">
   
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Editar Empresa</h2>

            <span class="ms-auto d-flex  flex-row gap-2 gap-lg-4">
                <a href="{{ route('emp2.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>
                
                <a href="{{ route('emp2.view', ['emp2' => $emp2->id]) }}" class=" btn ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>
                
                <form method="POST" action="{{ route('emp2.delete', ['emp2' => $emp2->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn  btn-sm me-1"
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">Apagar</span>
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('emp2.update', ['emp2' => $emp2->id]) }}" method="POST" class="row g-3" id="marginEditar-empresa">

                @csrf
                @method('PUT')

                <div class="col-6" >
                    <div class="">
                        <label for="id_emp1" class="form-label">Empresa 1:</label>
                        <input type="number" name="id_emp1" id="id_emp1" class="form-control" placeholder="empresa1_id" value="{{old('id_emp1', $emp2->id_emp1) }}">            
                    </div> 

                    <div class="">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ"
                            value="{{ old('razao',$emp2->cnpj) }}">              
                    </div> 
                    
                    <div class="">
                        <label for="razao" class="form-label">Razão:</label>
                        <input type="text" name="razao" id="razao" class="form-control" placeholder="Razão Social"
                            value="{{ old('razao',$emp2->razao) }}">              
                    </div>
                    
                    <div class="">
                        <label for="fantasia" class="form-label">Fantasia:</label>
                        <input type="text" name="fantasia" id="fantasia" class="form-control" placeholder="Fantasia"
                            value="{{ old('fantasia',$emp2->fantasia) }}">              
                    </div>
        
                    <div class="">
                        <label for="cep" class="form-label">Cep:</label>
                        <input type="text" name="cep" id="cep" class="form-control" placeholder="Cep"
                            value="{{ old('cep',$emp2->cep) }}">              
                    </div>
                    
                    <div class="">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço"
                            value="{{ old('endereco',$emp2->endereco) }}">              
                    </div>
        
                    <div class="">
                        <label for="numero" class="form-label">Número:</label>
                        <input type="text" name="numero" id="numero" class="form-control" placeholder="Numero"
                            value="{{ old('numero',$emp2->numero) }}">       
                    </div>
                </div>
                
                <div class="col-6 form-crud" >
                    <div class="">
                        <label for="bairro" class="form-label">Bairro:</label>
                        <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro"
                            value="{{ old('bairro',$emp2->bairro) }}"> 
                    </div>
        
                    <div class="">
                        <label for="cidade" class="form-label">Cidade:</label>
                        <input type="text" name="cidade" id="cidade" class="form-control" placeholder="cidade"
                            value="{{ old('cidade',$emp2->cidade) }}"> 
                    </div>
        
                    <div class="">
                        <label for="uf" class="form-label">UF:</label>
                        <input type="text" name="uf" id="uf" class="form-control" placeholder="uf"
                            value="{{ old('uf',$emp2->uf) }}"> 
                    </div>
               
                    <div class="">
                        <label for="fone1" class="form-label">Telefone 1:</label>
                        <input type="text" name="fone1" id="fone1" class="form-control" placeholder="Telefone 1"
                            value="{{ old('fone1',$emp2->fone1) }}"> 
                    </div>
        
                    <div class="">
                        <label for="fone2" class="form-label">Telefone 2:</label>
                        <input type="text" name="fone2" id="fone2" class="form-control" placeholder="Telefone 2"
                            value="{{ old('fone2',$emp2->fone2) }}"> 
                    </div>
        
                    <div class="">
                        <label for="plano" class="form-label">Plano:</label>
                        <input type="text" name="plano" id="plano" class="form-control" placeholder="Plano"
                            value="{{ old('plano',$emp2->plano) }}"> 
                    </div>
        
                    <div class="">
                        <label for="qtdadm" class="form-label">QuantAdm:</label>
                        <input type="number" name="qtdadm" id="qtdadm" class="form-control" placeholder="Quantidade Adm"
                            value="{{ old('qtdadm',$emp2->qtdadm) }}"> 
                    </div>
        
                    <div class="">
                        <label for="qtdoper" class="form-label">Quant Oper:</label>
                        <input type="number" name="qtdoper" id="qtdoper" class="form-control" placeholder="Quantidade Oper"
                            value="{{ old('qtdoper',$emp2->qtdoper) }}"> 
                    </div>
                </div>   
                   
                
                    
                <a  class="btnCadastrar">
                    <button type="submit">
                        <h5>Salvar</h5>
                         
                    </button>  
                </a>
            </form>
        </div>
    </div>
</div>

@endsection