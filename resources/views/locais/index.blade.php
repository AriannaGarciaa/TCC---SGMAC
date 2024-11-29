@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Locais</h1>
    <a href="{{ route('locais.create') }}" class="btn btn-primary mb-3">Novo Local</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locais as $local)
            <tr>
                <td>{{ $local->id }}</td>
                <td>{{ $local->nome }}</td>
                <td>{{ $local->descricao }}</td>
                <td>
                    <a href="{{ route('locais.show', $local->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                    <a href="{{ route('locais.edit', $local->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('locais.destroy', $local->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
