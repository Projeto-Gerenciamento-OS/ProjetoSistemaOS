@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista  ">
        <div class="  card-header"  >
            <h2 class="mt-3">Editar</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('user.index') }}" class="btn ">
                    <span class="listar-texto">LISTAR</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('user.view', ['user' => $user->id]) }}" class="btn ">
                    <span class="listar-texto">VISUALIZAR</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('user.delete', ['user' => $user->id]) }}">
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

            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" class="row  ">
                @csrf
                @method('PUT')

                <div class="BodyLayout">
                    <div class="mb-3">
                        <label class="form-label" for="nome" >NOME </label>
                        <input type="text" name="nome" id="nome"  placeholder="Digeite o(a) NOME..."
                            value="{{ old('nome', $user->nome) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="email" >EMAIL</label>
                        <input type="email" name="email" id="email"  placeholder="Digeite o(a) EMAIL..."
                            value="{{ old('email', $user->email) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password" >SENHA</label>
                        <input type="password" name="password" id="password"   placeholder="Digeite o(a) SENHA...">
                    </div>

                    <div class="mb-3">
                        <label for="roles" class="form-label">NÍVEL</label>
                        
                        <select name="roles" class="form-select" id="roles">
                            <option value="">Selecione</option>
                            @forelse($roles as $role)
                            
                                @if ($role !=" Admin")
                                    <option {{ old('roles', $userRoles) == $role ? 'selected' : '' }} value="{{ $role }}">{{ $role }}</option>
                                @else
                                    @if (Auth::user()->hasRole('Admin'))
                                        <option {{ old('roles', $userRoles) == $role ? 'selected' : '' }} value="{{ $role }}">{{ $role }}</option>
                                    @endif
                                    
                                @endif
                                @empty 
                            @endforelse
                        </select>
                    </div> 

                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">EMPRESA 2</label>
                        <input type="number" min="1" max="3" name="id_emp2" id="id_emp2"  placeholder="EMPRESA 2..." value="{{ old('email', $user->id_emp2) }}" >
                    </div>
                    
                    <div class="mb-3">
                        <label for="id_emp2" class="form-label">TIPO</label>
                        <input type="number" min="1" max="3" name="tipo" id="tipo"  placeholder="TIPO..." value="{{ old('tipo', $user->tipo) }}" >
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

