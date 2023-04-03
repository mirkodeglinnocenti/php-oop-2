<?php

require_once __DIR__ . "/./Prodotti.php";

class Cuccia extends Prodotti {
    public $dimensioni;
    public $categoria;
    public $materiali;

    function __construct($dimensioni, $categoria, $materiali, $titolo, $prezzo, $quantità) {

        parent::__construct($titolo, $prezzo, $quantità, "cuccie");
        $this->dimensioni = $dimensioni;
        $this->categoria = $categoria;
        $this->materiali = $materiali;

    }
    
}

?>