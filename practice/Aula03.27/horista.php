<?php 
include_once "empregado.php";

	class Horista extends Empregado{

	

		var $precoHora;
		var $horasTrabalhadas;

		function Horista__construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas){
        parent:: __construct($nome, $sobrenome, $cpf);
		$this->precoHora = $precoHora;
		$this->horasTrabalhadas = $horasTrabalhadas;

		}

		function vencimentoH($salrock){
        $salwater = $salrock * 0.85;
		return $salwater;
 	}


 		function __destruct(){
        echo "<br> {$this->nome} foi banido... <br>";
    }


	}

 ?>