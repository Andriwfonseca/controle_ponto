<?php
//require '../config.php';
require '../classes/Usuario.php';

$user = new Usuario();
if(isset($_POST['nome'])){

    
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha');

    $retorno = "";

    if($nome && $email && $senha){
        if ($user->cadastrar($nome,$email,$senha)){

            $retorno = '<div class="alert alert-success">
                            <strong>Parabéns!</strong> Cadastrado com sucesso. <a href="login.php" class="alert-link">Faça o login agora</a>
                        </div>';
            
        }else{
            $retorno = '<div class="alert alert-warning">
                            Esse usuário já existe!
                            <a href="login.php" class="alert-link">Faça o login agora</a>
                        </div>';
        }

    }else{
        $retorno = '<div class="alert alert-warning">
                        Preencha todos os campos!
                    </div>';
    }

    echo $retorno;
}
?>