<?php
require 'classes/Colaborador.php';

$colaborador = new Colaborador();

$id = filter_input(INPUT_GET, 'id');

if($id){
    $colaborador->removerPonto($id);
    header("Location: relatorio-ponto.php");
}