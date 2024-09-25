@extends('layouts.login')

@section('content')

<form action="{{ route('login.acesso') }}" id='formLogin' method='POST'>
    @csrf
    @method('POST')

    @if ($errors->any())

	<div class="alerta">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>

    @endif

    <div class="container">
        <div class="login-background">
            <div class='logo'>
                <img src="/img/logo - Copia.png" alt="">
                <h1>LOGIN</h1>
            </div>

            <div class="dados-usuario">
                <label for="email">E-mail</label>
                <input class="input-dado" type="text" name="email" value="{{old('email')}}">

                <label for="password">Senha</label>
                <input class="input-dado" type="password" name="password">
            </div>

            <div class="botoes">
                <button class="botao-entrar" type='submit'><span>Entrar</span></button>
            </div>
        </div>
    </div>

</form>

@endsection