<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require '../sessao.php';

require 'model/dados.php';

chdir( __DIR__ );//ajustar o diretório(começa dentro do dados.php e termina aqui)
//sempre teste quando for fazer um require ou include para ver se está puxando msm;

//apagar
if( isset( $_GET['apagar'] )){
	if(!apagar_usuario( $_GET['apagar'] )){
		$erro = 'Não foi possível apagar o usuário!';
	}
}


if( isset($_POST['gravar'])){
	
	require 'controller/consistencia_cadastro.php';

	
	if ( count($erros) == 0) {

		if ( 	editar_usuario( $_POST['ID'], $_POST['Nome'], $_POST['CPF'], $_POST['Email'],
								$_POST['Senha'], $_POST['Endereco'],$_POST['Telefone'])){		
			echo 'usuario editado com sucesso';																
			// $erros = ['Erro ao tentar editar o usuário!'];
		} else {
			echo 'Não foi possível editar o usuario';																
			// $editado_ok = true;
		}
	}

	require '../require/head_links.php';
	require '../require/header.php';
	require 'view/editar.php';
	require '../require/footer.php';
	
	exit();

}

if( isset( $_GET['editar'] )){

	$usuario = listarTudo($_GET['editar']) ?? [];

	$nome 	  =	$usuario[0]['Nome'] ?? '';
	$CPF 	  =	$usuario[0]['CPF'] ?? '';
	$email 	  =	$usuario[0]['Email'] ?? '';
	$senha 	  =	$usuario[0]['Senha'] ?? '';
	$endereco = $usuario[0]['Endereco'] ?? '';
	$telefone = $usuario[0]['Telefone'] ?? '';

	require '../require/head_links.php';
	require '../require/header.php';
	require 'view/editar.php';
	require '../require/footer.php';

	exit();//para de rodar o código
}

$lista = listarTudo();
require 'view/lista.php';