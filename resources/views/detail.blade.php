@extends('template')

@section('conteudo')
<link rel="stylesheet" href="/css/css.css">

<h1>Detalhes do Cliente</h1>
<div class="row">
    <div class="col-md-10">
        <h4 class="text-muted">{{$cliente->nome}}</h4>
        <h6><i class="bi-mailbox"></i>{{$cliente->email}}</h6>
        <h6><i class="bi-calendar-day"></i> {{$cliente->datanascimento}}</h6>
        <h6> DDD: {{$cliente->ddd}}</h6>
        <h6> NÚMERO: {{$cliente->numero}}</h6>
        <h6> CPF: {{$cliente->cpf}}</h6>
        <h6> SENHA: {{$cliente->senha}}</h6>
    </div>
    <div class="col-md-2">
        <a href="/cliente/detalhar">
        </a>
    </div>
</div>
<hr />
    <td><a href="#" class="btn btn-danger">ALTERAR</a></td>
@endsection