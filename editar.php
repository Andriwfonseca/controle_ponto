<?php
require 'pages/header.php';
require 'classes/Colaborador.php';


$colaborador = new Colaborador();
$usuario = new Usuario();

//dados para preencher formulario
if(isset($_GET['id']) && !empty($_GET['id'])){
    $dados = $colaborador->getPontoId($_GET['id']);    
}
?>
<div class="container mt-3">
    <h1>Registro do ponto dos colaboradores</h1>
    <div id="resultado"></div>
    <form method="POST" enctype="multipart/form-data" id="form-editar-ponto">

        <div class="form-group">
            <label for="nome">Usuário:</label>
            <select name="nome" id="nome" class="form-control">
                <!---->
                <?php if(isset($dados)): ?>
                    
                    <option id="id-ponto" value="<?php echo $dados[0]['id']; ?>"><?php echo $dados[0]['id'].' - '. utf8_encode($dados[0]['nome']); ?></option>

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
        <br>
        <input type="submit" value="Registrar" class="btn btn-dark" />
        <a href="relatorio-ponto.php" class="btn btn-dark">Voltar</a>
    </form>
        
</div>
<?php require 'pages/footer.php'; ?>