@extends('template')

@section('conteudo')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/css.css">
</head>
<body>
    <h1>CARDÁPIO</h1>
<hr />

<h1>TAMANHOS E VALORES</h1>
@foreach ($acais as $acai)
<div class="row">
    <div class="col-md-10">
        <h6> PREÇO:{{$acai->preco}}</h6>
    </div>
@endforeach
</div>
</body>
</html>
@endsection