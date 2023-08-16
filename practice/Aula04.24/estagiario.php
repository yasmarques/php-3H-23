<?php

class Estagiario extends funcionario {
    function getSalario(){
        return $this ->salario * 1.12;
    }
}

?>