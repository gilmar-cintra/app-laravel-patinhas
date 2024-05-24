@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Adicionar Pet</h1>
    <form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="raca_id">Raça:</label>
            <select name="raca_id" id="raca_id" class="form-control" required>
                <!-- Assumindo que você passará uma lista de raças na view -->
                @foreach($racas as $raca)
                    <option value="{{ $raca->id }}">{{ $raca->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>
</div>
@endsection
