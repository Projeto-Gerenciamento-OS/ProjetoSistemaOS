@extends ('layouts.admin')

@section('content')


<div class="container-fluid px-4 data-container"  >
        <div class="card mb-4 cardCorLista " >
            <div  class="cardHeaderAsociados card-header">
                <h2 class="mt-3">Edição</h2>
                <span class="ms-auto d-flex flex-row gap-2">
                    <a href="{{ route('os4.index') }}" class="btn  ">
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('os4.view', ['os4' => $os4->id]) }}" class="btn  ">
                        <span class="listar-texto">Visualizar</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('os4.delete', ['os4' => $os4->id]) }}">
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

                <form action="{{ route('os4.update', ['os4' => $os4->id]) }}" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')
                    <div class="col-6 col-lg-6">
                        <div class="mb-3">
                            <label for="id_emp1_os4" >ID EMP1: </label>
                            <input type="number" name="id_emp1_os4" id="id_emp1_os4"  placeholder="Digite aqui "
                                value="{{ old('id_emp1_os4', $os4->id_emp1_os4) }}">
                        </div>

                        <div class="mb-3">
                            <label for="percentual_os4" >Percentual </label>
                            <input type="text" name="percentual_os4" id="percentual_os4" 
                                placeholder=" Data" value="{{ old('percentual_os4', $os4->percentual_os4) }}">
                        </div>

                        <div class="col-12">
                            <label for="valor_os4" >Valor </label>
                            <input type="text" name="valor_os4" id="valor_os4"  placeholder=" valor_os4"
                                value="{{ old('valor_os4', $os4->valor_os4) }}">
                        </div>

                    </div>

                    <div class="col-6 col-lg-6">
                        <div class="col-12">
                            <label for="ativo_os4" >Ativo </label>
                            <input type="text" name="ativo_os4" id="ativo_os4"  placeholder=" ativo_os4"
                                value="{{ old('ativo_os4', $os4->ativo_os4) }}">
                        </div>
            

                        <div class="col-12">
                            <label for="descricao_os4" class="form-label">Descrição </label>
                            <input type="text"  name="descricao_os4" id="descricao_os4"  value="{{ old('descricao_os4', $os4->descricao_os4) }}" >
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