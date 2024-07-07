@extends('template')

@section('conteudo')
<link rel="stylesheet" href="/css/css.css">

<h1>Realize seu novo pedido</h1>
<p>Olá, detalhe o seu pedido</p>
<form action="/pedido/fazer" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="clientes_idCliente" class="form-label">Cliente</label>
        <select  class="form-control" id="clientes_idCliente" name="clientes_idCliente">
        @foreach($clientes as $cliente)
         <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Açaí</label>
        <select  class="form-control" id="preco" name="preco">
            <option value="10">10,00 - 250ml</option>
            <option value="12">12,00 - 350ml</option>
            <option value="14">14,00 - 500ml</option>   
        </select>
    </div>
        <div class="mb-3">
        <label for="formapagamento" class="form-label">Forma de pagamento</label>
        <select  class="form-control" id="formapagamento" name="formapagamento">
            <option value="1">DINHEIRO</option>
            <option value="2">CRÉDITO</option>
            <option value="3">DÉBITO</option>   
            <option value="4">PIX</option>   
        </select>
            </div>
    <button class="btn btn-success" type="submit">Finalizar Pedido </button>
</form>

@endsection