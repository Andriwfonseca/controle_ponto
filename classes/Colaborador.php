<?php
require "Usuario.php";

class Colaborador {



	public function registrarPontoUsuario($idUsuario, $data, $entrada, $saida) {

		global $pdo;
        //verifica se essa data ja foi registrada nesse usuario
        $sql = $pdo->prepare("SELECT id FROM colaboradores WHERE id_usuario = :idUsuario AND data = :data");
		$sql->bindValue(":idUsuario", $idUsuario);
        $sql->bindValue(":data", $data);
		$sql->execute();

        //se nao foi registrado, ai pode registrar
        if($sql->rowCount() == 0) {

            $sql = $pdo->prepare("INSERT INTO colaboradores SET id_usuario = :idUsuario, data = :data, horario_entrada = :entrada, horario_saida = :saida");
            //$sql = $pdo->prepare("INSERT INTO colaboradores (id_usuario, data, horario_entrada, horario_saida) VALUES (?,?,?)");
            $sql->bindValue(":idUsuario", $idUsuario);
            $sql->bindValue(":data", $data);
            $sql->bindValue(":entrada", $entrada);
            $sql->bindValue(":saida", $saida);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
		

	}

    public function editarPontoUsuario($id, $entrada, $saida) {

		global $pdo;

        $sql = $pdo->prepare("UPDATE colaboradores SET horario_entrada = :entrada, horario_saida = :saida WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":entrada", $entrada);
        $sql->bindValue(":saida", $saida);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
		

	}

    public function getPonto($ordem = ""){

        global $pdo;

        $sql = $pdo->prepare("SELECT a.*, b.nome FROM colaboradores a, usuarios b WHERE a.id_usuario = b.id ORDER BY ".$ordem);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();
		} 

		return $dados;
    }

    public function getPontoId($id){
        global $pdo;

        $sql = $pdo->prepare("SELECT a.*, b.nome FROM colaboradores a, usuarios b WHERE a.id_usuario = b.id AND a.id = :id");
        $sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dados = $sql->fetchAll();
		} 

		return $dados;
    }

    public function removerPonto($id){
        global $pdo;

        $sql = $pdo->prepare("DELETE FROM colaboradores WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount()>0){
            return true;
        }
        return false;
    }
}
?>