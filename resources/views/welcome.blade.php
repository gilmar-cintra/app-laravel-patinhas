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
<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px">
            <h6 class="text-primary text-uppercase">Projeto</h6>
            <h1 class="display-5 text-uppercase mb-0">
                Conheça mais sobre o projeto patinhas em casa
            </h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-house display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">plataforma web</h5>
                        <p>
                            Desenvolvimento de uma plataforma web utilizando tecnologias amplamente utilizadas, como
                            Figma, PHP, Banco de Dados e Docker.
                        </p>
                        <a class="text-primary text-uppercase" href="">Saiba Mais<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-food display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">metodologias ágeis</h5>
                        <p>
                            Utilização de metodologias ágeis, especificamente o SCRUM, para organizar as tarefas e
                            responsabilidades durante o desenvolvimento.
                        </p>
                        <a class="text-primary text-uppercase" href="">Saiba Mais<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-grooming display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Sistema de Parcerias</h5>
                        <p>
                            Estabelecimento de parcerias com abrigos de animais e ONGs locais para garantir um fluxo
                            contínuo de animais para adoção.


                        </p>
                        <a class="text-primary text-uppercase" href="">Saiba Mais<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-cat display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">divulgação e organização</h5>
                        <p>
                            Foco na divulgação e organização de informações detalhadas sobre os animais disponíveis para
                            adoção, visando melhorar a experiência.
                        </p>
                        <a class="text-primary text-uppercase" href="">Saiba Mais<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-dog display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">regulamentações locais</h5>
                        <p>
                            Cumprimento das regulamentações locais relacionadas à adoção de animais, garantindo que
                            todos os processos sejam éticos e legais.
                        </p>
                        <a class="text-primary text-uppercase" href="">Saiba Mais<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-vaccine display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Simplificação</h5>
                        <p>
                            Simplificação e tornar mais acessível o processo de adoção de animais domésticos,
                            proporcionando uma experiência positiva.
                        </p>
                        <a class="text-primary text-uppercase" href="">Saiba Mais<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px">
            <h6 class="text-primary text-uppercase">Últimos Pets</h6>
            <h1 class="display-5 text-uppercase mb-0">
                Veja os últimos pets colocados para adoção
            </h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="img/blog-1.jpg" style="object-fit: cover" />
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>ONG Salva
                                        Migos</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan,
                                        2022</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Farofa</h5>
                                <p>
                                    Um cachorro muito dócil e brincalhão, adora crianças e é
                                    um ótimo companheiro para idosos.
                                </p>
                                <a class="text-primary text-uppercase" href="">Saiba Mais<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="img/blog-2.jpg" style="object-fit: cover" />
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>ONG
                                        Preservar</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>16 Fev,
                                        2020</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Afrodite</h5>
                                <p>
                                    Uma cadela cheia de amor para dar, adora brincar e se
                                    esconder, tem um olhar que encanta a todos.
                                </p>
                                <a class="text-primary text-uppercase" href="">Saiba Mais<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection
