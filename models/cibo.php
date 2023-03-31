<?php

require_once __DIR__ "/./prodotti.php";

class Cibo extends Prodotti {
    public $scadenza;
    public $categoria;
    public $peso;
    public $consistenza;

    function __construct($scadenza, $categoria, $consistenza, $titolo, $codice, $prezzo, $quantità) {

        parent::__construct($titolo, $codice, $prezzo, $quantità, "cibo");
        $this->scadenza = $scadenza;
        $this->categoria = $categoria;
        $this->consistenza = $consistenza;

    }

    
}

$cibo1 = new Cibo("14/05/2023", "cane", "umido", "scatoletta doggy", "ABCD456", 5, 20);

var_dump($cibo1);

?>