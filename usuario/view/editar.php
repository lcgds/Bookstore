<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Editar</title>
    <?php require '.././require/head_links.php'; ?>
</head>

<body>
    <main class="container">
        <div class="text-center">
        <h1 class="container pt-sm-4">EDITAR USUÁRIO :-)</h1>
        <form method="post">
        <div class="text-success">
        <?php
            if ( isset($editado_ok) ) {
                echo "Editado com sucesso!";
            }
        ?>  
        </div>
        <div class="text-danger">
            <?php
            if(isset($erros)){ 
            if(count($erros) > 0){//conta quantos indices tem num vetor, ou seja se for 0, não tem mensagem, se for 1 ou mais ja tem, e como pode ter + q 1 fazemos um foreach para criar um looping que exibe todos
                foreach ($erros as $erro) { 
                echo $erro.'<br>'; 
                }
            }
            }
            ?>
        </div>
        <div class="form-row">
        
            <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Seu Nome..." name="Nome" value="<?php echo $nome; ?>" required>
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputCPF">CPF</label>
                <input type="text" class="form-control" id="inputCPF" placeholder="12334567810" name="CPF" value="<?php echo $CPF; ?>" required>
            </div>        
            
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="Email" value="<?php echo $email; ?>"required>
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputEndereco">Endereço</label>
                <input type="text" class="form-control" id="inputEndereco" placeholder="Rua dos Bobos, 0" name="Endereco" value="<?php echo $endereco; ?>" required>
            </div>

            <div class="form-group col-md-6">
                <label for="inputSenha">Senha</label>
                <input type="password" class="form-control" id="inputSenha" placeholder="Senha" name="Senha" value="****" required>
            </div>
            
            <div class="form-group col-md-6">
                <label for="conf_senha">Confirme a senha</label>
                <input type="password" class="form-control" id="conf_senha" placeholder="Confirme sua senha" name="conf_senha" value="****" required>
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputTelefone">Telefone</label>
                <input type="text" class="form-control" id="inputTelefone" placeholder="11987654321" name="Telefone" value="<?php echo $telefone; ?>" required>
            </div>
            
        </div>
            <input type="hidden" name="ID" value="<?php echo $_GET['editar']; ?>">
            <input type='submit' class='btn btn-outline-dark' name='gravar' value='Gravar'>
        </form>
        </div>
    </main>
    <?php require '.././require/head_links.php'; ?>
</body>
</html>