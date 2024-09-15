@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="  card-header">
                <h2 class="mt-3">EDIÇÃO</h2>
                <span class="ms-auto d-flex flex-row gap-2">
                    <a href="{{ route('os.index') }}" class="btn  ">
                        <span class="listar-texto">LISTAR</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os1.os4.view', ['os4' => $os4->id]) }}" class="btn  ">
                        <span class="listar-texto">VISUALIZAR</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('os1.os4.delete', ['os4' => $os4->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn  "
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">APAGAR</span>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </span>
            </div>
            <div class="card-body">

                <x-alert />

                <form action="{{ route('os1.os4.update', ['os4' => $os4->id]) }}" method="POST" class="row  ">
                    @csrf
                    @method('PUT')

                    <div class="col-6 col-lg-6">

                        <div class="mb-3">
                            <label for="descricao" class="form-label" >DESCRIÇÃO</label>
                            <input type="text" name="descricao" id="descricao"  placeholder="Digite aqui "
                                value="{{ old('descricao', $os4->descricao) }}">
                        </div>

                        <div class="mb-3">
                            <label for="percentual" class="form-label"  > PERCENTUAL</label>
                            <input type="text" name="percentual" id="percentual" 
                                placeholder=" Data" value="{{ old('percentual', $os4->percentual) }}">
                        </div>

                        <div class="mb-3">
                            <label for="valor"  class="form-label" >VALOR</label>
                            <input type="text" name="valor" id="valor"  placeholder=" valor"
                                value="{{ old('valor', $os4->valor) }}">
                        </div>

                    </div>

                    <div class="col-6 col-lg-6">
                        <div class="mb-3">
                            <label for="ativo" class="form-label"  >ATIVO</label>
                            <input type="text" name="ativo" id="ativo"  placeholder=" ativo"
                                value="{{ old('ativo', $os4->ativo) }}">
                        </div>
            

                        <div class="mb-3">
                            <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                            <input type="text"  name="id_emp2" id="id_emp2"  value="{{ old('id_emp2', $os4->id_emp2) }}" >
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