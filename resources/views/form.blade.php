@extends('template')

@section('conteudo')
<link rel="stylesheet" href="/css/css.css">

<h1>Novo Cliente</h1>
<p>Cadastrar Cliente</p>
<form action="/cliente/cadastrar" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome do cliente.">
    </div>
    <div class="mb-3">
    <label for="datanascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="datanascimento" name="datanascimento" placeholder="Informe sua data de nascimento.">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o seu cpf.">
    </div>
    <div class="mb-3">
        <label for="ddd" class="form-label">DDD</label>
        <input type="text" class="form-control" id="ddd" name="ddd" placeholder="Informe seu DDD.">
    </div>
    <div class="mb-3">
        <label for="numero" class="form-label">Número</label>
        <input type="text" class="form-control" id="numero" name="numero" placeholder="Informe seu número.">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Informe o email do contato.">
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe sua senha de cadastro.">
    </div>
    
    <button class="btn btn-success" type="submit">Salvar</button>
</form>
@endsection