@extends('template')

@section('conteudo')
<link rel="stylesheet" href="/css/css.css">

<h1>Detalhes do Cliente</h1>
<div class="row">
    <div class="col-md-10">
        <h4 class="text-muted">{{$cliente->nome}}</h4>
        <h6><i class="bi-mailbox"></i>{{$cliente->email}}</h6>
    </div>
    <div class="col-md-2">
        <a href="/pedido/detalhar">
        </a>
    </div>
</div>
<hr />
<form action="#" method="POST">
    <div class="row">
        <div class="col-md-3">
            <div class="mb-3">
                <label for="ddd" class="form-label">DDD</label>
                <input type="text" class="form-control" id="ddd" name="ddd" placeholder="Informe o DDD do telefone.">
            </div>
        </div>
        <div class="col-md-9">
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Informe o número sem traços.">
            </div>
        </div>
    </div>
    <button class="btn btn-success" type="submit">Salvar</button>
</form>
<hr />
<table class="table">
    <thead>
        <tr>
            <th>DDD</th>
            <th>Número</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>84</td>
            <td>99123-4567</td>
            <td><a href="#" class="btn btn-danger">Excluir</a></td>
        </tr>
        <tr>
            <td>84</td>
            <td>99123-4567</td>
            <td><a href="#" class="btn btn-danger">Excluir</a></td>
        </tr>
    </tbody>
</table>
@endsection