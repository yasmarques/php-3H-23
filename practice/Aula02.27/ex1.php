<?php 

	class Produto
	{
		var $Codigo;
		var $Descricao;
		var $Preco;
		var $Quantidade;
		var $Porcentagem;
		var $Preco2;

		function ImprimeEtiqueta()
		{
			print 'Código: ' . $this->Codigo . "<br>";
			print 'Descrição: ' . $this->Descricao . "<br>";
			print 'Preço sem desconto: ' . $this->Preco . " reais<br>";
			print 'Porcentagem de desconto: ' . $this->Porcentagem . "%<br>";
			print 'Preço com desconto: ' . $this->Preco2 . " reais<br>";
		}
		function Desconto( )
		{
			if ($this->Quantidade >= 6){
				$this->Preco2 = $this->Preco - ($this->Preco * $this->Porcentagem/100);
			}
			else {
				echo "Sem desconto.";
			}
		}

	}



	


 ?>