<?php

chdir( __DIR__ );  //Garante que o codigo seja executado no diretorio model
require_once '../../require/config.php';

function listarTudo( int $id=null ): array//colocar int $id=null diz que esse parametro é opcional
{

global $db;//posso acessar $db aqui dentro

if( is_null($id) ){

	$str = '';

	//SQL se $id não for passado como parametro:
	//SELECT id, nome, email FROM usuario"

}else{

//caso o usu passe um param para listarTudo()
//Na consulta SQL será adiocionada a cláusula WHERE
//Ainda, p preg_replace() garante que não haverá SQL injection
$str = 'WHERE id = ' .preg_replace('/\D/','',$id);

	//SQL se $id não for passado como parametro:
	//SELECT id, nome, email FROM usuario WHERE id = N"

}

$r = $db->query("SELECT ID, Nome, CPF, Email, Endereco, Telefone FROM usuario $str ORDER BY ID");
$reg = $r->fetchAll();

return is_array($reg) ? $reg : [];//verifica se $reg está como array. se não ele transforma em um
}

function ja_existe_email(string $email): bool//cria function com paramentro de uma string $email que retorna valor booleano
{
	
	if(empty($email)) return false; //se me passarem uma string vazia ja retorna false

	global $db; //para conseguir acessar fora desse código e neste cod

	//1) preparo a consulta e faço ela de forma segura
	$stmt = $db->prepare('SELECT id FROM usuario WHERE email = :email');

	//2)Acima Coloca :email como valor para tratar e depois aqui no 2) ele trata e coloca em $email dnv;
	$stmt->bindParam(':email', $email);

	//3) Executo a consulta
	$stmt->execute();

	$registro = $stmt->fetch();//retorna o registro; //com os parenteses () ele retorna o padrão que é parametro BOTH, ou seja, os índices numérioco e alfanumérioco

	return is_numeric($registro['id']) ? true : false; //verifica se id é numérico, ou seja, se tem id, se tiver é true senão é false. verificando em algo que eu sei que é numerico para ver se existe apenas.
	// ? é igual ao {} do if comum e : é o else{}

}

function gravar_usuario(string $nome, string $CPF, string $email, 
						string $senha, string $endereco, string $telefone): ?int//o ? ao lado do int significa q pode voltar um inteiro um false ou null, ou seja, ñ vai ser necessariamente um inteiro,peço integer mas pode vir null ou false.
{

	global $db;

	$senha = password_hash($senha, PASSWORD_DEFAULT);

	$stmt =	$db->prepare("	INSERT INTO usuario  
								(Nome, CPF, Email, Senha, Endereco, Telefone)								
							VALUES 
								(:nm, :CPF, :email, :senha, :ende, :tell)");

	$stmt->bindParam(':nm', 	$nome);
	$stmt->bindParam(':CPF', 	$CPF);
	$stmt->bindParam(':email', 	$email);
	$stmt->bindParam(':senha', 	$senha);
	$stmt->bindParam(':ende', 	$endereco);
	$stmt->bindParam(':tell', 	$telefone);

	$stmt->execute();

	return (int) $db->lastInsertId();//retorna a saída desse método que deve ser o id que foi gerado nesse insert ou no ultimo insert do DB

}


function apagar_usuario( int $id ): bool
{
	if(is_numeric($id)){
		
		global $db;

		if ($db->exec("DELETE FROM usuario where id=$id") > 0){
			return true;
		}else {
			return false;
		}


	}else{

		return false;
	}

}


function editar_usuario(int $id, string $nome, string $CPF, string $email, string $senha, string $endereco, string $telefone ): bool//?int pode voltar um inteiro um false ou null, ou seja, ñ vai ser necessariamente um inteiro,peço integer mas pode vir null ou false.
{

	global $db;

	$senha = password_hash($senha, PASSWORD_DEFAULT);

	$stmt =	$db->prepare('	UPDATE usuario 
							SET Nome = :nm,
								CPF = :CPF, 
								Email = :email, 
								Senha = :senha,
								Endereco = :ende,
								Telefone = :tell,  
							WHERE ID = :id');

	$stmt->bindParam(':id',		$id);
	$stmt->bindParam(':nm',		$nome);
	$stmt->bindParam(':CPF',	$CPF);
	$stmt->bindParam(':email',	$email);
	$stmt->bindParam(':senha',	$senha);
	$stmt->bindParam(':ende',	$endereco);
	$stmt->bindParam(':tell',	$telefone);

	return $stmt->execute();;

}
