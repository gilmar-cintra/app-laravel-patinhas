@extends('layouts.main')

@section('content')
<div class="container">
    <h1>{{ $pet->nome }}</h1>
    <p>Raça: {{ $pet->raca->nome }}</p>
    <p>Descrição: {{ $pet->descricao }}</p>
    <p>Idade: {{ $pet->idade }}</p>
    @if($pet->foto)
        <img src="{{ asset('storage/' . $pet->foto) }}" alt="{{ $pet->nome }}"
            style="max-width: 200px;">
    @endif
    <a href="{{ route('pets.index') }}" class="btn btn-primary">Voltar</a>
</div>
@endsection
