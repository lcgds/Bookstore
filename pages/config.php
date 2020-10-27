<?php

//Credenciais de acesso ao banco de dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'lcgds');
define('DB_PASSWORD', 'Eunaosei!123@');
define('DB_NAME', 'tsi_bookstore');

//Conexão com banco de dados
$dblink = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Checagem de conexão com banco de dados
if ($dblink === false) {
    die("Erro de conexão com banco de dados. " . mysqli_connec_error());
}
?>