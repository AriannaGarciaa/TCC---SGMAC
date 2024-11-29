@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Criar Equipamento</h2>
    <form method="POST" action="{{ route('equipamentos.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Equipamento</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="local_id" class="form-label">Local</label>
            <select name="local_id" id="local_id" class="form-control">
                @foreach($locais as $local)
                    <option value="{{ $local->id }}">{{ $local->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
