<?php
require '../classes/Colaborador.php';

$usuario = new Usuario();
$colaborador = new Colaborador();

if(isset($_POST['nome'])){

    $nome = filter_input(INPUT_POST, 'nome');
    $data = filter_input(INPUT_POST, 'data');
    $horarioEntrada = filter_input(INPUT_POST, 'horario_entrada');
    $horarioSaida = filter_input(INPUT_POST, 'horario_saida');

    $retorno = "";

    if($nome && $data && $horarioEntrada && $horarioSaida){
        if ($colaborador->registrarPontoUsuario($nome, $data, $horarioEntrada, $horarioSaida)){
            $retorno = '<div class="alert alert-success">
                            <strong>Ponto registrado com sucesso</strong>
                        </div>';
        }else{
            $retorno = '<div class="alert alert-warning">
                            Esta data ja está cadastrada!
                            <a href="registro-ponto.php" class="alert-link">Entre na página de edição para edita-la</a>
                        </div>';
        }

    }else{
        $retorno = '<div class="alert alert-warning">
                        Preencha todos os campos!
                    </div>';
    }
    echo $retorno;  
}
