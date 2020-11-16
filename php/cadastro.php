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
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
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