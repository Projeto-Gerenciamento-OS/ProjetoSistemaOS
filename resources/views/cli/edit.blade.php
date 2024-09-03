@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="cardHeaderAsociados card-header">
                <h2 class="mt-3">Edição</h2>
                <span class="ms-auto d-flex flex-row gap-2">
                    <a href="{{ route('cli.index') }}" class="btn ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('cli.view', ['cli' => $cli->id]) }}" class="btn ">
                        <span class="listar-texto">Visualizar</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('cli.delete', ['cli' => $cli->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn  "
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">Apagar</span>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>

                </span>
            </div>
            <div class="card-body">

                <x-alert />

                <form  action="{{ route('cli.update', ['cli' => $cli->id]) }}" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')
                        <div class="col-6 col-lg-6">
                            <div class="mb-3">
                                <label for="tipo" >tipo </label>
                                <input type="text" name="tipo" id="tipo"  placeholder="Digite aqui "
                                    value="{{ old('tipo', $cli->tipo) }}">
                            </div>

                            <div class="mb-3">
                                <label for="cpf_cnpj">cpf_cnpj </label>
                                <input type="text" name="cpf_cnpj" id="cpf_cnpj" 
                                    placeholder=" Digite aqui" value="{{ old('cpf_cnpj', $cli->cpf_cnpj) }}">
                            </div>

                            <div class="mb-3">
                                <label for="razao" >razao</label>
                                <input type="text" name="razao" id="razao"  placeholder=" razao"
                                    value="{{ old('razao', $cli->razao) }}">
                            </div>

                            <div class="mb-3">
                                <label for="fantasia" >fantasia</label>
                                <input type="text" name="fantasia" id="fantasia"  placeholder=" fantasia"
                                    value="{{ old('fantasia', $cli->fantasia) }}">
                            </div>

                            <div class="mb-3">
                                <label for="endereco" >endereco</label>
                                <input type="text" name="endereco" id="endereco"  placeholder=" endereco"
                                    value="{{ old('endereco', $cli->endereco) }}">
                            </div>

                            <div class="mb-3">
                                <label for="email" >email</label>
                                <input type="email" name="email" id="email"  placeholder=" email"
                                    value="{{ old('email', $cli->email) }}">
                            </div>

                            <div class="mb-3">
                                <label for="cep" >cep</label>
                                <input type="text" name="cep" id="cep"  placeholder=" cep"
                                    value="{{ old('cep', $cli->cep) }}">
                            </div>
                        
                        </div>

                        <div class="col-6 col-lg-6">
                            <div class="mb-3">
                                <label for="numero" >numero </label>
                                <input type="text" name="numero" id="numero" 
                                    placeholder=" Digite aqui" value="{{ old('numero', $cli->numero) }}">
                            </div>

                            <div class="mb-3">
                                <label for="complemento" >complemento</label>
                                <input type="text" name="complemento" id="complemento"  placeholder=" complemento"
                                    value="{{ old('complemento', $cli->complemento) }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="bairro" >bairro</label>
                                <input type="text" name="bairro" id="bairro"  placeholder=" bairro"
                                    value="{{ old('bairro', $cli->bairro) }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="cidade" >cidade</label>
                                <input type="text" name="cidade" id="cidade"  placeholder=" cidade"
                                    value="{{ old('cidade', $cli->cidade) }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="uf" >uf</label>
                                <input type="text" name="uf" id="uf"  placeholder=" uf"
                                    value="{{ old('uf', $cli->uf) }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="fone1" >fone1</label>
                                <input type="text" name="fone1" id="fone1"  placeholder=" fone1"
                                    value="{{ old('fone1', $cli->fone1) }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="fone2" >fone2</label>
                                <input type="text" name="fone2" id="fone2"  placeholder=" fone2"
                                    value="{{ old('fone2', $cli->fone2) }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="obs" >obs</label>
                                <input type="text" name="obs" id="obs"  placeholder=" obs"
                                    value="{{ old('obs', $cli->obs) }}">
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