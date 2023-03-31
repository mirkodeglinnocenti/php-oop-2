<?php

require_once __DIR__ . "/./Prodotti.php";

class Cibo extends Prodotti {
    public $scadenza;
    public $categoria;
    public $peso;
    public $consistenza;

    function __construct($scadenza, $categoria, $consistenza, $titolo, $prezzo, $quantità) {

        parent::__construct($titolo, $prezzo, $quantità, "cibo");
        $this->scadenza = $scadenza;
        $this->categoria = $categoria;
        $this->consistenza = $consistenza;

    }

    
}

?>