<?php

class Aplicacao{
    static $Quantidade;
    //metodo construtor incremente a $quantidade de aplicações

    function __construct($Nome){
        //incrementa propriedade estatica

        self::$Quantidade++;
        $i = self::$Quantidade;
        echo "Nova Aplicação número. $i: $Nome <br>";
    }
}

#criar os objetos
new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo '<br>Quantidade de Aplicações = ' . Aplicacao::$Quantidade . "<br>";

?>