<?php 

	include_once 'php_action/conexao_bd.php';

	//cabeçalho
	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Pagina inicial</h3>
			<table class="striped">
			<thead>
					<tr>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>E-mail</th>
					<th>sexo</th>
					<th>Cpf</th>
				</tr>		
			</	>
			
			<tbody>
				<?php 

					$sql = "SELECT * FROM tbCliente";

					$resultado = mysqli_query($connection, $sql);

						
					while($dados = mysqli_fetch_array($resultado)){

					?>	

					<tr>
							<td><?php echo $dados['Nome']; ?></td>
							<td><?php echo $dados['Sobrenome']; ?></td>
							<td><?php echo $dados['Email']; ?></td>
							<td><?php echo $dados['Sexo']; ?></td>
							<td><?php echo $dados['CPF']; ?></td>
							      
							     
							    </div>
						  </div>

						</tr>			
							 
						
					<?php }

					?>
					
			</tbody>

			</table>
			<br>
			<a href="cadastrar.php" class="btn">Adicionar Usuario</a>
			<a href="logar.php" class="btn">Fazer login</a>
		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>