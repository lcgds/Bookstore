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
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                </svg>
                    Minha conta
            </h2>

            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item" role="presentation">
                    <a id="dados-tab" class="nav-link active" data-toogle="pill" href="#dados" role="tab" aria-controls="dados" aria-selected="true">Dados</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="emprestimos-tab" class="nav-link" data-toogle="pill" href="#emprestimos" role="tab" aria-controls="emprestimos" aria-selected="false">Empréstimos</a>
                </li>
            </ul>

            <div class="tab-content">

                <!--Dados-->
                <form id="dados" class="tab-pane fade show active" role="tabpanel" aria-labelledby="dados-tab">
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

                <!--Empréstimos-->
                <div id="emprestimos" class="tab-pane fade" role="tabpanel" aria-labelledby="emprestimos-tab">
                    <img src="http://via.placeholder.com/500x500">
                </div>
                
            </div>
        </main>

        <?php require_once './require/footer.php';?>

    </body>

</html>