@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="cardHeaderAsociados card-header">
            <h1>Usuários</h1>
            <a href="{{ route('user.index') }}" class="btn"><i class="fa-solid fa-list"></i>
                <span class="listar-texto">Listar</span>
            </a>
        </div> 
        
        <div class="card-body"> 
            <form action="{{ route('user.store') }}" method="POST" class="row g-lg-5 g-4">
                @csrf
                @method('POST')
        
                <div class=" col-6 col-lg-4">
                    <label for="nome" class="form-label">Nome </label>
                    <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                    value="{{ old('nome') }}">
                </div>

                <div class="col-6 col-lg-4">
                    <label for="email" class="form-label">E-mail </label>
                    <input type="email" name="email" id="email" 
                        placeholder="Melhor e-mail do usuário" value="{{ old('email') }}">
                </div>
                
                <div class="col-6 col-lg-4">
                <label for="password" class="form-label">Senha </label>
                    <input type="password" name="password" id="password" 
                        placeholder="Senha com no mínimo 6 caracteres" value="{{ old('password') }}">
                </div>

                <div class="col-6 col-lg-4">
                    <label for="tipo" class="form-label">Tipo </label>
                    <input type="number" min="1" max="3" name="tipo" id="tipo"   required >
                </div>
                <div class="col-6 col-lg-4">
                    <label for="id_emp2" class="form-label">ID EMP2 </label>
                    <input type="number" min="1" max="3" name="id_emp2" id="id_emp2"   required >
                </div>

                <div class="col-6 col-lg-4">
                    <label for="id_emp2" class="form-label">id_emp2 </label>
                    <input type="number" min="1" max="3" name="id_emp2" id="id_emp2"  value="{{ old('id_emp2') }}" required >
                </div>

                <div class="col-6 col-lg-4">
                    <label for="roles" class="form-label">Nível </label>
                    {{-- <input type="number" min="1" max="3" name="nivel" id="nivel"   required> --}}
                    <select name="roles" class="form-select" id="roles">
                        <option value="">Selecione</option>
                         @forelse($roles as $role)  
                            @if ($role !="Super Admin")
                                <option {{old('roles') == $role ? 'selected' : '' }} value="{{ $role }}">{{ $role }}</option>
                            @else
                                @if (Auth::user()->hasRole(' Super Admin'))
                                <option {{old('roles') == $role ? 'selected' : '' }} value="{{ $role }}">{{ $role }}</option>
                            @endif
                                
                            @endif
                         @empty 
                         @endforelse
                        </select>
                </div> 
                
                <a  class="btnCadastrar">
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







