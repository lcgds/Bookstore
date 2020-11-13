<?php

//INCOMPLETO - https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

require_once "config.php";

//Definição de variáveis
$username = "";
$password = "";
$confirm_password = "";

$username_err = "";
$password_err = "";
$confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Aba do navegador-->
        <title>Index</title>
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
                    Biblioteca TSI
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
                            <a class="nav-link" href="./login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./cadastro.php">cadastro</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

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

        <footer class="container-fluid mt-5 pt-3 pb-3 bg-dark text-light">
            <span>© Biblioteca TSI 2020
            </span>
        </footer>

    </body>

</html>