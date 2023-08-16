<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbAlimentos WHERE codAlim = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Produto</h3>
			
			<form action="php_action/alterar_alimento.php" method="POST">

				<input type="hidden" name = "codAlim" value="<?php echo $dados['codAlim']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nomeAlim']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="quantidade" id="quantidade" value="<?php echo $dados['qtdAlim']; ?>"
					>
					<label for="quantidade">Quantidade</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="preco" id="preco" value="<?php echo $dados['precoALim']; ?>">
					<label for="preco">preco</label>
				</div>
				

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Produtos</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>