@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 data-container">
    <div class="card mb-4 cardCorLista" >

        <div class="  card-header">
            <h1>USUÁRIO</h1>
            <a href="{{ route('user.index') }}" class="btn">
                <i class="fa-solid fa-list"></i>
                <span class="listar-texto">LISTAR</span>
            </a>
        </div> 
        
        <div class="card-body"> 
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                @method('POST')
        
                <div class="BodyLayout">
                    <div class="mb-3">
                        <label for="nome" class="form-label">NOME</label>
                        <input type="text" name="nome" id="nome" placeholder="Digeite o(a) NOME..."
                        value="{{ old('nome') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">SENHA </label>
                        <input type="password" name="password" id="password" placeholder="Digeite o(a) SENHA..."
                            value="{{ old('password') }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">EMAIL </label>
                        <input type="email" name="email" id="email" placeholder="Digeite o(a) EMAIL..."
                            value="{{ old('email') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2 </label>
                        <input type="text" name="id_emp2" id="id_emp2" placeholder="Digeite o(a) EMPRESA 2..."
                        value="{{ old('id_emp2') }}">
                    </div>                  

                    <div class="mb-3">
                        <label for="roles" class="form-label">NÍVEL </label>
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
                    
                    <div class="mb-3">
                        <label for="tipo" class="form-label">TIPO</label>
                        <input type="number" min="1" max="3" name="tipo" id="tipo"   
                        placeholder="TIPO..." value="{{ old('tipo') }}"
                        required >
                    </div>  
                </div>
                
                <a  class="btnCadastrar">
                    <button type="submit">
                        <h5>CONCLUIR</h5>
                        <i class="fa-solid fa-plus"></i>
                    </button>  
                </a>
            </form>
        </div>
    </div>
</div>

@endsection







