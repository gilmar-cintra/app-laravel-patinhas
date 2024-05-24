<!-- Topbar Start -->
<div class="container-fluid border-bottom d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-4 text-center py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Nossa Localização</h6>
                    <span>Rua do Exemplo 123, São Paulo, SP</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center border-start border-end py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Email</h6>
                    <span>contato@patinhasemcasa.ong.br</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Telefone</h6>
                    <span>+55 11 91234-4567</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="/" class="navbar-brand ms-lg-5">
        <h1 class="m-0 text-uppercase text-dark">
            <i class="bi bi-shop fs-1 text-primary me-3"></i>Patinhas em Casa
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/"
                class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="/sobre"
                class="nav-item nav-link {{ Request::is('sobre') ? 'active' : '' }}">Sobre</a>
            <a href="/ong"
                class="nav-item nav-link {{ Request::is('ong') ? 'active' : '' }}">ONGs</a>
            <a href="/adotar"
                class="nav-item nav-link {{ Request::is('adotar') ? 'active' : '' }}">Adotar</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cadastro</a>
                <div class="dropdown-menu m-0">
                    <a href="/ong/create"
                        class="dropdown-item {{ Request::is('ong/create') ? 'active' : '' }}">ONGs</a>
                    <a href="/cadastro/cuidador"
                        class="dropdown-item {{ Request::is('cadastro/cuidador') ? 'active' : '' }}">Cuidadores</a>
                </div>
            </div>
            <a href="/login"
                class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5 {{ Request::is('login') ? 'active' : '' }}">
                Login <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
