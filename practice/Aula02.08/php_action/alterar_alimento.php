<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$qtd = mysqli_escape_string($connection,$_POST['quantidade']);
		$preco = mysqli_escape_string($connection,$_POST['preco']);
		$codAlim = mysqli_escape_string($connection,$_POST['codAlim']);

		$sql = "UPDATE tbAlimentos SET nomeAlim = '$nome', qtdAlim = '$quantidade', precoAlim = '$preco' WHERE codAlim = '$codAlim'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}