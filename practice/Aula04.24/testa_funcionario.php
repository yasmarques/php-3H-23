<?php

    include_once 'funcionario.php';

    $giorge= new Funcionario();

    $giorge->setSalario(876);

    echo 'Salário: R$ ' .$giorge->getSalario();


?>