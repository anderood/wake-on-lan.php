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

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">Navbar</a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
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
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Dispositivo</th>
                <th scope="col">IP</th>
                <th scope="col">Descrição</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <tr>
                <th scope="row">1</th>
                <td>TV Da Sala</td>
                <td>192.168.1.x</td>
                <td>Ativo</td>
                <td>
                    <button class="btn btn-primary">Ligar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>TV Da Sala</td>
                <td>192.168.1.x</td>
                <td>Ativo</td>
                <td>
                    <button class="btn btn-primary">Ligar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>TV Da Sala</td>
                <td>192.168.1.x</td>
                <td>Ativo</td>
                <td>
                    <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                    >
                        Ligar
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="modal" tabindex="-1" id="exampleModal">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tem Certeza?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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