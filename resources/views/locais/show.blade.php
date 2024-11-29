@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Local</h2>
    <p><strong>ID:</strong> {{ $local->id }}</p>
    <p><strong>Nome:</strong> {{ $local->nome }}</p>
    <p><strong>Descrição:</strong> {{ $local->descricao }}</p>
    <a href="{{ route('locais.index') }}" class="btn btn-secondary">Voltar</a>
    <a href="{{ route('locais.edit', $local->id) }}" class="btn btn-warning">Editar</a>
</div>
@endsection
