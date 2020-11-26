<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Minha conta</title>
        
        <?php require_once './require/head_links.php';?>
    </head>

    <body>

        <?php require_once './require/header.php';?>

    <main class="container my-5">
        <h2 class="ovo mb-3">Minha Conta</h2>
        <section>
            <div>
                <h4 class="ovo">Dados Pessoais</h4>
                <form method="POST">
                <div class="form-group">
                    <label for="contatoNome">Nome</label>
                    <input type="text" class="form-control" id="contatoNome">
                </div>
                <div class="form-group">
                    <label for="contatoSob">Sobrenome</label>
                    <input type="text" class="form-control" id="contatoSob">
                </div>
                <div class="form-group">
                    <label for="contatoEmail">E-mail</label>
                    <input type="text" class="form-control" id="contatoEmail">
                </div>
                <div class="form-group">
                        <label for="contatoCPF">CPF</label>
                        <input type="text" class="form-control" id="contatoCPF">
                </div>
                <div class="form-group">
                        <label for="contatoNascimento">Data de Nascimento</label>
                        <input type="text" class="form-control" id="contatoNascimento">
                </div>
                <div class="form-group">
                        <label for="contatoTelefone">Telefone</label>
                        <input type="text" class="form-control" id="contatoTelefone">
                </div>
                <div class="form-group">
                        <label for="contatoSenha">Senha</label>
                        <input type="text" class="form-control" id="contatoSenha">
                </div>
                <input type="submit" value="Salvar">
                </form>
            </div>
        </section>
    </main>

    <?php require_once './require/footer.php';?>

    </body>

</html>