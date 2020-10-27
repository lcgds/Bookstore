<?php

//https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

// Iniciliaza a sessão
session_start();
 
// Checa se o usuário já está logado, se sim ele é redirecionado para a página inicial
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: home.php");
  exit;
}
 
// Inclui a config.php
require_once "config.php";
 
// Define as variáveis e esvazia elas
$userEmail = "";
$userPassword = "";
$userEmail_error = "";
$userPassword_error = "";
 
// Processa os dados recebidos pela página
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Checa se o e-mail está vazio
    if(empty(trim($_POST["userEmail"]))){
        $userEmail_error = "Por favor insira o seu e-mail.";
    } else{
        $userEmail = trim($_POST["userEmail"]);
    }
    
    // Checa se a senha está vazia
    if(empty(trim($_POST["userPassword"]))){
        $userPassword_error = "Por favor insira a sua senha.";
    } else{
        $userPassword = trim($_POST["userPassword"]);
    }
    
    // Se não faltar nenhum dos dois dados
    if(empty($userEmail_error) && empty($userPassword_error)){
        // Prepara um SELECT para o BD
        $sql = "SELECT userId, userEmail, userPassword FROM user WHERE userEmail = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_userEmail);
            
            // Define o parâmetro
            $param_userEmail = $userEmail;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Checa se o e-mail está registrado, se sim então verifica a senha
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $userId, $userEmail, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($userPassword, $hashed_password)){
                            // Se a senha está correta, então inicia-se uma sessão autenticada
                            session_start();
                            
                            // Salva os dados na sessão
                            $_SESSION["loggedin"] = true;
                            $_SESSION["userId"] = $userId;
                            $_SESSION["userEmail"] = $userEmail;                            
                            
                            // Redireciona o usuário para a página de início
                            header("location: home.php");
                        } else{
                            // Mostra um erro se a senha está incorreta
                            $password_err = "Erro de acesso.";
                        }
                    }
                } else{
                    // Mostra um erro se não há registro do e-mail
                    $userEmail_error = "Erro de acesso.";
                }
            } else{
                echo "Oops! Alguma coisa deu errada. Tente novamente.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Fecha a conexão
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Aba do navegador-->
    <title>Login</title>
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
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z" />
            </svg>
            Login
        </h2>

        <form>
            <div class="form-group">
                <label for="loginEmail">E-mail</label>
                <input type="email" class="form-control" id="loginEmail" autofocus required>
            </div>
            <div class="form-group">
                <label for="loginSenha">Senha</label>
                <input type="password" class="form-control" id="loginSenha" required>
            </div>
            <p><a href="#">Esqueceu a senha?</a></p>
            <p><a href="./cadastro.php">Não tem cadastro?</a></p>
            <button type="button" class="btn btn-primary">ENTRAR</button>
        </form>

    </main>

    <footer class="container-fluid fixed-bottom mt-5 pt-3 pb-3 bg-dark text-light">
        <span>© TSI Bookstore 2020
        </span>
    </footer>

</body>

</html>