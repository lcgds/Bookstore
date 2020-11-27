<?php

$nome = $_POST['Nome'] ?? null;
$CPF = $_POST['CPF'] ?? null;
$email = $_POST['Email'] ?? null;
$senha = $_POST['Senha'] ?? null;
$conf_senha = $_POST['conf_senha'] ?? null;
$endereco = $_POST['Endereco'] ?? null;
$telefone = $_POST['Telefone'] ?? null;

$senha = trim($senha);
$email = strtolower( $email );//trata o e-mail - fica tudo minúsculo

$erros = [];

//Verifica se nome tem dois ou mais caracteres 
if ( strlen($nome) < 2 ) {

	$erros[] = 'O nome tem que ter ao menos dois caracteres';

}

if ( !filter_input(INPUT_POST,'CPF', FILTER_VALIDATE_INT) ) {

	$erros[] = 'Coloque apenas números no CPF!';
}

//Verifica se o e-mail é válido
if ( !filter_var( $email, FILTER_VALIDATE_EMAIL) ) {

	$erros[] = 'E-mail inválido';

//faz o desvio do momento do cadastro e da edição com: && !isset($_POST['gravar'])
} 
elseif ( ja_existe_email($email) && !isset($_POST['gravar']) ) {

	$erros[] = 'E-mail já cadastrado';
}

//Verifica se a senha tem no mínimo 8 caracteres
if ( strlen($senha) < 8 ) {

	$erros[] = 'A senha tem que ter ao menos oito caracteres';

//Verifica se a confirmação da senha bate
} elseif ( $senha != $conf_senha ) {

	$erros[] = 'A confirmação da senha não é válida';
}

if ( !filter_input(INPUT_POST,'Telefone', FILTER_VALIDATE_INT) ) {

	$erros[] = 'Coloque apenas números no Telefone!';
}
