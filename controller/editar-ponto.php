<?php
require '../config.php';
require '../classes/Colaborador.php';

$colaborador = new Colaborador();

//salva formulario
if(isset($_POST['id'])){

    $id = filter_input(INPUT_POST, 'id');
    $horarioEntrada = filter_input(INPUT_POST, 'horario_entrada');
    $horarioSaida = filter_input(INPUT_POST, 'horario_saida');

    $resultado = '';
    if($id && $horarioEntrada && $horarioSaida){
        if ($colaborador->editarPontoUsuario($id, $horarioEntrada, $horarioSaida)){
            $resultado = '<div class="alert alert-success">
            <strong>Ponto registrado com sucesso</strong>
        </div>';
        }else{
            $resultado = '<div class="alert alert-warning">
            Você precisa alterar algum horário!
            </div>';
        }

    }else{
        $resultado = '<div class="alert alert-warning">
        Preencha todos os campos!
    </div>';
    }
    echo $resultado;
}
