@extends('layouts.painel')

@section('content')
<div class="container">
    <form id="logout-form" action="{{ route('ong.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <h1>Bem-vindo, {{ $ong->nome }}!</h1>

    <div class="col-lg-6">
        <div class="blog-item">
            <div class="row g-0 bg-light overflow-hidden">
                <div class="col-12 col-sm-5 h-100">

                    <img class="img-fluid h-100" src="{{ asset('storage/' . $ong->foto) }}"
                        style="object-fit: cover" />

                </div>
                <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                    <div class="p-4">

                        <p>
                            {{ $ong->endereco.', n° '.$ong->numero.' '.$ong->complemento }}
                            <br>
                            {{ $ong->bairro.' CEP: '.$ong->cep }}
                            <br>
                            {{ $ong->cidade.'-'.$ong->uf }}
                        </p>
                        <div class="d-flex mb-3">
                            <small>
                                <i class="bi bi-envelope me-2"></i>{{ $ong->email }}
                            </small>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="me-3">
                                <i class="bi bi-telephone me-2"></i>{{ $ong->telefone }}
                            </small>
                        </div>
                        <div class="d-flex mb-3">
                            <a style="width: 100px;" href="{{ route('pets.index') }}"
                                class="btn btn-primary">Editar
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a style="width: 100px;" width="100"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="btn btn-primary">Sair</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>




    <h1>Nossos Pets</h1>
    <a href="{{ route('pets.create') }}" class="btn btn-primary">Adicionar Pet</a>
    <br><br>
    <div class="row g-5">
        @foreach($pets as $pet)
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <!-- <img class="img-fluid h-100" src="img/blog-1.jpg" style="object-fit: cover" /> -->

                            <img class="img-fluid h-100"
                                src="{{ asset('storage/' . $pet->foto) }}"
                                style="object-fit: cover" />

                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i
                                            class="bi bi-bookmarks me-2"></i>{{ $pet->raca->nome }}</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>{{ $pet->idade }} anos</small>
                                </div>
                                <h5 class="text-uppercase mb-3">{{ $pet->nome }}</h5>
                                <p>
                                    {{ $pet->descricao }}

                                </p>

                                <a href="{{ route('pets.edit', $pet->id) }}"
                                    class="btn btn-warning">Editar</a>
                                <form action="{{ route('pets.destroy', $pet->id) }}"
                                    method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>



</div>
@endsection
