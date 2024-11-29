@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Equipamentos</h1>
    <a href="{{ route('equipamentos.create') }}" class="btn btn-primary mb-3">Novo Equipamento</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Modelo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipamentos as $equipamento)
            <tr>
                <td>{{ $equipamento->id }}</td>
                <td>{{ $equipamento->nome }}</td>
                <td>{{ $equipamento->modelo }}</td>
                <td>
                    <a href="{{ route('equipamentos.show', $equipamento->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                    <a href="{{ route('equipamentos.edit', $equipamento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="POST" style="display:inline;">
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
