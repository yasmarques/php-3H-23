<?php
    include_once 'funcionario.php';
    include_once 'estagiario.php';

    $giorginho= new Estagiario();

    $giorginho->setSalario(248);

    echo 'O Salário do Giorginho é R$: ' . $giorginho->getSalario(). "<br>";

    ?>