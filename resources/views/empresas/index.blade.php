@extends('layouts.admin')

@section('content')

<div class="menuExtendidoContainer">
    <div class="menuExtendido">
        <i class="fa-regular fa-building"></i>
        <a class="nav-link" href="{{ route('emp1.index') }}">Empresa 1</a>
    </div>

    <div class="menuExtendido">
        <i class="fa-solid fa-building-user"></i>
        <a class="nav-link" href="{{ route('emp2.index') }}">Empresa 2</a>
    </div>
</div>

@endsection