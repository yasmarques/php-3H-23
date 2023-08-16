<?php 
include_once "empregado.php";

	class Assalariado extends Empregado{

		

		var $salario;


        function Assalariado__construct($nome, $sobrenome, $cpf, $salario){
        parent:: __construct($nome, $sobrenome, $cpf, $salario);
		$this->salario = $salario;

		}

		function vencimento($salrock){
        $salwater = $salrock * 0.85;
		return $salwater;
 	}


 		function __destruct(){
        echo "<br> {$this->nome} foi banido... <br>";
    }


	}

 ?>