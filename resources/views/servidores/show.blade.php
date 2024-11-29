@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Servidor</h1>
    <p><strong>ID:</strong> {{ $servidor->id }}</p>
    <p><strong>Nome:</strong> {{ $servidor->nome }}</p>
    <p><strong>Descrição:</strong> {{ $servidor->descricao }}</p>
    <a href="{{ route('servidores.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
