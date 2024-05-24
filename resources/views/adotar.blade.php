@extends('layouts.main')
@section('title', 'Home - Patinhas em Casa')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <h1>Pets para Doação</h1>

        <br>
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
                                    <p>
                                        {{ $pet->ong->nome }}
                                    </p>
                                    <div class="d-flex mb-3">
                                        <small class="me-3">
                                            <i class="bi bi-telephone me-2"></i>{{ $pet->ong->telefone }}
                                        </small>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
