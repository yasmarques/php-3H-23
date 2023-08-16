<?php 

	include_once 'ex1.php';
	
	$valor = new Produto();
	$valor1 = new Produto();

	$valor->Codigo=911;
	$valor1->Codigo=191;
	$valor->Preco=10;
	$valor->Quantidade=7;
	$valor->Porcentagem=50;
	$valor1->Preco=20;
	$valor1->Quantidade=6;
	$valor1->Porcentagem=50;

	$valor->Descricao="policia americana aqui mané";
	$valor1->Descricao="policia Br aqui mané";

	$valor->Desconto();
	$valor1->Desconto();
	$valor->ImprimeEtiqueta();
	$valor1->ImprimeEtiqueta(); 
 ?>