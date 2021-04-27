<?php
require "pages/header.php";
require "classes/Colaborador.php";


$colaborador = new Colaborador();

//order
if (isset($_GET['ordem']) && !empty($_GET['ordem'])){
    $ordem = addslashes($_GET['ordem']);
}else{
    $ordem = "id";
}

$dados = $colaborador->getPonto($ordem);
?>
<div class="container">
    
    <form method="GET">
    <label for="filtro">Filtrar</label>
        <select name="ordem" onchange="this.form.submit()">
            <option value=""></option>
            <option value="nome" <?php echo($ordem=="nome")?'selected="selected"':''; ?>>Pelo nome</option>
            <option value="data"<?php echo($ordem=="data")?'selected="selected"':''; ?>>Pela data</option>
        </select>
    </form>
<a href="index.php"><button>Voltar</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Usuário</th>
                <th scope="col">Data</th>
                <th scope="col">Horário Entrada</th>
                <th scope="col">Horário Saída</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
        <?php for($x = 0;$x < count($dados);$x++): ?>
            <tr>
                <th scope="row"><?= $x +1; ?></th> 
                <td><?= $dados[$x]['nome'] ?></td>
                <td><?= $dados[$x]['data'] ?></td>
                <td><?= $dados[$x]['horario_entrada'] ?></td>
                <td><?= $dados[$x]['horario_saida'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $dados[$x]['id'] ?>"><button>Editar</button></a>
                    <a href="excluir.php?id=<?= $dados[$x]['id'] ?>"><button>Excluir</button></a>
                </td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
</div>