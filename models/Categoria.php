
<?php

class Categoria {
    public $tipo ="";
    public $immagine = "";

    function setTipo($_tipo){
        if ( $_tipo == "gatto" || $_tipo == "cane" ) {
            $this->tipo = $_tipo;
        }
    }
}


$gatto = new Categoria();
$gatto->setTipo("gatto");

var_dump($gatto);