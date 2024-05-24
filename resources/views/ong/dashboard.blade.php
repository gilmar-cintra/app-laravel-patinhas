@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Bem-vindo, {{ $ong->nome }}</h1>
    <a href="{{ route('pets.index') }}" class="btn btn-primary">Gerenciar Pets</a>
</div>
@endsection
