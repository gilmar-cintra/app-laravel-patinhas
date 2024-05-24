@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Pets</h1>
    <a href="{{ route('pets.create') }}" class="btn btn-primary">Adicionar Pet</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Raça</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
                <tr>
                    <td>{{ $pet->nome }}</td>
                    <td>{{ $pet->raca->nome }}</td>
                    <td>{{ $pet->idade }}</td>
                    <td>
                        <a href="{{ route('pets.show', $pet->id) }}"
                            class="btn btn-info">Ver</a>
                        <a href="{{ route('pets.edit', $pet->id) }}"
                            class="btn btn-warning">Editar</a>
                        <form action="{{ route('pets.destroy', $pet->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
