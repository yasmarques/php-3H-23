<?php 
include_once 'includes/header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Login de Usuario</title>
</head>
<body>
	<form method="POST" action="logar.php">

		<label>Usuario:</label><input type="text" name="usuario" id="usuario"><br>
		<label>Senha:</label><input type="password" name="senha" id="senha"><br>
		<input type="submit" value="entrar" id="entrar" name="entrar"><br>
		<a href="cadastrar.php">Cadastre-se</a>


	</form>

</body>
</html>
<?php 
	include_once 'includes/footer.php';

 ?>