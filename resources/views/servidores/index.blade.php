@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Servidores</h1>
    <a href="{{ route('servidores.create') }}" class="btn btn-primary mb-3">Novo Servidor</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servidores as $servidor)
            <tr>
                <td>{{ $servidor->id }}</td>
                <td>{{ $servidor->nome }}</td>
                <td>{{ $servidor->descricao }}</td>
                <td>
                    <a href="{{ route('servidores.show', $servidor->id) }}" class="btn btn-info">Visualizar</a>
                    <a href="{{ route('servidores.edit', $servidor->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('servidores.destroy', $servidor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
