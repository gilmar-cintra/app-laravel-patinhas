@extends('layouts.main')
@section('title', 'Home - Patinhas em Casa')

@section('content')
<div class="container mt-5">
    <div class="row g-5">
@foreach ($ongs as $ong)
    <div class="col-lg-6">
        <div class="blog-item">
            <div class="row g-0 bg-light overflow-hidden">
                <div class="col-12 col-sm-5 h-100">
                    <img class="img-fluid h-100" src="{{ $ong->foto ? "storage/".$ong->foto : '' }}" style="object-fit: cover"/>
                </div>
                <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                    <div class="p-4">
                        <h5 class="text-uppercase mb-3">{{$ong->nome}}</h5>
                        <p>
                            {{$ong->endereco.', n° '.$ong->numero.' '.$ong->complemento}}
                            <br>
                            {{$ong->bairro.' CEP: '.$ong->cep}}
                            <br>
                            {{$ong->cidade.'-'.$ong->uf}}
                        </p>
                        <div class="d-flex mb-3">
                            <small>
                                <i class="bi bi-envelope me-2"></i>{{$ong->email}}
                            </small>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="me-3">
                                <i class="bi bi-telephone me-2"></i>{{$ong->telefone}}
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
<div class="container mt-5">
{{$ongs->links()}}
</div>
@endsection
