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

                    <div class="col-6 col-lg-6">
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição: </label>
                            <input type="text"  name="descricao" id="descricao"  value="{{ old('descricao', $materiais->descricao) }}" >
                        </div> 

                        <div class="mb-3">
                            <label for="unidade" >Unidade: </label>
                            <input type="text" name="unidade" id="unidade"  placeholder=" Digite a unidade"
                                value="{{ old('unidade', $materiais->unidade) }}">
                        </div>

                        <div class="mb-3">
                            <label for="custo" >Custo: </label>
                            <input type="text" name="custo" id="custo" 
                                placeholder=" Melhor e-mail do usuário" value="{{ old('custo', $materiais->custo) }}">
                        </div>
                    </div>

                    <div class="col-6 col-lg-6">
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor: </label>
                            <input type="text"  name="valor" id="valor"  value="{{ old('valor', $materiais->valor) }}" >
                        </div>

                        <div class="mb-3">
                            <label for="id_emp2" >id_emp2: </label>
                            <input type="text" name="id_emp2" id="id_emp2"  placeholder="id_emp2 "
                                value="{{ old('id_emp2', $materiais->id_emp2) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="id_users" >ID Users: </label>
                            <input type="text" name="id_users" id="id_users"  placeholder="id_users "
                                value="{{ old('id_users', $materiais->id_users) }}">
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