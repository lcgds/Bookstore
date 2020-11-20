<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Index</title>
        
        <?php require_once './require/head_links.php';?>
    </head>

    <body>

        <?php require_once './require/header.php';?>

        <main class="container my-5">
            <h2 class="mb-3">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                Cadastro
            </h2>
            <form>
                <div class="form-group">
                    <label for="cadastroNome">Nome</label>
                    <input type="text" class="form-control" id="cadastroNome" required autofocus>
                </div>
                <div class="form-group">
                    <label for="cadastroCPF">CPF</label>
                    <input type="text" class="form-control" id="cadastroCPF" required>
                </div>
                <div class="form-group">
                    <label for="cadastroEmail">E-mail</label>
                    <input type="email" class="form-control" id="cadastroEmail" required>
                </div>
                <div class="form-group">
                    <label for="cadastroSenha">Senha</label>
                    <input type="password" class="form-control" id="cadastroSenha" required>
                </div>
                <div class="form-group">
                    <label for="cadastroRepeticaoSenha">Repetir senha</label>
                    <input type="password" class="form-control" id="cadastroRepeticaoSenha" required>
                </div>
                <div class="form-group">
                    <label for="cadastroEndereco">Endereço</label>
                    <input type="password" class="form-control" id="cadastroEndereco" required>
                </div>
                <div class="form-group">
                    <label for="cadastroTelefone">Telefone</label>
                    <input type="password" class="form-control" id="cadastroTelefone" required>
                </div>
                <button type="button" class="btn btn-primary">CADASTRAR</button>
            </form>
        </main>

        <?php require_once './require/footer.php';?>

    </body>

</html>