<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pi Server</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            NET-HOUSE
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">

            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dispositivos</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="bg-body-tertiary p-5 rounded">
    <div class="container">
        <h1>NET-HOUSE</h1>
        <p class="lead">Todos os dispositivos em um só lugar...</p>
        <a class="btn btn-lg btn-primary" href="#" role="button" data-bs-toggle="modal"
           data-bs-target="#novo">Novos Dispositivos</a>
    </div>
    <div class="modal" tabindex="-1" id="novo">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Novo Dispositivo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="TV da Sala...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">IP</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="192.168.1.1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">MAC</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="00:00:00:00:00:00">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Porta</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="7 ou 9">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição do Dispositivo (Opcional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<section class="container py-5">
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tv da Sala</h5>
                        <p class="card-text">Este dispositivo é o TV da Sala</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                           data-bs-target="#modal1">Ligar</a>
                    </div>
                </div>
            </div>
            <div class="modal" tabindex="-1" id="modal1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tem Certeza?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Ligar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>