<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$qtd = mysqli_escape_string($connection,$_POST['quantidade']);
		$preco = mysqli_escape_string($connection,$_POST['preco']);

		$sql = "INSERT INTO tbAlimentos(nomeAlim,qtdAlim,precoAlim)VALUES('$nome','$qtd','$preco')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}