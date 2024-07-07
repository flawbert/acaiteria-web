@extends('template')

@section('conteudo')
<link rel="stylesheet" href="/css/css.css">

<h1>Cadastro</h1>
<p>Aqui estão listados todos os seus dados</p>
<div class="accordion accordion-flush" id="accordionFlushExample">
  @foreach($clientes as $cliente)
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       {{$cliente->nome}}<br /><small class="text-muted">{{$cliente->email}}</small>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="/cliente/detalhar/{{$cliente->id}}" class="btn btn-info"><i class="bi-info-circle"></i> Detalhes</a>
      </div>
    </div>
</div>
@endforeach
</div>
@endsection