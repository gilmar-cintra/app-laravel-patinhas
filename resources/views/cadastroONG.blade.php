@extends('layouts.main')
@section('title', 'Home - Patinhas em Casa')

@section('css')
<link href="{{ asset('css/cadastroONG.css') }}" rel="stylesheet"/> @endsection

@section('content')
<div class="camada-text">
	<div class="page-title">
		<span class="bt">Cadastro de ONG</span>
	</div>
</div>
<div class="row">
	<div class="bg-testimonial" id="cadastra-ong">
		<div class="painel-container col-6">
			<form id="form-create-ong" action="{{ route('ong.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="col-sm">
					<label class="col-form-label">Nome*</label>
					<input type="text" class="form-control" name="nome" id="nome">
				</div>
				<div class="row mt-2">
					<div class="col-sm">
						<label class="col-form-label">CEP*</label>
						<input type="text" class="form-control" name="cep" id="cep">
					</div>
					<div class="col-sm">
						<label class="col-form-label">Logradouro</label>
						<input type="text" class="form-control" name="endereco" id="logradouro">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-sm">
						<label class="col-form-label">Número</label>
						<input type="text" class="form-control" name="numero" id="numero">
					</div>
					<div class="col-sm">
						<label class="col-form-label">Complemento</label>
						<input type="text" class="form-control" name="complemento" id="complemento">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-sm">
						<label class="col-form-label">Bairro</label>
						<input type="text" class="form-control" name="bairro" id="bairro">
					</div>
					<div class="col-sm">
						<label class="col-form-label">UF</label>
						<input type="text" class="form-control" name="uf" id="uf">
					</div>
					<div class="col-sm">
						<label class="col-form-label">Cidade</label>
						<input type="text" class="form-control" name="cidade" id="localidade">
					</div>
				</div>
				<div class="col-sm">
					<label class="col-form-label">Email*</label>
					<input type="email" class="form-control" name="email" id="email">
				</div>
				<div class="col-sm">
					<label class="col-form-label">Telefone*</label>
					<input type="text" class="form-control" name="telefone" id="telefone">
				</div>
				<div class="col-sm">
					<label class="col-form-label">Foto</label>
					<input class="form-control" accept="image/*" type="file" id="foto" name="foto">
				</div>
				<div class="row mt-2">
					<div class="col-sm">
						<label class="col-form-label">Senha*</label>
						<input type="password" class="form-control" name="senha" id="senha">
					</div>
					<div class="col-sm">
						<label class="col-form-label">Confirmação de Senha*</label>
						<input type="password" class="form-control" name="senha_confirmation" id="senha_confirmation">
					</div>
				</div>
				<div class="mt-3">
					<button type="submit" class="btn btn-primary mt-2">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/cadastroONG.js') }}"></script>
@endsection

