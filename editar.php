<?php
require 'pages/header.php';
require 'classes/Usuario.php';
require 'classes/Colaborador.php';

$usuario = new Usuario();
$colaborador = new Colaborador();

//salva formulario
if(isset($_POST['nome'])){

    $id = filter_input(INPUT_GET, 'id');
    $horarioEntrada = filter_input(INPUT_POST, 'horario_entrada');
    $horarioSaida = filter_input(INPUT_POST, 'horario_saida');

    if($id && $horarioEntrada && $horarioSaida){
        if ($colaborador->editarPontoUsuario($id, $horarioEntrada, $horarioSaida)){
            ?>
            <div class="alert alert-success">
                <strong>Ponto registrado com sucesso</strong>
            </div>
            <?php
        }else{
            ?>
            <div class="alert alert-warning">
            Esta data ja está cadastrada!
            <a href="login.php" class="alert-link">Entre na página de edição para edita-la</a>
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

//dados para preencher formulario
if(isset($_GET['id']) && !empty($_GET['id'])){
    $dados = $colaborador->getPontoId($_GET['id']);    
}
?>
<div class="container mt-3">
    <h1>Registro do ponto dos colaboradores</h1>
    <form method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="nome">Usuário:</label>
            <select name="nome" id="nome" class="form-control">
                <!---->
                <?php if(isset($dados)): ?>
                    
                    <option value="<?php echo $dados[0]['id']; ?>"><?php echo $dados[0]['id'].' - '. utf8_encode($dados[0]['nome']); ?></option>

                <?php endif; ?>
                
            </select>
        </div>
        <div class="form-group">
            <label for="titulo">Data:</label>
            <input type="date" readonly value="<?= $dados[0]["data"]; ?>" name="data" id="data" class="form-control" />
        </div>
        <div class="form-group">
            <label for="titulo">Horário entrada:</label>
            <input type="time" value="<?= $dados[0]["horario_entrada"]; ?>" name="horario_entrada" id="horario_entrada" class="form-control" />
        </div>
        <div class="form-group">
            <label for="valor">Horário saída:</label>
            <input type="time" value="<?= $dados[0]["horario_saida"]; ?>" name="horario_saida" id="horario_saida" class="form-control" />
        </div>
        
        <input type="submit" value="Registrar" class="btn btn-default" />
    </form>
        <a href="relatorio-ponto.php"><button>Voltar</button></a>
</div>