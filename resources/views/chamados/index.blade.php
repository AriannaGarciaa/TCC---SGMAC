@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Chamados</h1>
    <a href="{{ route('chamados.create') }}" class="btn btn-primary mb-3">Novo Chamado</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chamados as $chamado)
            <tr>
                <td>{{ $chamado->id }}</td>
                <td>{{ $chamado->titulo }}</td>
                <td>{{ $chamado->status }}</td>
                <td>
                    <a href="{{ route('chamados.show', $chamado->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                    <a href="{{ route('chamados.edit', $chamado->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('chamados.destroy', $chamado->id) }}" method="POST" style="display:inline;">
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
