@extends('layouts.admin')

@section('content')

<div class="container-fluid  data-container" >
    <div class="card mb-4 cardCorLista " >

        <div class="cardHeaderAsociados card-header">
                <h2 class="mt-3">Edição</h2>
                <span class="ms-auto d-flex  flex-row gap-2">
                    <a href="{{ route('materiais.index') }}" class="btn "> 
                        <span class="listar-texto">Listar</span>
                        <i class="fa-solid fa-list-ul"></i>
                    </a>

                    <a href="{{ route('materiais.view', ['materiais' => $materiais->id]) }}" class="btn ">
                        <span class="listar-texto">Visualizar</span>
                        <i class="fa-regular fa-eye"></i>
                    </a>

                    <form method="POST" action="{{ route('materiais.delete', ['materiais' => $materiais->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn "
                            onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                            <span class="listar-texto">Apagar</span>
                            <i class="fa-solid fa-trash"></i>
                     </button>
                    </form>

                </span>
            </div>
            <div class="card-body">

                <x-alert />

                <form action="{{ route('materiais.update', ['materiais' => $materiais->id]) }}" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        <label for="nome" >Nome: </label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                            value="{{ old('nome', $materiais->nome) }}">
                    </div>

                    <div class="col-6">
                        <label for="custo" >Custo: </label>
                        <input type="text" name="custo" id="custo" 
                            placeholder=" Melhor e-mail do usuário" value="{{ old('custo', $materiais->custo) }}">
                    </div>

    
                    <div class="col-6">
                        <label for="unidade" >Unidade: </label>
                        <input type="text" name="unidade" id="unidade"  placeholder=" Digite a unidade"
                            value="{{ old('unidade') }}">
                    </div>
          

                    <div class="col-6">
                        <label for="valor" class="form-label">Valor: </label>
                        <input type="text"  name="valor" id="valor"  value="{{ old('valor', $materiais->valor) }}" >
                    </div>

                    <div class="col-6">
                        <label for="descricao" class="form-label">Descrição: </label>
                        <input type="text"  name="descricao" id="descricao"  value="{{ old('descricao', $materiais->descricao) }}" >
                    </div> 



                    <a  class="btnCadastrar">
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