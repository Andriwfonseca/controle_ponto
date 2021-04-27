<?php
require 'pages/header.php';
require 'classes/Usuario.php';

$user = new Usuario();
if(isset($_POST['nome'])){

    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha');

    if($nome && $email && $senha){
        if ($user->cadastrar($nome,$email,$senha)){
            ?>
            <div class="alert alert-success">
                <strong>Parabéns!</strong> Cadastrado com sucesso. <a href="login.php" class="alert-link">Faça o login agora</a>
            </div>
            <?php
        }else{
            ?>
            <div class="alert alert-warning">
            Esse usuário já existe!
            <a href="login.php" class="alert-link">Faça o login agora</a>
            </div>
            <?php
        }

    }else{
        ?>
        <div class="alert alert-warning">
            Preencha todos os campos!
        </div>
        <?php
    }
}
?>
<div class="container">
    <h1>Cadastro de Usuários</h1>
    <form method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" />
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" />
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" />
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-dark" />
    </form>
    <a href="index.php"><button>Voltar</button></a>
</div>