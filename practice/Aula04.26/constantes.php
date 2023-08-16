<?php

class Biblioteca{
    const Nome = "GTK";
}

class Aplicacao extends Biblioteca{
    //declaração das constantes
    
    const Ambiente = "Gnome Desktop";
    const Versao = "3.8";

    //metodo construtor acesse as constantes internamente

    function __construct($Nome){
        echo parent::Nome . self::Ambiente . self::Versao . $Nome . "<br>";
    }
}

//acesse a constante externamente

    echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "<br>";

    new Aplicacao(' Dia');
    new Aplicacao(' Gimp');
?>