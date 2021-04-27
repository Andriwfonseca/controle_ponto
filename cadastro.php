<?php
require 'pages/header.php';
?>
<div class="container">
    <h1>Cadastro de Usuários</h1>
    <div id="resultado"></div>
    <form method="post" id="form-cadastro-usuario">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" />
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" />
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" />
        </div>
        <br>
        <input type="submit" value="Cadastrar" class="btn btn-dark" />
        <a href="index.php" class="btn btn-dark">Voltar</a>
    </form>
    
</div>
<?php require 'pages/footer.php'; ?>