@extends('layouts.main')
@section('title', 'Home - Patinhas em Casa')

@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet"/>
@endsection

@section('content')

<div class="painel-login mt-5">
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <div class="input-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required>
                <button type="button" class="toggle-password" onclick="togglePassword()"><i id="eye" class="bi bi-eye"></i></button>
            </div>
            <button type="submit" class="login-button">Entrar</button>
        </form>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/login.js') }}"></script>
@endsection

