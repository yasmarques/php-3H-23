<?php 

	$server_name = 'localhost';
	$user_name = 'adeeme';
	$password = '4444';
	$db_name = 'proleotario';

	$connection = mysqli_connect($server_name,$user_name,$password,$db_name);

	mysqli_set_charset($connection,"utf8");

	if (mysqli_connect_error()) {
		echo "Erro ao conectar com o banco de dados" . mysql_connect_error();
	}
?>