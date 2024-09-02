@extends('layouts.admin')

@section('content')

<div class="container-fluid data-container ">
    <div class="card mb-4 cardCorLista  ">
        
        <div class="cardHeaderAsociados card-header"  >
            <h2 class="mt-3">Edição</h2>

            <span class="ms-auto d-flex  flex-row gap-2">
                <a href="{{ route('user.index') }}" class="btn ">
                    <span class="listar-texto">Listar</span>
                    <i class="fa-solid fa-list-ul"></i>
                </a>

                <a href="{{ route('user.view', ['user' => $user->id]) }}" class="btn ">
                    <span class="listar-texto">Visualizar</span>
                    <i class="fa-regular fa-eye"></i>
                </a>

                <form method="POST" action="{{ route('user.delete', ['user' => $user->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn   btn-sm me-1"
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                        <span class="listar-texto">Apagar</span>
                        <i class="fa-solid fa-trash"></i>
                    
                    </button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-6">
                    <div class="mb-3">
                        <label for="nome" >Nome: </label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome completo"
                            value="{{ old('nome', $user->nome) }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" >E-mail: </label>
                        <input type="email" name="email" id="email" 
                            placeholder="Melhor e-mail do usuário" value="{{ old('email', $user->email) }}">
                    </div>

                    <div class="mb-3">
                        <label for="password" >Senha: </label>
                        <input type="password" name="password" id="password"  placeholder="Senha com no mínimo 6 caracteres"
                            value="{{ old('password') }}">
                    </div>
                </div>

                <div class="col-6 mt-2 ">
                    <div class="mb-1">
                        <label for="id_emp2" class="form-label">Tipo: </label>
                        <input type="number" min="1" max="3" name="tipo" id="tipo"  value="{{ old('email', $user->tipo) }}" >
                    </div>
                    <div class="mb-1">
                        <label for="id_emp2" class="form-label">ID EMP2: </label>
                        <input type="number" min="1" max="3" name="id_emp2" id="id_emp2"  value="{{ old('email', $user->id_emp2) }}" >
                    </div>

                    <div class="mb-3">
                        <label for="roles" class="form-label">Nível: </label>
                        {{-- <input type="number" min="1" max="3" name="nivel" id="nivel"  value="{{ old('email', $user->nivel) }}" > --}}
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

