<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Usuario</h3>
			
			<form action="php_action/criar_usuario.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="sobrenome" id="sobrenome">
					<label for="sobrenome">Sobrenome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="email" id="email">
					<label for="email">E-mail</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="sexo" id="sexo">
					<label for="sexo">Sexo</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="cpf" id="cpf">
					<label for="cpf">Cpf</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="usuario" id="usuario">
					<label for="usuario">Usuario</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="senha" id="senha">
					<label for="senha">Senha</label>
				</div>


				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Pagina inicial</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>