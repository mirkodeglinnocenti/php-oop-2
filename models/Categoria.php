
<?php

class Categoria {
    public $tipo ="";
    public $immagine = "";

    public function setTipo($_tipo){

        if (  strtolower($_tipo) == "gatto" || strtolower($_tipo) == "cane" ) {
            $this->tipo = strtolower($_tipo);
        }
    }
}


$gatto = new Categoria();
$gatto->setTipo("gatto");

var_dump($gatto);