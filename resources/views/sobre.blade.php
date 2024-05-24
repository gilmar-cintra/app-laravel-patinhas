@extends('layouts.main')
@section('title', 'Home - Patinhas em Casa')

@section('content')
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/logo.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="border-start border-5 border-primary ps-5 mb-5">
                    <h6 class="text-primary text-uppercase">Sobre</h6>
                    <h1 class="display-5 text-uppercase mb-0">Patinhas em Casa - Doação e Adoção de Pets</h1>
                </div>
                <h4 class="text-body mb-4">Projeto Integrador em Computação VI</h4>
                <div class="bg-light p-4">
                    <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                aria-selected="true">O que é?</button>
                        </li>
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                aria-selected="false">De onde somos?</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                            aria-labelledby="pills-1-tab">
                            <p class="mb-0">
                                Trata-se de uma atividade curricular obrigatória que consiste na resolução de um
                                problema real contextualizado na profissão em que o curso está inserido.​
                            </p>
                            <p class="mb-0">A cada semestre o tema do Projeto Integrador [PI] muda, mas a metodologia
                                continua a mesma!</p>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <p class="mb-0">A UNIVESP é uma universidade online com diversos polos espalhados por São
                                Paulo. Nosso grupo conta com membros dos polos Jardim Paulistano, Jaçanã, Vila do Sol,
                                Campo Limpo e Aricanduva. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Blog Detail Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <h1 class="text-uppercase mb-4">Conheça o projeto</h1>
            <p>O sistema web Patinhas em Casa é uma solução robusta e personalizável desenvolvida em
                PHP com framework Laravel, banco de dados Postgres e docker para desenvolvimento e
                publicação, projetada especificamente para atender às necessidades das organizações não
                governamentais (ONGs) de adoção de animais. </p>

            <p>Este sistema permite que as ONGs cadastrem
                facilmente seus estabelecimentos no site, fornecendo informações abrangentes sobre sua
                missão, localização e horário de funcionamento. </p>
            <p>
                Após o cadastro do estabelecimento, as
                ONGs têm a capacidade de listar os animais disponíveis para adoção, utilizando uma interface
                intuitiva e amigável. </p>
            <p>
                O sistema permite o upload de fotos de alta qualidade para cada animal,
                juntamente com a inclusão de detalhes específicos, como raça, idade, temperamento e
                histórico médico. </p>
            <p>As ONGs podem preencher fichas personalizadas para cada animal,
                garantindo que potenciais adotantes tenham acesso a informações detalhadas e precisas. </p>
            <p>O
                Patinhas em Casa oferece recursos avançados, incluindo uma área administrativa segura, onde
                as ONGs podem gerenciar facilmente seus perfis e os animais cadastrados. </p>
            <p>Além disso, o
                sistema é altamente customizável, permitindo que as ONGs personalizem a aparência e o
                funcionamento de acordo com suas necessidades específicas.</p>

        </div>
    </div>
</div>
<!-- Blog Detail End -->




<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Nosso Time</h6>
            <h1 class="display-5 text-uppercase mb-0">CONHEÇA A EQUIPE POR TRÁS DESTE PROJETO</h1>
        </div>
        <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/bruno.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Bruno Felix</h5>
                    <p class="m-0">Jardim Paulistano</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/luiz.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Luiz Yogui</h5>
                    <p class="m-0">Aricanduva</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/ewerton.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Ewerton Melo</h5>
                    <p class="m-0">Vila do Sol</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/juliana.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Juliana Spina</h5>
                    <p class="m-0">Jaçanã</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/pedro.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Pedro Carafini</h5>
                    <p class="m-0">Aricanduva</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/gilmar.jpg" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Gilmar Cintra</h5>
                    <p class="m-0">Jardim Paulistano</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection
