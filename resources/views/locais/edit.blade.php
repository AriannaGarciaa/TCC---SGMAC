@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Local</h2>
    <form action="{{ route('locais.update', $local->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Local</label>
            <input type="text" name="nome" id="nome" value="{{ $local->nome }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required>{{ $local->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('locais.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
