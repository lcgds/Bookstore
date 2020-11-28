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

            <!--
                - Nome VARCHAR(255) NOT NULL,
                - CPF INT NOT NULL,
                - DataNascimento DATE NOT NULL,
                - Sexo VARCHAR(255),

                Endereco VARCHAR(255) NOT NULL,
                CEP INT NOT NULL,
                Cidade VARCHAR(255) NOT NULL,
                UF VARCHAR(255) NOT NULL,

                Telefone INT NOT NULL,
                Email VARCHAR(255) NOT NULL,
                Senha VARCHAR(255) NOT NULL
            -->

            <form id="dados">
                <fieldset disabled>

                    <div class="form-row">
                        <div class="form-group col-7">
                            <label for="usuarioNome">Nome</label>
                            <input type="text" class="form-control" id="usuarioNome" required autofocus>
                        </div>

                        <div class="form-group col-5">
                            <label for="usuarioCPF">CPF</label>
                            <input type="text" class="form-control" id="usuarioCPF" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="usuarioDataNascimento">Data de nascimento</label>
                            <input type="date" class="form-control" id="usuarioDataNascimento" required>
                        </div>

                        <div class="form-group col">
                            <label class="d-block" for="usuarioSexo">Sexo</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="usuarioSexoF" value="Feminino">
                                <label class="form-check-label" for="usuarioSexoF">Feminino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="usuarioSexoM" value="Masculino">
                                <label class="form-check-label" for="usuarioSexoM">Masculino</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="usuarioEndereco">Endereço</label>
                        <input type="password" class="form-control" id="usuarioEndereco" required>
                    </div>
                    <div class="form-group">
                        <label for="usuarioTelefone">Telefone</label>
                        <input type="password" class="form-control" id="usuarioTelefone" required>
                    </div>


                    <div class="form-group">
                        <label for="usuarioEmail">E-mail</label>
                        <input type="email" class="form-control" id="usuarioEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="usuarioSenha">Senha</label>
                        <input type="password" class="form-control" id="usuarioSenha" required>
                    </div>
                
                    
                </fieldset>

                <button type="button" class="btn btn-primary">ATUALIZAR</button>
            </form>

        </main>

        <?php require_once './require/footer.php';?>

    </body>

</html>