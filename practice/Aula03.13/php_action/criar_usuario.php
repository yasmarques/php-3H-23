<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
		$email = mysqli_escape_string($connection,$_POST['email']);
		$cpf = mysqli_escape_string($connection,$_POST['cpf']);
		$sexo = mysqli_escape_string($connection,$_POST['sexo']);
		$usuario = mysqli_escape_string($connection,$_POST['usuario']);
		$senha = mysqli_escape_string($connection,$_POST['senha']);

		$sql = "INSERT INTO tbCliente(nome,sobrenome,email,cpf,sexo,usuario,senha)VALUES('$nome','$sobrenome','$email','$cpf','$sexo','$usuario','$senha')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}