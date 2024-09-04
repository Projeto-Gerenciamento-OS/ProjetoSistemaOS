@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-3 cardCorLista "  >
        <div class="  card-header">
            <h1 class="mt-3">Nova Empresa 2</h1>

            <a href="{{ route('emp2.index') }}" class="btn "><i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span>
            </a>

        </div>
    
        <div class="card-body"> 
            <x-alert />

            <form action="{{ route('emp2.store') }}" method="POST" class="row  ">
                @csrf
                @method('POST')

                    <!-- Coluna 1 -->
                    <div class="col-6 col-lg-6">
                        <div class="mb-3">
                            <label for="id_emp1" class="form-label">EMPRESA 1</label>
                            <input type="number" name="id_emp1" id="id_emp1" class="form-control" placeholder="Código Empresa 1" value="{{ old('id_emp1') }}">
                        </div>

                        <div class="mb-3">
                            <label for="fone1" class="form-label">TELEFONE 1</label>
                            <input type="text" name="fone1" id="fone1" class="form-control" placeholder="Telefone 1" value="{{ old('fone1') }}">
                        </div>

                        <div class="mb-3">
                            <label for="fone2" class="form-label">TELEFONE 2</label>
                            <input type="text" name="fone2" id="fone2" class="form-control" placeholder="Telefone 2" value="{{ old('fone2') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="qtdeadm" class="form-label">QUANT DE ADM</label>
                            <input type="number" name="qtdeadm" id="qtdeadm" class="form-control" placeholder="Quantidade Adm" value="{{ old('qtdeadm') }}">
                        </div>

                        <div class="mb-3">
                            <label for="qtdeoper" class="form-label">QUANT DE OPER</label>
                            <input type="number" name="qtdeoper" id="qtdeoper" class="form-control" placeholder="Quantidade Oper" value="{{ old('qtdeoper') }}">
                        </div>
                    </div>

                    <!-- Coluna 2 -->

                    <div class="col-6 col-lg-6">
                    
                        <div class="mb-3">
                            <label for="cidade" class="form-label">CIDADE</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" value="{{ old('cidade') }}">
                        </div>

                        <div class="mb-3">
                            <label for="bairro" class="form-label">BAIRRO</label>
                            <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" value="{{ old('bairro') }}">
                        </div>

                        <div class="mb-3">
                            <label for="endereco" class="form-label">ENDEREÇO</label>
                            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Razão Social" value="{{ old('razao') }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="numero" class="form-label">NÚMERO</label>
                            <input type="text" name="numero" id="numero" class="form-control" placeholder="Número" value="{{ old('numero') }}">
                        </div>

                        <div class="mb-3">
                            <label for="uf" class="form-label">UF</label>
                            <input type="text" name="uf" id="uf" class="form-control" placeholder="UF" value="{{ old('uf') }}">
                        </div>

                    </div>
                    
                    <!-- Coluna 3 -->
                    <div class="col-6 col-lg-6">

                        <div class="mb-3">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" name="cep" id="cep" class="form-control" placeholder="Cep" value="{{ old('cep') }}">
                        </div>

                        <div class="mb-3">
                            <label for="plano" class="form-label">PLANO</label>
                            <input type="text" name="plano" id="plano" class="form-control" placeholder="Plano" value="{{ old('plano') }}">
                        </div>

                        <div class="mb-3">
                            <label for="razao" class="form-label">RAZÃO</label>
                            <input type="text" name="razao" id="razao" class="form-control" placeholder="Razão Social" value="{{ old('razao') }}">
                        </div>

                        <div class="mb-3">
                            <label for="cnpj" class="form-label">CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ" value="{{ old('cnpj') }}">
                        </div>

                        <div class="mb-3">
                                <label for="fantasia" class="form-label">FANTASIA</label>
                                <input type="text" name="fantasia" id="fantasia" class="form-control" placeholder="Fantasia" value="{{ old('fantasia') }}">
                        </div>
                    </div>

                <a  class="btnCadastrar ">
                    <button type="submit">
                        <h5>CONCLUIR</h5>
                        <i class="fa-solid fa-angle-right"></i>
                    </button>  
                </a>

            </form>
        
        </div>
    </div>
</div>
@endsection