<?php
require 'pages/header.php';
session_start();
//verifica se esta logado
if(empty($_SESSION['nome'])){
    header("location: login.php");
  }
?>
<div class="container">
  <div class="conteudo">
    <h3>Bem vindo <?= ($_SESSION['nome']);?></h3><br>
    <a class="btn btn-dark" href="registro-ponto.php">Registrar Ponto dos Colaboradores</a><br><br>
    <a class="btn btn-dark" href="cadastro.php">Cadastrar novo Usuario</a><br><br>
    <a class="btn btn-dark" href="relatorio-ponto.php">Relatório do Ponto</a><br><br>
    <a class="btn btn-dark" href="sair.php">Sair</a>
  </div>
</div>




<?php
require 'pages/footer.php';