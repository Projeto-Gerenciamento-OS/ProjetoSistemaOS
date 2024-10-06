@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="card-header">
                <h2 class="mt-3">Editar</h2>
                <span class="ms-auto d-flex flex-row gap-2">
                    
                <a href="{{ route('cli.index') }}" class="btn ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('cli.view', ['cli' => $cli->id]) }}" class="btn">
                        <span class="listar-texto">VISUALIZAR</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('cli.delete', ['cli' => $cli->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn"
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">APAGAR</span>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>

                </span>
            </div>
            <div class="card-body">

                <x-alert />

                <form action="{{ route('cli.update', ['cli' => $cli->id]) }}" method="POST" class="row ">
                    @csrf
                    @method('PUT')
    
                            <!-- Coluna 1 -->
                            <div class="BodyLayout">
                                
                                <div class="mb-3">
                                    <label for="id_emp2" class="form-label">EMPRESA 2:</label>
                                    <input type="text" name="id_emp2" id="id_emp2" class="form-control" placeholder="Empresa 2" value="{{ old('id_emp2', $cli->id_emp2) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="id_users" class="form-label">USUÁRIO</label>
                                    <input type="text" name="id_users" id="id_users" class="form-control" placeholder="Id Usuário" value="{{ old('id_users', $cli->id_users) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="razao" class="form-label">RAZÃO</label>
                                    <input type="text" name="razao" id="razao" class="form-control" placeholder="Razão"  value="{{ old('razao', $cli->razao) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="fantasia" class="form-label">FANTASIA:</label>
                                    <input type="text" name="fantasia" id="fantasia" class="form-control" placeholder="Fantasia" value="{{ old('fantasia', $cli->fantasia) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="tipo" class="form-label">TIPO:</label>
                                    <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo" value="{{ old('tipo', $cli->tipo) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="cpf_cnpj" class="form-label">CPF/CNPJ:</label>
                                    <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control" placeholder="Cpf/Cnpj" value="{{ old('cpf_cnpj', $cli->cpf_cnpj) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="cep" class="form-label">CEP:</label>
                                    <input type="text" name="cep" id="cep" class="form-control" placeholder="Cep" value="{{ old('cep', $cli->cep) }}">
                                </div>
    
                                
                                <div class="mb-3">
                                    <label for="endereco" class="form-label">ENDEREÇO:</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" value="{{ old('endereco', $cli->endereco) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="numero" class="form-label">NÚMERO:</label>
                                    <input type="text" name="numero" id="numero" class="form-control" placeholder="Número" value="{{ old('numero', $cli->numero) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="complemento" class="form-label">COMPLEMENTO:</label>
                                    <input type="text" name="complemento" id="complemento" class="form-control" placeholder="Complemento" value="{{ old('complemento', $cli->complemento) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="bairro" class="form-label">BAIRRO:</label>
                                    <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" value="{{ old('bairro', $cli->bairro) }}">
                                </div>
        
                                <div class="mb-3">
                                    <label for="cidade" class="form-label">CIDADE:</label>
                                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" value="{{ old('cidade', $cli->cidade) }}">
                                </div>           
        
                                <div class="mb-3">
                                    <label for="uf" class="form-label">UF:</label>
                                    <input type="text" name="uf" id="uf" class="form-control" placeholder="UF" value="{{ old('uf', $cli->uf) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="email" class="form-label">EMAIL:</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email', $cli->email) }}">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="fone1" class="form-label">TELEFONE 1:</label>
                                    <input type="text" name="fone1" id="fone1" class="form-control" placeholder="Telefone 1" value="{{ old('fone1', $cli->fone1) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="fone2" class="form-label">TELEFONE 2:</label>
                                    <input type="text" name="fone2" id="fone2" class="form-control" placeholder="Telefone 2" value="{{ old('fone2', $cli->fone2) }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="obs" class="form-label">OBS</label>
                                    <input type="text" name="obs" id="obs" class="form-control" placeholder="Obs" value="{{ old('obs', $cli->obs) }}">
                                </div>
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