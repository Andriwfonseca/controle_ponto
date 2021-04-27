<?php
//require '../config.php';
require '../classes/Usuario.php';

$u = new Usuario();

$email = filter_input(INPUT_POST, "email");
$senha = filter_input(INPUT_POST, "senha");

$resultado = '';

if($email && $senha) {
    
    if($u->login($email, $senha)) {
        $resultado = "ok";
    } else {
        $resultado = '  <div class="alert alert-danger">
                            Usuário e/ou Senha errados!
                        </div>';
    }
}else{
    $resultado = '  <div class="alert alert-danger">
                        Preencha todos os campos!
                    </div>';
}
echo $resultado;
?>