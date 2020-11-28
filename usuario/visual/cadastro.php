<?php

require 'model/dados.php';

if(isset($_POST['cadastrar'])){
	
	// require 'controller/consistencia_cadastro.php';
	
    // $id = 
    gravar_usuario( $_POST['cadastroNome'], $_POST['cadastroCPF'], $_POST['cadastroEmail'], 
                    $_POST['cadastroSenha'], $_POST['cadastroEndereco'], $_POST['cadastroTelefone'] );

                    echo 'Obrigado por se cadastrar';
	// if( $id ) {//se for false, null, 0, vazio, ele não entra no else;

	// session_start();

	// $_SESSION['login'] = $_POST['cadastroEmail'];
	// $_SESSION['id'] = $id;

	// header('Location: ../library-wip/sobrenos_template.php'); //o header('Location: n/x') redireciona para algum diretório, arquivo. aqui está voltando duas pastas sem arquivo definido, ou seja, o index.
	
	// }else{

	// 	$erros = ['Não foi possível criar o usuário!'];

	// }
	
}else{

    $erros = [];
    echo 'Não foi possível se cadastrar';    

}

include 'view/cadastro-usuario_tpl.php';
