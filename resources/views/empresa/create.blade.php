@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-3 cardCorLista "  >
        <div class="cardHeaderAsociados card-header">
            <h1 class="mt-3">Nova Empresa Afiliada</h1>

            <a href="{{ route('empresa.index') }}" class="btn btn-primary btnIcons"><i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span>
            </a>

        </div>
    
        <div class="card-body"> 
            <x-alert />

            <form action="{{ route('empresa.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')

                        <!-- Coluna 1 -->
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="empresa1_id" class="form-label">ID EMP1:</label>
                                <input type="number" name="empresa1_id" id="empresa1_id" class="form-control" placeholder="Código Empresa 1" value="{{ old('empresa1_id') }}">
                            </div>

                            <div class="mb-3">
                                <label for="bairro" class="form-label">Bairro:</label>
                                <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" value="{{ old('bairro') }}">
                            </div>

                            <div class="mb-3">
                                <label for="fone1" class="form-label">Telefone 1</label>
                                <input type="text" name="fone1" id="fone1" class="form-control" placeholder="Telefone 1" value="{{ old('fone1') }}">
                            </div>

                            <div class="mb-3">
                                <label for="numero" class="form-label">Número:</label>
                                <input type="text" name="numero" id="numero" class="form-control" placeholder="Número" value="{{ old('numero') }}">
                            </div>

                            <div class="mb-3">
                                <label for="qtdoper" class="form-label">Quant Oper:</label>
                                <input type="number" name="qtdoper" id="qtdoper" class="form-control" placeholder="Quantidade Oper" value="{{ old('qtdoper') }}">
                            </div>
                        </div>

                        <!-- Coluna 2 -->

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="razao" class="form-label">Razão:</label>
                                <input type="text" name="razao" id="razao" class="form-control" placeholder="Razão Social" value="{{ old('razao') }}">
                            </div>

                            <div class="mb-3">
                                    <label for="fantasia" class="form-label">Fantasia:</label>
                                    <input type="text" name="fantasia" id="fantasia" class="form-control" placeholder="Fantasia" value="{{ old('fantasia') }}">
                            </div>

                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade:</label>
                                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" value="{{ old('cidade') }}">
                            </div>

                            <div class="mb-3">
                                <label for="fone2" class="form-label">Telefone 2:</label>
                                <input type="text" name="fone2" id="fone2" class="form-control" placeholder="Telefone 2" value="{{ old('fone2') }}">
                            </div>

                            <div class="mb-3">
                                <label for="uf" class="form-label">UF:</label>
                                <input type="text" name="uf" id="uf" class="form-control" placeholder="UF" value="{{ old('uf') }}">
                            </div>


                        </div>

                        <!-- Coluna 3 -->
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="cnpj" class="form-label">CNPJ:</label>
                                <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ" value="{{ old('cnpj') }}">
                            </div>

                            <div class="mb-3">
                                <label for="logradouro" class="form-label">Logradouro:</label>
                                <input type="text" name="logradouro" id="logradouro" class="form-control" placeholder="Logradouro" value="{{ old('logradouro') }}">
                            </div>

                            <div class="mb-3">
                                <label for="plano" class="form-label">Plano:</label>
                                <input type="text" name="plano" id="plano" class="form-control" placeholder="Plano" value="{{ old('plano') }}">
                            </div>

                            <div class="mb-3">
                                <label for="qtdadm" class="form-label">Quant Adm:</label>
                                <input type="number" name="qtdadm" id="qtdadm" class="form-control" placeholder="Quantidade Adm" value="{{ old('qtdadm') }}">
                            </div>

                            <div class="mb-3">
                                    <label for="cep" class="form-label">Cep:</label>
                                    <input type="text" name="cep" id="cep" class="form-control" placeholder="Cep" value="{{ old('cep') }}">
                            </div>

                        </div>
               

                <a  class="btnCadastrar ">
                    <button type="submit">
                        <h5>Concluir</h5>
                        <i class="fa-solid fa-angle-right"></i>
                    </button>  
                </a>

            </form>
        
        </div>
    </div>
</div>
@endsection