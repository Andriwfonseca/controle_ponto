<?php require 'pages/header.php';?>
<div class="container">
	<h1>Login</h1>
	<div id="resultado"></div>
	<form method="POST" id="form-login">
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha" class="form-control" />
		</div>
		<br>
		<input type="submit" value="Fazer Login" class="btn btn-dark" />
		<a class="btn btn-dark" href="cadastro.php">Cadastrar novo Usuario</a><br><br>
	</form>

</div>
<?php require 'pages/footer.php'; ?>