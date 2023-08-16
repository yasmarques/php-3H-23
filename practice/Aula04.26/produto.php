<?php

class Produto {
    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;

    function ImprimeEtiqueta(){
        print 'Codigo: ' . $this-> Codigo. "<br>";
        print 'Descrição: ' . $this-> Descricao. "<br><br>";
    }
}

?>