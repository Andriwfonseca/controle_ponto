<?php
session_start();

require __DIR__."/../config.php";
class Usuario {

	public function getUsuarios() {
		global $pdo;

		$sql = $pdo->prepare("SELECT * FROM usuarios");
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();
		} 
		return $dados;

	}

	public function cadastrar($nome, $email, $senha) {

		global $pdo;
		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

        //verifica se ja email ja esta cadastrado
		if($sql->rowCount() == 0) {
            
			$sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->execute();
		
			return true;

		} else {
			return false;
		}

	}

	public function login($email, $senha) {
		global $pdo;
		$_SESSION['nome'] = '';

		$sql = $pdo->prepare("SELECT nome FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			$_SESSION['nome'] = $dado['nome'];
			
			return true;
		} else {
			
			return false;
		}

	}














}
?>