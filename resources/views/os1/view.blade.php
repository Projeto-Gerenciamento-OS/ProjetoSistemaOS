@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4 data-container">
    <div class="card mb-4 cardCorLista">
        <div class="card-header">
            <h1>Detalhes da OS1</h1>
        </div>
        <div class="card-body">
            <h2>Detalhes da OS1</h2>
            <p>ID: {{ $os1->id }}</p>
            <p>Data de Cadastro: {{ $os1->datacad }}</p>
            <p>Observações: {{ $os1->obs }}</p>
            <!-- Outros campos de OS1 -->

            <h2>OS2 Relacionadas</h2>
            @foreach($os1->os2 as $os2)
                <p>ID: {{ $os2->id }}</p>
                <p>Quantidade: {{ $os2->qtde }}</p>
                <!-- Outros campos de OS2 -->
            @endforeach

            <h2>OS3 Relacionadas</h2>
            @foreach($os1->os3 as $os3)
                <p>ID: {{ $os3->id }}</p>
                <p>Quantidade: {{ $os3->qtde }}</p>
                <!-- Outros campos de OS3 -->
            @endforeach

            <h2>OS4 Relacionadas</h2>
            @foreach($os1->os4 as $os4)
                <p>ID: {{ $os4->id }}</p>
                <p>Descrição: {{ $os4->descricao }}</p>
                <!-- Outros campos de OS4 -->
            @endforeach
        </div>
    </div>
</div>
@endsection