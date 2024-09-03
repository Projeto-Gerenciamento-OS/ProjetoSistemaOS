@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container">
    <div class="card mb-3 cardCorLista "  >
        <div class="cardHeaderAsociados card-header">
            <h1 class="mt-3">Cliente</h1>

            <a href="{{ route('cli.index') }}" class="btn "><i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span>
            </a>

        </div>
    
        <div class="card-body"> 
            <x-alert />

            <form action="{{ route('cli.store') }}" method="POST" class="row  ">
                @csrf
                @method('POST')

                        <!-- Coluna 1 -->
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="tipo" class="form-label">tipo:</label>
                                <input type="text" name="tipo" id="tipo" class="form-control" placeholder="tipo" value="{{ old('tipo') }}">
                            </div>

                            <div class="mb-3">
                                <label for="cpf_cnpj" class="form-label">cpf_cnpj:</label>
                                <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control" placeholder="razao" value="{{ old('cpf_cnpj') }}">
                            </div>

                            <div class="mb-3">
                                <label for="razao" class="form-label">razao</label>
                                <input type="text" name="razao" id="razao" class="form-control" placeholder="razao" value="{{ old('razao') }}">
                            </div>

                            <div class="mb-3">
                                <label for="fantasia" class="form-label">fantasia:</label>
                                <input type="text" name="fantasia" id="fantasia" class="form-control" placeholder="fantasia" value="{{ old('fantasia') }}">
                            </div>

                            <div class="mb-3">
                                <label for="endereco" class="form-label">endereco:</label>
                                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="endereco" value="{{ old('endereco') }}">
                            </div>
                        </div>

                        <!-- Coluna 2 -->

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="numero" class="form-label">numero:</label>
                                <input type="text" name="numero" id="numero" class="form-control" placeholder="numero" value="{{ old('numero') }}">
                            </div>

                            <div class="mb-3">
                                <label for="complemento" class="form-label">complemento:</label>
                                <input type="text" name="complemento" id="complemento" class="form-control" placeholder="complemento" value="{{ old('complemento') }}">
                            </div>

                            <div class="mb-3">
                                    <label for="bairro" class="form-label">bairro:</label>
                                    <input type="text" name="bairro" id="bairro" class="form-control" placeholder="bairro" value="{{ old('bairro') }}">
                            </div>

                            <div class="mb-3">
                                <label for="cidade" class="form-label">cidade:</label>
                                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="cidade" value="{{ old('cidade') }}">
                            </div>

                            <div class="mb-3">
                                <label for="uf" class="form-label">uf:</label>
                                <input type="text" name="uf" id="uf" class="form-control" placeholder="Telefone 2" value="{{ old('uf') }}">
                            </div>
                        </div>
                        
                        <!-- Coluna 3 -->
                        <div class="col-lg-4">

                            <div class="mb-3">
                                <label for="email" class="form-label">email:</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="email" value="{{ old('email') }}">
                            </div>
                            
                            <div class="mb-3">
                                <label for="cep" class="form-label">cep:</label>
                                <input type="text" name="cep" id="cep" class="form-control" placeholder="cep" value="{{ old('cep') }}">
                            </div>

                            <div class="mb-3">
                                <label for="fone1" class="form-label">fone1:</label>
                                <input type="text" name="fone1" id="fone1" class="form-control" placeholder="fone1" value="{{ old('fone1') }}">
                            </div>

                            <div class="mb-3">
                                <label for="fone2" class="form-label">fone2:</label>
                                <input type="text" name="fone2" id="fone2" class="form-control" placeholder="Cep" value="{{ old('fone2') }}">
                            </div>

                            <div class="mb-3">
                                <label for="obs" class="form-label">obs:</label>
                                <input type="text" name="obs" id="obs" class="form-control" placeholder="Cep" value="{{ old('obs') }}">
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