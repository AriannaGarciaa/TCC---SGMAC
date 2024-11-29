@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Técnicos</h2>
    <a href="{{ route('tecnicos.create') }}" class="btn btn-primary mb-3">Adicionar Técnico</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tecnicos as $tecnico)
            <tr>
                <td>{{ $tecnico->id }}</td>
                <td>{{ $tecnico->nome }}</td>
                <td>{{ $tecnico->email }}</td>
                <td>{{ $tecnico->telefone }}</td>
                <td>
                    <a href="{{ route('tecnicos.show', $tecnico->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST" style="display:inline-block;">
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
