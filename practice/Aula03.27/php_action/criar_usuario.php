<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastro'])) {
		
		$Nome = mysqli_escape_string($connection,$_POST['Nome']);
		$Sobrenome = mysqli_escape_string($connection,$_POST['Sobrenome']);
		$Cpf = mysqli_escape_string($connection,$_POST['Cpf']);
		$Salario = mysqli_escape_string($connection,$_POST['Salario']);
		$TaxaComissao = mysqli_escape_string($connection,$_POST['TaxaComissao']);
		$TotalVenda = mysqli_escape_string($connection,$_POST['TotalVenda']);
        $HorasTrabalhadas = mysqli_escape_string($connection,$_POST['HorasTrabalhadas']);
        $PrecoHoras = mysqli_escape_string($connection,$_POST['PrecoHoras']);

		$sql = "INSERT INTO tbOtario(Nome,Sobrenome,Cpf,Salario,TaxaComissao,TotalVenda,HorasTrabalhadas,PrecoHoras)VALUES('$Nome','$Sobrenome','$Cpf','$Salario','$TaxaComissao','$TotalVenda' ,'$HorasTrabalhadas' ,'$PrecoHoras')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}