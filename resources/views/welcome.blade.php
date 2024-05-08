@extends('layouts.main')
@section('title', 'Home - Patinhas em Casa')

@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-uppercase text-dark mb-lg-4">Adotar</h1>
                <h1 class="text-uppercase text-white mb-lg-4">
                    É um ato de amor e responsabilidade
                </h1>
                <p class="fs-4 text-white mb-lg-4">
                    Adote seu pet de forma fácil e segura. Encontre o seu novo amigo
                    hoje mesmo!
                </p>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <a href="" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Saiba Mais</a>
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">
                        Como Funciona
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->
@endsection
