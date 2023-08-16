<?php

include_once 'funcionario.php';
include_once 'estagiario.php';


$giorginho = new Funcionario();
$giorginho -> nome = 'Giorginho';

$marinha = new Estagiario();
$marinha -> nome = '<br> Marinha';

echo $giorginho -> nome;
echo $marinha -> nome;
?>