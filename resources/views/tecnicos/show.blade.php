@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Técnico</h2>
    <p><strong>ID:</strong> {{ $tecnico->id }}</p>
    <p><strong>Nome:</strong> {{ $tecnico->nome }}</p>
    <p><strong>E-mail:</strong> {{ $tecnico->email }}</p>
    <p><strong>Telefone:</strong> {{ $tecnico->telefone }}</p>
    <a href="{{ route('tecnicos.index') }}" class="btn btn-secondary">Voltar</a>
    <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-warning">Editar</a>
</div>
@endsection
