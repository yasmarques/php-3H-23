<?php 

include_once "empregado.php";
include_once "comissionado.php";
include_once "assalarioado.php";
include_once "horista.php";


$laercio = new Assalariado;
$laercio->nome = "Laércio";
$laercio->sobrenome = "Siuva";
$laercio->cpf = 48990388811;
$laercio->salario = 2555.00;

$maria = new Comissionado;
$maria->nome = "Maria";
$maria->sobrenome = "Jackson";
$maria->cpf = 48990388811;
$maria->totalVenda = 8000.00;
$maria->taxaComissao = 0.97;

$nicolas = new Horista;
$nicolas->nome = "Nicolas";
$nicolas->sobrenome = "Gaiola";
$nicolas->cpf = 48990388811;
$nicolas->precoHoras = 3000.00;
$nicolas->horasTrabalhadas = 8;

echo "Chamando: {$laercio->nome} <br>";
echo "DINHEIRO {$laercio->vencimento($laercio->salario)} <br> ";
echo "MAIS DINHEIRO {$maria->vencimento($maria->totalVenda*$maria->taxaComissao)} <br> ";

echo "AAAAAAAAAAA {$nicolas->vencimento($nicolas->precoHoras*$nicolas->horasTrabalhadas)} <br> ";


 ?>