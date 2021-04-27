<?php
require 'pages/header.php';
require 'classes/Usuario.php';
require 'classes/Colaborador.php';

$usuario = new Usuario();
$colaborador = new Colaborador();

if(isset($_POST['nome'])){

    $nome = filter_input(INPUT_POST, 'nome');
    $data = filter_input(INPUT_POST, 'data');
    $horarioEntrada = filter_input(INPUT_POST, 'horario_entrada');
    $horarioSaida = filter_input(INPUT_POST, 'horario_saida');

    if($nome && $data && $horarioEntrada && $horarioSaida){
        if ($colaborador->registrarPontoUsuario($nome, $data, $horarioEntrada, $horarioSaida)){
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

?>
<div class="container mt-3">
    <h1>Registro do ponto dos colaboradores</h1>
    <form method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="nome">Usuário:</label>
            <select name="nome" id="nome" class="form-control">
                <?php
                foreach($usuario->getUsuarios() as $usuario): 
                ?>
                <option value="<?php echo $usuario['id']; ?>"><?php echo $usuario['id'].' - '. utf8_encode($usuario['nome']); ?></option>
                <?php
                endforeach;
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="titulo">Data:</label>
            <input type="date" name="data" id="data" class="form-control" />
        </div>
        <div class="form-group">
            <label for="titulo">Horário entrada:</label>
            <input type="time" name="horario_entrada" id="horario_entrada" class="form-control" />
        </div>
        <div class="form-group">
            <label for="valor">Horário saída:</label>
            <input type="time" name="horario_saida" id="horario_saida" class="form-control" />
        </div>
        
        <input type="submit" value="Registrar" class="btn btn-default" />
    </form>
    <a href="index.php"><button>Voltar</button></a>
</div>