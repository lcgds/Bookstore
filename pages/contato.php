<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Aba do navegador-->
    <title>Contato</title>
    <link rel="icon" href="../img/icon.png">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!--CSS e JavaScript-->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../javascript/script.js"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="./home.php">
                <img src="../img/icon.png" width="30" height="30" class="d-inline-block align-top" alt=""
                    loading="lazy">
                TSI Bookstore
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="./home.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./produtos.php">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container my-5">

        <h2 class="mb-3">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
            </svg>
            Canais de atendimento
        </h2>
        <p><a href="tel:+551133333333">(11) 3333-3333</a></p>
        <p><a href="tel:+5511999999999">(11) 9999-9999</a></p>

        <hr class="my-4">

        <h2 class="ovo mb-3">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
            </svg>
            Contato
        </h2>
        <form>
            <div class="form-group">
                <label for="contatoNome">Nome</label>
                <input type="text" class="form-control" id="contatoNome" autofocus required>
            </div>
            <div class="form-group">
                <label for="contatoEmail">E-mail</label>
                <input type="email" class="form-control" id="contatoEmail">
            </div>
            <div class="form-group">
                <label for="contatoTelefone">Telefone</label>
                <input type="email" class="form-control" id="contatoTelefone" required>
            </div>
            <div class="form-group">
                <label for="contatoNumeroPedido">Número do pedido</label>
                <input type="email" class="form-control" id="contatoNumeroPedido">
                <small class="form-text text-muted">Caso o assunto se refira à uma compra feita neste site.</small>
            </div>
            <div class="form-group">
                <label for="contatoMensagem">Mensagem</label>
                <textarea class="form-control" id="contatoMensagem" rows="4" required>...</textarea>
            </div>
        </form>

        <button type="button" class="btn btn-primary">ENVIAR</button>
    </main>

    <footer class="container-fluid mt-5 pt-3 pb-3 bg-dark text-light">
        <span>© TSI Bookstore 2020
        </span>
    </footer>

</body>

</html>