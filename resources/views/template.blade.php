<!doctype html>
<html>
    <head>
        <title>Cadastro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2f073b;">
            <img src="/img/logonova.png" alt="">
            <div class="container-fluid">
                
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/home"><p>HOME</p></a>
                </div>
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/cardapio"><p>CARDÁPIO</p></a>
                </div>
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/pedido/novo"><p>FAZER PEDIDO</p></a>
                </div>
                
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/pedidos/meus/{id}"><p>MEUS PEDIDOS</p></a>
                </div>
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/sobreNos"><p>SOBRE NÓS</p></a>
                </div> 
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/cliente/novo"><p>CADASTRAR CLIENTE</p></a>
                </div>
                <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="/"><p>MEU CADASTRO</p></a>
            </div>
                </div>
            </div>
        </nav>
        <div class="container" style="margin-top:40px;">
            @yield('conteudo')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>