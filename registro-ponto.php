<?php
require 'pages/header.php';
require 'classes/Colaborador.php';
if(empty($_SESSION['nome'])){
    header("location: login.php");
  }
$usuario = new Usuario();
$colaborador = new Colaborador();

?>
<div class="container mt-3">
    <h1>Registro do ponto dos colaboradores</h1>
    <div id="resultado"></div>
    <form method="POST" enctype="multipart/form-data" id="form-registro-ponto">

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
        <br>
        <input type="submit" value="Registrar" class="btn btn-dark" />
        <a href="index.php" class="btn btn-dark">Voltar</a>
    </form>

</div>
<?php require 'pages/footer.php'; ?>